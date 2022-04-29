<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:16:09
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a85892b5747_66620654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1500104010,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a85892b5747_66620654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="_desktop_cart" class=" pull-right">
  <div class="blockcart laber-cart " data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      
        <a class="cart" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="icon">
				<i class="mdi mdi-cart-outline"></i>
				<span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>	
			</span>	
			<span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				
        </a>
		<!-- <pre><?php echo htmlspecialchars(var_dump($_smarty_tpl->tpl_vars['cart']->value['products']), ENT_QUOTES, 'UTF-8');?>
</pre> -->
		<div class="cart_block block exclusive">
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'products');
$_smarty_tpl->tpl_vars['products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->do_else = false;
?>
				
				<div class="products">
					<div class="img">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1119552986626a85892aeb83_89536230', 'product_thumbnail');
?>

					</div>
					<div class="cart-info">
						<h2 class="h2 productName" itemprop="name">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
						</h2>
						<div class="laberPrice">
							<span class="quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
X</span>
							<span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
						</div>
					</div>
					<p class="remove_link">
						<a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="ion-trash-a"></i></a>
					</p>	
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="cart-prices">
				<span class="total pull-left">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

				</span>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount']) {?>
					<span class="amount pull-right">
						<?php echo htmlspecialchars(Product::convertAndFormatPrice($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount']), ENT_QUOTES, 'UTF-8');?>

					</span>
				<?php } else { ?>
					<span class="amount pull-right">
						<?php echo htmlspecialchars(Product::convertAndFormatPrice(0.00), ENT_QUOTES, 'UTF-8');?>

					</span>
				<?php }?>
			</div>
			<div class="cart-buttons">
				 <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
 <i class="ion-chevron-right"></i>
				</a>
			</div>
			<?php } else { ?>
				<p class="no-item">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products in the cart.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

				</p>
			<?php }?>
		</div>
	</div>
</div>
<?php }
/* {block 'product_thumbnail'} */
class Block_1119552986626a85892aeb83_89536230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_1119552986626a85892aeb83_89536230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
								<img
								src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
								alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
								data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
								/>
							</a>
						<?php
}
}
/* {/block 'product_thumbnail'} */
}
