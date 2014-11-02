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


/**
 * Currency Switcher
 */
class  More_Mobile_Block_Directory_Currency extends Mage_Directory_Block_Currency
{
    /**
     * Helper
     * @return More_Mobile_Helper_Data
     */
    protected function _helper()
    {
        return Mage::helper('Moremobile');
    }
    
    public function getSwitchCurrencyUrl($code) 
    {
        if (!$this->_helper()->checkVersion('1.4.0.0')) {
            return $this->helper('directory/url')->getSwitchCurrencyUrl()."currency/".$code;
        } else {        
            return parent::getSwitchCurrencyUrl($code);
        }
    }
    
    
}