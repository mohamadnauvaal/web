<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:11:38
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d8eacc0983_79073274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0a61b9e1e95cdad09e5f95e058f1c8e0a3a97e0' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/layouts/layout-error.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
  ),
),false)) {
function content_5d50d8eacc0983_79073274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4369069275d50d8eacb6000_27885585', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16640119875d50d8eacb9b48_42348825', 'stylesheets');
?>


  </head>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7843500305d50d8eacbcbf7_54584382', 'body_tag');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17440805915d50d8eacbdbc8_75400407', 'layout_error_tag');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2461875875d50d8eacbeb12_18631588', 'content');
?>

    </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8730991975d50d8eacbfae0_39178319', 'maintenance_js');
?>


  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_4327599645d50d8eacb6a01_45416549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_15283476685d50d8eacb7829_25748020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_11128578135d50d8eacb8551_07792947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_4369069275d50d8eacb6000_27885585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_4369069275d50d8eacb6000_27885585',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_4327599645d50d8eacb6a01_45416549',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_15283476685d50d8eacb7829_25748020',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_11128578135d50d8eacb8551_07792947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4327599645d50d8eacb6a01_45416549', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15283476685d50d8eacb7829_25748020', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11128578135d50d8eacb8551_07792947', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'stylesheets'} */
class Block_16640119875d50d8eacb9b48_42348825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_16640119875d50d8eacb9b48_42348825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>
    <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'body_tag'} */
class Block_7843500305d50d8eacbcbf7_54584382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_tag' => 
  array (
    0 => 'Block_7843500305d50d8eacbcbf7_54584382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <body>
  <?php
}
}
/* {/block 'body_tag'} */
/* {block 'layout_error_tag'} */
class Block_17440805915d50d8eacbdbc8_75400407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_error_tag' => 
  array (
    0 => 'Block_17440805915d50d8eacbdbc8_75400407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="layout-error">
  <?php
}
}
/* {/block 'layout_error_tag'} */
/* {block 'content'} */
class Block_2461875875d50d8eacbeb12_18631588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2461875875d50d8eacbeb12_18631588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
/* {block 'maintenance_js'} */
class Block_8730991975d50d8eacbfae0_39178319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'maintenance_js' => 
  array (
    0 => 'Block_8730991975d50d8eacbfae0_39178319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'maintenance_js'} */
}
