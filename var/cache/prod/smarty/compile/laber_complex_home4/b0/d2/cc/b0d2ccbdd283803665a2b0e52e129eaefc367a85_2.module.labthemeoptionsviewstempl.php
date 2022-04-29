<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:16:09
  from 'module:labthemeoptionsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a858920f050_68666959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0d2ccbdd283803665a2b0e52e129eaefc367a85' => 
    array (
      0 => 'module:labthemeoptionsviewstempl',
      1 => 1651011609,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a858920f050_68666959 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php if ($_smarty_tpl->tpl_vars['lab_show_color']->value != 0) {?>
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['lab_cbgcolor']->value != '') {?>
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
	color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lab_cbgcolor']->value, ENT_QUOTES, 'UTF-8');?>
 ;
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
	background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lab_cbgcolor']->value, ENT_QUOTES, 'UTF-8');?>
;
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
	border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lab_cbgcolor']->value, ENT_QUOTES, 'UTF-8');?>
;
}
.lab-menu-horizontal .menu-dropdown{
	border-top-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lab_cbgcolor']->value, ENT_QUOTES, 'UTF-8');?>
;
}
.lab-menu-vertical .menu-dropdown{
	border-left-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lab_cbgcolor']->value, ENT_QUOTES, 'UTF-8');?>
;
}
.form-control:focus, .input-group.focus,
.search-widget .laber-search form input[type="text"]:focus{
	outline-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lab_cbgcolor']->value, ENT_QUOTES, 'UTF-8');?>
;
}
<?php }?>
</style>
<?php }
if ($_smarty_tpl->tpl_vars['labshowthemecolor']->value == 1) {?>
			<?php if ($_smarty_tpl->tpl_vars['labthemecolor']->value && $_smarty_tpl->tpl_vars['labthemecolor']->value != 'default') {?>
				<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_BASE_URL']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_BASE_URI']->value, ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LAB_THEMENAME']->value, ENT_QUOTES, 'UTF-8');?>
/assets/css/color/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labthemecolor']->value, ENT_QUOTES, 'UTF-8');?>
.css" />
			<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['labskin']->value) {?>
			<style type="text/css">
				body{
					background-image: url("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_BASE_URL']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_BASE_URI']->value, ENT_QUOTES, 'UTF-8');?>
modules/labthemeoptions/views/templates/front/colortool/images/pattern/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labskin']->value, ENT_QUOTES, 'UTF-8');?>
.png") ;
				}
			</style>
        <?php }
}
}
}
