<?php
/* Smarty version 3.1.33, created on 2019-08-10 10:09:32
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/_maintenance/maintenance-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4e356c6e75a6_11543266',
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
function content_5d4e356c6e75a6_11543266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>



<section id="main" class="maintenance-flexbox-container">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16452027885d4e356c6cc333_28128758', 'page_header_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15868989645d4e356c6cd5a2_75196790', 'page_content_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11088507085d4e356c6e6724_56251253', 'page_footer_container');
?>


</section>

<?php }
/* {block 'page_header_container'} */
class Block_16452027885d4e356c6cc333_28128758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_16452027885d4e356c6cc333_28128758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_logo'} */
class Block_4134594555d4e356c6ce0c6_50391797 extends Smarty_Internal_Block
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
class Block_17454450545d4e356c6d5122_38347930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_10199454025d4e356c6d46d0_66952917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17454450545d4e356c6d5122_38347930', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_content'} */
class Block_6243725715d4e356c6da976_09443214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'hook_maintenance'} */
class Block_20500358975d4e356c6e3b89_00724805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

            <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_content_container'} */
class Block_15868989645d4e356c6cd5a2_75196790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15868989645d4e356c6cd5a2_75196790',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_4134594555d4e356c6ce0c6_50391797',
  ),
  'page_header' => 
  array (
    0 => 'Block_10199454025d4e356c6d46d0_66952917',
  ),
  'page_title' => 
  array (
    0 => 'Block_17454450545d4e356c6d5122_38347930',
  ),
  'page_content' => 
  array (
    0 => 'Block_6243725715d4e356c6da976_09443214',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_20500358975d4e356c6e3b89_00724805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content" class="page-content page-maintenance ">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4134594555d4e356c6ce0c6_50391797', 'page_header_logo', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10199454025d4e356c6d46d0_66952917', 'page_header', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_countdown'] == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/_maintenance/_partials/maintenance-countdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6243725715d4e356c6da976_09443214', 'page_content', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20500358975d4e356c6e3b89_00724805', 'hook_maintenance', $this->tplIndex);
?>


        </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_11088507085d4e356c6e6724_56251253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_11088507085d4e356c6e6724_56251253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
}
