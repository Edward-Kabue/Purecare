<?php
/* Smarty version 3.1.43, created on 2022-05-17 16:25:08
  from 'C:\laragon\www\purecare\admin64502oysi\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6283a234adf831_01091300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb55afd1dae7471a7af184940c78988e7c5daa0' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\admin64502oysi\\themes\\default\\template\\content.tpl',
      1 => 1652770856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283a234adf831_01091300 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
