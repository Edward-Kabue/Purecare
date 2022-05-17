<?php
/* Smarty version 3.1.43, created on 2022-05-17 11:30:35
  from 'module:poscompareviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62835d2bb9ec63_84118893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d886c284a3a6ca328933e062c1af8db7b72047c' => 
    array (
      0 => 'module:poscompareviewstemplatesh',
      1 => 1580523039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62835d2bb9ec63_84118893 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="poscompare-notification" class="">
    <div class="notification-inner">
        <span class="notification-title"><i class="fa fa-check" aria-hidden="true"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to compare.','mod'=>'poscompare'),$_smarty_tpl ) );?>
</span>
    </div>
</div><?php }
}
