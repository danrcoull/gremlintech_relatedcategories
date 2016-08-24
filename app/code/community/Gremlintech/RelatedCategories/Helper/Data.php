<?php
class Gremlintech_RelatedCategories_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function ifTabModuleEnabled()
    {
        if(Mage::getConfig()->getModuleConfig('easytabs')->is('active', 'true') &&
            Mage::helper('core')->isModuleEnabled('easytabs')
        )
        {

            return true;
        }

        return false;
    }

}
	 