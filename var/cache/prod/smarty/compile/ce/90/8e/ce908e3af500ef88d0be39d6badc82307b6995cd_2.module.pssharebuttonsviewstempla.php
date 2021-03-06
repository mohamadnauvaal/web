<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:06:40
  from 'module:pssharebuttonsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54da5076c009_92416158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:pssharebuttonsviewstempla',
      1 => 1564553585,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54da5076c009_92416158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12798386155d54da50762245_93315190', 'social_sharing');
?>

<?php }
/* {block 'social_sharing'} */
class Block_12798386155d54da50762245_93315190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_sharing' => 
  array (
    0 => 'Block_12798386155d54da50762245_93315190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
    <div class="social-sharing">
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_share_links']->value, 'social_share_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->value) {
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
              <?php if ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'facebook') {?>
                <i class="fa fa-facebook" aria-hidden="true"></i>
              <?php } elseif ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'twitter') {?>
                <i class="fa fa-twitter" aria-hidden="true"></i>
              <?php } elseif ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'googleplus') {?>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
              <?php } elseif ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'pinterest') {?>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              <?php }?>
            </a>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php }
}
}
/* {/block 'social_sharing'} */
}
