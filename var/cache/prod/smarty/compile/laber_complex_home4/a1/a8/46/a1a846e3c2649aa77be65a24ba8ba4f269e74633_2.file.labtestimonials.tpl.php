<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:03
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labtestimonials/views/templates/hook/labtestimonials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841b77d9c2_52350705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1a846e3c2649aa77be65a24ba8ba4f269e74633' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labtestimonials/views/templates/hook/labtestimonials.tpl',
      1 => 1500104010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a841b77d9c2_52350705 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="laberTestimonial">
	<div class="container">
		<div class="row">
			<div class="laberTestimonialOwl">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
?>
					<div class="item-inner">
						<div class="item">
							<!-- <?php if ($_smarty_tpl->tpl_vars['show_date']->value == 1) {?>
								<div class="datetime">
									<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['posttime'];?>

								</div>
							<?php }?> -->
							<div class="laberComment" >
								<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['comment'];?>

							</div>
							<div class="laberAuthor">
								<span><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['show_office']->value == 1) {?>
									<span class="laberOffice">
										- <?php echo $_smarty_tpl->tpl_vars['testimonial']->value['office'];?>

									</span>
								<?php }?>
							</div>
							
							<?php if ($_smarty_tpl->tpl_vars['show_image']->value) {?>
								<div class="image">
									<span>
										<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
resized_<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
" />
									</span>
								</div>
							<?php }?>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function() {
					var owl = $(".laberTestimonialOwl");
					owl.owlCarousel({
						items : 1,
						itemsDesktop : [1199,1],
						itemsDesktopSmall : [991,1],
						itemsTablet: [767,1],
						itemsMobile : [480,1],
						rewindNav : false,
						autoPlay :  true,
						stopOnHover: false,
						pagination : true,
					});
				});
			<?php echo '</script'; ?>
>
		</div>
	</div>
</div>
<?php }
}
