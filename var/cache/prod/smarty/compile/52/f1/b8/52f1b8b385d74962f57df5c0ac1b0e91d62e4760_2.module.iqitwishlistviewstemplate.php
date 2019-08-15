<?php
/* Smarty version 3.1.33, created on 2019-08-15 12:45:24
  from 'module:iqitwishlistviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f174832cf6_32728755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f1b8b385d74962f57df5c0ac1b0e91d62e4760' => 
    array (
      0 => 'module:iqitwishlistviewstemplate',
      1 => 1564553584,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54f174832cf6_32728755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login_form']->value)) {?>
<div id="iqitwishlist-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to login or create account','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="login-form">
                   <p> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save products on your wishlist to buy them later or share with your friends.','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
</p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','idForm'=>'login-form-modal','ui'=>$_smarty_tpl->tpl_vars['login_form']->value,'wishlistModal'=>true),$_smarty_tpl ) );?>

                </section>
                <hr/>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6992981855d54f17482d684_56090077', 'display_after_login_form');
?>

                <div class="no-account">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>

<div id="iqitwishlist-notification" class="ns-box ns-effect-thumbslider ns-text-only">
    <div class="ns-box-inner">
        <div class="ns-content">
            <span class="ns-title"><i class="fa fa-check" aria-hidden="true"></i> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to wishlist','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
</strong></span>
        </div>
    </div>
</div><?php }
/* {block 'display_after_login_form'} */
class Block_6992981855d54f17482d684_56090077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_after_login_form' => 
  array (
    0 => 'Block_6992981855d54f17482d684_56090077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'display_after_login_form'} */
}
