<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:03
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductcategory/views/templates/hook/labproductcategory_accordion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841b26c3b3_94752090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98222837503cfc453c572860a9a24e34924c8f2' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductcategory/views/templates/hook/labproductcategory_accordion.tpl',
      1 => 1500104008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./medium_item.tpl' => 1,
  ),
),false)) {
function content_626a841b26c3b3_94752090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('number_line', 1);
if ($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] != 1) {?>
	<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
	<?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 3);?>
	<?php $_smarty_tpl->_assignInScope('nbItemsPerLineMobile', 2);
}
$_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_cat_info']->value, 'cat_info', false, NULL, 'g_cat_info', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['cat_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_info']->value) {
$_smarty_tpl->tpl_vars['cat_info']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']++;
?>
<div class="labproductcategory laberProductGrid labproductcategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
">
<div class="block-content clearfix">
	<div id="laberProd-cat-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['cat_info']->value['id_cat']), ENT_QUOTES, 'UTF-8');?>
">
		<div class="content-title row no-margin">
			<div class="laberCateTitle pull-left">
				<h3>
					<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['cat_icon'] != '') {?>
					<span class="icon_cat">
					   <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
					</span>
					<?php }?>
					<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'],$_smarty_tpl->tpl_vars['cat_info']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				</h3>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['show_sub'] == 1) {?>
				<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['sub_cat']) {?>
					<div class="laberSub-cate pull-right">
						<div class="laberSub-accordion">
							<ul class="laber-mediaBody sub-cat-ul cat-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
" id="sub-cat-ul-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<li 
									data-use_slider="<?php if ((isset($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'])) && $_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] == 1) {?>1<?php } else { ?>0<?php }?>" 
									data-id-cat-main="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
" 
									data-cat-info="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
									data-id-cat="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['cat_info']->value['id_cat']), ENT_QUOTES, 'UTF-8');?>
" 
									data-lab-name-module="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_module']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  
									data-id-group="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory'], ENT_QUOTES, 'UTF-8');?>
" 
									data-number-prod="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['cat_info']->value['number_prod']), ENT_QUOTES, 'UTF-8');?>
" class="subItem pull-left active">
										<a style="" href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Modules.LABProductCategory'),$_smarty_tpl ) );?>
</a>
								</li>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_info']->value['sub_cat'], 'sub_cat', false, NULL, 'sub_cat_info', array (
));
$_smarty_tpl->tpl_vars['sub_cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_cat']->value) {
$_smarty_tpl->tpl_vars['sub_cat']->do_else = false;
?>
									
									<li 
									data-use_slider="<?php if ((isset($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'])) && $_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] == 1) {?>1<?php } else { ?>0<?php }?>" 
									data-id-cat-main="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
" 
									data-cat-info="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
									data-id-cat="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sub_cat']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" 
									data-lab-name-module="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_module']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  
									data-id-group="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory'], ENT_QUOTES, 'UTF-8');?>
" 
									data-number-prod="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['cat_info']->value['number_prod']), ENT_QUOTES, 'UTF-8');?>
" class="subItem pull-left">
										<a style="" href="javascript:void(0);"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_cat']->value['name'] )), ENT_QUOTES, 'UTF-8');?>
</a>
									</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				<?php }?>
			<?php }?>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['cat_banner'] != '') {?>
		<div class="laber_banner">
			<div class="content-middle">
				<div class="cat-content">
					
					<div class="laberImg-banner">
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'],$_smarty_tpl->tpl_vars['cat_info']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
							<span class="img1">
								<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_banner'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
							</span>
						</a>
					</div>
					
					
					<!-- <?php if ($_smarty_tpl->tpl_vars['cat_info']->value['cat_desc'] != '') {?>
					<div class="laberCat-desc">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_desc'],'quotes','UTF-8' ));?>

					</div>
					<?php }?> -->
				</div>
			</div>
		</div>
		<?php }?>
		
		<div class="content-right">
			<div class="laberCateProducts">
				
				<div class="laberContentProduct-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory'], ENT_QUOTES, 'UTF-8');?>
 clearfix">
					<?php if ((isset($_smarty_tpl->tpl_vars['cat_info']->value['product_list'])) && count($_smarty_tpl->tpl_vars['cat_info']->value['product_list']) > 0) {?>
					<div class="laberContainer" id="laber-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">	
							<div class="laberProducts-Grid row">
								<div id="laberOWL-<?php echo htmlspecialchars(intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']), ENT_QUOTES, 'UTF-8');?>
" class="Laber-product-list">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_info']->value['product_list'], 'product', false, NULL, 'product_list', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['total'];
?>
									<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] != 1) {?>
										<div class="item-inner col-lg-3 col-md-3 col-sm-4 col-xs-12
										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line
										<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?> last-item-of-tablet-line
										<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?> first-item-of-tablet-line<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 0) {?> last-item-of-mobile-line
										<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 1) {?> first-item-of-mobile-line<?php }?>
										wow fadeIn " data-wow-delay="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
00ms">
									<?php } else { ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['number_line']->value == 1 || $_smarty_tpl->tpl_vars['number_line']->value == 1) {?>
										<div class="item-inner ajax_block_product wow fadeIn " data-wow-delay="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
00ms">
										<?php }?>
									<?php }?>
									
										<?php $_smarty_tpl->_subTemplateRender('file:./medium_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>				
										
									<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] != 1) {?>
										</div>
									<?php } else { ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['number_line']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['last'] : null) || $_smarty_tpl->tpl_vars['number_line']->value == 1) {?>
										</div>
										<?php }?>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
					</div>
					<div class="owl-buttons">
						<p class="owl-prev prev-<?php echo htmlspecialchars(intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-angle-left"></i></p>
						<p class="owl-next next-<?php echo htmlspecialchars(intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-angle-right"></i></p>
					</div>
				 <?php } else { ?>
					<div class="item product-box no-product col-sm-12 col-md-12">
						<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No product at this category','d'=>'Modules.LABProductCategory'),$_smarty_tpl ) );?>
</p>
					</div>
				 <?php }?>
				</div><!-- end content product sub cat -->
			</div><!-- right-block -->
			
		</div>
	</div>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['show_img'] == 1 && (isset($_smarty_tpl->tpl_vars['cat_info']->value['id_image'])) && $_smarty_tpl->tpl_vars['cat_info']->value['id_image'] > 0) {?>
<div class="cat-img">
	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'],$_smarty_tpl->tpl_vars['cat_info']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['cat_info']->value['link_rewrite'],$_smarty_tpl->tpl_vars['cat_info']->value['id_image'],'category_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
	</a>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['cat_info']->value['cat_color']) {?>
	<style>
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
{
			border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .laberCateTitle h3 a{
			color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .item-inner:hover .laberCart .laberBottom{
			background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
			border-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .laber-highlighted-informations a.quick-view:hover{
			background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
			border-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .laber-product-title a:hover,
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .laber-product-price-and-shipping .price{
			color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .laberSub-accordion li  a:hover,
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .laberSub-accordion li.active  a{
			color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .content-middle .laberCat-desc:before{
			background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .owl-buttons .owl-next:hover,
		.laberProductGrid.laberCat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['id_cat'], ENT_QUOTES, 'UTF-8');?>
 .owl-buttons .owl-prev:hover{
			background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
			border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['cat_color'], ENT_QUOTES, 'UTF-8');?>
;
		}
	</style>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_cat_info']->value, 'cat_info', false, NULL, 'g_cat_info', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['cat_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_info']->value) {
$_smarty_tpl->tpl_vars['cat_info']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']++;
?>
	<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] == 1) {?>	
		<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			var owl = $("#laberOWL-<?php echo htmlspecialchars(intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']), ENT_QUOTES, 'UTF-8');?>
");
			owl.owlCarousel({
				items : 5,
				itemsDesktop : [1199,4],
				itemsDesktopSmall : [991,3],
				itemsTablet: [767,2],
				itemsMobile : [480,1],
				rewindNav : false,
				autoPlay :  false,
				stopOnHover: false,
				pagination : false,
			});
			$(".next-<?php echo htmlspecialchars(intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']), ENT_QUOTES, 'UTF-8');?>
").click(function(){
			owl.trigger('owl.next');
			})
			$(".prev-<?php echo htmlspecialchars(intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_g_cat_info']->value['iteration'] : null)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']), ENT_QUOTES, 'UTF-8');?>
").click(function(){
			owl.trigger('owl.prev');
			})
		});
		<?php echo '</script'; ?>
>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php }
}
