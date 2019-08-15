<?php
/* Smarty version 3.1.33, created on 2019-08-15 12:45:24
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f174849ad9_10779774',
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
function content_5d54f174849ad9_10779774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12058508745d54f174837eb8_34583567', 'login_form');
?>

<?php }
/* {block 'login_form_start'} */
class Block_2606288035d54f174838941_01743055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_start'} */
/* {block 'login_form_errors'} */
class Block_19342848175d54f174839706_02384690 extends Smarty_Internal_Block
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
class Block_9727552415d54f17483deb0_83606952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_5955362715d54f174841180_05912686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_6119472005d54f17483f564_62851542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5955362715d54f174841180_05912686', 'form_field', $this->tplIndex);
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
class Block_19225099285d54f174845d97_11543985 extends Smarty_Internal_Block
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
class Block_20554393355d54f174845379_95991242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19225099285d54f174845d97_11543985', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form_end'} */
class Block_21175017415d54f1748485a7_22554210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_end'} */
/* {block 'login_form'} */
class Block_12058508745d54f174837eb8_34583567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_12058508745d54f174837eb8_34583567',
  ),
  'login_form_start' => 
  array (
    0 => 'Block_2606288035d54f174838941_01743055',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_19342848175d54f174839706_02384690',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_9727552415d54f17483deb0_83606952',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_6119472005d54f17483f564_62851542',
  ),
  'form_field' => 
  array (
    0 => 'Block_5955362715d54f174841180_05912686',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_20554393355d54f174845379_95991242',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_19225099285d54f174845d97_11543985',
  ),
  'login_form_end' => 
  array (
    0 => 'Block_21175017415d54f1748485a7_22554210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2606288035d54f174838941_01743055', 'login_form_start', $this->tplIndex);
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19342848175d54f174839706_02384690', 'login_form_errors', $this->tplIndex);
?>


    <form <?php if (isset($_smarty_tpl->tpl_vars['idForm']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idForm']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9727552415d54f17483deb0_83606952', 'login_form_actionurl', $this->tplIndex);
?>
"  <?php }?>  method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6119472005d54f17483f564_62851542', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20554393355d54f174845379_95991242', 'login_form_footer', $this->tplIndex);
?>


  </form>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21175017415d54f1748485a7_22554210', 'login_form_end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'login_form'} */
}
