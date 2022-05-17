<?php
/* Smarty version 3.1.43, created on 2022-05-17 16:30:40
  from 'module:poscompareviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6283a380cbe2d8_11848125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '578d60be07686a32ca0ca168bd70a62d28ac6ac0' => 
    array (
      0 => 'module:poscompareviewstemplatesf',
      1 => 1580523039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:poscompare/views/templates/front/product.tpl' => 1,
  ),
),false)) {
function content_6283a380cbe2d8_11848125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12014839166283a380c77bb1_63025207', 'page_content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_12014839166283a380c77bb1_63025207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_12014839166283a380c77bb1_63025207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\purecare\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>

    <h1 class="h1 page-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products compare','mod'=>'poscompare'),$_smarty_tpl ) );?>
</span></h1>
    <?php if ((isset($_smarty_tpl->tpl_vars['compareProducts']->value)) && $_smarty_tpl->tpl_vars['compareProducts']->value) {?>
        <div id="poscompare-table">
            <div class="poscompare-table-container">
                <div class="table table-hover">
  
                    <div class="poscompare-product-tr">
						<div class="poscompare-table-actions feature-name poscompare-product-td">
							<a href="#" class="js-poscompare-remove-all poscompare-remove-all"
							   data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'poscompare','controller'=>'actions'),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove all products','mod'=>'poscompare'),$_smarty_tpl ) );?>

							</a>
						</div>
  
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compareProducts']->value, 'compareProduct');
$_smarty_tpl->tpl_vars['compareProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['compareProduct']->value) {
$_smarty_tpl->tpl_vars['compareProduct']->do_else = false;
?>
                            <div class="poscompare-product-td js-poscompare-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compareProduct']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->_subTemplateRender('module:poscompare/views/templates/front/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['compareProduct']->value), 0, true);
?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['orderedFeatures']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderedFeatures']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <div class="poscompare-product-tr poscompare-product-row">
                                <?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

                                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 feature-name poscompare-product-td">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                </div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compareProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                                    <?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
                                    <?php $_smarty_tpl->_assignInScope('feature_id', $_smarty_tpl->tpl_vars['feature']->value['id_feature']);?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['listFeatures']->value[$_smarty_tpl->tpl_vars['product_id']->value]))) {?>
                                        <?php $_smarty_tpl->_assignInScope('tab', $_smarty_tpl->tpl_vars['listFeatures']->value[$_smarty_tpl->tpl_vars['product_id']->value]);?>
                                        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 poscompare-feature-td poscompare-product-td js-poscompare-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php if (((isset($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value])))) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value], 'tabfeature');
$_smarty_tpl->tpl_vars['tabfeature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabfeature']->value) {
$_smarty_tpl->tpl_vars['tabfeature']->do_else = false;
?>
                                                    <?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabfeature']->value,'htmlall' )));?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 poscompare-feature-td js-poscompare-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
 poscompare-product-td">
                                            ---
                                        </div>
                                    <?php }?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div>
                            <div colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['compareProducts']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No features to compare.','mod'=>'poscompare'),$_smarty_tpl ) );?>
</div>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
        <p class="alert alert-warning hidden-xs-up"
           id="poscompare-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no products to compare.','mod'=>'poscompare'),$_smarty_tpl ) );?>
</p>
    <?php } else { ?>
        <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no products to compare.','mod'=>'poscompare'),$_smarty_tpl ) );?>
</p>
    <?php }
}
}
/* {/block 'page_content'} */
}
