<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(_PS_MODULE_DIR_ . 'io_wishlist/classes/WishList.php');
require_once(_PS_MODULE_DIR_ . 'io_wishlist/classes/WishListProduct.php');

class Io_Wishlist extends Module
{
    public function __construct()
    {
        $this->name = 'io_wishlist';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Me';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->need_instance = 0;
        $this->controllers = array('wishlist');

        $this->bootstrap = true;

        parent::__construct();

        $this->secure_key = Tools::encrypt($this->name);
        $this->displayName = $this->l('IO Wish List');
        $this->description = $this->l('Wish List extends user interface about space for save products');
        $this->link = $this->context->link;

        $this->module_path = $this->local_path;
    }

    public function install()
    {
        if (parent::install()
            && $this->registerHook('header')
            && $this->registerHook('displayProductListFunctionalButtons')
            && $this->registerHook('displayProductActions')
            && $this->registerHook('displayCustomerAccount')
            && $this->registerHook('displayTop')) {

            Configuration::updateValue('IO_WISH_LIST_ENABLE', 1);

            $res = true;
            $res &= (bool)Db::getInstance()->execute('
                    CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'io_wishlist` (
                        `id_wishlist` int(10) unsigned NOT NULL auto_increment,
                        `id_customer` int(10) unsigned NOT NULL,
                        `name` varchar(64) character set utf8 NOT NULL,
                        `counter` int(10) unsigned NULL,
                        `id_shop` int(10) unsigned default 1,
                        `id_shop_group` int(10) unsigned default 1,
                        `date_add` datetime NOT NULL,
                        `date_upd` datetime NOT NULL,
                        PRIMARY KEY (`id_wishlist`)
                    ) ENGINE=' . _MYSQL_ENGINE_ . '  DEFAULT CHARSET=utf8;
            ');

            $res &= (bool)Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'io_wishlist_product` (
                    `id_wishlist_product` int(10) NOT NULL auto_increment,
                    `id_wishlist` int(10) unsigned NOT NULL,
                    `id_product` int(10) unsigned NOT NULL,
                    `id_product_attribute` int(10) unsigned NOT NULL,
                    `quantity` int(10) unsigned NOT NULL,                
                    PRIMARY KEY (`id_wishlist_product`)
                ) ENGINE=' . _MYSQL_ENGINE_ . '  DEFAULT CHARSET=utf8;
            ');

            return (bool)$res;
        }
        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall() && $this->unregisterHook('header')) {
            Configuration::deleteByName('IO_WISH_LIST_ENABLE');
            return true;
        }
        return false;
    }

    public function hookHeader()
    {
        if (Configuration::get('IO_WISH_LIST_ENABLE')) {
            $this->context->controller->addJS(__PS_BASE_URI__ . 'modules/' . $this->name . '/views/js/io_wishlist.js');
            $this->context->controller->addCss(__PS_BASE_URI__ . 'modules/' . $this->name . '/views/css/io_wishlist.css');

            Media::addJsDef(array(
                'io_token' => Tools::getToken(false),
                'wishlist_url' => $this->link->getModuleLink('io_wishlist', 'wishlist'),
                'wishlist_add' => $this->l('The product was successfully added to your wishlist', 'wishlist'),
            ));
        }
    }

    public function hookDisplayTop()
    {
        if (Configuration::get('IO_WISH_LIST_ENABLE')) {
            if ($this->context->customer->isLogged()) {
                $products = WishListProduct::count();
            } else {
                $products = false;
            }

            $this->smarty->assign(array(
                'products' => $products,
                'wishlist_url' => $this->link->getModuleLink('io_wishlist', 'wishlist'),
            ));

            return $this->display(__FILE__, 'wishlist-nav.tpl');
        }

        return false;
    }

    public function hookDisplayProductActions($params)
    {
        if (Configuration::get('IO_WISH_LIST_ENABLE')) {
            return $this->hookDisplayProductListFunctionalButtons($params);
        }

        return false;
    }

    public function hookDisplayProductListFunctionalButtons($params)
    {
        if (Configuration::get('IO_WISH_LIST_ENABLE')) {
            $product = $params['product'];

            $product_exist = WishListProduct::exist($product->id_product, $product->id_product_attribute);

            $this->smarty->assign(array(
                'io_wishlist_id_product' => $product->id_product,
                'io_wishlist_id_product_attribute' => $product->id_product_attribute,
                'product_exist' => $product_exist
            ));

            return $this->display(__FILE__, 'wishlist-btn.tpl');
        }

        return false;
    }

    public function hookDisplayCustomerAccount()
    {
        if (Configuration::get('IO_WISH_LIST_ENABLE')) {
            $this->smarty->assign(array(
                'wishlist_url' => $this->context->link->getModuleLink('io_wishlist', 'wishlist')
            ));
            return $this->display(__FILE__, 'wishlist-myaccount.tpl');
        }

        return false;
    }
}