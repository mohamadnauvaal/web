<?php
/* Smarty version 3.1.33, created on 2019-08-14 14:50:35
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/_maintenance/maintenance-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53bd4b9b55b2_56208608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7d303453c6b0a378f226041db4279326d8b0ee' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/_maintenance/maintenance-1.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/_maintenance/_partials/maintenance-countdown.tpl' => 1,
    'file:errors/_maintenance/_partials/maintenance-newsletter.tpl' => 1,
    'file:_elements/social-links.tpl' => 1,
  ),
),false)) {
function content_5d53bd4b9b55b2_56208608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>



<section id="main" class="maintenance-flexbox-container">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18193798805d53bd4b99d5d1_40545845', 'page_header_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10758048225d53bd4b99e8f9_37637377', 'page_content_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14174931765d53bd4b9b4800_90468051', 'page_footer_container');
?>


</section>

<?php }
/* {block 'page_header_container'} */
class Block_18193798805d53bd4b99d5d1_40545845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_18193798805d53bd4b99d5d1_40545845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_logo'} */
class Block_19789586885d53bd4b99f3d2_94760383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="logo"><img src="<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_logo']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_logo'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_logo'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');
}?>" alt="logo" class="img-fluid"></div>
            <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'page_title'} */
class Block_5564834455d53bd4b9a5241_60024949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_17816698545d53bd4b9a48d9_73979533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5564834455d53bd4b9a5241_60024949', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_content'} */
class Block_12423018015d53bd4b9a98f6_46842032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'hook_maintenance'} */
class Block_20525533695d53bd4b9b1e39_72161187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

            <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_content_container'} */
class Block_10758048225d53bd4b99e8f9_37637377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10758048225d53bd4b99e8f9_37637377',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_19789586885d53bd4b99f3d2_94760383',
  ),
  'page_header' => 
  array (
    0 => 'Block_17816698545d53bd4b9a48d9_73979533',
  ),
  'page_title' => 
  array (
    0 => 'Block_5564834455d53bd4b9a5241_60024949',
  ),
  'page_content' => 
  array (
    0 => 'Block_12423018015d53bd4b9a98f6_46842032',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_20525533695d53bd4b9b1e39_72161187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content" class="page-content page-maintenance ">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19789586885d53bd4b99f3d2_94760383', 'page_header_logo', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17816698545d53bd4b9a48d9_73979533', 'page_header', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_countdown'] == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/_maintenance/_partials/maintenance-countdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12423018015d53bd4b9a98f6_46842032', 'page_content', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_newsletter'] == 1 || $_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_social'] == 1) {?>
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay in touch','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_newsletter'] == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/_maintenance/_partials/maintenance-newsletter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_social'] == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_elements/social-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20525533695d53bd4b9b1e39_72161187', 'hook_maintenance', $this->tplIndex);
?>


        </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_14174931765d53bd4b9b4800_90468051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_14174931765d53bd4b9b4800_90468051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
}
