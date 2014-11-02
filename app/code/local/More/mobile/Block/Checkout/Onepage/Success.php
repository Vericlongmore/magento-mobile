<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/More-LICENSE.txt
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
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/More-LICENSE.txt
 */


class More_Mobile_Block_Checkout_Onepage_Success extends Mage_Checkout_Block_Onepage_Success
{
    protected $_order = null;

    public function getOrder()
    {
        if (!$this->_order) {
            if ($this->getOrderId()) {
                $this->_order = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());
            }
        }
        return $this->_order;
    }

    public function getCanViewOrder()
    {
        return ($this->getOrder() && $this->getOrder()->getCustomerId());
    }
}