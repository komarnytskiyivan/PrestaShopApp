<?php
/**
* 2012 - 2020 HiPresta
*
* MODULE Add to cart button
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2020
* @license   Addons PrestaShop license limitation
* @link      http://www.hipresta.com
*/

use PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Core\Product\ProductExtraContentFinder;

class HiAddToCartButtonAjaxModuleFrontController extends ModuleFrontController
{
    private function getFactory()
    {
        return new ProductPresenterFactory($this->context, new TaxConfiguration());
    }

    public function initContent()
    {
        parent::initContent();

        if(Tools::getValue('ajax')) {
            $id_product = (int)Tools::getValue('id_product');
            $id_product_attribute = (int)Tools::getValue('id_product_attribute');

            $p = new Product($id_product, true);

            $extraContentFinder = new ProductExtraContentFinder();

            $product = $this->objectPresenter->present($p);
            $product['id_product'] = (int)$id_product;
            $product['out_of_stock'] = (int) $p->out_of_stock;
            $product['new'] = (int) $p->new;
            $product['id_product_attribute'] = $id_product_attribute;
            // $product['minimal_quantity'] = $p->getProductMinimalQuantity($product);
            // $product['quantity_wanted'] = $p->getRequiredQuantity($product);
            $product['extraContent'] = $extraContentFinder->addParams(array('product' => $p))->present();
            $product['ecotax'] = Tools::convertPrice((float) $product['ecotax'], $this->context->currency, true, $this->context);


            $product_full = Product::getProductProperties($this->context->language->id, $product, $this->context);

            $presenter = $this->getFactory()->getPresenter();;
            $productSettings = $this->getFactory()->getPresentationSettings();

            $pr = $presenter->present(
                $productSettings,
                $product_full,
                $this->context->language
            );

            $available_qty = $pr['quantity'];
            if(isset($pr['out_of_stock']) && Product::isAvailableWhenOutOfStock($pr['out_of_stock'])){
                $available_qty = -1;
            }

            ob_end_clean();
            header('Content-Type: application/json');

            $this->ajaxRender(Tools::jsonEncode(array(
                'id_product' => $id_product,
                'id_product_attribute' => $id_product_attribute,
                'availability' => $pr['availability'],
                'available_qty' => $available_qty
            )));
        }
    }
}
