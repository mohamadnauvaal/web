<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:20
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/_partials/_variants/footer-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d914def4d1_40735839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323990a36fb625b5fc1244d8176106839cb42057' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/_partials/_variants/footer-1.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_elements/social-links.tpl' => 1,
    'file:_partials/_variants/footer-copyrights-1.tpl' => 1,
  ),
),false)) {
function content_5d50d914def4d1_40735839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-container-main" class="footer-container footer-style-1">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17564149325d50d914dda732_42451336', 'hook_footer_before');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_786901065d50d914ddcac7_90896670', 'hook_footer');
?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_newsletter_status'] == 1 || $_smarty_tpl->tpl_vars['iqitTheme']->value['f_social_status'] == 1) {?>
            <div class="col-12  col-md-auto">

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_social_status'] == 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2822062635d50d914de1ea3_29969776', 'socials_footer');
?>

                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20891921605d50d914de5e91_69008648', 'newsletter_footer');
?>

            </div>
            <?php }?>
        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19165238995d50d914dec811_35410742', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-copyrights-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'hook_footer_before'} */
class Block_17564149325d50d914dda732_42451336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_17564149325d50d914dda732_42451336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_786901065d50d914ddcac7_90896670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_786901065d50d914ddcac7_90896670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'socials_footer'} */
class Block_2822062635d50d914de1ea3_29969776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socials_footer' => 
  array (
    0 => 'Block_2822062635d50d914de1ea3_29969776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="block block-footer block-toggle block-social-links js-block-toggle">
                    <h5 class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</span></h5>
                    <div class="block-content">
                        <?php $_smarty_tpl->_subTemplateRender('file:_elements/social-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'_footer'), 0, false);
?>
                    </div>
                </div>
                <?php
}
}
/* {/block 'socials_footer'} */
/* {block 'newsletter_footer'} */
class Block_20891921605d50d914de5e91_69008648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'newsletter_footer' => 
  array (
    0 => 'Block_20891921605d50d914de5e91_69008648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_newsletter_status'] == 1) {?>
                <div class="block block-footer block-toggle block-newsletter js-block-toggle">
                    <h5 class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</span></h5>
                    <div class="block-content">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

                    </div>
                </div>
                <?php }?>
                <?php
}
}
/* {/block 'newsletter_footer'} */
/* {block 'hook_footer_after'} */
class Block_19165238995d50d914dec811_35410742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_19165238995d50d914dec811_35410742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
}
