<?php
/* Smarty version 3.1.33, created on 2019-08-15 13:02:41
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f5817acbb1_17682447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae3232a73617cb6438974c2c4a9580adae46915a' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/maintenance.tpl',
      1 => 1564630380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/_maintenance/maintenance-1.tpl' => 1,
    'file:errors/_maintenance/maintenance-2.tpl' => 1,
  ),
),false)) {
function content_5d54f5817acbb1_17682447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17136830925d54f58179f811_64223035', 'stylesheets');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1473325775d54f5817a2821_42158028', 'body_tag');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4963604295d54f5817a4e83_50084873', 'layout_error_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1332240785d54f5817a5e18_04642993', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12022277135d54f5817ab511_80457548', 'maintenance_js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'stylesheets'} */
class Block_17136830925d54f58179f811_64223035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_17136830925d54f58179f811_64223035',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 src="https://use.fontawesome.com/f26ca72beb.js"><?php echo '</script'; ?>
>
      
<!-- WhatsHelp.io widget -->
<?php echo '<script'; ?>
 type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281221183839", // WhatsApp number
            line: "//line.me/ti/p/hammerstoutdenim", // Line QR code URL
            call_to_action: "Ada yang bisa kami bantu?", // Call to action
            button_color: "#E74339", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,line", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
<?php echo '</script'; ?>
>
<!-- /WhatsHelp.io widget -->
   
   
    <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'body_tag'} */
class Block_1473325775d54f5817a2821_42158028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_tag' => 
  array (
    0 => 'Block_1473325775d54f5817a2821_42158028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body id="maintenance-page" class="maintenance-page maintenance-page-layout-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_layout'], ENT_QUOTES, 'UTF-8');?>
">
<!-- /WhatsHelp.io widget -->
<?php
}
}
/* {/block 'body_tag'} */
/* {block 'layout_error_tag'} */
class Block_4963604295d54f5817a4e83_50084873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_error_tag' => 
  array (
    0 => 'Block_4963604295d54f5817a4e83_50084873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
<?php
}
}
/* {/block 'layout_error_tag'} */
/* {block 'content'} */
class Block_1332240785d54f5817a5e18_04642993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1332240785d54f5817a5e18_04642993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_layout'] == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:errors/_maintenance/maintenance-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['mcs_layout'] == 2) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:errors/_maintenance/maintenance-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'content'} */
/* {block 'maintenance_js'} */
class Block_12022277135d54f5817ab511_80457548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'maintenance_js' => 
  array (
    0 => 'Block_12022277135d54f5817ab511_80457548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>

  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitThemeMaintenanceJs']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block 'maintenance_js'} */
}
