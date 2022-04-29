<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:02
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductfilter/views/templates/hook/labproductfilter_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841ab724c1_34026088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3a205cf690aad21690b45c8ddfbe4ef34befe9' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductfilter/views/templates/hook/labproductfilter_tab.tpl',
      1 => 1500104010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product.tpl' => 1,
  ),
),false)) {
function content_626a841ab724c1_34026088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['use_slider']->value != 1) {?>
	<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 4);?>
	<?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 3);?>
	<?php $_smarty_tpl->_assignInScope('nbItemsPerLineMobile', 2);
}
$_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);?>
<div class="type-tab laberProductFilter laberProductGrid laberthemes clearfix">
	<div class="lab_tab">
		<ul id="LabProductFilterTabs" class="nav nav-tabs laber-tab clearfix">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'product_group', false, NULL, 'product_group', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['product_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_group']->value) {
$_smarty_tpl->tpl_vars['product_group']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['index'];
?>
				<li class="nav-item">
					<a data-toggle="tab" href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_tab" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['first'] : null)) {?> active<?php }?> nav-link">
						<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
	<div class="tab-content clearfix labContent" >
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_groups']->value, 'product_group', false, NULL, 'product_group', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['product_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_group']->value) {
$_smarty_tpl->tpl_vars['product_group']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['index'];
?>
			<div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_tab" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_group']->value['first'] : null)) {?> active<?php }?>">
				<?php if ((isset($_smarty_tpl->tpl_vars['product_group']->value['product_list'])) && count($_smarty_tpl->tpl_vars['product_group']->value['product_list']) > 0) {?>
				<div class="labProductFilter row">
					<div class="owlProductFilter-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-tab">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_group']->value['product_list'], 'product', false, NULL, 'product_list', array (
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

							<?php if ($_smarty_tpl->tpl_vars['use_slider']->value != 1) {?>
								
								<div class="item-inner no-slider col-lg-3 col-md-4 col-sm-6 col-xs-12  
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?>
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?> last-item-of-tablet-line
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?> first-item-of-tablet-line<?php }?>
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 0) {?> last-item-of-mobile-line
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 1) {?> first-item-of-mobile-line<?php }?>
								wow fadeIn " data-wow-delay="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
00ms">
								
							<?php } else { ?>
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['num_row']->value == 1 || $_smarty_tpl->tpl_vars['num_row']->value == 1) {?>
								<div class="item-inner  ajax_block_product wow fadeIn " data-wow-delay="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
00ms">
								<?php }?>
							<?php }?>
								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_519846579626a841ab6a288_87104474', 'product');
?>

							
							<?php if ($_smarty_tpl->tpl_vars['use_slider']->value != 1) {?>
								</div>
							<?php } else { ?>
							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['num_row']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['last'] : null) || $_smarty_tpl->tpl_vars['num_row']->value == 1) {?>
								</div>
							<?php }?>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
				<?php } else { ?>
					<div class="item product-box ajax_block_product">
						<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No product at this time','d'=>'Modules.LABProductfilter'),$_smarty_tpl ) );?>
</p>
					</div>	
				<?php }?>
				<div class="owl-buttons">
					<p class="owl-prev prev-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-tab"><i class="fa fa-angle-left"></i></p>
					<p class="owl-next next-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-tab"><i class="fa fa-angle-right"></i></p>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['use_slider']->value == 1) {?>
					<?php echo '<script'; ?>
 type="text/javascript">
					$(document).ready(function() {
						var owl = $(".owlProductFilter-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-tab");
						owl.owlCarousel({
							items : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_column']->value, ENT_QUOTES, 'UTF-8');?>
,
							itemsDesktop : [1199,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_column']->value, ENT_QUOTES, 'UTF-8');?>
],
							itemsDesktopSmall : [991,2],
							itemsTablet: [767,2],
							itemsMobile : [480,1],
							rewindNav : false,
							autoPlay :  false,
							stopOnHover: false,
							pagination : false,
						});
						$(".next-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-tab").click(function(){
							owl.trigger('owl.next');
						})
						$(".prev-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_group']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-tab").click(function(){
							owl.trigger('owl.prev');
						})
					});
					<?php echo '</script'; ?>
>
				<?php }?>
			</div>
			
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
/* {block 'product'} */
class Block_519846579626a841ab6a288_87104474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product' => 
  array (
    0 => 'Block_519846579626a841ab6a288_87104474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_subTemplateRender('file:./product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>	
								<?php
}
}
/* {/block 'product'} */
}
