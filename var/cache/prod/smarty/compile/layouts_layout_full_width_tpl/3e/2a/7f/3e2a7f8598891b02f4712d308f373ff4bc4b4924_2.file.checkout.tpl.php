<?php
/* Smarty version 3.1.33, created on 2019-08-15 10:57:21
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54d82117bc38_57450639',
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
function content_5d54d82117bc38_57450639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18325305015d54d821174d46_21513387', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'cart_summary'} */
class Block_18028124985d54d821176648_98479138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_19071633315d54d821178e03_70291118 extends Smarty_Internal_Block
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
class Block_18325305015d54d821174d46_21513387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18325305015d54d821174d46_21513387',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_18028124985d54d821176648_98479138',
    1 => 'Block_19071633315d54d821178e03_70291118',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18028124985d54d821176648_98479138', 'cart_summary', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 cart-grid-right">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19071633315d54d821178e03_70291118', 'cart_summary', $this->tplIndex);
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
