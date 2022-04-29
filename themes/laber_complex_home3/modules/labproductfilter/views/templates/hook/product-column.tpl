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
<div class="laberProductsList product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
  <div class="laber-thumbnail-container">
	<div class="row no-margin">
		<div class="pull-left">
			{block name='product_thumbnail'}
			  <a href="{$product.url}" class="thumbnail product-thumbnail">
				<img
				  src = "{$product.cover.bySize.cart_default.url}"
				  alt = "{$product.cover.legend}"
				  data-full-size-image-url = "{$product.cover.large.url}"
				>
			  </a>
				
			{/block}
		</div>
		<div class="laberMedia-body">
			<div class="laber-product-description">
			<!-- <div class="laber-media-body">
			{if isset($product.new) && $product.new == 1}
				<span class="laberNew-label pull-left">{l s='New' d='Modules.LABProductfilter'}</span>
			{/if}
			{if $product.on_sale}
				<span class="laberSale-label pull-left">{l s='On sale!' d='Modules.LABProductfilter'}</span>
			{/if}
			</div> -->
			{hook h='displayProductListReviews' product=$product}
			  {block name='product_name'}
				<h2 class="h2 productName" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h2>
			  {/block}

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
			</div>
			<!-- {block name='product_variants'}
				{if $product.main_variants}
					{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
				{/if}
			{/block} -->
			<!-- <div class="laber-highlighted-informations{if !$product.main_variants} no-variants{/if}">
			  <a href="#" class="quick-view" data-link-action="quickview">
					<i class="fa fa-search" aria-hidden="true"></i> {l s='Quick view' d='Modules.LABProductfilter'}
			  </a>
			</div> -->
			
	  </div>
  </div> 
</div>
</div>
