{if $lab_show_color!=0}
<style type="text/css">
{if $lab_cbgcolor !=''}
#product .current-price span,
.laberProductList .price,
.breadcrumb ol li:last-child a,
.copyright a,
.laberFooter-center ul li a:hover,
.laberTestimonial .item .laberAuthor,
.laberBlog .slick-arrow:hover,
.labcolumn .owl-next:hover, .labcolumn .owl-prev:hover, .laberProductGrid .owl-next:hover, .laberProductGrid .owl-prev:hover,
.labcolumn .price, .laberProductGrid .price,
#header .lab-menu-horizontal ul li.level-1:hover > a,
a:hover, #header a:hover
{
	color:{$lab_cbgcolor} ;
}

/* background-color:#6fc138 */
.product-actions .add-to-cart:hover,
.btn-primary.focus, .btn-primary:focus, .btn-primary:hover, .btn-secondary.focus, .btn-secondary:focus, .btn-secondary:hover, .btn-tertiary:focus, .btn-tertiary:hover, .focus.btn-tertiary,
.scroll-box-arrows i:hover,
.laberProductList .laberItem a:hover, .laberProductList .laberCart .laberBottom:hover,
.pagination .page-list li a:hover, .pagination .page-list li a.disabled,
.laberProductGrid .laberItem .laberwishlist a:hover, .laberProductGrid .laberActions a:hover,
.laberGridList li a:hover, 
.active_list .laberGridList li#list a, 
.active_grid .laberGridList li#grid a,
#left-column .h6:before,
.laberFooter-top,
.support-footer-inner .support-info:hover .info-title i,
.blog_post_content .read_more:hover,
.labproductcategory .quick-view:hover,
.laberActions .laberwishlist a:hover,
.laberCart .laberBottom:hover,
#newsletter_block_popup .block_content .send-reqest,
.laberPopupnewsletter-i .close,
.laberProductList .item-inner .reduction_percent_display, 
.labcolumn .reduction_percent_display, .laberProductGrid .reduction_percent_display,
.container_lab_vegamenu .title-menu::before,
.container_lab_vegamenu .title-menu,
#search_block_top .btn.button-search > span,
#header .laber-cart a .cart-products-count,
.wishtlist_top span.cart-wishlist-number
{
	background-color:{$lab_cbgcolor};
}
/* border-color:#6fc138 */
.product-actions .add-to-cart:hover,
.btn-primary.focus, .btn-primary:focus, .btn-primary:hover, .btn-secondary.focus, .btn-secondary:focus, .btn-secondary:hover, .btn-tertiary:focus, .btn-tertiary:hover, .focus.btn-tertiary,
.tabs .nav-tabs .nav-link.active, .tabs .nav-tabs .nav-link:hover,
.scroll-box-arrows i:hover,
.product-images > li.thumb-container > .thumb.selected, .product-images > li.thumb-container > .thumb:hover,
.laberProductList .laberItem a:hover, .laberProductList .laberCart .laberBottom:hover,
.pagination .page-list li a:hover, .pagination .page-list li a.disabled,
.laberProductGrid .laberItem .laberwishlist a:hover, .laberProductGrid .laberActions a:hover,
.laberTestimonial .owl-pagination .owl-page.active span,
.laberTestimonial .item .image span,
.support-footer-inner .support-info:hover .info-title i,
.laberTestimonial .owl-pagination .owl-page.active span
.blog_post_content .read_more:hover,
.laberActions .laberwishlist a:hover,
.laberCart .laberBottom:hover,
.laberSpecialPro,
.nivo-controlNav a:hover, .nivo-controlNav a.active
{
	border-color:{$lab_cbgcolor};
}
.lab-menu-horizontal .menu-dropdown{
	border-top-color:{$lab_cbgcolor};
}
.lab-menu-vertical .menu-dropdown{
	border-left-color:{$lab_cbgcolor};
}
.form-control:focus, .input-group.focus,
.search-widget .laber-search form input[type="text"]:focus{
	outline-color:{$lab_cbgcolor};
}
{/if}
</style>
{/if}
{if $labshowthemecolor == 1 }
			{if $labthemecolor && $labthemecolor !='default'}
				<link rel="stylesheet" type="text/css" href="{$PS_BASE_URL}{$PS_BASE_URI}themes/{$LAB_THEMENAME}/assets/css/color/{$labthemecolor}.css" />
			{/if}
        {if $labskin }
			<style type="text/css">
				body{
					background-image: url("{$PS_BASE_URL}{$PS_BASE_URI}modules/labthemeoptions/views/templates/front/colortool/images/pattern/{$labskin}.png") ;
				}
			</style>
        {/if}
{/if}