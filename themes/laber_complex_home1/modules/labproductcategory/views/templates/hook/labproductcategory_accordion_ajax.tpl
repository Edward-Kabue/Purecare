{**
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
*}
{$number_line = 2}
{if $use_slider != 1}
	{assign var='nbItemsPerLine' value=3}
	{assign var='nbItemsPerLineTablet' value=3}
	{assign var='nbItemsPerLineMobile' value=2}
{/if}
				{if isset($cat_product_lists) && count($cat_product_lists) > 0}
				<div class="laberContainer" id="laber-{$id_group|intval}">	
						<div class="laberProducts-Grid row">
							<div id="laberOWL-{$id_group|intval}-{$id_cat|intval}" class="product-list-cat">
								
								{foreach from=$cat_product_lists item=product name=product_list}
									{if $use_slider != 1}
										<div class="item-inner col-lg-4 col-md-4 col-sm-4 col-xs-12
										{if $smarty.foreach.product_list.iteration%$nbItemsPerLine == 0} last-in-line
										{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLine == 1} first-in-line{/if}
										{if $smarty.foreach.product_list.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line
										{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}
										{if $smarty.foreach.product_list.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line
										{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}
										wow fadeIn " data-wow-delay="{$smarty.foreach.product_list.iteration}00ms">
									{else}
										{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
										<div class="item-inner ajax_block_product wow fadeIn " data-wow-delay="{$smarty.foreach.product_list.iteration}00ms">
										{/if}
									{/if}
										{include file='./medium_item_ajax.tpl'}			
									{if $use_slider != 1}
										</div>
									{else}
										{if $smarty.foreach.product_list.iteration % $number_line == 0 ||$smarty.foreach.product_list.last || $number_line == 1}
										</div>
										{/if}
									{/if}
									
							{/foreach}
							</div>
						
						</div>
					
				</div>
				<div class="owl-buttons">
					<p class="owl-prev prev-{$id_group|intval}-{$id_cat|intval}"><i class="fa fa-angle-left"></i></p>
					<p class="owl-next next-{$id_group|intval}-{$id_cat|intval}"><i class="fa fa-angle-right"></i></p>
				</div>
			 {else}
			 <div class="item product-box no-product col-sm-12 col-md-6">
							<p class="alert alert-warning">{l s='No product at this category' d='Modules.LABProductCategory'}</p>
			</div>
			 {/if}


{if $use_slider == 1}
	<script type="text/javascript">
	$(document).ready(function() {
		var owl = $("#laberOWL-{$id_group|intval}-{$id_cat|intval}");
		owl.owlCarousel({
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [991,2],
			itemsTablet: [767,2],
			itemsMobile : [480,1],
			rewindNav : false,
			autoPlay :  false,
			stopOnHover: false,
			pagination : false,
		});
		$(".next-{$id_group|intval}-{$id_cat|intval}").click(function(){
		owl.trigger('owl.next');
		})
		$(".prev-{$id_group|intval}-{$id_cat|intval}").click(function(){
		owl.trigger('owl.prev');
		})
	});
	</script>
{/if}


