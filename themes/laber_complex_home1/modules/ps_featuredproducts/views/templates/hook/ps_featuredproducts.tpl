<section class="laberProductGrid clearfix">
  <div class="title_block">
  <h3>
    <span>{l s='Popular Products' d='Shop.Theme.Catalog'}</span>
  </h3>
  </div>
  <div class="laberFeatured">
    {foreach from=$products item="product" name="product_list"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product product_list=$smarty.foreach.product_list.iteration}
    {/foreach}
  </div>
  <a class="all-product-link pull-xs-left pull-md-right h4" href="{$allProductsLink}">
    {l s='All products' d='Shop.Theme.Catalog'}<i class="material-icons">&#xE315;</i>
  </a>
</section>
<script type="text/javascript">
$(document).ready(function() {
	var owl = $(".laberFeatured");
	owl.owlCarousel({
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [991,3],
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