<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:47:21
  from 'module:iqitreviewsviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54e3d9deac07_13935809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0280617ea95e2794fe002b1120fc56cfd448619' => 
    array (
      0 => 'module:iqitreviewsviewstemplates',
      1 => 1564553584,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54e3d9deac07_13935809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/hammerstoutdenim/public_html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>

<?php if ($_smarty_tpl->tpl_vars['snippetData']->value['reviewsNb'] > 0) {?>
    <div class="iqitreviews-simple" itemprop="aggregateRating" itemscope
         itemtype="http://schema.org/AggregateRating">

        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetData']->value['avarageRating'], ENT_QUOTES, 'UTF-8');?>
"/>
        <meta itemprop="bestRating" content="5"/>
        <meta itemprop="worstRating" content="1"/>
        <meta itemprop="ratingCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetData']->value['reviewsNb'], ENT_QUOTES, 'UTF-8');?>
"/>


        <span class="iqitreviews-rating">
        <?php echo smarty_function_math(array('equation'=>"floor(x)",'x'=>$_smarty_tpl->tpl_vars['snippetData']->value['avarageRating'],'assign'=>'stars'),$_smarty_tpl);?>

        <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_23_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_23_iteration <= 5; $__section_i_23_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if (($_smarty_tpl->tpl_vars['stars']->value-(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) >= 1) {?>
                <i class="fa fa-star iqit-review-star"></i>
            <?php } elseif ($_smarty_tpl->tpl_vars['snippetData']->value['avarageRating']-(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>
                <i class="fa fa-star-half-o iqit-review-star"></i>
            <?php } else { ?>
                <i class="fa fa-star-o iqit-review-star"></i>
            <?php }?>
        <?php
}
}
?>
        </span>
        <span class="iqitreviews-nb"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetData']->value['reviewsNb'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'iqitreviews'),$_smarty_tpl ) );?>
</span>
    </div>
<?php }
}
}
