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
 
<div class="item-inner wow fadeIn " data-wow-delay="{$product_list}00ms">
<article class="laber-products-grid product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="laberProduct-container item">
  <div class="row">
	  <div class="col-md-5">
	  <div class="laberProduct-image">
		{block name='product_thumbnail'}
		  <a href="{$product.url}" class="thumbnail product-thumbnail">
			<img
			  src = "{$product.cover.bySize.large_default.url}"
			  alt = "{$product.cover.legend}"
			  data-full-size-image-url = "{$product.cover.large.url}"
			>
		  </a>
		{/block}
		{if isset($product.new) && $product.new == 1}
				<span class="laberNew-label">{l s='New' d='Shop.Theme.Actions'}</span>
			{/if}
		{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
				<span class="laberSale-label">{l s='Sale' d='Shop.Theme.Actions'}</span>
			{/if}
		
	</div> 
	</div> 
    <div class="col-md-7">
    <div class="laber-product-description">
		{hook h='displayProductListReviews' product=$product}
      {block name='product_name'}
        <h2 class="h2 productName" itemprop="name"><a href="{$product.url}" title="{$product.name}">{$product.name}</a></h2>
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

              <span class="old-price regular-price">{$product.regular_price}</span>
            {/if}
			
            {hook h='displayProductPriceBlock' product=$product type="before_price"}
			
            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}
		{if $product.description_short}
		<div class="laberDescription_short">
			{$product.description_short|escape:'quotes':'UTF-8' nofilter}
		</div>
		{/if}
		<p class="titleCountdown">{l s='Hurry Up! Offer ends in:' d='Shop.Theme.Actions'}</p>
		{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
			{hook h='displayTimecountdown'  product=$product }
		{/if}
    </div>
    </div>
    
		
  </div>
  </div>
</article>
</div>
