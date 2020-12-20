<?php

class WishListProduct extends ObjectModel
{
    public $id;
    public $id_wishlist;
    public $id_product;
    public $id_product_attribute;
    public $quantity;

    public static $definition = array(
        'table' => 'io_wishlist_product',
        'primary' => 'id_wishlist_product',
        'fields' => array(
            'id_wishlist' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => false),
            'quantity' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
        )
    );

    public static function getProductsByWishList($id_wishlist)
    {
        return Db::getInstance()->executeS('
            SELECT wp.`id_product`, wp.`id_product_attribute`, wp.`quantity`
            FROM `' . _DB_PREFIX_ . 'io_wishlist_product` wp
            WHERE wp.`id_wishlist` = ' . (int)$id_wishlist
        );
    }

    public static function exist($id_product, $id_product_attribute = 0)
    {
        $context = Context::getContext();
        $id_customer = $context->customer->id;
        $id_shop = $context->shop->id;
        $id_shop_group = $context->shop->id_shop_group;

        return Db::getInstance()->getValue('
            SELECT p.`id_wishlist_product`
            FROM `' . _DB_PREFIX_ . 'io_wishlist_product` p
            LEFT JOIN `' . _DB_PREFIX_ . 'io_wishlist` w ON (w.id_wishlist = p.id_wishlist)
            WHERE p.`id_product` = ' . (int)$id_product . ' 
            AND p.`id_product_attribute` = ' . (int)$id_product_attribute . '
            AND w.`id_customer` = ' . (int)$id_customer . '
            AND w.`id_shop` = ' . (int)$id_shop . ' 
            AND w.`id_shop_group` = ' . (int)$id_shop_group
        );
    }

    public static function count()
    {
        $context = Context::getContext();
        $id_customer = $context->customer->id;
        $id_shop = $context->shop->id;
        $id_shop_group = $context->shop->id_shop_group;

        return Db::getInstance()->getValue('
            SELECT count(p.`id_wishlist_product`)
            FROM `' . _DB_PREFIX_ . 'io_wishlist_product` p
            LEFT JOIN `' . _DB_PREFIX_ . 'io_wishlist` w ON (w.id_wishlist = p.id_wishlist)
            WHERE w.`id_customer` = ' . (int)$id_customer . '
            AND w.`id_shop` = ' . (int)$id_shop . ' 
            AND w.`id_shop_group` = ' . (int)$id_shop_group
        );
    }

    public function findByParameters($id_wishlist, $id_product, $id_product_attribute)
    {
        return Db::getInstance()->getValue('
            SELECT p.`id_wishlist_product`
            FROM `' . _DB_PREFIX_ . 'io_wishlist_product` p
            LEFT JOIN `' . _DB_PREFIX_ . 'io_wishlist` w ON (w.id_wishlist = p.id_wishlist)
            WHERE p.`id_product` = ' . (int)$id_product . ' 
            AND p.`id_product_attribute` = ' . (int)$id_product_attribute . '
            AND w.`id_wishlist` = ' . (int)$id_wishlist
        );
    }
}