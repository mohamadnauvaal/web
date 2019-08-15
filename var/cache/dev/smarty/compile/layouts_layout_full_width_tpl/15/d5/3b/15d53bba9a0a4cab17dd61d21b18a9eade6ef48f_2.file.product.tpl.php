<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:12
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d90c52a3f2_99574185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d53bba9a0a4cab17dd61d21b18a9eade6ef48f' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/product.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/miniatures/product-small.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-h.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-sections.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5d50d90c52a3f2_99574185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12241947485d50d90c4afec1_05659696', 'head_seo');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7409471825d50d90c4b2022_01000427', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15504247485d50d90c4b7a33_62956624', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16698280555d50d90c4c8b12_90993873', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_12241947485d50d90c4afec1_05659696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_12241947485d50d90c4afec1_05659696',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_tags'} */
class Block_7409471825d50d90c4b2022_01000427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_7409471825d50d90c4b2022_01000427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_og_tags'} */
/* {block 'head'} */
class Block_15504247485d50d90c4b7a33_62956624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15504247485d50d90c4b7a33_62956624',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php $_smarty_tpl->_assignInScope('categoryImage', "img/c/".((string)$_smarty_tpl->tpl_vars['product']->value['id_category_default'])."-category_default.jpg");?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['categoryImage']->value)) {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['product']->value['category'],$_smarty_tpl->tpl_vars['product']->value['id_category_default'],'category_default'), ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_2520942555d50d90c4cc332_47875986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'after_cover_thumbnails'} */
class Block_7325738805d50d90c4ce554_02834391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_18139574135d50d90c4cb8a8_88938086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2520942555d50d90c4cc332_47875986', 'product_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7325738805d50d90c4ce554_02834391', 'after_cover_thumbnails', $this->tplIndex);
?>


                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11634671965d50d90c4caed8_77430108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <section class="page-content" id="content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18139574135d50d90c4cb8a8_88938086', 'page_content', $this->tplIndex);
?>

                    </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_brand_below'} */
class Block_8840098185d50d90c4d29b1_00834626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <div class="product-manufacturer product-manufacturer-next float-right">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo"/>
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'page_title'} */
class Block_15945615045d50d90c4da044_10652027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_8522667645d50d90c4d9602_94492786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h1 page-title" itemprop="name"><span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15945615045d50d90c4da044_10652027', 'page_title', $this->tplIndex);
?>
</span></h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'product_brand_below'} */
class Block_17117957245d50d90c4dc320_90617247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                            <div class="product-manufacturer mb-3">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo"/>
                                            </a>
                                            </div>
                                        <?php } else { ?>
                                            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                            <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
                                        <?php }?>

                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                        <span>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                                        </span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'product_prices'} */
class Block_21071104025d50d90c4ebf76_06667054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_prices'} */
/* {block 'page_header_container'} */
class Block_3981165665d50d90c4d1f44_22248218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product_header_container clearfix">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8840098185d50d90c4d29b1_00834626', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8522667645d50d90c4d9602_94492786', 'page_header', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17117957245d50d90c4dc320_90617247', 'product_brand_below', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21071104025d50d90c4ebf76_06667054', 'product_prices', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_21017437835d50d90c4ee263_31271674 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                             itemprop="description" class="rte-content"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_7965843745d50d90c4f2da7_89835921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                        <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_9786706715d50d90c4f8c95_94186335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductVariants','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_17517818355d50d90c4ffaf1_37337889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_7874517115d50d90c4fb4a1_59519576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                        <section class="product-pack">
                                            <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17517818355d50d90c4ffaf1_37337889', 'product_miniature', $this->tplIndex);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </section>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_add_to_cart'} */
class Block_7043490285d50d90c502dd5_23824535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_discounts'} */
class Block_34865975d50d90c504718_61683912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_additional_info'} */
class Block_6174892225d50d90c5060b0_55997134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_21467848005d50d90c507982_45086872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" data-url-update="false"
                                           value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_4889217665d50d90c4f5735_16673179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_customization_id">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9786706715d50d90c4f8c95_94186335', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7874517115d50d90c4fb4a1_59519576', 'product_pack', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7043490285d50d90c502dd5_23824535', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34865975d50d90c504718_61683912', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6174892225d50d90c5060b0_55997134', 'product_additional_info', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21467848005d50d90c507982_45086872', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_10984079755d50d90c50a966_00295525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_6040278645d50d90c5118f2_87438516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'elementor'=>true), 0, true);
?>
                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_sidebar'} */
class Block_224668075d50d90c50e977_42634427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                            <section class="product-accessories product-accessories-sidebar block">
                                <p class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></p>
                                <div id="product-accessories-sidebar" class="block-content products products-grid">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6040278645d50d90c5118f2_87438516', 'product_miniature', $this->tplIndex);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </section>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_accessories_sidebar'} */
/* {block 'product_miniature'} */
class Block_12455833085d50d90c51f7c4_47505937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_footer'} */
class Block_1113967035d50d90c51c900_19149226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories block block-section">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <div class="block-content">
                            <div class="products slick-products-carousel products-grid slick-default-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12455833085d50d90c51f7c4_47505937', 'product_miniature', $this->tplIndex);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_footer'} */
/* {block 'product_footer'} */
class Block_17645021625d50d90c523226_18148037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_9831831815d50d90c5250a7_30443119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_11767235855d50d90c5271d5_15083693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19017673195d50d90c526871_56474686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11767235855d50d90c5271d5_15083693', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16698280555d50d90c4c8b12_90993873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16698280555d50d90c4c8b12_90993873',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11634671965d50d90c4caed8_77430108',
  ),
  'page_content' => 
  array (
    0 => 'Block_18139574135d50d90c4cb8a8_88938086',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_2520942555d50d90c4cc332_47875986',
  ),
  'after_cover_thumbnails' => 
  array (
    0 => 'Block_7325738805d50d90c4ce554_02834391',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3981165665d50d90c4d1f44_22248218',
  ),
  'product_brand_below' => 
  array (
    0 => 'Block_8840098185d50d90c4d29b1_00834626',
    1 => 'Block_17117957245d50d90c4dc320_90617247',
  ),
  'page_header' => 
  array (
    0 => 'Block_8522667645d50d90c4d9602_94492786',
  ),
  'page_title' => 
  array (
    0 => 'Block_15945615045d50d90c4da044_10652027',
  ),
  'product_prices' => 
  array (
    0 => 'Block_21071104025d50d90c4ebf76_06667054',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_21017437835d50d90c4ee263_31271674',
  ),
  'product_customization' => 
  array (
    0 => 'Block_7965843745d50d90c4f2da7_89835921',
  ),
  'product_buy' => 
  array (
    0 => 'Block_4889217665d50d90c4f5735_16673179',
  ),
  'product_variants' => 
  array (
    0 => 'Block_9786706715d50d90c4f8c95_94186335',
  ),
  'product_pack' => 
  array (
    0 => 'Block_7874517115d50d90c4fb4a1_59519576',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_17517818355d50d90c4ffaf1_37337889',
    1 => 'Block_6040278645d50d90c5118f2_87438516',
    2 => 'Block_12455833085d50d90c51f7c4_47505937',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_7043490285d50d90c502dd5_23824535',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_34865975d50d90c504718_61683912',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_6174892225d50d90c5060b0_55997134',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_21467848005d50d90c507982_45086872',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_10984079755d50d90c50a966_00295525',
  ),
  'product_accessories_sidebar' => 
  array (
    0 => 'Block_224668075d50d90c50e977_42634427',
  ),
  'product_accessories_footer' => 
  array (
    0 => 'Block_1113967035d50d90c51c900_19149226',
  ),
  'product_footer' => 
  array (
    0 => 'Block_17645021625d50d90c523226_18148037',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_9831831815d50d90c5250a7_30443119',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19017673195d50d90c526871_56474686',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11767235855d50d90c5271d5_15083693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <div id="product-preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <div id="main-product-wrapper">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="row product-info-row">
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_img_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-image">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11634671965d50d90c4caed8_77430108', 'page_content_container', $this->tplIndex);
?>

            </div>

            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_content_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-info">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3981165665d50d90c4d1f44_22248218', 'page_header_container', $this->tplIndex);
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21017437835d50d90c4ee263_31271674', 'product_description_short', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7965843745d50d90c4f2da7_89835921', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4889217665d50d90c4f5735_16673179', 'product_buy', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10984079755d50d90c50a966_00295525', 'hook_display_reassurance', $this->tplIndex);
?>


                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar']) {?>
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar'], ENT_QUOTES, 'UTF-8');?>
 sidebar product-sidebar">

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_224668075d50d90c50e977_42634427', 'product_accessories_sidebar', $this->tplIndex);
?>

                <?php }?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>


            </div>
            <?php }?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'footer') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1113967035d50d90c51c900_19149226', 'product_accessories_footer', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17645021625d50d90c523226_18148037', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9831831815d50d90c5250a7_30443119', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19017673195d50d90c526871_56474686', 'page_footer_container', $this->tplIndex);
?>

        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
