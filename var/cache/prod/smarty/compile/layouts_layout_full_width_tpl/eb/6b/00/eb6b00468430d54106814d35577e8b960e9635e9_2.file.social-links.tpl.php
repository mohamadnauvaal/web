<?php
/* Smarty version 3.1.33, created on 2019-08-15 13:02:41
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/_elements/social-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f581824b44_81855714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb6b00468430d54106814d35577e8b960e9635e9' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/_elements/social-links.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54f581824b44_81855714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21156995935d54f581808e90_46693568', 'social_links');
?>

<?php }
/* {block 'social_links'} */
class Block_21156995935d54f581808e90_46693568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_links' => 
  array (
    0 => 'Block_21156995935d54f581808e90_46693568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="social-links <?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>">
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'] != '') {?><li class="facebook"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'] != '') {?><li class="twitter"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'] != '') {?><li class="instagram"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'] != '') {?><li class="google"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'] != '') {?><li class="pinterest"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'] != '') {?><li class="youtube"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'] != '') {?><li class="vimeo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'] != '') {?><li class="linkedin"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php }?>
</ul>
<?php
}
}
/* {/block 'social_links'} */
}
