<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:16:09
  from 'module:labthemeoptionsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a85894dc4a1_36904201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29aa6963443e56e4eddab95a883b053e7b659cde' => 
    array (
      0 => 'module:labthemeoptionsviewstempl',
      1 => 1500104010,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a85894dc4a1_36904201 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php if ($_smarty_tpl->tpl_vars['lab_showskin']->value != 0) {?>

        <div class="lab-wrap hidden-sm-down">
		<h2 class="lab-title">Theme Options</h2>
		<div class="lab-option">
			<!-- <div class="cl-table">
				<div class="cl-tr cl-tr-mode-label">
					<div class="cl-tr cl-tr-style-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mode Layout'),$_smarty_tpl ) );?>
</div>
				</div>
				<div class="cl-tr cl-tr-mode">
					<div class="pull-left">
						<input class="mode_theme" id="labbox" type="radio" value="box" name="mode_css"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Box'),$_smarty_tpl ) );?>

					</div>
					<div class="pull-right">
						<input class="mode_theme" id="labwide" type="radio" value="wide" name="mode_css" checked="checked"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wide'),$_smarty_tpl ) );?>

					</div>
				</div>
			</div> -->
			
			
			<div class="cl-wrapper">
				<div class="cl-container">
					<div class="cl-tr cl-tr-mode-label">
						<div class="cl-tr cl-tr-style-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme color'),$_smarty_tpl ) );?>
</div>
					</div>
					<div class="cl-table">
                        <div class="cl-tr cl-tr-style box-layout">
                            <div class="cl-td-l cl-td-layout cl-td-layout1"><a href="javascript:void(0)" id="color1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color1'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout2"><a href="javascript:void(0)" id="color2" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color2'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                        
                            <div class="cl-td-l cl-td-layout cl-td-layout3"><a href="javascript:void(0)" id="color3" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color3'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout4"><a href="javascript:void(0)" id="color4" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color4'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                        
                            <div class="cl-td-l cl-td-layout cl-td-layout5"><a href="javascript:void(0)" id="color5" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color5'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout6"><a href="javascript:void(0)" id="color6" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color6'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                        
                            <!-- <div class="cl-td-l cl-td-layout cl-td-layout7"><a href="javascript:void(0)" id="color7" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color7'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout8"><a href="javascript:void(0)" id="color8" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'color8'),$_smarty_tpl ) );?>
"><span class="cl1"></span></a></div> -->
                        </div>
                    </div>
					<div class="cl-table">	
                        <div class="cl-tr">
                            <div class="cl-tr cl-tr-style-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Background Image body:'),$_smarty_tpl ) );?>
</div>
                            <div class="cl-td-bg">
                                <div class="cl-pattern">
                                    <?php
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['id']->step = 1;$_smarty_tpl->tpl_vars['id']->total = (int) ceil(($_smarty_tpl->tpl_vars['id']->step > 0 ? 30+1 - (1) : 1-(30)+1)/abs($_smarty_tpl->tpl_vars['id']->step));
if ($_smarty_tpl->tpl_vars['id']->total > 0) {
for ($_smarty_tpl->tpl_vars['id']->value = 1, $_smarty_tpl->tpl_vars['id']->iteration = 1;$_smarty_tpl->tpl_vars['id']->iteration <= $_smarty_tpl->tpl_vars['id']->total;$_smarty_tpl->tpl_vars['id']->value += $_smarty_tpl->tpl_vars['id']->step, $_smarty_tpl->tpl_vars['id']->iteration++) {
$_smarty_tpl->tpl_vars['id']->first = $_smarty_tpl->tpl_vars['id']->iteration === 1;$_smarty_tpl->tpl_vars['id']->last = $_smarty_tpl->tpl_vars['id']->iteration === $_smarty_tpl->tpl_vars['id']->total;?>
                                        <div class="cl-image pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" id="pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                                    <?php }
}
?>
                                </div>
                            </div>
                        </div>
                        <div class="cl-tr cl-row-reset">
                            <span class="cl-reset"></span>
                        </div>
					</div>
                </div>
			</div>
		</div>
		<div class="control inactive"><a href="javascript:void(0)"><i class="fa fa-cog fa-spin"></i></a></div>

	</div>
     <?php }?>
	<a href="javascript:void(0)" class="mypresta_scrollup hidden-phone open">
		<span><i class="fa fa-angle-up"></i></span>
	</a>
     <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modules_dir']->value, ENT_QUOTES, 'UTF-8');?>
labthemeoptions/js/jquery.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modules_dir']->value, ENT_QUOTES, 'UTF-8');?>
labthemeoptions/js/jquery.cookie.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    var date = new Date();
    date.setTime(date.getTime() + (1440 * 60 * 1000));
    // set default background image
    <?php
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['id']->step = 1;$_smarty_tpl->tpl_vars['id']->total = (int) ceil(($_smarty_tpl->tpl_vars['id']->step > 0 ? 30+1 - (1) : 1-(30)+1)/abs($_smarty_tpl->tpl_vars['id']->step));
if ($_smarty_tpl->tpl_vars['id']->total > 0) {
for ($_smarty_tpl->tpl_vars['id']->value = 1, $_smarty_tpl->tpl_vars['id']->iteration = 1;$_smarty_tpl->tpl_vars['id']->iteration <= $_smarty_tpl->tpl_vars['id']->total;$_smarty_tpl->tpl_vars['id']->value += $_smarty_tpl->tpl_vars['id']->step, $_smarty_tpl->tpl_vars['id']->iteration++) {
$_smarty_tpl->tpl_vars['id']->first = $_smarty_tpl->tpl_vars['id']->iteration === 1;$_smarty_tpl->tpl_vars['id']->last = $_smarty_tpl->tpl_vars['id']->iteration === $_smarty_tpl->tpl_vars['id']->total;?>
    $('#pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
        $('.cl-image').removeClass('active');
        $(this).addClass('active');
        $("body").css('background-image','url("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modules_dir']->value, ENT_QUOTES, 'UTF-8');?>
labthemeoptions/views/templates/front/colortool/images/pattern/pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
.png")');

    });
    <?php }
}
?>
    if ($.cookie('theme_skin_cookie')!= '' && $.cookie('theme_skin_cookie') != null ){
        $('<link rel="stylesheet" type="text/css" href="'+$.cookie('theme_skin_cookie')+'" />').appendTo('head');
    }     //set theme color cookie
    $('.cl-td-layout a').click(function(){
        $('<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_BASE_URL']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_BASE_URI']->value, ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LAB_THEMENAME']->value, ENT_QUOTES, 'UTF-8');?>
/assets/css/color/'+this.id+'.css" />').appendTo('head');
        });
    /*   $(' body > input:checkbox').click(function(){
     if($('#wide').is(":checked")) {
     $('body').addClass("checked");
     } else  if($('#box').is(":checked")) {
     $('body').removeClass("checked");
     }
     });*/
    $(document).ready(function () {
        $('.mode_theme').click(function () {
            $id = $(this).attr('id');
            $('#page').removeAttr('class');
            $('#page').addClass($id);
        });
		
		
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('.mypresta_scrollup').addClass('open');
				} else {
					$('.mypresta_scrollup').removeClass('open');
				}
			});
			// scroll body to 0px on click
			$('.mypresta_scrollup').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
		
    });

    $('.cl-reset').click(function(){
        //reset main
        location.reload();

        })
		

<?php echo '</script'; ?>
><?php }
}
