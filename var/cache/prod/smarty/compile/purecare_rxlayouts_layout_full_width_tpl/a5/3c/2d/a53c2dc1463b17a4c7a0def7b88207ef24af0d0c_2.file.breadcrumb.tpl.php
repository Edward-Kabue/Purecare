<?php
/* Smarty version 3.1.43, created on 2022-05-17 16:25:28
  from 'C:\laragon\www\purecare\themes\purecare_rx\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6283a248a64dd7_23564631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a53c2dc1463b17a4c7a0def7b88207ef24af0d0c' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\themes\\purecare_rx\\templates\\_partials\\breadcrumb.tpl',
      1 => 1577071655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283a248a64dd7_23564631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="breadcrumb_container " data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="container">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
			<?php if ($_smarty_tpl->tpl_vars['category']->value['name']) {?>
			<div class="name_category"><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2></div>
			<?php }?>
		<?php }?>
		<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
		  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13479968766283a248a57178_90925263', 'breadcrumb');
?>

		  </ol>
		</nav>
	</div>
</div>

<?php }
/* {block 'breadcrumb_item'} */
class Block_15929302646283a248a5a800_09730939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
					  <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
					</a>
					<meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
				  </li>
				<?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_13479968766283a248a57178_90925263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_13479968766283a248a57178_90925263',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_15929302646283a248a5a800_09730939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15929302646283a248a5a800_09730939', 'breadcrumb_item', $this->tplIndex);
?>

			  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
}
/* {/block 'breadcrumb'} */
}
