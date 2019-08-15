<?php
/* Smarty version 3.1.33, created on 2019-08-15 13:02:41
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f5817bc713_71307153',
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
function content_5d54f5817bc713_71307153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18927770735d54f5817b24b9_59159294', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4024352445d54f5817b5fd4_74387260', 'stylesheets');
?>


  </head>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18699947935d54f5817b8761_83658541', 'body_tag');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7189189405d54f5817b96e5_26796416', 'layout_error_tag');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9921555365d54f5817ba823_74472744', 'content');
?>

    </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11099252965d54f5817bb837_68290635', 'maintenance_js');
?>


  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_5195484035d54f5817b2eb0_08528608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_5422264315d54f5817b3cc6_57913647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_5023885595d54f5817b4a08_42684408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_18927770735d54f5817b24b9_59159294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_18927770735d54f5817b24b9_59159294',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_5195484035d54f5817b2eb0_08528608',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_5422264315d54f5817b3cc6_57913647',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_5023885595d54f5817b4a08_42684408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5195484035d54f5817b2eb0_08528608', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5422264315d54f5817b3cc6_57913647', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5023885595d54f5817b4a08_42684408', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'stylesheets'} */
class Block_4024352445d54f5817b5fd4_74387260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_4024352445d54f5817b5fd4_74387260',
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
class Block_18699947935d54f5817b8761_83658541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_tag' => 
  array (
    0 => 'Block_18699947935d54f5817b8761_83658541',
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
class Block_7189189405d54f5817b96e5_26796416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_error_tag' => 
  array (
    0 => 'Block_7189189405d54f5817b96e5_26796416',
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
class Block_9921555365d54f5817ba823_74472744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9921555365d54f5817ba823_74472744',
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
class Block_11099252965d54f5817bb837_68290635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'maintenance_js' => 
  array (
    0 => 'Block_11099252965d54f5817bb837_68290635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'maintenance_js'} */
}
