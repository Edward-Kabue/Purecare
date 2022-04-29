{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down">
            <div class="col-md-8 col-xs-12">
              {hook h='displayNav1'}
            </div>
            <div class="col-md-4 right-nav">
                {hook h='displayNav2'}
            </div>
          </div>
          <div class="hidden-md-up text-xs-center mobile">
            <div class="pull-xs-left" id="menu-icon">
              <i class="ion-drag" aria-hidden="true"></i>
            </div>
            <div class="pull-xs-right" id="_mobile_cart"></div>
            <div class="pull-xs-right" id="_mobile_wishtlistTop"></div>
           
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
			<div class="hidden-sm-down laberLogo col-md-3" id="_desktop_logo">
			  <a href="{$urls.base_url}">
				<img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
			  </a>
			</div>
			<div class="col-md-6 laberDisplaySearch">
				{hook h='displaySearch'}
			</div>
			<div class="col-md-3 position-static">
				{hook h='displayTop'}
			</div>
		</div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu-bottom">
		  {hook h='displayMegamenuMobile'}
		  {hook h='displayVegamenuMobile'}
		  <div class="pull-xs-right" id="_mobile_user_info"></div>
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
<div class="container_lab_megamenu clearfix hidden-sm-down">
	<div class="laberMegamenu">
		<div class="container">
		<div class="row">
			<div class="col-md-3">
				{hook h='displayVegamenu'}
			</div>
			<div class="col-md-9">
				{hook h='displayMegamenu'}
			</div>
		</div>
		</div>
	</div>
</div>
{/block}
