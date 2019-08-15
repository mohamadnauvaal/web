<?php
/* Smarty version 3.1.33, created on 2019-08-10 10:09:32
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4e356c6be2e3_17943542',
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
function content_5d4e356c6be2e3_17943542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266833295d4e356c6b3f34_40817045', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6256178875d4e356c6b79c9_13557835', 'stylesheets');
?>


  </head>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3229897275d4e356c6ba634_28926231', 'body_tag');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14732589365d4e356c6bb514_56675084', 'layout_error_tag');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11038225995d4e356c6bc423_69224534', 'content');
?>

    </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14490137575d4e356c6bd474_38334693', 'maintenance_js');
?>


  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_8216752545d4e356c6b48f4_87679238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_6771219525d4e356c6b5792_38584152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_17637702625d4e356c6b64b5_88507932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_1266833295d4e356c6b3f34_40817045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_1266833295d4e356c6b3f34_40817045',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_8216752545d4e356c6b48f4_87679238',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_6771219525d4e356c6b5792_38584152',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_17637702625d4e356c6b64b5_88507932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8216752545d4e356c6b48f4_87679238', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6771219525d4e356c6b5792_38584152', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17637702625d4e356c6b64b5_88507932', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'stylesheets'} */
class Block_6256178875d4e356c6b79c9_13557835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_6256178875d4e356c6b79c9_13557835',
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
class Block_3229897275d4e356c6ba634_28926231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_tag' => 
  array (
    0 => 'Block_3229897275d4e356c6ba634_28926231',
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
class Block_14732589365d4e356c6bb514_56675084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_error_tag' => 
  array (
    0 => 'Block_14732589365d4e356c6bb514_56675084',
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
class Block_11038225995d4e356c6bc423_69224534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11038225995d4e356c6bc423_69224534',
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
class Block_14490137575d4e356c6bd474_38334693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'maintenance_js' => 
  array (
    0 => 'Block_14490137575d4e356c6bd474_38334693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'maintenance_js'} */
}
