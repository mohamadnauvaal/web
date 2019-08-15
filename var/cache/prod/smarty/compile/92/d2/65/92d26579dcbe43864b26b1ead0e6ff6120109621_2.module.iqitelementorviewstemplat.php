<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:24:11
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54de6b82de73_81365764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d26579dcbe43864b26b1ead0e6ff6120109621' => 
    array (
      0 => 'module:iqitelementorviewstemplat',
      1 => 1564553584,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54de6b82de73_81365764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13857024365d54de6b82b809_72024690', 'iqitelementor');
?>

<?php }
/* {block 'iqitelementor'} */
class Block_13857024365d54de6b82b809_72024690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitelementor' => 
  array (
    0 => 'Block_13857024365d54de6b82b809_72024690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php
}
}
/* {/block 'iqitelementor'} */
}
