<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:13:51
  from '/home/hammerstoutdenim/public_html/adminjuara/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d96fe8eff6_17544995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4c4308ac5a8ad945bb24fe66947c4000968fad' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/adminjuara/themes/default/template/content.tpl',
      1 => 1564407319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d96fe8eff6_17544995 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
