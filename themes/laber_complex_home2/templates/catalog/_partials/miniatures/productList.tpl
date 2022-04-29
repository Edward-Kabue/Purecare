{**
 * 2007-2016 PrestaShop
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
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<!-- <pre>
{$product.available_now|var_dump}
</pre>  -->
<div class="item-inner clearfix">
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="laberProduct-container item">
	  <div class="row">
		  <div class="col-xs-5 col-sm-6 col-md-4">
		  <div class="laberProduct-image">
			{block name='product_thumbnail'}
			  <a href="{$product.url}" class="thumbnail product-thumbnail">
				<img
				  src = "{$product.cover.bySize.medium_default.url}"
				  alt = "{$product.cover.legend}"
				  data-full-size-image-url = "{$product.cover.large.url}"
				>
			  </a>
			{/block}
			{if isset($product.new) && $product.new == 1}
					<span class="laberNew-label">{l s='New' d='Shop.Theme.Actions'}</span>
				{/if}
			{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
				<span class="laberSale-label">{l s='sale' d='Shop.Theme.Actions'}</span>
			{/if}
			</div>
			</div>
		<div class="col-xs-7 col-sm-6 col-md-8">
		<div class="laber-product-description">
			
		  {block name='product_name'}
			<h2 class="h2 laber-product-title" itemprop="name"><a href="{$product.url}">{$product.name}</a></h2>
		  {/block}
			{hook h='displayProductListReviews' product=$product}
		  {block name='product_price_and_shipping'}
			{if $product.show_price}
			  <div class="laber-product-price-and-shipping">
				<span itemprop="price" class="price">{$product.price}</span>
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
				{if $product.has_discount}
				  {hook h='displayProductPriceBlock' product=$product type="old_price"}

				  <span class="regular-price">{$product.regular_price}</span>
				{/if}
	
				{hook h='displayProductPriceBlock' product=$product type="before_price"}

				

				{hook h='displayProductPriceBlock' product=$product type='unit_price'}

				{hook h='displayProductPriceBlock' product=$product type='weight'}
			  </div>
			{/if}
		  {/block}
		  <div class="description_short">
			{$product.description_short|escape:'quotes':'UTF-8' nofilter}
		  </div>
		  {block name='product_variants'}
			{if $product.main_variants}
			  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
			{/if}
		  {/block}
			<!-- {if ($product.allow_oosp || $product.quantity > 0)}
				<p class="available_now">{$product.available_now}</p>
			{else}
				<p class="Out-stock">{l s='Out of stock' d='Shop.Theme.Actions'}</p>
			{/if} -->
			<div class="actions clearfix">
				<div class="laberCart pull-left">
					{if ($product.allow_oosp || $product.quantity > 0)}
						<form action="{$urls.pages.cart}" method="post">
						<input type="hidden" name="token" value="{$static_token}">
						<input type="hidden" value="{$product.id_product}" name="id_product">
						<button data-button-action="add-to-cart" class="laberBottom" >
							<span>{l s='Add to cart' d='Shop.Theme.Actions'}</span> 
						</button>
						</form>
					{else}
						<form action="{$urls.pages.cart}" method="post">
						<input type="hidden" name="token" value="{$static_token}">
						<input type="hidden" value="{$product.id_product}" name="id_product">
							<button data-button-action="add-to-cart" class="laberBottom disabled" disabled >
								<span>{l s='Out of stock' d='Shop.Theme.Actions'}</span> 
							</button>
						</form>
					{/if}
				</div>
				<div class="laberItem pull-left">
					{hook h='displayProductListFunctionalButtons' product=$product}
				</div>
				<div class="laberItem pull-left">
					<a href="#" class="quick-view" data-link-action="quickview">
						<i class="icon" aria-hidden="true"></i><span>{l s='Quick view' d='Shop.Theme.Actions'}</span>
					</a>
				</div>
				
				<div class="laberItem pull-left">		
					<a href="{$product.url}" class="Details">
						<i class="ion-ios-eye-outline"></i><span>{l s='Details' d='Shop.Theme.Actions'}</span>
					</a>
				</div>
			</div>
		</div>
		</div>
	  </div>
  </div>
</article>
</div>