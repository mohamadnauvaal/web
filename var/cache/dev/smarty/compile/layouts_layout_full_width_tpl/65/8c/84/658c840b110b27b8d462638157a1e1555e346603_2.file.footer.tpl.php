<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:20
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d914dd7003_83761993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658c840b110b27b8d462638157a1e1555e346603' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/_partials/footer.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/_variants/footer-1.tpl' => 1,
    'file:_partials/_variants/footer-2.tpl' => 1,
    'file:_partials/_variants/footer-3.tpl' => 1,
    'file:_partials/_variants/footer-4.tpl' => 1,
    'file:_partials/_variants/footer-5.tpl' => 1,
  ),
),false)) {
function content_5d50d914dd7003_83761993 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 1) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 2) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 3) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 4) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 5) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
