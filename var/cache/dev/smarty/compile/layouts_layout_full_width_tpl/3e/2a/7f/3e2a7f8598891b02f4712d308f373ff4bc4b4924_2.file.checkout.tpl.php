<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:20
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d9146ad8c7_88553563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e2a7f8598891b02f4712d308f373ff4bc4b4924' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/checkout/checkout.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_5d50d9146ad8c7_88553563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11700116425d50d9146a6d77_91880706', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'cart_summary'} */
class Block_11030074975d50d9146a8499_01231135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_17993319025d50d9146aa825_89283797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_11700116425d50d9146a6d77_91880706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11700116425d50d9146a6d77_91880706',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_11030074975d50d9146a8499_01231135',
    1 => 'Block_17993319025d50d9146aa825_89283797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <h1 class="h1 page-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></h1>
    <div class="row">
      <div class="col-md-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11030074975d50d9146a8499_01231135', 'cart_summary', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 cart-grid-right">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17993319025d50d9146aa825_89283797', 'cart_summary', $this->tplIndex);
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
