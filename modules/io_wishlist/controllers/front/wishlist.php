<?php
require_once(_PS_MODULE_DIR_ . 'io_wishlist/classes/WishList.php');
require_once(_PS_MODULE_DIR_ . 'io_wishlist/classes/WishListProduct.php');

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class Io_WishlistWishlistModuleFrontController extends ModuleFrontController
{
    public $php_self;

    public function initContent()
    {
        $this->php_self = 'wishlist';
        parent::initContent();

        if (!Configuration::get('IO_WISH_LIST_ENABLE')) {
            return Tools::redirect('index.php?controller=404');
        } elseif(!$this->context->customer->isLogged()) {
            return Tools::redirect('index.php?controller=authentication?back=module-io_wishlist-wishlist');
        }

        $wishlist = WishList::findOrCreate();
        $products = $this->getProducts($wishlist->id);
        $this->context->smarty->assign(array(
            'products' => $products,
            'id_wishlist' => $wishlist->id,
            'wishlist_url' => $this->context->link->getModuleLink('io_wishlist', 'wishlist'),
        ));

        return $this->setTemplate('module:io_wishlist/views/templates/front/wishlist.tpl');
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
        $breadcrumb['links'][] = array(
            'title' => $this->l('My Account', 'wishlist'),
            'url' => $this->context->link->getPageLink('my-account', true),
        );

        $breadcrumb['links'][] = array(
            'title' => $this->l('Wishlist', 'wishlist'),
            'url' => $this->context->link->getModuleLink('io_wishlist', 'wishlist'),
        );

        return $breadcrumb;
    }

    protected function getProducts($id_wishlist)
    {
        $products = WishListProduct::getProductsByWishList($id_wishlist);

        $assembler = new ProductAssembler($this->context);

        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        $products_for_template = [];

        foreach ($products as $rawProduct) {
            $products_for_template[] =
                $presenter->present(
                    $presentationSettings,
                    $assembler->assembleProduct($rawProduct),
                    $this->context->language
                );
        }

        return $products_for_template;
    }

    public function displayAjax()
    {
        $array_result = array();
        $errors = array();
        $result = array();

        if (!$this->isTokenValid() || !Tools::getValue('action')) {
            $errors[] = $this->l('Something go wrong. Please try again.', 'wishlist');
            $array_result['result'] = $result;
            $array_result['errors'] = $errors;
            die(json_encode($array_result));
        };

        $context = Context::getContext();

        if ($context->customer->isLogged()) {
            $action = Tools::getValue('action');
            $id_product = (int)Tools::getValue('id_product');
            $id_product_attribute = (int)Tools::getValue('id_product_attribute');

            $status = false;

            if ($action == 'create')
                $status = $this->createWishListProduct($id_product, $id_product_attribute);

            if ($action == 'delete')
                $status = $this->deleteWishListProduct($id_product, $id_product_attribute);

            if(!$status)
                $errors[] = $this->l('Process failed.', 'wishlist');

        } else {
            $errors[] = $this->l('You must be logged in to manage your wishlist.', 'wishlist');
        }

        $array_result['errors'] = $errors;
        $array_result['nav_quantity'] = WishListProduct::count();
        die(json_encode($array_result));
    }

    protected function createWishListProduct($id_product, $id_product_attribute)
    {
        $wishlist = WishList::findOrCreate();

        if(!WishListProduct::findByParameters($wishlist->id, $id_product, $id_product_attribute)) {
            $product = new WishListProduct();
            $product->id_wishlist = $wishlist->id;
            $product->id_product = $id_product;
            $product->id_product_attribute = $id_product_attribute;
            $product->quantity = 1;
            return $product->add();
        } else {
            return false;
        }
    }

    protected function deleteWishListProduct($id_product, $id_product_attribute) {
        $wishlist = WishList::findOrCreate();
        $id_wishlist_product = WishListProduct::findByParameters($wishlist->id, $id_product, $id_product_attribute);
        if($id_wishlist_product) {
            $product = new WishListProduct($id_wishlist_product);
            return $product->delete();
        }
        return false;
    }
}