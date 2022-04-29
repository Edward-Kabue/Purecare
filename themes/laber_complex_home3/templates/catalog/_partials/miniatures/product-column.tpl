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
{$number_line = 4}
{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
<div class="item-inner ajax_block_product">
{/if}
<div class="item">
<article class="laber-products-grid product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="laberProduct-container laberMedia-body">
	  <div class="pull-left">
		{block name='product_thumbnail'}
		  <a href="{$product.url}" class="thumbnail product-thumbnail">
			<img
			  src = "{$product.cover.bySize.small_default.url}"
			  alt = "{$product.cover.legend}"
			  data-full-size-image-url = "{$product.cover.large.url}"
			>
		  </a>
		<!-- {/block}
		{if isset($product.new) && $product.new == 1}
				<span class="laberNew-label"><span>{l s='New' d='Shop.Theme.Actions'}</span></span>
			{/if}
		{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
				<span class="laberSale-label"><span>{l s='sale' d='Shop.Theme.Actions'}</span></span>
			{/if}
		
		
			<div class="laberQuick">
				  <a href="#" class="quick-view" data-link-action="quickview">
					<span>{l s='Quickview' d='Shop.Theme.Actions'}</span>
				  </a>
			</div> -->
			
		
		<!-- {block name='product_variants'}
			{if $product.main_variants}
				{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
			{/if}
		{/block} -->
	</div>
    <div class="laber-product-description laberMedia-body">
		{hook h='displayProductListReviews' product=$product}
      {block name='product_name'}
        <h2 class="h2 productName" itemprop="name"><a href="{$product.url}">{$product.name|truncate:25:'...'}</a></h2>
      {/block}
		
      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="laber-product-price-and-shipping">
            <span itemprop="price" class="price
				{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
				laberSale
				{/if}
			">{$product.price}</span>
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

              <span class="old-price regular-price">{$product.regular_price}</span>
            {/if}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}
	  <!-- <div class="laberActions">
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
						</i><span>{l s='Out of stock' d='Shop.Theme.Actions'}</span>
					</button>
					</form>
				{/if}
			</div>
			<div class="pull-left">
				{hook h='displayProductListFunctionalButtons' product=$product}
			</div>
		</div> -->
    </div>
    
		
  </div>
</article>
</div>
{if $product_list % $number_line == 0 || $laberLast || $number_line == 1}
</div>
{/if}