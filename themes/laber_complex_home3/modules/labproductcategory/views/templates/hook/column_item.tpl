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
	<div class="product-container">	
		<div class="laber-mediaBody">
			<div class="pull-left">
				<a class="thumbnail product-thumbnail" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:html:'UTF-8'}">
					<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'cart_default')|escape:'html':'UTF-8'}" alt="{$product.legend|escape:'html':'UTF-8'}" />
				</a>
			</div>
			<div class="laberMedia-body">
			<div class="laber-product-description">
				{hook h='displayProductListReviews' product=$product}
				<h2 class="h2 productName"><a href="{$product.link|escape:'html':'UTF-8'}">{$product.name|truncate:15:''|escape:'html':'UTF-8'}</a></h2>
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
			 </div>
			 </div>
		</div>	
	</div>	
</div>
