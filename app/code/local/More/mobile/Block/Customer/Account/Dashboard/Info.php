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


class More_Mobile_Block_Customer_Account_Dashboard_Info extends Mage_Downloadable_Block_Customer_Products_List
{
    
    /**
     * Return url to download link
     *
     * @param Mage_Downloadable_Model_Link_Purchased_Item $item
     * @return string
     */
    public function getDownloadUrl($item)
    {
        return $this->getUrl('downloadable/download/link', array('id' => $item->getLinkHash(), '_secure' => true));
    }        

    public function getUnavailableUrl()
    {
        return $this->getUrl('Moremobile/downloadable/noway');
    }
    
}