<?php
/**
 * @package SmartAddons
 * @category SM Basic Products
 * @copyright (c) 2009-2012 YouTech Company. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * @author YouTech Company http://www.smartaddons.com
 */

class Smartaddons_BasicProducts_Model_System_Config_Source_DescriptionSrc
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'description',	'label'=>Mage::helper('basicproducts')->__('Description')),
        	array('value'=>'short_description',	'label'=>Mage::helper('basicproducts')->__('Short Description'))
		);
	}
}
