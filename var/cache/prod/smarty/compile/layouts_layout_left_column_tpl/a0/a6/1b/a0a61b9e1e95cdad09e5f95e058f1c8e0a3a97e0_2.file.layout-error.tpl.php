<?php
/* Smarty version 3.1.33, created on 2019-08-14 14:50:35
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53bd4b98d663_43783875',
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
function content_5d53bd4b98d663_43783875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1695239635d53bd4b9828a9_37728837', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15940879215d53bd4b9866c1_01585201', 'stylesheets');
?>


  </head>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16928002735d53bd4b989164_57442918', 'body_tag');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19997165005d53bd4b98a111_95784051', 'layout_error_tag');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18283578595d53bd4b98b089_51067846', 'content');
?>

    </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20296108925d53bd4b98c087_24452285', 'maintenance_js');
?>


  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_18803082155d53bd4b983382_40388459 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_18622818165d53bd4b984267_65948635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_14518899205d53bd4b985032_92996216 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_1695239635d53bd4b9828a9_37728837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_1695239635d53bd4b9828a9_37728837',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_18803082155d53bd4b983382_40388459',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_18622818165d53bd4b984267_65948635',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_14518899205d53bd4b985032_92996216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18803082155d53bd4b983382_40388459', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18622818165d53bd4b984267_65948635', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14518899205d53bd4b985032_92996216', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'stylesheets'} */
class Block_15940879215d53bd4b9866c1_01585201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_15940879215d53bd4b9866c1_01585201',
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
class Block_16928002735d53bd4b989164_57442918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_tag' => 
  array (
    0 => 'Block_16928002735d53bd4b989164_57442918',
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
class Block_19997165005d53bd4b98a111_95784051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_error_tag' => 
  array (
    0 => 'Block_19997165005d53bd4b98a111_95784051',
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
class Block_18283578595d53bd4b98b089_51067846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18283578595d53bd4b98b089_51067846',
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
class Block_20296108925d53bd4b98c087_24452285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'maintenance_js' => 
  array (
    0 => 'Block_20296108925d53bd4b98c087_24452285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'maintenance_js'} */
}
