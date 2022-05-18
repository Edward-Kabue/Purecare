<?php
/* Smarty version 3.1.43, created on 2022-05-18 12:18:42
  from 'C:\laragon\www\purecare\themes\purecare_rx\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6284b9f29d87d9_43357803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c377fcb0f38d341fead6ea98e233b54a55f2c6' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\themes\\purecare_rx\\templates\\_partials\\footer.tpl',
      1 => 1581576706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284b9f29d87d9_43357803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-container">
	<div class="footer_top">
		<div class="container">
		    <div class="row">
			   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8271976436284b9f29d65e0_90147928', 'hook_footer');
?>

			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16198846806284b9f29d7898_46377385', 'hook_footer_after');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_8271976436284b9f29d65e0_90147928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_8271976436284b9f29d65e0_90147928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

			    <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_16198846806284b9f29d7898_46377385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_16198846806284b9f29d7898_46377385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_footer_after'} */
}
