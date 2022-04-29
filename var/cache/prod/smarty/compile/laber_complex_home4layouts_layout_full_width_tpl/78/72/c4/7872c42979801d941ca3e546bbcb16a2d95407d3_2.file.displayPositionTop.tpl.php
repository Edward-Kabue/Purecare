<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:02
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/templates/_partials/displayPositionTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841a8cdf21_59192831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7872c42979801d941ca3e546bbcb16a2d95407d3' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/templates/_partials/displayPositionTop.tpl',
      1 => 1500104010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a841a8cdf21_59192831 (Smarty_Internal_Template $_smarty_tpl) {
if (Hook::exec('displayPosition1')) {?>
<div class="displayPosition displayPosition1">
	<div class="container">
		<div class="row">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayPosition1"),$_smarty_tpl ) );?>

		</div>
	</div>
</div>
<?php }
if (Hook::exec('displayPosition2')) {?>
<div class="displayPosition displayPosition2">
	<div class="container">
	<div class="row">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayPosition2"),$_smarty_tpl ) );?>

	</div>
	</div>
</div>
<?php }
if (Hook::exec('displayPosition3')) {?>
<div class="displayPosition displayPosition3">
	
		<div class="container">
			<div class="row">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayPosition3"),$_smarty_tpl ) );?>

			</div>
		</div>
</div>
<?php }
}
}
