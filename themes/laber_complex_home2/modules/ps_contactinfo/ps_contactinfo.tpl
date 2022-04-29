{*
* 2007-2015 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="laber-contact col-md-3 links wrapper">
    <h3 class="h3 hidden-sm-down text-uppercase block-contact-title">{l s='Store information' d='Shop.Theme'}</h3>
	<div class="title clearfix hidden-md-up collapsed" data-target="#laberContact" data-toggle="collapse">
		<span class="h3">{l s='Store information' d='Shop.Theme'}</span>
		<span class="pull-xs-right">
			<span class="navbar-toggler collapse-icons">
				<i class="fa fa-plus-square-o" aria-hidden="true"></i>
				<i class="fa fa-minus-square-o" aria-hidden="true"></i>
			</span>
		</span>
	</div>
    <div id="laberContact" class="collapse">
	{if $contact_infos.address.address1}
		<p class="item laberAddress">
			<i class="fa fa-map-marker"></i>
			{$contact_infos.address.address1 nofilter}
		</p>
	{/if}
	{if $contact_infos.phone}
		<p class="item laberPhone">
			<i class="fa fa-mobile-phone"></i>
			{$contact_infos.phone}
			
		</p>
	{/if}
	
	 
	{if $contact_infos.fax}
		<p class="item laberFax">
			<i class="fa fa-phone"></i>
			{$contact_infos.fax}
		</p>
	{/if}
	  
	{if $contact_infos.email}
		<p class="item laberFax">
		<i class="fa fa-envelope-o"></i>
			{$contact_infos.email}
		</p>
	{/if}
	</div>
  <!-- <div class="hidden-md-up">
    <div class="title">
      <a class="h3" href="{$urls.pages.stores}">{l s='Store information' d='Shop.Theme'}</a>
    </div>
  </div> -->
</div>