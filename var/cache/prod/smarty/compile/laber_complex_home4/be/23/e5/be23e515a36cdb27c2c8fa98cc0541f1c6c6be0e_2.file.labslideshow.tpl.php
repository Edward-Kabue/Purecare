<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:02
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labslideshow/views/templates/hook/labslideshow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841a88fa38_95276108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be23e515a36cdb27c2c8fa98cc0541f1c6c6be0e' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labslideshow/views/templates/hook/labslideshow.tpl',
      1 => 1500104010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a841a88fa38_95276108 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Module labslideshow -->
    <?php if ((isset($_smarty_tpl->tpl_vars['labslideshow_slides']->value))) {?>
	<div class="lab-nivoSlideshow">
		<div class="lab-loading"></div>
        <div id="lab-slideshow" class="slides">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labslideshow_slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
                                <img 
									data-thumb="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."labslideshow/images/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
"  
									src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."labslideshow/images/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
"
                                     alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
									 title="#htmlcaption<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labslideshow_slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>

        <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
			<div id="htmlcaption<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8');?>
" class=" nivo-html-caption nivo-caption">
				<div class="timeline" style=" 
									position:absolute;
									top:0;
									left:0;
									background-color: rgba(0, 0, 0, 0.1);
									height:5px;
									-webkit-animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
									-moz-animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
									-ms-animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
									animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
								
								">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_TITLE'] == 'true') {?>
					<div class="lab_description <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['margin'], ENT_QUOTES, 'UTF-8');?>
">
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['title']) {?>
						<div class="title animated a1">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>

						</div>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
					<div class="description animated a2">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['description'], ENT_QUOTES, 'UTF-8');?>

					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?>
					<div class="readmore animated a3">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Readmore','mod'=>'labslideshow_slides'),$_smarty_tpl ) );?>
</a>
					</div>
					<?php }?>
					</div>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?>
							<a class="laberUrl" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
					<?php }?>
				<?php }?>
			</div>
		<?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php echo '<script'; ?>
>
 
	$(window).load(function() {
		$(document).off('mouseenter').on('mouseenter', '.lab-nivoSlideshow', function(e){
			$('.lab-nivoSlideshow .timeline').addClass('lab_hover');
		});
		$(document).off('mouseleave').on('mouseleave', '.lab-nivoSlideshow', function(e){
			$('.lab-nivoSlideshow .timeline').removeClass('lab_hover');
		});
		$('#lab-slideshow').nivoSlider({
			effect: 'random',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: '<?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_SPEED'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_SPEED'], ENT_QUOTES, 'UTF-8');
} else { ?>600<?php }?>',
			pauseTime: '<?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'], ENT_QUOTES, 'UTF-8');
} else { ?>5000<?php }?>',
			startSlide: 0,
			controlNav: <?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_E_CONTROL'] == 'true') {?> true <?php } else { ?> false <?php }?>,
			directionNav: <?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_E_N_P'] == 1) {?>true<?php } else { ?>false<?php }?>,
			controlNavThumbs: false ,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: '<i class="fa fa-angle-left"></i>',
			nextText: '<i class="fa fa-angle-right"></i>',
			afterLoad: function(){
				$('.lab-loading').css("display","none");
			},
			beforeChange: function(){
				$('.nivo-caption .lab_description').removeClass("active").css("opacity","0");
			},
			afterChange: function(){
				$('.nivo-caption .lab_description').addClass("active" ).css("opacity","1");
			}
		});
	});
<?php echo '</script'; ?>
>
    <?php }?>
    <!-- /Module labslideshow -->
<?php }
}
