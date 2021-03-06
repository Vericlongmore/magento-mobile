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


class More_Mobile_Block_Checkout_Links extends Mage_Checkout_Block_Links
{
    /**
     * Add shopping cart link to parent block
     *
     * @return Mage_Checkout_Block_Links
     */
    public function addCartLink()
    {
        if ($parentBlock = $this->getParentBlock()) {
            $parentBlock->addLink(
                $this->getCartButtonText(),
                '#',
                $this->getCartButtonText(),
                false,
                array(),
                50,
                'id="gotocart-button-container"', 'class="button red right" onclick="goToCart(); return false;"'
            );
        }
        return $this;
    }

    /**
     * retrives add to cart button text
     * @return string
     */
    public function getCartButtonText()
    {
        $count = $this->helper('checkout/cart')->getSummaryCount();
        if ($count > 0) {
            $text = $this->__('My Cart (%s)', $count);
        } else {
            $text = $this->__('My Cart');
        }
        return $text;
    }

    /**
     * Retrives Link Html
     * @return string
     */
    public function getLinkHtml()
    {
        $bText = $this->getCartButtonText();
        return '<a href="#" title="' . $bText
        . '" class="button red right" onclick="goToCart(); return false;">'
        . $bText . '</a>'
            ;
    }

}
