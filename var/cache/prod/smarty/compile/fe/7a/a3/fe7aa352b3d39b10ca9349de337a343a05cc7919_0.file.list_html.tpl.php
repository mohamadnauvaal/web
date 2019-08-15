<?php
/* Smarty version 3.1.33, created on 2019-08-13 00:13:18
  from '/home/hammerstoutdenim/public_html/modules/iqitmegamenu/views/templates/hook/list_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d519e2e2e20b9_22772691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe7aa352b3d39b10ca9349de337a343a05cc7919' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/iqitmegamenu/views/templates/hook/list_html.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d519e2e2e20b9_22772691 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom htmls','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&addCustomHtml=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="tabsContent">
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['menu_type']->value;?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
				<div id="tabs_<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_html'];?>
" class="panel" style="padding: 10px 10px 0px 10px;">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_html'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
</h4>
							<div class="btn-group-action pull-right">

								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&id_html=<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_html'];?>
">
									<i class="icon-edit"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&delete_id_html=<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_html'];?>
">
									<i class="icon-trash"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php }
}
