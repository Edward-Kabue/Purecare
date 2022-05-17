<?php
/* Smarty version 3.1.43, created on 2022-05-17 16:25:02
  from 'module:posstaticfooterviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6283a22eb88b04_16716633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0905da7bec54667ca447ad41282d3dac240189' => 
    array (
      0 => 'module:posstaticfooterviewstempl',
      1 => 1577071652,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283a22eb88b04_16716633 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerBlocks']->value, 'footerBlock');
$_smarty_tpl->tpl_vars['footerBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footerBlock']->value) {
$_smarty_tpl->tpl_vars['footerBlock']->do_else = false;
?>
<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['width'];?>
 links footer_block">
<?php if ($_smarty_tpl->tpl_vars['footerBlock']->value['active_title'] == 1) {?>
	<h3 class=" hidden-sm-down"><?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['title'];?>
</h3>
	<div class="title clearfix hidden-md-up" data-target="#footer_<?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['id'];?>
" data-toggle="collapse">
		<h3><?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['title'];?>
</h3>
		<span class="float-xs-right">
			<span class="navbar-toggler collapse-icons">
				<i class="material-icons add">keyboard_arrow_down</i>
				<i class="material-icons remove">keyboard_arrow_up</i>
			</span>
		</span>
	</div>
  <?php if ($_smarty_tpl->tpl_vars['footerBlock']->value['type_content'] == 0) {?>
    <ul id="footer_<?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['id'];?>
" class="collapse footer_list">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
	
        <li>
          <a
            id="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['id'];?>
"
            class="<?php echo $_smarty_tpl->tpl_vars['link']->value['class'];?>
"
            href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"
            title="<?php echo $_smarty_tpl->tpl_vars['link']->value['description'];?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['link']->value['target'];?>
" <?php }?>
          >
            <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>

          </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php } else { ?>
   <div id="footer_<?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['id'];?>
" class="collapse footer_list">
    <?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['html_content'];?>

    <?php if ($_smarty_tpl->tpl_vars['footerBlock']->value['module_content']) {?>
      <?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['module_content'];?>

    <?php }?>
	</div>	
  <?php }
} else { ?>
  <?php if ($_smarty_tpl->tpl_vars['footerBlock']->value['type_content'] == 0) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        <li>
          <a
            id="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['id'];?>
"
            class="<?php echo $_smarty_tpl->tpl_vars['link']->value['class'];?>
"
            href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"
            title="<?php echo $_smarty_tpl->tpl_vars['link']->value['description'];?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['link']->value['target'];?>
" <?php }?>
          >
            <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>

          </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['html_content'];?>

    <?php if ($_smarty_tpl->tpl_vars['footerBlock']->value['module_content']) {?>
      <?php echo $_smarty_tpl->tpl_vars['footerBlock']->value['module_content'];?>

    <?php }?>
  <?php }
}?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
