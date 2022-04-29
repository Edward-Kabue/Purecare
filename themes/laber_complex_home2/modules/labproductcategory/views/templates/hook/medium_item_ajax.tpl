{*
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="item product-box  ajax_block_product js-product-miniature" data-id-product="{$product.id_product|escape:'quotes':'UTF-8'}" data-id-product-attribute="{$product.id_product_attribute|escape:'quotes':'UTF-8'}">
		<div class="laberProduct-container ">	
		
					<div class="laberProduct-image">
						<a class="thumbnail product-thumbnail" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:html:'UTF-8'}">
							<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$product.legend|escape:'html':'UTF-8'}" />
						</a>
						
						
						{if isset($product.new) && $product.new == 1}
							<span class="laberNew-label">{l s='New' d='Modules.labproductcategory'}</span>
						{/if}
						{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
							<span class="laberSale-label">{l s='sale' d='Modules.labproductcategory'}</span>
						{/if}
						<div class="laberActions">
							<div class="laberActions-i">
								<div class="laberItem pull-left">		
									<a href="{$product.link|escape:'html':'UTF-8'}" class="{l s='Details' d='Modules.labproductcategory'}" title="Details">
										<i class="ion-ios-eye-outline"></i>
									</a>
								</div>
								<div class="laberQuick laberItem pull-left">
									<a href="javascript:void(0);" class="quick-view" data-toggle="tooltip" data-placement="top" data-link-action="quickview" title="{l s='Quick view' d='Modules.labproductcategory'}">
										<i class="fa fa-search" aria-hidden="true"></i>	
									</a>
								</div>
								<div class="laberItem pull-left">
									{hook h='displayProductListFunctionalButtons' product=$product}
								</div>						
							</div>	
						</div>	
					</div>
					
					<div class="laber-product-description">
						{hook h='displayProductListReviews' product=$product}
						<h2 class="h2 productName"><a href="{$product.link|escape:'html':'UTF-8'}">{$product.name|truncate:15:''|escape:'html':'UTF-8'}</a></h2>
						{*{hook h='displayProductListReviews' product=$product}*}
						<div class="laber-product-price-and-shipping">
							{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
								
								<span itemprop="price" class="price {if isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0} special-price{/if}">												
									{Product::convertAndFormatPrice($product.price|escape:'quotes':'UTF-8')}

								</span>
								{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
									{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
										<span class="reduction_percent_display">
											
											{if $product.specific_prices && $product.specific_prices.reduction_type == 'percentage'}
											-{$product.specific_prices.reduction|escape:'quotes':'UTF-8' * 100}%
											{else}
											-{$product.price_without_reduction-$product.price|floatval}
											{/if}
											
										</span>
									{/if}
								{/if}
								{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
										<span class="old-price regular-price">
										{Product::convertAndFormatPrice($product.price_without_reduction|escape:'quotes':'UTF-8')}
										</span>
								{/if}
									{hook h="displayProductPriceBlock" product=$product type="price"}
									{hook h="displayProductPriceBlock" product=$product type="unit_price"}
							{/if}
						</div>
						<div class="laberCart">
							{if ($product.allow_oosp || $product.quantity > 0)}
								<form action="{$urls.pages.cart}" method="post">
								<input type="hidden" name="token" value="{$static_token}">
								<input type="hidden" value="{$product.id_product}" name="id_product">
								<button data-button-action="add-to-cart" class="laberBottom" >{l s='Add to cart' d='Modules.labproductcategory'}</button>
								</form>
							{else}
								<form action="{$urls.pages.cart}" method="post">
								<input type="hidden" name="token" value="{$static_token}">
								<input type="hidden" value="{$product.id_product}" name="id_product">
								<button data-button-action="add-to-cart" class="laberBottom disabled" disabled >{l s='Out of stock' d='Modules.labproductcategory'}</button>
								</form>
							{/if}
						</div>	
											
					</div>
		</div>	
</div>
