<?php
/**
* 2007-2016 PrestaShop
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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2016 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class SampleDataHtml
{
	public function initData($base_url)
	{
		$content_block1 = '
			<div class="laberStatic">
			<div class="row no-margin">
			<div class=" col-md-4 ">
			<div class="img"><a title="" href="#"> <img src="{static_block_url}/img/cms/img_3_1.jpg" alt="images" /> </a></div>
			</div>
			<div class=" col-md-4 ">
			<div class="img"><a title="" href="#"> <img src="{static_block_url}/img/cms/img_3_2.jpg" alt="images" /> </a></div>
			</div>
			<div class=" col-md-4 ">
			<div class="img"><a title="" href="#"> <img src="{static_block_url}/img/cms/img_3_3.jpg" alt="images" /> </a></div>
			</div>
			</div>
			</div>
		';
								
		$content_block2 = '
			<div class="laberStatic">
			<div class="img"><a title="" href="#"> <img src="{static_block_url}/img/cms/img_3_4.jpg" alt="images" /> </a></div>
			</div>
		';
							
		$content_block3 = '
			<div class="laberStatic">
				<div class="img"><a title="" href="#"> <img src="{static_block_url}/img/cms/img_3_5.jpg" alt="images" /> </a></div>
			</div>
		';
		
												
		
		
		$content_block6 = '
			<div class="support-footer-inner">
			<div class="row no-margin">
			<div class="support-info col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="row-normal clearfix">
			<div class="info-title"><i class="fa fa-paper-plane-o"></i>
			<div class="content_static">
			<p>Free shipping</p>
			<span>Free for all over oder $100.00</span></div>
			</div>
			</div>
			</div>
			<div class="support-info col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="row-normal clearfix">
			<div class="info-title"><i class="fa fa-history"></i>
			<div class="content_static">
			<p>Money come back</p>
			<span>100% Money Back 30 days</span></div>
			</div>
			</div>
			</div>
			<div class="support-info col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="row-normal clearfix">
			<div class="info-title"><i class="fa fa-comment-o"></i>
			<div class="content_static">
			<p>24/7 Support</p>
			<span>Service support fast 24/7</span></div>
			</div>
			</div>
			</div>
			<div class="support-info col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="row-normal clearfix">
			<div class="info-title"><i class="fa fa-users"></i>
			<div class="content_static">
			<p>MEMBER DISCOUNT</p>
			<span>Upto 40% Discount</span></div>
			</div>
			</div>
			</div>
			</div>
			</div>
		';
		$content_block7 = '
			<div class="laberStatic">
			<div class="img"><a title="" href="#"> <img src="{static_block_url}/img/cms/img_left.jpg" alt="images" /> </a></div>
			</div>
		';					
		$content_block8 = '
			<div class="col-md-4 ">
			<div class="logo-footer"><a title="marlboro" href="#"><img src="{static_block_url}/img/cms/logo.png" alt="images" /></a>
			<p><span>Complex</span> is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
			</div>
			<div class="laberContac">
			<p><i class="fa fa-map-marker"></i> Add: <span>My Company, 42 Puffin street 12345 Puffinville France</span></p>
			<p><i class="fa fa-phone"></i> Phone Number: <span>0123-456-789</span></p>
			<p><i class="fa fa-envelope"></i> Email: <span><a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a></span></p>
			</div>
			</div>
		';
		$content_block9 = '
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="copyright ">© 2017 <a href="http://laberthemes.com/">Laberthemes. </a>All Rights Reserved</div>
			</div>			
		';
		$content_block10 = '
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="payment"><a href="#"><i class="fa fa-cc-mastercard"> </i></a> <a href="#"><i class="fa fa-cc-visa"> </i></a> <a href="#"><i class="fa fa-cc-paypal"> </i></a> <a href="#"><i class="fa fa-cc-discover"> </i></a> <a href="#"><i class="fa fa-credit-card"> </i></a> <a href="#"><i class="fa fa-cc-amex"> </i></a></div>
			</div>
		';
		
		$displayNav = Hook::getIdByName('displayNav');
		$displayNav1 = Hook::getIdByName('displayNav1');
		$displayNav2 = Hook::getIdByName('displayNav2');
		$displayTop = Hook::getIdByName('displayTop');
		$displayMegamenu = Hook::getIdByName('displayMegamenu');
		$displayImageSlider = Hook::getIdByName('displayImageSlider');
		$displayLeftColumn = Hook::getIdByName('displayLeftColumn');
		$displayRightColumn = Hook::getIdByName('displayRightColumn');
		$displayHome = Hook::getIdByName('displayHome');
		$displayPosition1 = Hook::getIdByName('displayPosition1');
		$displayPosition2 = Hook::getIdByName('displayPosition2');
		$displayPosition3 = Hook::getIdByName('displayPosition3');
		$displayPosition4 = Hook::getIdByName('displayPosition4');
		$displayPosition4 = Hook::getIdByName('displayPosition5');
		$displayPosition4 = Hook::getIdByName('displayPosition6');
		$displayFooterBefore = Hook::getIdByName('displayFooterBefore');
		$displayFooter = Hook::getIdByName('displayFooter');
		$displayFooterAfter = Hook::getIdByName('displayFooterAfter');
		
		
		$id_shop = Configuration::get('PS_SHOP_DEFAULT');
		
		/*install static Block*/
		$result = true;
		$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'labcustomhtml` (`id_labcustomhtml`, `hook`, `active`) 
			VALUES
			(1, "displayPosition1", 1),
			(2, "displayPosition2", 1),
			(3, "displayPosition3", 1),
			(4, "displayPosition6", 1),
			(5, "displayLeftColumn", 1),
			(6, "displayFooter", 1),
			(7, "displayFooterAfter", 1),
			(8, "displayFooterAfter", 1)
			
			
			;'); 
		
		$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'labcustomhtml_shop` (`id_labcustomhtml`, `id_shop`,`active`) 
			VALUES 
			(1,'.$id_shop.', 1),
			(2,'.$id_shop.', 1),
			(3,'.$id_shop.', 1),
			(4,'.$id_shop.', 1),
			(5,'.$id_shop.', 1),
			(6,'.$id_shop.', 1),
			(7,'.$id_shop.', 1),
			(8,'.$id_shop.', 1)
			
			
			;');
		
		foreach (Language::getLanguages(false) as $lang)
		{
			$result &= Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'labcustomhtml_lang` (`id_labcustomhtml`, `id_shop`, `id_lang`, `title`, `content`) 
			VALUES 
			( "1", "'.$id_shop.'","'.$lang['id_lang'].'","Banner displayPosition1", \''.$content_block1.'\'),
			( "2", "'.$id_shop.'","'.$lang['id_lang'].'","Banner displayPosition2", \''.$content_block2.'\'),
			( "3", "'.$id_shop.'","'.$lang['id_lang'].'","banner displayPosition3", \''.$content_block3.'\'),
			( "4", "'.$id_shop.'","'.$lang['id_lang'].'","support", \''.$content_block6.'\'),
			( "5", "'.$id_shop.'","'.$lang['id_lang'].'","Banner displayleftcolumn", \''.$content_block7.'\'),
			( "6", "'.$id_shop.'","'.$lang['id_lang'].'","logo footer and contac", \''.$content_block8.'\'),
			( "7", "'.$id_shop.'","'.$lang['id_lang'].'","Copyright", \''.$content_block9.'\'),
			( "8", "'.$id_shop.'","'.$lang['id_lang'].'","logo payment", \''.$content_block10.'\')
			
			;');
		}
		return $result;
	}
}