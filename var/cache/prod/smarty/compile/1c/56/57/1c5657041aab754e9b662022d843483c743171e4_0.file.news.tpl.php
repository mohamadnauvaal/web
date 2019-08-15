<?php
/* Smarty version 3.1.33, created on 2019-08-15 12:46:06
  from '/home/hammerstoutdenim/public_html/modules/kurirq/views/templates/admin/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f19e472e72_32770521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5657041aab754e9b662022d843483c743171e4' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/kurirq/views/templates/admin/news.tpl',
      1 => 1565316966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54f19e472e72_32770521 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="dashkurirqnews" class="panel widget">
	<div class="panel-heading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'KURIQ Updates','mod'=>'kurirq'),$_smarty_tpl ) );?>

	</div>
	<section id="kurirq_iframe">
	<iframe width="100%" height="250px" src="https://media.kurirq.com/info" style="border: none; overflow: hidden;"></iframe>
	</section>
</section>
<?php }
}
