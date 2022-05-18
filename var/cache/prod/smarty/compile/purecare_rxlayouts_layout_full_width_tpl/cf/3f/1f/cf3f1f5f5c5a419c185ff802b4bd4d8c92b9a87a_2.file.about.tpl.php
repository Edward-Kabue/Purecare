<?php
/* Smarty version 3.1.43, created on 2022-05-18 17:06:18
  from 'C:\laragon\www\purecare\themes\purecare_rx\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6284fd5adbe148_50963706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3f1f5f5c5a419c185ff802b4bd4d8c92b9a87a' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\themes\\purecare_rx\\templates\\about.tpl',
      1 => 1652870054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284fd5adbe148_50963706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8784642406284fd5adbc0d8_26261875', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_14181194786284fd5adbc649_14234061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/Header.jpg" alt="about us"/>
         <section class="courses">
         <div class="courses__container container">
            <div class="courses__heading">
               <h2>Check out our most popular courses!</h2>
            </div>
            <div class="courses__course animation">
               <h3>Animation</h3>
               <p>Learn the latest animation techniques to
                  create stunning motion design and captivate your audience.</p>
               <a href="#" class="link">Get Started</a>
            </div>
            <div class="courses__course design">
               <h3>Design</h3>
               <p>Create beautiful, usable interfaces to
                  help shape the future of how the web looks.</p>
               <a href="#" class="link">Get Started</a>
            </div>
            <div class="courses__course photography">
               <h3>Photography</h3>
               <p>Explore critical fundamentals like lighting,
                  composition, and focus to capture exceptional photos.</p>
               <a href="#" class="link">Get Started</a>
            </div>
            <div class="courses__course crypto">
               <h3>Crypto</h3>
               <p>All you need to know to get started investing in crypto.
                  Go from beginner to advanced with this 54 hour course.</p>
               <a href="#" class="link">Get Started</a>
            </div>
            <div class="courses__course business">
               <h3>Business</h3>
               <p>A step-by-step playbook to help you start, scale,
                  and sustain your business without outside investment.</p>
               <a href="#" class="link">Get Started</a>
            </div>
         </div>
      </section>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8784642406284fd5adbc0d8_26261875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8784642406284fd5adbc0d8_26261875',
  ),
  'page_content' => 
  array (
    0 => 'Block_14181194786284fd5adbc649_14234061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
       

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14181194786284fd5adbc649_14234061', 'page_content', $this->tplIndex);
?>

      
    <?php
}
}
/* {/block 'page_content_container'} */
}
