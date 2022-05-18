<div class="img_content">
	<img class="product-image img-responsive" src = "{$product.cover.bySize.small_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}">
	<span class="product-quantity">{$product.quantity}x</span>
</div>
<div class="right_block">
	<span class="product-name">{$product.name}</span>
	<span class="product-price">{$product.price}</span>
	<a  class="remove-from-cart"
		rel="nofollow"
		href="{$product.remove_from_cart_url}&special_instructions={$product.instructions_valid}"
		data-link-action="remove-from-cart"
		data-id-product-attribute="{$product.id_product_attribute|escape:'javascript'}_{$product.instructions_valid|escape:'javascript'}"
	>
		{l s="Remove" d="Shop.Theme.Actions"}
	</a>
	<div class="attributes_content">
		{foreach from=$product.attributes item="property_value" key="property"}
		  <span><strong>{$property}</strong>: {$property_value}</span><br>
		{/foreach}
	</div>
	{if $product.customizations|count}
		<div class="customizations">
			<ul>
				{foreach from=$product.customizations item="customization"}
					<li>
						<span class="product-quantity">{$customization.quantity}</span>
						<a href="{$customization.remove_from_cart_url}" class="remove-from-cart" rel="nofollow">{l s='Remove' d="Shop.Theme.Actions"}</a>
						<ul>
							{foreach from=$customization.fields item="field"}
								<li>
									<label>{$field.label}</label>
									{if $field.type == 'text'}
										<span>{$field.text}</span>
									{elseif $field.type == 'image'}
										<img src="{$field.image.small.url}">
									{/if}
								</li>
							{/foreach}
						</ul>
					</li>
				{/foreach}
			</ul>
		</div>
	{/if}

</div>