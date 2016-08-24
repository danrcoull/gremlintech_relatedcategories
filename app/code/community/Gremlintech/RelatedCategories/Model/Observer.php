<?php
class Gremlintech_RelatedCategories_Model_Observer extends Mage_Core_Model_Abstract
{
    public function insertBlock($observer)
    {
        /** @var $_block Mage_Core_Block_Abstract */
        /*Get block instance*/
        $_block = $observer->getBlock();
        /*get Block type*/
        $_type = $_block->getType();
        /*Check block type*/
        $transport = $observer->getTransport();
        // echo  $_block->getType().'\r\n';
        if ($_block->getNameInLayout() == 'awarp.content.inside.product') {

            $_child = Mage::app()->getLayout()->createBlock('relatedcategories/categories');
            $_child->setTemplate('gremlintech/relatedcategories/categories.phtml');

            echo $_child->toHtml();
        }

    }
}
