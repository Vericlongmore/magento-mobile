<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   More
 * @package    More_Mobile
 * @version    1.6.6
 */


class More_Mobile_Block_Catalog_Product_View extends Mage_Catalog_Block_Product_View
{
    /**
     * Retrieve url for direct adding product to cart
     *
     * @param Mage_Catalog_Model_Product $product
     * @param array $additional
     * @return string
     */
    public function getAddToCartUrl($product, $additional = array())
    {
        $url = parent::getAddToCartUrl($product, $additional);
        $url = str_replace('/checkout/', '/Moremobile/', $url);
        return $url;
    }

    /**
     * Retrives product price
     * @param Mage_Catalog_Model_Product $product
     * @return string
     */
    public function getPrice($product)
    {
        return $product->getPriceModel()->getFormatedPrice($product);
    }
     
}
