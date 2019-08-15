<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:20
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d914ed8287_95154846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55b5a49d8dfaa6597c2c9a566f9e489ab851282f' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/customer/_partials/login-form.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5d50d914ed8287_95154846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_578627925d50d914ebf519_66412865', 'login_form');
?>

<?php }
/* {block 'login_form_start'} */
class Block_10004038455d50d914ec02e7_84670012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_start'} */
/* {block 'login_form_errors'} */
class Block_11299551775d50d914ec1888_28427694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_6361613325d50d914ec7a97_42984281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_6870071735d50d914ecc057_19088857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_7704577765d50d914ec9b51_27917155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6870071735d50d914ecc057_19088857', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_4657589395d50d914ed32b9_46723992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary form-control-submit" data-link-action="sign-in" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_1217054535d50d914ed23f4_38077944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4657589395d50d914ed32b9_46723992', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form_end'} */
class Block_20626573975d50d914ed66b9_27503006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_end'} */
/* {block 'login_form'} */
class Block_578627925d50d914ebf519_66412865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_578627925d50d914ebf519_66412865',
  ),
  'login_form_start' => 
  array (
    0 => 'Block_10004038455d50d914ec02e7_84670012',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_11299551775d50d914ec1888_28427694',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_6361613325d50d914ec7a97_42984281',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_7704577765d50d914ec9b51_27917155',
  ),
  'form_field' => 
  array (
    0 => 'Block_6870071735d50d914ecc057_19088857',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_1217054535d50d914ed23f4_38077944',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_4657589395d50d914ed32b9_46723992',
  ),
  'login_form_end' => 
  array (
    0 => 'Block_20626573975d50d914ed66b9_27503006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10004038455d50d914ec02e7_84670012', 'login_form_start', $this->tplIndex);
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11299551775d50d914ec1888_28427694', 'login_form_errors', $this->tplIndex);
?>


    <form <?php if (isset($_smarty_tpl->tpl_vars['idForm']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idForm']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6361613325d50d914ec7a97_42984281', 'login_form_actionurl', $this->tplIndex);
?>
"  <?php }?>  method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7704577765d50d914ec9b51_27917155', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1217054535d50d914ed23f4_38077944', 'login_form_footer', $this->tplIndex);
?>


  </form>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20626573975d50d914ed66b9_27503006', 'login_form_end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'login_form'} */
}
