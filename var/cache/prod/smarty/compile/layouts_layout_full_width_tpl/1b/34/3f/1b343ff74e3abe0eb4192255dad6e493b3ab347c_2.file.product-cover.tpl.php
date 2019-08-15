<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:06:40
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/_product_partials/product-cover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54da50651b00_09573976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b343ff74e3abe0eb4192255dad6e493b3ab347c' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/_product_partials/product-cover.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54da50651b00_09573976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3970279305d54da5063f8e4_99421906', 'product_cover');
?>

<?php }
/* {block 'product_flags'} */
class Block_13121371715d54da506403a3_40501441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="product-flags">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_3970279305d54da5063f8e4_99421906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_3970279305d54da5063f8e4_99421906',
  ),
  'product_flags' => 
  array (
    0 => 'Block_13121371715d54da506403a3_40501441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13121371715d54da506403a3_40501441', 'product_flags', $this->tplIndex);
?>


        <a class="expander" data-toggle="modal" data-target="#product-modal"><span><i class="fa fa-expand" aria-hidden="true"></i></span></a>
        <div id="product-images-large" class="product-images-large slick-slider">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'covers', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['index'];
?>
                <div>
                    <div class="easyzoom easyzoom-product">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="js-easyzoom-trigger"></a>


                    </div>

                    <img
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first'] : null)) {?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                            data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                            itemprop="image"
                            content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                            height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                            class="img-fluid"
                    >
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block 'product_cover'} */
}
