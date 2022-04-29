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
				{if isset($cat_product_lists) && count($cat_product_lists) > 0}
				<div class="laber-container" id="laber-{$id_group|intval}">	
					<div class="list_carousel">
						<div id="cat-column-{$id_group|intval}-{$id_cat|intval}" class="product-list-cat">
							{foreach from=$cat_product_lists item=product name=product_list}
								{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
								<div class="item-inner ajax_block_product">
								{/if}
									<div class="item">
										<div class="product_list product-list">
											{include file='./column_item_ajax.tpl'}				
										</div>
									</div>
								{if $smarty.foreach.product_list.iteration % $number_line == 0 || $smarty.foreach.product_list.last || $number_line == 1}
									</div>
								{/if}
						{/foreach}
						</div>
					</div>
				</div>
			 {else}
			 <div class="item product-box no-product col-sm-12 col-md-6">
							<p class="alert alert-warning">{l s='No product at this category' d='Modules.LABProductCategory'}</p>
			</div>
			 {/if}
{if $use_slider == 1}
	<script type="text/javascript">
	$(document).ready(function() {
		var owl = $("#cat-column-{$id_group|intval}-{$id_cat|intval}");
		owl.owlCarousel({
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [991,1],
			itemsTablet: [767,2],
			itemsMobile : [480,1],
			navigation : true,
			navigationText : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			rewindNav : false,
			autoPlay :  false,
			stopOnHover: false,
			pagination : false,
		});
	});
	</script>
{/if}


