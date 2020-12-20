<?php

class WishList extends ObjectModel
{
    public $id;
    public $id_customer;
    public $name;
    public $date_add;
    public $date_upd;
    public $id_shop;
    public $id_shop_group;

    public static $definition = array(
        'table' => 'io_wishlist',
        'primary' => 'id_wishlist',
        'fields' => array(
            'id_customer' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'name' =>            array('type' => self::TYPE_STRING, 'validate' => 'isMessage', 'required' => true),
            'date_add' =>        array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' =>        array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'id_shop' =>        array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop_group' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
        )
    );

    public function delete()
    {
        $res = true;
        $res &= (bool)Db::getInstance()->execute('
            DELETE FROM `'._DB_PREFIX_.'io_wishlist_product` 
            WHERE `id_wishlist` = '.(int)($this->id)
        );
        $res &= parent::delete();

        return (bool)$res;
    }

    public static function findOrCreate() {
        $context = Context::getContext();
        $id_customer = $context->customer->id;
        $id_shop = $context->shop->id;
        $id_shop_group = $context->shop->id_shop_group;

        $id_wishlist = Db::getInstance()->getValue('
            SELECT id_wishlist
            FROM `'._DB_PREFIX_.'io_wishlist`
            WHERE `id_customer` = '. (int)$id_customer .' 
            AND `id_shop` = '. (int)$id_shop .' 
            AND `id_shop_group` = '. (int)$id_shop_group .'
        ');

        if($id_wishlist) {
            $wishlist = new WishList($id_wishlist);
        } else {
            $wishlist = new WishList();
            $wishlist->id_customer = $id_customer;
            $wishlist->id_shop = $id_shop;
            $wishlist->id_shop_group = $id_shop_group;
            $wishlist->name = 'Wishlist';
            $wishlist->add();
        }

        return $wishlist;
    }
}