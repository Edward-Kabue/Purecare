<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class SampleDataProdCat
{
	public function initData()
	{
		$return = true;
		$languages = Language::getLanguages(true);
		$id_shop = Configuration::get('PS_SHOP_DEFAULT');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'labgroupcategory` (`id_labgroupcategory`, `group_cat`, `id_hook`, `type_display`, `num_show`, `use_slider`, `show_sub`, `active`) VALUES 
		(1, "Group category2", "displayPosition2", "accordion", 16, 1, 1, 1),
		(2, "Group category3", "displayPosition3", "accordion", 16, 1, 1, 1),
		(3, "Group category4", "displayPosition4", "accordion", 16, 1, 1, 1),
		(4, "Group category5", "displayPosition5", "accordion", 16, 1, 1, 1)
		;');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'labgroupcategory_shop` (`id_labgroupcategory`, `group_cat`, `id_shop`, `id_hook`, `type_display`, `num_show`, `use_slider`, `show_sub`, `active`) VALUES 
		(1, "Group category2", "'.$id_shop.'", "displayPosition2", "accordion", 16, 1, 1, 1),
		(2, "Group category3", "'.$id_shop.'", "displayPosition3", "accordion", 16, 1, 1, 1),
		(3, "Group category4", "'.$id_shop.'", "displayPosition4", "accordion", 16, 1, 1, 1),
		(4, "Group category5", "'.$id_shop.'", "displayPosition5", "accordion", 16, 1, 1, 1)
		;');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'labcategory` (`id_labcategory`, `id_labgroupcategory`, `id_cat`, `cat_icon`, `cat_color`, `manufacture`, `position`, `show_img`, `special_prod`, `active`) VALUES 
		(1, 1, 3, "", "", "false", 1, 0, 0, 1),
		(2, 2, 4, "", "", "false", 1, 0, 0, 1),
		(3, 3, 5, "", "", "false", 1, 0, 0, 1),
		(4, 4, 6, "", "", "false", 1, 0, 0, 1)
		;');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'labcategory_shop` (`id_labcategory`, `id_labgroupcategory`, `id_shop`, `id_cat`, `cat_icon`, `cat_color`, `manufacture`, `position`, `show_img`, `special_prod`, `active`) VALUES 
		(1, 1, "'.$id_shop.'", 3, "", "", "false", 1, 0, 0, 1),
		(2, 2, "'.$id_shop.'", 4, "", "", "false", 1, 0, 0, 1),
		(3, 3, "'.$id_shop.'", 5, "", "", "false", 1, 0, 0, 1),
		(4, 4, "'.$id_shop.'", 6, "", "", "false", 1, 0, 0, 1)
		;');
		
		foreach ($languages as $language)
		{
			$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'labcategory_lang` (`id_labcategory`, `id_shop`, `id_lang`, `cat_desc`, `cat_banner`) VALUES 
			(1, "'.$id_shop.'", "'.$language['id_lang'].'", "", "7d9e70f17d8a673f66921f03393079472878a5c9_1.jpg"),
			(2, "'.$id_shop.'", "'.$language['id_lang'].'", "", "0822eae5cc1d51647d6749cb6b12b0ba374c6c67_2.jpg"),
			(3, "'.$id_shop.'", "'.$language['id_lang'].'", "", "d792e712ff529d81f33b4adbce7b4e1f9446c7cf_3.jpg"),
			(4, "'.$id_shop.'", "'.$language['id_lang'].'", "", "ee79f0f0ed6104ac9bbcbc9c83f53afa956494ac_4.jpg")
			;');
		}
		return $return;
	}
}
?>