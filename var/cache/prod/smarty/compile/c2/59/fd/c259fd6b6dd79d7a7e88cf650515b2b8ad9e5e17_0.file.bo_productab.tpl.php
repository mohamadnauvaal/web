<?php
/* Smarty version 3.1.33, created on 2019-08-15 12:45:22
  from '/home/hammerstoutdenim/public_html/modules/iqitsizecharts/views/templates/admin/bo_productab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f172d5d2d4_57624368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c259fd6b6dd79d7a7e88cf650515b2b8ad9e5e17' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/iqitsizecharts/views/templates/admin/bo_productab.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54f172d5d2d4_57624368 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset class="form-group">
    <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select from created guides','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</label>

    <div class="row">
        <div class="col-md-6">
            <select  name="iqitsizecharts[chart]" id="iqitsizecharts_chart"  data-toggle="select2">
                <option value="-1" <?php if (!isset($_smarty_tpl->tpl_vars['selectedChart']->value) || isset($_smarty_tpl->tpl_vars['selectedChart']->value) && ($_smarty_tpl->tpl_vars['selectedChart']->value == -1)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inherit from category associations','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</option>
                <option value="0" <?php if (isset($_smarty_tpl->tpl_vars['selectedChart']->value) && ($_smarty_tpl->tpl_vars['selectedChart']->value == 0)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</option>
                <option value="-2" disabled>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose (it will override category associations)','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
 - </option>
                <?php if (isset($_smarty_tpl->tpl_vars['charts']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charts']->value, 'chart');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chart']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['selectedChart']->value) && ($_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'] == $_smarty_tpl->tpl_vars['selectedChart']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['chart']->value['title'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
        </div>
    </div>
    <hr>
    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</div>
 <a href="<?php echo $_smarty_tpl->tpl_vars['moduleLink']->value;?>
" target="_blank"><i class="material-icons">open_in_new</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new guide','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</a>
</fieldset>


<?php }
}
