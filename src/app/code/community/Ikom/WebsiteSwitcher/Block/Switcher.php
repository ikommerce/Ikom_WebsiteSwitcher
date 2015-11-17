<?php
/**
 * @category    Ikom
 * @package     Ikom_WebsiteSwitcher
 * @copyright   Copyright (c) 2015 Ikom sas. (http://www.ikom.it/)
 *
 * @author 	Marco Andreini <marco@ikom.it>
 */
class Ikom_WebsiteSwitcher_Block_Switcher extends Mage_Core_Block_Template {
    
    public function getWebsites() {
		return Mage::getModel('core/website')->getCollection();
    }
    
    public function getCurrentStoreId() {
        return Mage::app()->getStore()->getId();
    }
}
