<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:05:08
  from '/home/hammerstoutdenim/public_html/adminjuara/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54d9f4e23363_04289061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b942f44a3929b12968cb0eddde93260c8ce1e46' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/adminjuara/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1564407319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54d9f4e23363_04289061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8479404455d54d9f4e21e39_21949665', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_8479404455d54d9f4e21e39_21949665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_8479404455d54d9f4e21e39_21949665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
