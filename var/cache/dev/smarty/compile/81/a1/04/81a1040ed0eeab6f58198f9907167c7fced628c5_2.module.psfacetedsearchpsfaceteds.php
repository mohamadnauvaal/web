<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:11:15
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d8d32c7fe5_14519544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1564553585,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d8d32c7fe5_14519544 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/hammerstoutdenim/public_html/themes/warehouse/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
    <div id="facets_search_wrapper">
        <div id="search_filters_wrapper">
            <div id="search_filter_controls" class="hidden-md-up">
                <button data-search-url="" class="btn btn-secondary btn-sm js-search-filters-clear-all">
                        <i class="fa fa-times" aria-hidden="true"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
                <button class="btn btn-primary btn-lg ok">
                    <i class="fa fa-filter" aria-hidden="true"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            </div>
            <div class="block block-facets">
                <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

            </div>
        </div>
    </div>
<?php }?>
<!-- end /home/hammerstoutdenim/public_html/themes/warehouse/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
