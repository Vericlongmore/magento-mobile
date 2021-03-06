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


class More_Mobile_Block_Checkout_Cart_Totals extends Mage_Checkout_Block_Cart_Totals
{
    /**
     * Retrives cart totals
     * @return array
     */
    public function getTotals() 
    {
        return parent::getTotals();
    }
    
    protected function _getTotalRenderer($code)
    {
        $result = null;
        try {                     
            $result = parent::_getTotalRenderer($code);
        } catch (Exception $e) {

        }
            
        if ($result) {
            return $result;
        } else {
            return new Mage_Core_Block_Template();
        }                
    }    
}