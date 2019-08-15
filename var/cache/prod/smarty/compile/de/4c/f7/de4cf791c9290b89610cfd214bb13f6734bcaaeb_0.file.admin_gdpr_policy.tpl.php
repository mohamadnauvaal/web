<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:26:48
  from '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/admin/admin_gdpr_policy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50dc78780c42_98690540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de4cf791c9290b89610cfd214bb13f6734bcaaeb' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/admin/admin_gdpr_policy.tpl',
      1 => 1550240200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50dc78780c42_98690540 (Smarty_Internal_Template $_smarty_tpl) {
?><!--------------- Start - GDPR Changes -------------------->
<!-- Start - Modal Popup Add new GDPR Privacy Setting-->
<?php echo '<script'; ?>
>
    var canNotLeaveBoxesEmpty = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field can not be empty.Please check for all languages.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var noDataFound = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data found.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<style>
    .rm_filter_date {
        margin-left: 20px;
    }
    .rm_filter_date .btn{
        width: 70px;
        display:inline-block;
    }
.pure-table{
        border-collapse:collapse;
        border-spacing:0;
        empty-cells:show;
        border:1px solid #cbcbcb;
        margin-right: 5px;
        text-align: left;
}
.velsof-pure-table
{    
    width:100%;
}

.pure-table tr{
        border-bottom: 1px solid #cbcbcb;
}
.pure-table caption{
        color:#000;
        font:italic 85%/1 arial,sans-serif;
        padding:1em 0;
        text-align:center
}
.pure-table td,.pure-table th{
        border-left:1px solid #cbcbcb;
        border-width:0 0 0 1px;
        font-size:inherit;
        font-weight: normal;
        margin:0;
        overflow:visible;
        padding:.5em 1em
}
.pure-table td:first-child,.pure-table th:first-child{
        border-left-width:0
}
.pure-table thead
{
        /*        background:#e0e0e0;*/
        color:#000;
        //text-align:left;
        vertical-align:bottom
}
.pure-table td
{
        background-color:transparent
}
.pure-table-odd td
{
        background-color:#F7F7F7
}
.pure-table th
{
        /*background-color:#f2f2f2*/
font-weight: bold;
}
.pure-table-striped tr:nth-child(2n-1) td
{
        background-color:#f2f2f2
}
.pure-table-bordered td
{
        border-bottom:1px solid #cbcbcb
}
.pure-table-bordered tbody>tr:last-child td,.pure-table-horizontal tbody>tr:last-child td
{
        border-bottom-width:0
}
.pure-table-horizontal td,.pure-table-horizontal th
{
        border-width:0 0 1px;
        border-bottom:1px solid #cbcbcb
}
.pure-table-horizontal tbody>tr:last-child td
{
        border-bottom-width:0
}
</style>

<div class="modal fade" id="modal_add_new_gdpr_privacy_form" tab-index="-1" aria-hidden="true" aria-labelledby="modal-incentive-form">
    <div class="modal-dialog" style="width:50%">

        <div class="modal-content">
            <div class="modal-header">
                <span class="font_popup_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New GDPR Privacy setting','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" onclick="closeModalPopup('modal_add_new_gdpr_privacy_form')"><span aria-hidden="true">×</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></button>
            </div>
            <div class="modal-body" style="padding-bottom:0;">
                <div class="row">
                    <div class="span" style="margin-left:0; width:100%;">
                        <div id="modal_gdpr_form_process_status" class="modal_process_status_blk alert" style="display:none;"></div>
                    </div>
                </div>

                                <div style="overflow-y:auto !important;" id="gdpr_policy_add_form">
                    <table class="list form" style="width:100%">
                        <tbody id="custom_table_tbody">

                            <tr class="supercheckout_gdpr_policy_field_form_fields">
                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Privacy Policy Label','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label of the privacy policy.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                </td>
                                <td class="supercheckout_popup_form_field">
                                    <div class="span">
                                        <span class='float_left margin_right_20'>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                <input class="required_entry supercheckout_gdpr_policy_label <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language_current']->value,'htmlall','UTF-8' )) != call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ))) {?>hidden_custom<?php }?>" type="text" id='gdpr_policy_label_language_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
' name="gdpr_policy_fields[field_label][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
]">
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </span>
                                        <span class='float_left'>
                                            <select class="width_small" name="languages" onchange="changeLanguageBox(this, 'gdpr_policy_label')">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                    <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language_current']->value,'htmlall','UTF-8' )) == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ))) {?>selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['language_code'],'htmlall','UTF-8' ));?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </span>
                                        <span id="error_message_gdpr_policy_label" class="error_message new_line hidden_custom">Error!</span>
                                    </div>
                                </td>
                            </tr>

                            <tr class="supercheckout_gdpr_policy_field_form_fields">
                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page URL to Link The Label (optional)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page URL of privacy policy page where you have define your privacy policy.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page URL of privacy policy page where you have define your privacy policy.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                </td>
                                <td class="supercheckout_popup_form_field">
                                    <div class="" style="margin-left:10px">
                                        <input class="" type="text" name="gdpr_policy_fields[privacy_link]" value="">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mark Privacy Policy acceptance required or not required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                </td>
                                <td class="supercheckout_popup_form_field">
                                    <div class="form-group">
                                        <div class="col-lg-9">
                                            <span class="switch prestashop-switch fixed-width-lg">
                                                <input type="radio" name="gdpr_policy_fields[required]" id="gdpr_policy_fields[required]_on" value="1">
                                                <label for="gdpr_policy_fields[required]_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                                                <input type="radio" name="gdpr_policy_fields[required]" id="gdpr_policy_fields[required]_off" value="0" checked="checked">
                                                <label for="gdpr_policy_fields[required]_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                                                <a class="slide-button btn"></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set the Privacy as active or inactive.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                </td>
                                <td class="supercheckout_popup_form_field">
                                    <div class="form-group">
                                        <div class="col-lg-9">
                                            <span class="switch prestashop-switch fixed-width-lg">
                                                <input type="radio" name="gdpr_policy_fields[active]" id="gdpr_policy_fields[active]_on" value="1" checked="checked">
                                                <label for="gdpr_policy_fields[active]_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                                                <input type="radio" name="gdpr_policy_fields[active]" id="gdpr_policy_fields[active]_off" value="0">
                                                <label for="gdpr_policy_fields[active]_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                                                <a class="slide-button btn"></a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                            </div>
            <div class="modal-footer no_border">
                <button type="button" onclick="closeModalPopup('modal_add_new_gdpr_privacy_form')" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</button>
                <button type="button" onclick="submitGDPRSettingForm()" class="btn btn-primary">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                    <img id='loader_add_policy_form' class='loader_save_button hidden_custom' src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir_url']->value,'quotes','UTF-8' ));?>
/supercheckout/views/img/admin/ajax_loader.gif'/>                 </button>
                            </div>
        </div>
    </div>
</div>

<!-- End - Modal Popup Add new Custom Field -->

<!-- Start -Modal Popup Edit Custom Field -->
<div class="modal fade" id="modal_edit_gdpr_policy_form" tab-index="-1" aria-hidden="true" aria-laodal_edit_gdpr_policy_formbelledby="modal-incentive-form">
    <!-- Render edit form here -->
</div>
<!-- End - Modal Popup Edit Custom Field -->
<!--------------- Start - GDPR Settings -------------------->
<div id="tab_gdpr" class="tab-pane tab-form">
    <div class="block">
        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR Settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>                                                                                                                       
        <div>
            <table class="table_custom_bordered" id="table_gdpr_policy_data" style="width: 100%;">
                <thead>
                    <tr>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'S. No.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Policy Label','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                        <th class="center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                    </tr>
                </thead>
                <tbody id="tbody_gdpr_policy_data">
                    <?php $_smarty_tpl->_assignInScope('counter', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gdpr_policy_details']->value, 'array_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['array_field']->value) {
?>
                        <tr class="pure-table-<?php if ($_smarty_tpl->tpl_vars['counter']->value%2 == 0) {?>even<?php } else { ?>odd<?php }?>" id="tr_policy_table_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['array_field']->value['policy_id'],'htmlall','UTF-8' ));?>
">
                            <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['counter']->value,'htmlall','UTF-8' ));?>
</td>
                            <td class="width_25"><div class="div_250px_ellipsis"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['array_field']->value['description'],'htmlall','UTF-8' ));?>
</div></td>
                            <td><?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['array_field']->value['is_manadatory'],'htmlall','UTF-8' )) == '1') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );
}?></td>
                            <td><?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['array_field']->value['status'],'htmlall','UTF-8' )) == '1') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );
}?></td>
                            <td class="center" style="padding: 12px;">
                                <div style="display:inline-block;float:left;">
                                    <a style="padding:5px" href="javascript://" onclick="displayEditGDPRPolicyPopup(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['array_field']->value['policy_id'],'htmlall','UTF-8' ));?>
)" type="11" class="velsof-glyphicons2 glyphicons pencil"><i title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this policy','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></a>                                                                                                
                                </div>
                                <div style="display:inline-block;">
                                    <a style="padding:5px" href="javascript://" onclick="deleteGDPRPolicyRow(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['array_field']->value['policy_id'],'htmlall','UTF-8' ));?>
)" type="11" class="velsof-glyphicons2 glyphicons bin"><i title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this policy','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <tr id="tr_gdpr_policy_add_new">
                        <td colspan="4" class="opacity_0"></td>
                        <td class="left center">
                            <a style="cursor: pointer; text-decoration: none;" onclick="addNewGDPRPrivacyPopup()" data-toggle="modal">
                                <span><i class="process-icon-new"></i></span>
                            </a>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add New','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--------------- END - GDPR Settings -------------------->

<!--------------- Start - Check Customer Privacy-------------------->
<div id="tab_accepted_privacy" class="tab-pane tab-form">
    <div class="block">
        <h4 class='heading-mosaic velsof-header'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Customer Consent','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
        <div class="widget">
            <div class="widget-head">
                <h4 class="heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Customer Consent','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="widget-body" style="display:block;">
                <div class="row" style="margin-bottom:5px">
                    <span class="span0 rm_filter_date">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference No /Customer Email ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</h5>
                        <div class="row rm_filter_input_block">
                            <input type="text" id="supercheckout_gdpr_filter" name="supercheckout_gdpr_filter" value="" />
                            <span id="error_message_supercheckout_gdpr_filter" class="error_message new_line hidden_custom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field can not be empty.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </span>
                    <span class="span0 rm_filter_date" style="width: 235px;">
                        <h5>&nbsp;</h5>
                        <div class="row" style="margin-left:0">
                            <span class="btn btn-block velsof-btn-block btn-success" onclick="getAcceptedCustomerPolicy()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'FILTER','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                            <span class="btn btn-block velsof-btn-block btn-primary" onclick="resetCustomerPolicy()" style="margin-bottom:5px"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                            <img id="rm_loader" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/loader_small.gif" style="display:none;">
                        </div>
                    </span>
                    <div id="rm_date_error" class="rm-date-error"></div>
                </div>
            </div>
        </div>
        <div id="supercheckout_customer_consent_container" class="">
            <div class="widget">
                <div class="widget-head">
                    <h4 class="heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accepted Customer Consent Details','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                </div>
                <div class="row graph_container">
                    <div id="supercheckout_customer_consent" style="width: 98%; margin: 6px auto; height:auto;">
                        <div class="rm_no_data"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data found.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------- END - Check Customer Privacy -------------------->

<!--------------- End - GDPR Changes --------------------><?php }
}
