<?php
/* Smarty version 3.1.43, created on 2022-05-17 11:30:34
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62835d2a03d1d7_40808222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '531ff5fadbab34ae9adf28c596f08da4ca8fffe0' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1652770859,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:blockwishlist/views/templates/components/modals/add-to-wishlist.tpl' => 2,
    'module:blockwishlist/views/templates/components/modals/create.tpl' => 2,
    'module:blockwishlist/views/templates/components/modals/login.tpl' => 2,
    'module:blockwishlist/views/templates/components/toast.tpl' => 2,
    'module:blockwishlist/views/templates/components/modals/delete.tpl' => 1,
  ),
),false)) {
function content_62835d2a03d1d7_40808222 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['context']->value === "product") {?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/add-to-wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['url']->value,'addUrl'=>$_smarty_tpl->tpl_vars['addUrl']->value,'newWishlistCTA'=>$_smarty_tpl->tpl_vars['newWishlistCTA']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['createUrl']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/toast.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['context']->value === "index" || $_smarty_tpl->tpl_vars['context']->value === "category" || $_smarty_tpl->tpl_vars['context']->value === "blockwishlist" || $_smarty_tpl->tpl_vars['context']->value === 'search') {?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/add-to-wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['url']->value,'addUrl'=>$_smarty_tpl->tpl_vars['addUrl']->value,'newWishlistCTA'=>$_smarty_tpl->tpl_vars['newWishlistCTA']->value), 0, true);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['createUrl']->value), 0, true);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productUrl'=>$_smarty_tpl->tpl_vars['deleteProductUrl']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/toast.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php }
}
