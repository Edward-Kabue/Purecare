<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:03
  from 'module:labmanufactureviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841b759943_70155347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf60a777c7e75d2c5ed2bf05f056dac22be8a39' => 
    array (
      0 => 'module:labmanufactureviewstempla',
      1 => 1500104008,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a841b759943_70155347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="laberLogo_manufacturer">
<!-- <div class="laberTitle">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','mod'=>'labmanufacture'),$_smarty_tpl ) );?>
</h3>
</div> -->
<div class="content-manufacturer">
		<div class="list_manufacturer">
		<?php $_smarty_tpl->_assignInScope('i', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_manu']->value, 'manufacturer', false, NULL, 'list_manu', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['total'];
?>
			<div class="item-inner <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list_manu']->value['last'] : null)) {?>last_item<?php }?>">
				<div class="item">
					<a class="image_hoverwashe" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_ssl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
img/m/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
					<span class="hover_bkg_light"></span>
					</a>
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	var owl = $(".list_manufacturer");
	owl.owlCarousel({
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [991,4],
		itemsTablet: [767,3],
		itemsMobile : [480,1],
		navigation : false,
		navigationText : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		slideSpeed : 2000,
		paginationSpeed : 2000,
		rewindSpeed : 2000,
		autoPlay :  6000,
		stopOnHover: false,
		pagination : false,
		addClassActive : true,
	});
});
<?php echo '</script'; ?>
>
<?php }
}
