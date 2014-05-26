<?php


class Creatyss_Catalog_Helper_Product_Compare extends Mage_Catalog_Helper_Product_Compare {

    public function getAddUrl($product)
    {
        if(Mage::getStoreConfig('catalog/recently_products/compared_count')) {
            return parent::getAddUrl($product);
        }
    }

}