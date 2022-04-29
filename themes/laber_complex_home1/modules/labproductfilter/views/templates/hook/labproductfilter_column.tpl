{**
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{assign var='count' value= 12/$product_groups|count}
		{foreach from = $product_groups item = product_group name = product_group}
			<div class="col-md-3">
			<div class="labProductList labcolumn clearfix">
			<div class="{$product_group.class|escape:'html':'UTF-8'} column">
				<div class="title_block">
					<h3>
						<span>
							{$product_group.title|escape:'html':'UTF-8'}
						</span>
					</h3>
				</div>
				{if isset($product_group.product_list) && count($product_group.product_list) > 0}
				<div class="labProductFilter row">
					<div class="owlProductFilter-{$product_group.class|escape:'html':'UTF-8'}-column laberColumn">
						{foreach from=$product_group.product_list item=product name=product_list}
							{if $smarty.foreach.product_list.iteration % $num_row == 1 || $num_row == 1}
								<div class="item-inner ajax_block_product ">
							{/if}
								<div class="item wow fadeIn " data-wow-delay="{$smarty.foreach.product_list.iteration}00ms">
									{block name='product'}
										{include file='./product-column.tpl' product=$product}
									{/block}
								</div>
							{if $smarty.foreach.product_list.iteration % $num_row == 0 ||$smarty.foreach.product_list.last|| $num_row == 1}
								</div>
							{/if}
						{/foreach}
					</div>
				</div>
				{else}
					<div class="item product-box ajax_block_product">
						<p class="alert alert-warning">{l s='No product at this time' d='Modules.LABProductfilter'}</p>
					</div>	
				{/if}
				{if $product_group.class|escape:'html':'UTF-8' =='Lab-new-prod'}
					<a class="all-product-link" href="{$allNewProductsLink}">
						{l s='All new products' d='Modules.LABProductfilter'}
					</a>
				{/if}
				<div class="owl-buttons">
					<p class="owl-prev prev-{$product_group.class|escape:'html':'UTF-8'}-column"><i class="fa fa-angle-left"></i></p>
					<p class="owl-next next-{$product_group.class|escape:'html':'UTF-8'}-column"><i class="fa fa-angle-right"></i></p>
				</div>
				{if $use_slider == 1}
					<script type="text/javascript">
					$(document).ready(function() {
						var owl = $(".owlProductFilter-{$product_group.class|escape:'html':'UTF-8'}-column");
						owl.owlCarousel({
							items : {$num_column},
							itemsDesktop : [1199,1],
							itemsDesktopSmall : [991,1],
							itemsTablet: [767,2],
							itemsMobile : [480,1],
							navigation : false,
							rewindNav : false,
							autoPlay :  false,
							stopOnHover: false,
							autoHeight : true,
							pagination : false,
						});
						$(".next-{$product_group.class|escape:'html':'UTF-8'}-column").click(function(){
							owl.trigger('owl.next');
						})
						$(".prev-{$product_group.class|escape:'html':'UTF-8'}-column").click(function(){
							owl.trigger('owl.prev');
						})
					});
					</script>
				{/if}
			</div>
			</div>
			</div>
		{/foreach}		
