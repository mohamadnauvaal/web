<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:47:02
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54e3c619d6e1_89975503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f09de83ca8bc4cfac438a66ff8733dac59beede' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/listing/category.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-subcategories.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5d54e3c619d6e1_89975503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16804688055d54e3c6172b17_53508871', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15764556775d54e3c61788d1_33108332', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11463616865d54e3c6195759_34714494', 'product_list_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15099871065d54e3c6197606_23711086', 'product_list_bottom_static');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'head'} */
class Block_16804688055d54e3c6172b17_53508871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_16804688055d54e3c6172b17_53508871',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'] != '') {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }
}
}
/* {/block 'head'} */
/* {block 'product_list_header'} */
class Block_15764556775d54e3c61788d1_33108332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_15764556775d54e3c61788d1_33108332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="h1 page-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></h1>
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_image'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) {?>
            <div class="category-image <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                        <div class="category-description category-description-image"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                    <?php }?>
                <?php }?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                     class="img-fluid" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['height'], ENT_QUOTES, 'UTF-8');?>
" >
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'above') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_sub_thumbs'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_bottom'} */
class Block_11463616865d54e3c6195759_34714494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom' => 
  array (
    0 => 'Block_11463616865d54e3c6195759_34714494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_15099871065d54e3c6197606_23711086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom_static' => 
  array (
    0 => 'Block_15099871065d54e3c6197606_23711086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'below') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-bottom <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><hr /><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }
}
}
/* {/block 'product_list_bottom_static'} */
}
