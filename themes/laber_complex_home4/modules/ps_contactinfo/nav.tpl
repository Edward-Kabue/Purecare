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
<div id="_desktop_contact_link">
  <div id="contact-link">
	<ul class="laber-contact-link media-body">
		{if $contact_infos.email}
		<li class="pull-left item email">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
			{$contact_infos.email}
			
		</li>
		{/if}
		{if $contact_infos.phone}
		<li class="pull-left item phone">
			<i class="fa fa-phone" aria-hidden="true"></i>

				{$contact_infos.phone}
			
		</li>
		{/if}
		<!-- <li class=" pull-left item contact">
			<a href="{$urls.pages.contact}">{l s='Contact us' d='Shop.Theme'}</a>
		</li> -->
	</ul>
  </div>
</div>
