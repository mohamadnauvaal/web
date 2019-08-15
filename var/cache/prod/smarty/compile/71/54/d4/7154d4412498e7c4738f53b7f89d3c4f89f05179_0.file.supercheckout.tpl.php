<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:26:48
  from '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/admin/supercheckout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50dc78624a81_85178009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7154d4412498e7c4738f53b7f89d3c4f89f05179' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/admin/supercheckout.tpl',
      1 => 1550240200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50dc78624a81_85178009 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var uncheckAddressFieldMsg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot uncheck this field due to required field','mod'=>'supercheckout','js'=>1),$_smarty_tpl ) );?>
";
    var scp_ajax_action = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'quotes' ));?>
";
    var request_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please provide required information with valid data.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var fb_app_id_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook App Id is required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var fb_app_secret_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook App Secret is required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var ggl_client_id_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Client Id is required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var ggl_app_secret_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google App Secret is required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var mailchimp_api_key_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter valid Mailchimp Api Key and select a list after getting lists to enable Mailchimp feature.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var google_api_key_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google API Key is required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var empty_width_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width can not be empty.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var empty_height_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height can not be empty.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var valid_width_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width should be positive integer or auto.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var valid_height_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height should be positive integer or auto.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var valid_width_error_product_image = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width should be positive integer.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var valid_height_error_product_image = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height should be positive integer.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    
    var module_path = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'quotes' ));?>
";
    var remove_cnfrm_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you really want to remove the image?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var canNotLeaveAllBoxesEmpty = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Can not leave all the language boxes empty. Please fill at least one box.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    //var pleaseProvideInValidFormat = 'Please provide value(s) in valid format.  (valid format is: value|Label)';
    var pleaseProvideInValidFormat1 = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please provide value(s) in valid format.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var pleaseProvideInValidFormat2 = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'valid format is','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var pleaseProvideInValidFormat = pleaseProvideInValidFormat1 + " " +'(' + pleaseProvideInValidFormat2 + ': value|Label)';
    var areYouSureToDelete = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to delete the row?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    
    var no_list_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No list exists for this API key!','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    
    /* Start - Added by Raghu on 18-Aug-2017 for adding the Yes and No translated text into JS Varibles for Translations issues while editing/adding a custom field */
    var no_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var yes_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    /* End - Added by Raghu on 18-Aug-2017 for adding the Yes and No translated text into JS Varibles for Translations issues while editing/adding a custom field */
    
    /* Start - Code Added by Raghu on 22-Aug-2017 for fixing 'Custom Fields Blocks Translations issues while editing/adding a custom field' */
    var customer_registration_block_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Registration Block','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var cart_block_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Block','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var payment_address_form_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address Form','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var shipping_address_form_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address Form','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    /* End - Code Added by Raghu on 22-Aug-2017 for fixing 'Custom Fields Blocks Translations issues while editing/adding a custom field' */
    
    /* Start - Code Added by Raghu on 22-Aug-2017 for fixing 'Custom Fields type translations' issue */
    var text_box_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Box','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var radio_button_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio Buttons','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var text_area_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Area','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var select_box_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Box','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var check_boxes_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Boxes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    /* End - Code Added by Raghu on 22-Aug-2017 for fixing 'Custom Fields type translations' issue */
<?php echo '</script'; ?>
>
<style>
    .alert-success{
        display:none;
    }

    .modal_supercheckout {
        display:    none;
        position:   fixed;
        z-index:    100000;
        top:        0;
        left:       0;
        height:     100%;
        width:      100%;
        background: rgba( 255, 255, 255, .8 )
            url('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
/views/img/spinner.gif')
            50% 50%
            no-repeat;
    }

    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading {
        overflow: hidden;
    }

    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modal_supercheckout {
        display: block;
    }

</style>
<div class="modal_supercheckout"></div>
<div class="module_confirmation conf confirm alert alert-success" id="div_supercheckout_success" style="display:none">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Operation performed successfully!','mod'=>'supercheckout'),$_smarty_tpl ) );?>

</div>


<div class="module_confirmation conf confirm alert alert-success hidden_custom" id="div_custom_fields_success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Operation performed successfully!','mod'=>'supercheckout'),$_smarty_tpl ) );?>

</div>
<div id="velsof_supercheckout_container" class="content">
    <div class="box">
        <div class="navbar main hidden-print">
            <!-- Brand & save buttons -->
            <ul class="pull-left">
                <div style="position: inherit;color: white;font-size: 15px;min-width: 700px;padding-left: 50px;padding-top: 5px;">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have some doubt or issue? Get prompt help from us.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                </div>
                <li class="themer_eyedropper" data-toggle="collapse" data-target="#themer"></li>
            </ul>
            <div class="topbuttons">                
                <a href="javascript:void(0)" onclick="validate_data()"><span id="save_post_setting" class="btn btn-block btn-success action-btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cancel_action']->value;?>
"><span class="btn btn-block btn-danger action-btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a>
                <span class="gritter-add-primary btn btn-default btn-block hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For notifications on saving','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
            </div>
        </div>
        <div class="velsof-container">
            <div class="widget velsof-widget-left">
                <div class="widget-body velsof-widget-left">                    
                    <div id="wrapper">
                        <div id="menuVel" class="hidden-print ui-resizable">
                            <div class="slimScrollDiv">
                                <div class="slim-scroll">
                                    <ul>
                                        <li class="active <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons settings" href="#tab_general_settings" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons brush" href="#tab_customizer" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customizer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons keys" id="velsof_tab_login" href="#tab_login" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>                                            
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons envelope" id="velsof_tab_mailchimp" href="#tab_mailchimp" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MailChimp','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>                                            
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons home" href="#tab_Addr" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons credit_card" id="velsof_tab_payment_method" href="#tab_payment_method" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons cargo" id="velsof_tab_delivery_method" href="#tab_shipping_method" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons boat" href="#tab_ship_to_pay" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ship2pay','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons embed_close" href="#tab_custom_fields" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Fields','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons shopping_cart" id="velsof_tab_cart" href="#tab_cart" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                                                                <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons ok" id="velsof_tab_accepted_privacy" href="#tab_accepted_privacy" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Consent','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons settings" id="velsof_tab_gdpr" href="#tab_gdpr" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                                                                <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons podium" id="velsof_tab_design" href="#tab_design" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Design','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons circle_question_mark" href="#tab_faq" data-toggle="tab"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'FAQs','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>                                            
                                        <li class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>vss-tab-ver15<?php }?>"><a class="glyphicons bookmark" target="_blank" href="https://addons.prestashop.com/en/149_knowband" target="_blank"><i></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other Plugins','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <!--                                        <div class="separator bottom"></div> -->
                                </div>
                            </div>
                            <div class="ui-resizable-handle ui-resizable-e" style="z-index: 1000;"></div>
                        </div>

                        <div id="content_knowband">
                            <div class="box">
                                <div class="content tabs">


                                    <div class="layout">
                                        <div class="tab-content even-height">
                                            <!--------------- Start - General Setings -------------------->
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data" id="supercheckout_configuration_form">
                                                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" >
                                                <input type="hidden" name="velocity_supercheckout[adv_id]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['adv_id'];?>
" >
                                                <input type="hidden" name="velocity_supercheckout[temp_cart_image_size][width]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_image_size']['width'];?>
" />
                                                <input type="hidden" name="velocity_supercheckout[temp_cart_image_size][height]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_image_size']['height'];?>
" />
                                                <div id="tab_general_settings" class="tab-pane active tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form">
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable/Disable','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable/Disable Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[enable]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable]" id="supercheckout_enable" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable]" id="supercheckout_enable" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable]" id="supercheckout_enable" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable]" id="supercheckout_enable"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Guest Checkout','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Guest Checkout Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[enable_guest_checkout]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable_guest_checkout'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_checkout]" id="supercheckout_enable_newsletter" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_checkout]" id="supercheckout_enable_newsletter" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_checkout]" id="supercheckout_enable_newsletter" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_checkout]" id="supercheckout_enable_newsletter"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>


                                                                </td>
                                                            </tr>                                                                    

                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register Guest','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register Guest Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[enable_guest_register]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable_guest_register'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_register]" id="supercheckout_enable_guest_register" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_register]" id="supercheckout_enable_guest_register" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_register]" id="supercheckout_enable_guest_register" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_guest_register]" id="supercheckout_enable_guest_register"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                            <tr><td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address for virtual cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If set to OFF, it will hide delivery adress automatically and show invoice address for cart with virual products only','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[hide_delivery_for_virtual]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['hide_delivery_for_virtual'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[hide_delivery_for_virtual]" id="supercheckout_hide_delivery_for_virtual" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[hide_delivery_for_virtual]" id="supercheckout_hide_delivery_for_virtual" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[hide_delivery_for_virtual]" id="supercheckout_hide_delivery_for_virtual" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[hide_delivery_for_virtual]" id="supercheckout_hide_delivery_for_virtual"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td><tr>
                                                            <tr>
                                                                <td class="name vertical_top_align">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Option at Checkout','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Option at Checkout Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="left settings">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[checkout_option]" value="0"  <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['checkout_option'] == 0) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[checkout_option]" value="1" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['checkout_option'] == 1) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[checkout_option]" value="2" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['checkout_option'] == 2) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Testing Mode','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable this if you want to test this plugin before making it live.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>                                                                            
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[super_test_mode]" />
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['super_test_mode']) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['super_test_mode'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[super_test_mode]" id="supercheckout_test_mode" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[super_test_mode]" id="supercheckout_test_mode" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[super_test_mode]" id="supercheckout_test_mode" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[super_test_mode]" id="supercheckout_test_mode"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>                                                                            
                                                                </td>
                                                            </tr>
                                                            <tr id="front_module_url" style="display: none;">
                                                                <td colspan="2">
                                                                    <div class="span" style="padding:20px;">
                                                                        <div>
                                                                            <div style="float:left;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Testing URL','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b></div>


                                                                            <div style="float:left;width: 400px;border-radius: 3px;margin-left: 10px;border: 1px solid #E2E2E2;padding: 5px;">
                                                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['module_url']->value;?>
" id="testurlfield">
                                                                            </div> 
                                                                            <div style="
                                                                                 float: left;
                                                                                 margin-left: 10px;
                                                                                 "><input type="button" data-clipboard-action="copy" data-clipboard-target="#testurlfield" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" class="testurlbutton btn" style="
                                                                                     width: 100px;
                                                                                     color: #FFFFFF;
                                                                                     font-weight: bold;
                                                                                     background: #2EACCE;
                                                                                     "></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>



                                                        </table>

                                                    </div>

                                                    <!--<div class="row">
                                                        <div class="span">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span style="font-weight: bold; font-size: 15px;">Note:</span>
                                                                <span style="color: black; margin-left: 5px;">Please Make sure that <span style='color: red;'>Advanced Parameters-> Performance-> Debug Mode-> Disable all overrides button-> is Set to No</span>.</span>
                                                                </p>
                                                        </div>
                                                    </div>
                                                <hr style="margin-top:5px;">-->
                                                </div>

                                                <!--------------- End - General Settings -------------------->
                                                <!--------------- Start - Customize -------------------->
                                                <div id="tab_customizer" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading' style="font-size: 20px;" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customizer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form">

                                                            <tr>
                                                                <td class="name vertical_top_align" style="padding: 15px;">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Button Background Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change the Button Background Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings" style="padding: 15px;">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">

                                                                        <input type="text" class="color form-control colorizer-input" onchange="bg_changer(this.color);" name="velocity_supercheckout[customizer][button_color]"  value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['button_color'];?>
"/>

                                                                    </div>
                                                                </td>
                                                                <td>&nbsp;</td>

                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align" style="padding: 15px;">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Button Border Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change the Button Border Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings" style="padding: 15px;">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">

                                                                        <input type="text" class="color form-control colorizer-input"  onchange="border_changer(this.color);" name="velocity_supercheckout[customizer][button_border_color]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['button_border_color'];?>
"/>



                                                                        <div id="button_preview" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['button_color'];?>
;border: 1px solid #<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['button_border_color'];?>
 !important;color: #<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['button_text_color'];?>
 !important;border-bottom:3px solid #<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['border_bottom_color'];?>
 !important;width: 160px;

                                                                             display: inline-block;
                                                                             text-align: center;
                                                                             float: left;
                                                                             margin-left: 65%;
                                                                             padding: 10px;
                                                                             font-size: 16px;
                                                                             border-radius: 5px;
                                                                             margin-top: -38px;
                                                                             ">
                                                                            <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Button Preview','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                        </div>
                                                                    </div>
                                                                </td>



                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align" style="padding: 15px;">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Button Text Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change the Button Text Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings" style="padding: 15px;">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">

                                                                        <input type="text" class="color form-control colorizer-input"  onchange="text_changer(this.color);"name="velocity_supercheckout[customizer][button_text_color]"  value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['button_text_color'];?>
"/>


                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td class="name vertical_top_align" style="padding: 15px;">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Button Border Bottom Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change the Button Border Bottom Color','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings" style="padding: 15px;">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">

                                                                        <input type="text" class="color form-control colorizer-input" onchange="border_bottom_changer(this.color);"name="velocity_supercheckout[customizer][border_bottom_color]"  value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customizer']['border_bottom_color'];?>
"  />


                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align" style="padding: 15px;">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom CSS','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Provide some CSS code for changes in the front end of SuperCheckout','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings" style="padding: 15px;">
                                                                    <textarea rows="5" style="resize: both;" class="vss_sc_ver15" name="velocity_supercheckout[custom_css]"><?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['custom_css'])) {
echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['custom_css'];
}?></textarea>
                                                                </td>                                                                        
                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align" style="padding: 15px;">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom JS','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Provide some javascript code for changes in the front end of SuperCheckout','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings" style="padding: 15px;">
                                                                    <textarea rows="5" style="resize: both;" class="vss_sc_ver15" name="velocity_supercheckout[custom_js]"><?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['custom_js'])) {
echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['custom_js'];
}?></textarea>
                                                                </td>                                                                        
                                                            </tr>


                                                        </table>

                                                    </div>
                                                </div>
                                                <!--------------- End - Customize -------------------->

                                                <!--------------- Start - Login -------------------->

                                                <div id="tab_login" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="mandatory_notify"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(*) are mandatory fields','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></h4>
                                                        <div class="block">
                                                            <table class="form">
                                                                <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mobile_login_active'])) {?>
                                                                    <tr>
                                                                        <td class="name vertical_top_align" ><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compatible With Mobile Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                            <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make it compatible with Knowband Mobile Login Module','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                        </td>
                                                                        <td class="settings" style="padding-bottom:10px;">
                                                                            <input type="hidden" value="0" name="velocity_supercheckout[mobile_login][enable]" />
                                                                            <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mobile_login']['enable']) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mobile_login']['enable'] == 1) {?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                    <div>
                                                                                        <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[mobile_login][enable]" id="supercheckout_mobile_login" checked="checked" />
                                                                                    </div>
                                                                                <?php } else { ?>
                                                                                    <div class="make-switch" data-on="primary" data-off="default">
                                                                                        <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[mobile_login][enable]" id="supercheckout_mobile_login" checked="checked" />
                                                                                    </div>
                                                                                <?php }?>                                                                    
                                                                            <?php } else { ?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                    <div>
                                                                                        <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[mobile_login][enable]" id="supercheckout_mobile_login" />
                                                                                    </div>
                                                                                <?php } else { ?>
                                                                                    <div class="make-switch" data-on="primary" data-off="default">
                                                                                        <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[mobile_login][enable]" id="supercheckout_mobile_login"/>
                                                                                    </div>
                                                                                <?php }?>
                                                                            <?php }?>
                                                                        </td>
                                                                    </tr>
                                                                <?php }?>

                                                                <tr>
                                                                    <td class="name vertical_top_align" ><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show popup','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show popup rather than redirect when customer clicks on Facebook or Google button','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings" style="padding-bottom:10px;">
                                                                        <input type="hidden" value="0" name="velocity_supercheckout[social_login_popup][enable]" />
                                                                        <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['social_login_popup']['enable'] == 1) {?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                <div>
                                                                                    <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[social_login_popup][enable]" id="supercheckout_social_login_popup" checked="checked" />
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="make-switch" data-on="primary" data-off="default">
                                                                                    <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[social_login_popup][enable]" id="supercheckout_social_login_popup" checked="checked" />
                                                                                </div>
                                                                            <?php }?>                                                                    
                                                                        <?php } else { ?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                <div>
                                                                                    <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[social_login_popup][enable]" id="supercheckout_social_login_popup" />
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="make-switch" data-on="primary" data-off="default">
                                                                                    <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[social_login_popup][enable]" id="supercheckout_social_login_popup"/>
                                                                                </div>
                                                                            <?php }?>
                                                                        <?php }?>
                                                                    </td>
                                                                </tr>


                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Facebook Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>  
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Facebook Login Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[fb_login][enable]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['fb_login']['enable'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[fb_login][enable]" id="supercheckout_fb_login" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[fb_login][enable]" id="supercheckout_fb_login" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[fb_login][enable]" id="supercheckout_fb_login" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[fb_login][enable]" id="supercheckout_fb_login"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                    <span class="pad-right" style="font-size:14px;font-weight:500;float:right; "><a href="javascript:void(0)" onclick="configurationAccordian('facebook');" <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>style="color: #428bca;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to see Steps to configure Facebook app ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></span>
                                                                </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><span class="asterisk">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook App Id','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook App Id Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="text" class="text-width" name="velocity_supercheckout[fb_login][app_id]" id="velocity_supercheckout_fb_app_id" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['fb_login']['app_id'];?>
"/>
                                                                        <span id="fb_app_id_error" class="supercheckout_error" ></span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="name vertical_top_align" ><span class="control-label"><span class="asterisk">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook App Secret','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook App Secret Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings" >
                                                                        <input type="text" class="text-width" name="velocity_supercheckout[fb_login][app_secret]" id="velocity_supercheckout_fb_app_secret" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['fb_login']['app_secret'];?>
"/>
                                                                        <span id="fb_app_secret_error" class="supercheckout_error" ></span>
                                                                    </td>

                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Google Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Google Login Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="hidden" value="0" name="velocity_supercheckout[google_login][enable]" />
                                                                        <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['google_login']['enable'] == 1) {?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                <div>
                                                                                    <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[google_login][enable]" id="supercheckout_google_login" checked="checked" />
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="make-switch" data-on="primary" data-off="default">
                                                                                    <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[google_login][enable]" id="supercheckout_google_login" checked="checked" />
                                                                                </div>
                                                                            <?php }?>                                                                    
                                                                        <?php } else { ?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                <div>
                                                                                    <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[google_login][enable]" id="supercheckout_google_login" />
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="make-switch" data-on="primary" data-off="default">
                                                                                    <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[google_login][enable]" id="supercheckout_google_login"/>
                                                                                </div>
                                                                            <?php }?>
                                                                        <?php }?>
                                                                        <span class="pad-right" style="font-size:14px;font-weight:500;float:right;"><a href="javascript:void(0)" onclick="configurationAccordian('google');" <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>style="color: #428bca;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to see Steps to configure Google App ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></span>
                                                                    </td>
                                                                </tr>

                                                                <tr style="display: none;">
                                                                    <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google App Id','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google App Id Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="text" class="text-width" name="velocity_supercheckout[google_login][app_id]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['google_login']['app_id'];?>
"/>
                                                                        <span id="gl_app_id_error" class="supercheckout_error" ></span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><span class="asterisk">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Client Id','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Client Id Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="text" class="text-width" name="velocity_supercheckout[google_login][client_id]" id="velocity_supercheckout_ggl_client_id" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['google_login']['client_id'];?>
"/>
                                                                        <span id="gl_client_id_error" class="supercheckout_error" ></span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><span class="asterisk">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google App Secret','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google App Secret Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="text" class="text-width" name="velocity_supercheckout[google_login][app_secret]" id="velocity_supercheckout_ggl_app_secret" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['google_login']['app_secret'];?>
"/>
                                                                        <span id="gl_app_secret_error" class="supercheckout_error" ></span>
                                                                    </td>
                                                                </tr>

                                                            </table>

                                                            <div style= "  text-align:center;padding: 25px; height:140px;margin: 40px;margin-bottom:0px; background: aliceblue;<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>height: 100px;<?php }?>" id="loginizer_link">
                                                                <div><span style="font-size:18px;" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Want to add more social login options for your customers?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                    <br>
                                                                    <br>
                                                                    <a target="_blank" href="http://addons.prestashop.com/en/social-commerce-facebook-prestashop-modules/18220-social-network-for-login-9-in-1-fast-secure.html"><span style="margin-left:30%;max-width:40% !important;font-size:18px;" class='btn btn-block btn-success action-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add more buttons','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></a><div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="facebook_acc" style="display:none;">
                                                                <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Steps To Configure Facebook App:','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                                <div id="facebook_accordian" class="accordian_container">
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 1','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 </h3>
                                                                    <div class="accdiv">
                                                                        <span class="pad-right"><a href="https://developers.facebook.com/apps/" target="_blank" style="color: #00aff0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to get Facebook app id and app secret','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></span>
                                                                    </div>
                                                                    
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 2','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook2.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 3, 4','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook3,4.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 5','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                        <pre><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on "Add Product" screen, Click on "Facebook Login" Setup Button','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></pre>
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/Step_5.png' />
                                                                             
                                                                        <pre style="margin-top:30px"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now Click on the Setting under "Facebook Login"','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></pre>
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/Step_6.png' />                                                                             
                                                                        <pre style="margin-top:30px"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter the following URL in Valid OAuth Redirect URL','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b>
                                                                        <br/><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['front_root_url']->value,'htmlall','UTF-8' ));
echo 'index.php?fc=module&module=supercheckout&controller=supercheckout&login_type=fb';?>
                                                                        
                                                                        </pre>
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/Step_7.png' />                                                                                                                                                          
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 6','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                        <pre><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now go to Settings -> Basics from left menu','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></pre>
                                                                         <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook6.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 7','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook7.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 8, 9, 10','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                            <pre><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For Step #8 use App Domain: ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['domain']->value,'htmlall','UTF-8' ));?>
<br><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For Step #9 use Site Url: ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manual_dir']->value,'htmlall','UTF-8' ));?>
</pre>
                                                                            <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook8,9,10.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 11, 12','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                            <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook11,12.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 13, 14','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook13,14.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 15, 16','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook15,16.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 17, 18','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/facebook/facebook17,18.png' />
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div id="google_acc" style="display:none;">
                                                                <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Steps To Configure Google App:','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                                <div id="google_accordian" class="accordian_container">
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 1','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                        <span class="pad-right"><a href="https://console.developers.google.com/project" target="_blank" style="color: #00aff0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to get Google  client id and client secret','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></span>
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 2, 3','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google_3.png' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 4, 5','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google_4_5.png' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 6, 7, 8','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google6,7,8.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 9','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google9.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 10, 11','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google10,11.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 12, 13, 14, 15','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                            <pre><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use Authorized javascript origins: ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manual_dir']->value,'htmlall','UTF-8' ));?>
</b></br><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use Authorized Redirect Url: ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['front_root_url']->value,'htmlall','UTF-8' ));
echo 'index.php?fc=module&module=supercheckout&controller=supercheckout&login_type=google';?>
</pre>
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google12,13,14,15.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 16, 17','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google16,17.jpg' />
                                                                    </div>
                                                                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 18, 19','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                    <div class="accdiv">
                                                                             <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google/google18,19.png' />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>    
                                                    </div>
                                                </div>

                                                <!--------------- End - Login -------------------->    

                                                <!--------------- Start - Mailchimp -------------------->

                                                <div id="tab_mailchimp" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MailChimp','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <div class="block">
                                                            <table class="form">
                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable MailChimp','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable/Disable Mailchimp','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="hidden" value="0" name="velocity_supercheckout[mailchimp][enable]" />
                                                                        <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['enable'] == 1) {?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                <div>
                                                                                    <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[mailchimp][enable]" id="supercheckout_mailchimp_enable" checked="checked" />
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="make-switch" data-on="primary" data-off="default">
                                                                                    <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[mailchimp][enable]" id="supercheckout_mailchimp_enable" checked="checked" />
                                                                                </div>
                                                                            <?php }?>                                                                    
                                                                        <?php } else { ?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                                <div>
                                                                                    <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[mailchimp][enable]" id="supercheckout_mailchimp_enable" />
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="make-switch" data-on="primary" data-off="default">
                                                                                    <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[mailchimp][enable]" id="supercheckout_mailchimp_enable"/>
                                                                                </div>
                                                                            <?php }?>
                                                                        <?php }?>
                                                                        <div class="widget-body uniformjs" style="padding-top: 1%;">


                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[mailchimp][default]" value="1" <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['default']) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['default'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe customers as soon as they come out from Email field','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MailChimp Api Key','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter MailChimp Api Key','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <span style="display: inline-block;width:90%;">
                                                                            <input type="text" class="text-width" name="velocity_supercheckout[mailchimp][api]" value="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['api'])) {
echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['api'];
}?>" id="supercheckout_mailchimp_key"/>
                                                                            <input type="hidden" class="text-width" name="velocity_supercheckout[mailchimp][list]" value="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['list'])) {
echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['mailchimp']['list'];
}?>" id="supercheckout_mailchimp_list"/>
                                                                        </span>
                                                                        <span ><input type="button" style="padding: 7.2px 12px;" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get List','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" onclick="getMailChimpList()" id="mailchimp_listbtn" class="btn">
                                                                        </span>
                                                                        <span id="mailchimp_api_key_error" class="supercheckout_error" ></span>
                                                                    </td>
                                                                </tr> 

                                                                <tr>
                                                                    <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MailChimp List','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select MailChimp List ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <div id="mailchimp_loading" style="background-image: url('../modules/supercheckout/views/img/admin/loading.gif');background-repeat: no-repeat;height:20px;display: none;"></div>
                                                                        <div id="supercheckout_list"></div>
                                                                    </td>
                                                                </tr>  
                                                                                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!--------------- End - Mailchimp -------------------->    

                                                <!--------------- Start - Addresses -------------------->

                                                <div id="tab_Addr" class="tab-pane tab-form">
                                                    <?php $_smarty_tpl->_assignInScope('conditional', '');?>
                                                    <div class="block">
                                                        <hr style="margin-bottom:5px;">
                                                        <div class="row">
                                                            <div class="span">
                                                                <p style="margin-bottom: 0; margin-right: 5px">
                                                                    <span style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note:','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                    <br>
                                                                    <span style="color: rgb(217, 83, 79);font-weight: bold;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please do not hide fields with * if they are mandatory in following Prestashop settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check FAQs for more details','mod'=>'supercheckout'),$_smarty_tpl ) );?>
)</span><br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1. International->Locations->Countries->Edit country.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2. Customers->Addresses->Set required fields for this section.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr style="margin-top:5px;">
                                                        <table class="form">
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inline Validations','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable/Disable Inline Validations','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[inline_validation][enable]" />
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['inline_validation']['enable']) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['inline_validation']['enable'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[inline_validation][enable]" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[inline_validation][enable]" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[inline_validation][enable]" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[inline_validation][enable]" />
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Save Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show/hide Save address button on our checkout page to save address of customer before placing order','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[enable_save_address]" />
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable_save_address']) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable_save_address'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_save_address]" id="supercheckout_enable_save_address" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_save_address]" id="supercheckout_enable_save_address" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_save_address]" id="supercheckout_enable_save_address" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_save_address]" id="supercheckout_enable_save_address"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                                                                                                                                                    <tr> 
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Auto Detect Country','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable to auto detect/selection of country in country dropdown in the address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[enable_auto_detect_country]" />
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable_auto_detect_country']) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['enable_auto_detect_country'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_auto_detect_country]" id="supercheckout_enable_auto_detect_country" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_auto_detect_country]" id="supercheckout_enable_auto_detect_country" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[enable_auto_detect_country]" id="supercheckout_enable_auto_detect_country" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[enable_auto_detect_country]" id="supercheckout_enable_auto_detect_country"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>

                                                                </td>
                                                            </tr>
                                                                                                                                                                                    <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Google Auto Address Fill','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>  
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Auto fillup of address using Google Places Integration','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[google_auto_address][enable]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['google_auto_address']['enable'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[google_auto_address][enable]" id="supercheckout_google_auto_address" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[google_auto_address][enable]" id="supercheckout_google_auto_address" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[google_auto_address][enable]" id="supercheckout_google_auto_address" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[google_auto_address][enable]" id="supercheckout_google_auto_address"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                    <span class="pad-right" style="font-size:14px;font-weight:500;float:right;"><a href="javascript:void(0)" onclick="configurationAccordian('google_auto_address');" <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>style="color: #428bca;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to see Steps to configure Google API Key ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></span>
                                                                </td>
                                                                </tr>

                                                                <tr id="google_api_key" style="display:none;">
                                                                    <td class="name vertical_top_align"><span class="control-label"><span class="asterisk">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google API Key','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                        <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google API Key','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    </td>
                                                                    <td class="settings">
                                                                        <input type="text" class="text-width" name="velocity_supercheckout[google_auto_address][api_key]" id="velocity_supercheckout_google_api_key" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['google_auto_address']['api_key'],'htmlall','UTF-8' ));?>
"/>
                                                                        <span id="google_api_key_error" class="supercheckout_error" ></span>
                                                                    </td>
                                                                </tr>
                                                                                                                    </table>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Personal','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="sortable ui-sortable">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'], 'p_addr', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p_addr']->value) {
?>
                                                                    <tr id="customer_personal_<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
_input" class="sort-item" sort-data="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>">
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][id]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][title]" />
                                                                <td class="name">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['title'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<input class="sort" class="input-sm form-control col-md-12" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sort_order]" /></span>
                                                                </td>
                                                                <td class="left drag-col-2 col-pad-left">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="cus_personal_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_require" type="checkbox" class="checkbox input-checkbox-option require_address_field" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['guest']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['guest']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="cus_personal_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option display_address_field" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="left drag-col-2">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="cus_personal_logged_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_require" type="checkbox" class="checkbox input-checkbox-option require_address_field" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['logged']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['logged']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="cus_personal_logged_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option display_address_field" name="velocity_supercheckout[customer_personal][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_personal'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="reorder">
                                                                    <i class="icon-reorder"></i>
                                                                    <span style='font-style: italic; margin-left: 5px;'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to Sort','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                </td>
                                                                </tr>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </tbody>
                                                        </table>    
                                                    </div>

                                                    <div class="block"><br>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Subscription','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:9.5%;"></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="sortable ui-sortable">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'], 'p_addr', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p_addr']->value) {
?>
                                                                    <tr id="customer_subsription_<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
_input" class="sort-item" sort-data="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>">
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
" name="velocity_supercheckout[customer_subscription][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][id]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" name="velocity_supercheckout[customer_subscription][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][title]" />
                                                                <td class="name">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['title'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<input class="sort" class="input-sm form-control col-md-12" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>" name="velocity_supercheckout[customer_subscription][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sort_order]" /></span>
                                                                </td>
                                                                <td class="left drag-col-2 col-pad-left">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="cus_subsription_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_checked" type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[customer_subscription][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][checked]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['guest']['checked']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['guest']['checked'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show as Checked','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="cus_subsription_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[customer_subscription][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['customer_subscription'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="reorder">
                                                                    <i class="icon-reorder"></i>
                                                                    <span style='font-style: italic; margin-left: 5px;'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to Sort','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                </td>
                                                                </tr>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </tbody>
                                                        </table>    
                                                    </div>

                                                    <div class="block"><br>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr id="use_delivery_for_payment_add" class="">
                                                                    <td class="name">
                                                                        <span><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use Delivery Address as Invoice Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b>:</span>
                                                                    </td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input id="use_delivery_for_payment_add_guest" type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[use_delivery_for_payment_add][guest]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['use_delivery_for_payment_add']['guest']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['use_delivery_for_payment_add']['guest'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show as Checked','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <label class="checkboxinline no-bold">
                                                                                <input id="show_use_delivery_for_payment_add_guest" type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[show_use_delivery_for_payment_add][guest]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['show_use_delivery_for_payment_add']['guest']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['show_use_delivery_for_payment_add']['guest'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input id="use_delivery_for_payment_add_logged" type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[use_delivery_for_payment_add][logged]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['use_delivery_for_payment_add']['logged']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['use_delivery_for_payment_add']['logged'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show as Checked','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <label class="checkboxinline no-bold">
                                                                                <input id="show_use_delivery_for_payment_add_logged" type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[show_use_delivery_for_payment_add][logged]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['show_use_delivery_for_payment_add']['logged']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['show_use_delivery_for_payment_add']['logged'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                            </label>
                                                                        </div>
                                                                    </td>


                                                                    <td class="reorder"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>

                                                    <div class="block"><br><br>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="sortable ui-sortable">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'], 'p_addr', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p_addr']->value) {
?>
                                                                    <tr id="customer_personal_<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
_input" class="sort-item" sort-data="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>">
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][id]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][title]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['conditional'];?>
" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][conditional]" />
                                                                <td class="name">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['title'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<input class="sort" class="input-sm form-control col-md-12" type="text" value="<?php if (intval(isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']))) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sort_order]" /></span>
                                                                </td>
                                                                <?php $_smarty_tpl->_assignInScope('conditional', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['conditional']);?>
                                                                <td class="left drag-col-2 col-pad-left">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 'vat_number') {?>
                                                                                <div style="width: 70px;text-align: center;">
                                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To make this field mandatory please go to','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers->Addresses->Set required fields for this section','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <input id="shipping_address_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_require" type="checkbox" class="checkbox input-checkbox-option require_address_field" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                            <?php }?>
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="shipping_address_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option display_address_field" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['highlighted_fields']->value)) {?>
                                                                            <span style="color:red; margin-left: 5px;">*</span>
                                                                        <?php }?>
                                                                    </div>
                                                                </td>
                                                                <td class="left drag-col-2">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 'vat_number') {?>
                                                                                <div style="width: 70px;text-align: center;">
                                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To make this field mandatory please go to','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers->Addresses->Set required fields for this section','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <input id="shipping_address_logged_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_require" type="checkbox" class="checkbox input-checkbox-option require_address_field" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                            <?php }?>
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="shipping_address_logged_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option display_address_field" name="velocity_supercheckout[shipping_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                        </label>
                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['highlighted_fields']->value)) {?>
                                                                            <span style="color:red; margin-left: 5px;">*</span>
                                                                        <?php }?>
                                                                    </div>
                                                                </td>
                                                                <td class="reorder">
                                                                    <i class="icon-reorder"></i>
                                                                    <span style='font-style: italic; margin-left: 5px;'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to Sort','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                </td>
                                                                </tr>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="block"><br>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="sortable ui-sortable">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'], 'p_addr', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p_addr']->value) {
?>
                                                                    <tr id="customer_personal_<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
_input" class="sort-item" sort-data="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>">
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][id]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][title]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['conditional'];?>
" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][conditional]" />
                                                                <td class="name">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['title'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<input class="sort" class="input-sm form-control col-md-12" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sort_order]" /></span>
                                                                </td>
                                                                <?php $_smarty_tpl->_assignInScope('conditional', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['conditional']);?>
                                                                <td class="left drag-col-2 col-pad-left">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 'vat_number') {?>
                                                                                <div style="width: 70px;text-align: center;">
                                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To make this field mandatory please go to','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers->Addresses->Set required fields for this section','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <input id="payment_address_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_require" type="checkbox" class="checkbox input-checkbox-option require_address_field" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                            <?php }?>
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="payment_address_guest_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option display_address_field" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['highlighted_fields']->value)) {?>
                                                                            <span style="color:red; margin-left: 5px;">*</span>
                                                                        <?php }?>
                                                                    </div>
                                                                </td>
                                                                <td class="left drag-col-2">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 'vat_number') {?>
                                                                                <div style="width: 70px;text-align: center;">
                                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To make this field mandatory please go to','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers->Addresses->Set required fields for this section','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <input id="payment_address_logged_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_require" type="checkbox" class="checkbox input-checkbox-option require_address_field" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                            <?php }?>
                                                                        </label>
                                                                        <label class="checkboxinline no-bold">
                                                                            <input id="payment_address_logged_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_display" type="checkbox" class="checkbox input-checkbox-option display_address_field" name="velocity_supercheckout[payment_address][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_address'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['highlighted_fields']->value)) {?>
                                                                            <span style="color:red; margin-left: 5px;">*</span>
                                                                        <?php }?>
                                                                    </div>
                                                                </td>
                                                                <td class="reorder">
                                                                    <i class="icon-reorder"></i>
                                                                    <span style='font-style: italic; margin-left: 5px;'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to Sort','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                </td>
                                                                </tr>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </tbody>
                                                        </table>
                                                        <div id="google_auto_address_acc" >
                                                            <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Steps To Configure Google API:','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                            <div id="google_auto_address_accordian" class="accordian_container">
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 1','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                    <span class="pad-right"><a href="https://console.developers.google.com/project/_/apiui/apis/enabled" target="_blank" style="color: #00aff0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to go to the Google API Console.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></span>
                                                                </div>

                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 2','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_2.png' />
                                                                </div>
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 3','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_3.png' />
                                                                </div>
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 4','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_4.png' />
                                                                </div>
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 5','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_5.png' />
                                                                </div>
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 6','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_6.png' />
                                                                </div>
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 7','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">                                                                            
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_7.png' />
                                                                </div>
                                                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 8','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                                                                <div class="accdiv">
                                                                        <img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
views/img/admin/manual_steps/google_auto_address/google_auto_addr_8.png' />
                                                                </div>                                                                    
                                                            </div>
                                                        </div>
                                                    </div>                                                        
                                                </div>

                                                <!--------------- End - Addresses -------------------->

                                                <!--------------- Start - Payment Method -------------------->

                                                <div id="tab_payment_method" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form">
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Methods','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Methods Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[payment_method][enable]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_method']['enable'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[payment_method][enable]" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[payment_method][enable]" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[payment_method][enable]" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[payment_method][enable]" />
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Style','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Method Display Style Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="left settings">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[payment_method][display_style]" value="0"  <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_method']['display_style'] == 0) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Only','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[payment_method][display_style]" value="1" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_method']['display_style'] == 1) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text With Image','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[payment_method][display_style]" value="2" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_method']['display_style'] == 2) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Only','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected Default Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected Default Payment Method Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                    <p style="font-size: 11px; color: #666;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In case you select a Payment Method with sub payment options here, than the last sub payment options will be selected by default.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                </td>
                                                                <td class="settings">
                                                                    <div class='span4'>
                                                                        <select <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>class="selectpicker vss_sc_ver15"<?php }?> name="velocity_supercheckout[payment_method][default]" >
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'pay_methods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pay_methods']->value) {
?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['pay_methods']->value['id_module'] == $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['payment_method']['default']) {?>
                                                                                    <option value="<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" selected='selected'><?php echo $_smarty_tpl->tpl_vars['pay_methods']->value['display_name'];?>
</option>
                                                                                <?php } else { ?>
                                                                                    <option value="<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
"><?php echo $_smarty_tpl->tpl_vars['pay_methods']->value['display_name'];?>
</option>
                                                                                <?php }?>
                                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan='2'><br>
                                                                    <p>
                                                                        <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b>
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method Style Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change logo and Title of Payment Methods','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <div id="payment-accordian" class="accordian_container">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'pay_methods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pay_methods']->value) {
?>
                                                                <h3><?php echo $_smarty_tpl->tpl_vars['pay_methods']->value['display_name'];?>
</h3>
                                                                <div class="accdiv-logo">
                                                                    <table class="form">
                                                                        <tr>
                                                                            <td class="name vertical_top_align"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                                <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter payment method title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                            </td>

                                                                            <td class="settings">
                                                                                <table class="lang-title">
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>

                                                                                        <tr>

                                                                                            <td><div class="span6">
                                                                                                    <input type="text" class="text-width" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][title][<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);
$_prefixVariable2 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable1]['title'][$_prefixVariable2])) {
ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable3 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable3]['title'][$_prefixVariable4];
}?>"/>

                                                                                                </div>
                                                                                            </td>
                                                                                            <td><div class='span0'><img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;
echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
"/></div></td>
                                                                                        </tr>

                                                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="name vertical_top_align"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logo Settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                                <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set payment method logo with dimensions ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                            </td>
                                                                            <td class="settings"><div>
                                                                                    <div class="logo-img" style='padding-left: 10px;padding-top:10px;margin-bottom:15px;'>
                                                                                        <?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable5 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable6 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable5]['logo']['title']) && $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable6]['logo']['title'] != '') {?>
                                                                                            <?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable7 = ob_get_clean();
if (!file_exists(((string)$_smarty_tpl->tpl_vars['root_dir']->value)."/modules/supercheckout/views/img/admin/uploads/".((string)$_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable7]['logo']['title']))) {?>
                                                                                                <input type="hidden" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][logo][title]" id="payment_image_title_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" value="" />
                                                                                                <div><img id="payment-img-<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/no-image.jpg"   style="border: 1px solid #ccc; padding:2px; height: 115px;"/></div>
                                                                                                <?php } else { ?>
                                                                                                <input type="hidden" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][logo][title]"  id="payment_image_title_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable8 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable8]['logo']['title'];?>
" />
                                                                                                <div><img id="payment-img-<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/uploads/<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable9 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable9]['logo']['title'];?>
"   onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/no-image.jpg'" style="border: 1px solid #ccc; padding:2px; height: 115px;"/></div>
                                                                                                <?php }?>
                                                                                            <?php } else { ?>
                                                                                            <input type="hidden" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][logo][title]" id="payment_image_title_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" value="" />
                                                                                            <div><img id="payment-img-<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/no-image.jpg"   style="border: 1px solid #ccc; padding:2px; height: 115px;"/></div>
                                                                                            <?php }?>


                                                                                    </div>


                                                                                    <div style='padding-left: 10px;'>
                                                                                        <span style="display: inline-block;"> <input type="file" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][logo][name]" id="payment-img-<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
_file" onchange="readPaymentURL(<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
, 'payment-img-<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
')" value=""></span><span><input type='button' class="btn btn-primary" onclick="removeFile(<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
);" value='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'supercheckout'),$_smarty_tpl ) );?>
' /></span> <span id="payment-img-<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
_msg" style="margin-left:10px; display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only Images allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="margin-top: 10px;display:flex;padding-left: 10px;">
                                                                                    <span style="padding: 5px 10px 0px 0px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <div class="input-group" style="width: 40%;"><div style="float: left; width: 100%;"><input type="text" style="width: 90%"  class="form-control" id="velocity_supercheckout_payment_method_logo_width_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][logo][resolution][width]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable10 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable10]['logo']['resolution']['width'])) {
ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable11 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable11]['logo']['resolution']['width'];
} else { ?>auto<?php }?>"/><span class="input-group-addon" style="width: 10%; float: left; padding: 8.4px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'px','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div><span id="payment_method_logo_width_error_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" class="supercheckout_error"></span></div>
                                                                                    <span style="padding: 5px 10px 0px 10px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>		<div class="input-group" style="width: 40%;"><div style="float: left; width: 100%;"><input type="text" style="width: 90%" class="form-control" id="velocity_supercheckout_payment_method_logo_height_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" name="velocity_supercheckout_payment[payment_method][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
][logo][resolution][height]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable12 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable12]['logo']['resolution']['height'])) {
ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable13 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['payment_method'][$_prefixVariable13]['logo']['resolution']['height'];
} else { ?>auto<?php }?>"/><span class="input-group-addon" style="width: 10%; float: left; padding: 8.4px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'px','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div><span id="payment_method_logo_height_error_<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
" class="supercheckout_error"></span></div>
                                                                                </div><p class="help-block" style='padding-left: 10px;'> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(To maintain aspect ratio of image, keep either both height and width value as auto or any of them value as auto)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                            </td>
                                                                        </tr>


                                                                    </table>
                                                                </div>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!--------------- End - Payment Method -------------------->

                                                <!--------------- Start - Shipping Method -------------------->

                                                <div id="tab_shipping_method" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form">
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Methods','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Methods Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[shipping_method][enable]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_method']['enable'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[shipping_method][enable]" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[shipping_method][enable]" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[shipping_method][enable]" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[shipping_method][enable]"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="name vertical_top_align">
                                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Style','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Method Display Style Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="left settings">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[shipping_method][display_style]" value="0"  <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_method']['display_style'] == 0) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Only','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[shipping_method][display_style]" value="1" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_method']['display_style'] == 1) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text With Image','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[shipping_method][display_style]" value="2" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_method']['display_style'] == 2) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Only','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected Default Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected Default Shipping Method Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <div class='span4'>
                                                                        <select <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>class="selectpicker vss_sc_ver15"<?php }?> name="velocity_supercheckout[shipping_method][default]" >
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
?>
                                                                                <?php if ($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'] == $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['shipping_method']['default']) {?>
                                                                                    <option value="<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" selected='selected'><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</option>
                                                                                <?php } else { ?>
                                                                                    <option value="<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</option>
                                                                                <?php }?>
                                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan='2'><br>
                                                                    <p>
                                                                        <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b>
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Method Style Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                    </p>
                                                                </td>
                                                            </tr>

                                                        </table>  
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change logo and Title of Delivery Methods','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <div id="delivery-accordian" class="accordian_container">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
?>
                                                                <h3><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</h3>
                                                                <div class="accdiv-logo">
                                                                    <table class="form">
                                                                        <tr>
                                                                            <td class="name vertical_top_align"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                                <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Delivery method title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                            </td>

                                                                            <td class="settings">
                                                                                <table class="lang-title">
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>

                                                                                        <tr>

                                                                                            <td><div class="span6">
                                                                                                    <input type="text" class="text-width" name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][title][<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable14 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);
$_prefixVariable15 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable14]['title'][$_prefixVariable15])) {
ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable16 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);
$_prefixVariable17 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable16]['title'][$_prefixVariable17];
} else {
echo $_smarty_tpl->tpl_vars['carrier']->value['name'];
}?>"/>                                                                                                                                                

                                                                                                </div>
                                                                                            </td>
                                                                                            <td><div class='span0'><img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;
echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
"/></div></td>
                                                                                        </tr>

                                                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="name vertical_top_align"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logo Setting','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                                <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set delivery method logo with dimensions','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                            </td>
                                                                            <td class="settings"><div>
                                                                                    <div class="logo-img" style='padding-left: 10px;padding-top:10px;margin-bottom:15px;'>
                                                                                        <?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable18 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable19 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable18]['logo']['title']) && $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable19]['logo']['title'] != '') {?>
                                                                                            <?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable20 = ob_get_clean();
if (!file_exists(((string)$_smarty_tpl->tpl_vars['root_dir']->value)."/modules/supercheckout/views/img/admin/uploads/".((string)$_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable20]['logo']['title']))) {?>
                                                                                                <input type="hidden" name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][logo][title]" id="delivery_image_title_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" value="" />
                                                                                                <div><img id="delivery-img-<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/no-image.jpg"   style="border: 1px solid #ccc; padding:2px; height: 115px;"/></div>
                                                                                                <?php } else { ?>
                                                                                                <input type="hidden" name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][logo][title]"  id="delivery_image_title_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable21 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable21]['logo']['title'];?>
" />
                                                                                                <div>

                                                                                                    <img id="delivery-img-<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/uploads/<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable22 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable22]['logo']['title'];?>
"   onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/no-image.jpg';" style="border: 1px solid #ccc; padding:2px; height: 115px;"/>

                                                                                                </div>
                                                                                            <?php }?>
                                                                                        <?php } else { ?>
                                                                                            <input type="hidden" name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][logo][title]" id="delivery_image_title_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" value="" />
                                                                                            <div><img id="delivery-img-<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/admin/no-image.jpg"   style="border: 1px solid #ccc; padding:2px; height: 115px;"/></div>
                                                                                            <?php }?>


                                                                                    </div>


                                                                                    <div style='padding-left: 10px;'>
                                                                                        <span style="display: inline-block;"> <input type="file" name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][logo][name]" id="delivery-img-<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
_file" onchange="readDeliveryURL(<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
, 'delivery-img-<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
')" value=""></span><span><input type='button' class="btn btn-primary" onclick="removeDeliveryFile(<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
);" value='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'supercheckout'),$_smarty_tpl ) );?>
' /></span> <span id="delivery-img-<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
_msg" style="margin-left:10px; display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only Images allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="margin-top: 10px;display:flex;padding-left: 10px;">
                                                                                    <span style="padding: 5px 10px 0px 0px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <div class="input-group" style="width: 40%;"><div style="float: left; width: 100%;"><input type="text" style="width: 90%" class="form-control" id="velocity_supercheckout_delivery_method_logo_width_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][logo][resolution][width]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable23 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable23]['logo']['resolution']['width'])) {
ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable24 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable24]['logo']['resolution']['width'];
} else { ?>auto<?php }?>"/><span class="input-group-addon" style="width: 10%; float: left; padding: 8.4px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'px','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div><span id="delivery_method_logo_width_error_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" class="supercheckout_error"></span></div>
                                                                                    <span style="padding: 5px 10px 0px 10px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><div class="input-group" style="width: 40%;"><div style="float: left; width: 100%;"><input type="text" style="width: 90%" class="form-control" id="velocity_supercheckout_delivery_method_logo_height_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
"  name="velocity_supercheckout_payment[delivery_method][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][logo][resolution][height]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable25 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable25]['logo']['resolution']['height'])) {
ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable26 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['velocity_supercheckout_payment']->value['delivery_method'][$_prefixVariable26]['logo']['resolution']['height'];
} else { ?>auto<?php }?>"/><span class="input-group-addon" style="width: 10%; float: left; padding: 8.4px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'px','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div><span id="delivery_method_logo_height_error_<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
" class="supercheckout_error"></span></div>
                                                                                </div><p class="help-block" style='padding-left: 10px;'> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(To maintain aspect ratio of image, keep either both height and width value as auto or any of them value as auto)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                            </td>
                                                                        </tr>


                                                                    </table>
                                                                </div>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--------------- End - Shipping Method -------------------->

                                                <!--------------- Start - Ship to pay -------------------->

                                                <div id="tab_ship_to_pay" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ship2pay','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <div style="text-shadow:none;background: #f8fcfe !important;color: #31b0d5 !important;" class="alert alert-info">
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide payment methods for customers based upon their shipping method selection.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on respective payment method to disable it for desired shipping method, do not forget to click above on save button to save all settings.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                        </div>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
?>

                                                            <div style="margin-left: 5%;  margin-top:25px;width: 40%;  float: left;  border: 1px solid rgb(0, 0, 0);"> 

                                                                <div style="text-align: center;  font-size: 16px;  border-bottom: 1px solid;  padding: 5px;  background-color: aliceblue;">    
                                                                    <span><a style="float:left;" class="ship2pay-glyphicons glyphicons cargo"><i></i></a></span><span style="padding-left: 14px;"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</span>
                                                                </div>

                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'pay_methods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pay_methods']->value) {
?>								    

                                                                    <?php ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable27 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable28 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);
$_prefixVariable29 = ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);
$_prefixVariable30 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['ship_to_pay'][$_prefixVariable27][$_prefixVariable28]) && $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['ship_to_pay'][$_prefixVariable29][$_prefixVariable30] == 1) {?>
                                                                        <div style="border: 1px solid #B13131;background-color: rgb(224, 69, 69)" class="ship2pay-div" id="velocity_supercheckout[ship_to_pay][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
]">
                                                                            <input style="display:none;" type="checkbox" name="velocity_supercheckout[ship_to_pay][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
]" checked="checked" value="1">
                                                                            <span class="tickcross-sign">&#10060;</span><?php echo $_smarty_tpl->tpl_vars['pay_methods']->value['display_name'];?>

                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div style="border: 1px solid #257925;background-color: rgb(83, 199, 83);" class="ship2pay-div" id="velocity_supercheckout[ship_to_pay][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
]">
                                                                            <input style="display:none;" type="checkbox" name="velocity_supercheckout[ship_to_pay][<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']);?>
][<?php echo intval($_smarty_tpl->tpl_vars['pay_methods']->value['id_module']);?>
]" value="1"> 
                                                                            <span class="tickcross-sign">&#10004;</span><?php echo $_smarty_tpl->tpl_vars['pay_methods']->value['display_name'];?>

                                                                        </div>

                                                                    <?php }?>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>

                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                </div>

                                                <!--------------- End - Ship to pay -------------------->
                                                
                                                <!--------------- Start - Custom Fields -------------------->
                                                
                                                <!-- Start - Modal Popup Add new Custom Field -->
                                                
                                                <div class="modal fade" id="modal_add_new_custom_field_form" tab-index="-1" aria-hidden="true" aria-labelledby="modal-incentive-form">
                                                    <div class="modal-dialog" style="width:50%">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <span class="font_popup_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Custom Field','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                <button type="button" class="close" onclick="closeModalPopup('modal_add_new_custom_field_form')"><span aria-hidden="true">×</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></button>
                                                            </div>
                                                            <div class="modal-body" style="padding-bottom:0;">
                                                                <div class="row">
                                                                    <div class="span" style="margin-left:0; width:100%;">
                                                                        <div id="modal_incentive_form_process_status" class="modal_process_status_blk alert" style="display:none;"></div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div style="overflow-y:auto !important;">
                                                                    <table class="list form" style="width:100%">
                                                                        <tbody id="custom_table_tbody">
                                                                            <tr class="supercheckout_custom_field_form_fields">
                                                                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Field Label','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label of the custom field.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
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
                                                                                                <input class="required_entry supercheckout_field_label <?php if ($_smarty_tpl->tpl_vars['language_current']->value != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>hidden_custom<?php }?>" type="text" id='field_label_language_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
' name="custom_fields[field_label][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]">
                                                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                        </span>
                                                                                        <span class='float_left'>
                                                                                            <select class="width_small" name="languages" onchange="changeLanguageBox(this, 'field_label')">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language_current']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['language_code'];?>
</option>
                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </select>
                                                                                        </span>
                                                                                        <span id="error_message_field_label" class="error_message new_line hidden_custom">Error!</span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr class="supercheckout_custom_field_form_fields">
                                                                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help Text (optional)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help text for the custom field.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
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
                                                                                                <input class="supercheckout_help_text <?php if ($_smarty_tpl->tpl_vars['language_current']->value != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>hidden_custom<?php }?>" type="text" id='help_text_language_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
' name="custom_fields[help_text][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]">
                                                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                        </span>
                                                                                        <span class='float_left'>
                                                                                            <select class="width_small" name="languages" onchange="changeLanguageBox(this, 'help_text')">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language_current']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['language_code'];?>
</option>
                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </select>
                                                                                        </span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td class="right"><span class="control-label"><span class="required">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type of the custom input field.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="span5">
                                                                                        <select class="dropdn_templates" id="supercheckout_custom_field_type" name="custom_fields[type]" onchange="checkFieldType(this)">
                                                                                            <option value="textbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Box','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="selectbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Box','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="textarea"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text Area','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="radio"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio Buttons','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="checkbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Boxes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr class="supercheckout_custom_field_form_fields hidden_custom" id="field_options">
                                                                                <td class="right"><span class="control-label"><span class="required">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Field Options','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter the data for options of the field.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter only one option in 1 line.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Avoid blank lines.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                                                                                                                        <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accepted format example','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: m|<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Male','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                                    <p class="help-block">f|<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Female','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="span">
                                                                                        <span class='float_left margin_right_20'>
                                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                                                                <textarea class="supercheckout_field_options <?php if ($_smarty_tpl->tpl_vars['language_current']->value != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>hidden_custom<?php }?>" id='field_options_language_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
' name="custom_fields[field_options][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]"></textarea>
                                                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                        </span>
                                                                                        <span class='float_left'>
                                                                                            <select class="width_small" name="languages" onchange="changeLanguageBox(this, 'field_options')">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language_current']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['language_code'];?>
</option>
                                                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </select>
                                                                                        </span>
                                                                                        <span id="error_message_field_options" class="error_message new_line hidden_custom">Error!</span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td class="right"><span class="control-label"><span class="required">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position of custom input field where it will be displayed.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="span5">
                                                                                        <select class="dropdn_templates" name="custom_fields[position]">
                                                                                            <option value="shipping_address_form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address Form','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="payment_address_form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address Form','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="cart_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Block','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="customer_registration_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Registration Block','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr class="supercheckout_custom_field_form_fields">
                                                                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Value (optional)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default value of the custom input field.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For selectbox, radio or checkboxes, set the default value like this.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Option','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:- n|No, <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Value','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:- n</p>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="span">
                                                                                        <input class="" type="text" name="custom_fields[default_value]" value="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td class="right"><span class="control-label"><span class="required">*</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Validation Type','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type of the validation you want to set for the field.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Validation type will be automatically set as None in case of Selectbox, Radio or Checkboxes.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="span5">
                                                                                        <select class="dropdn_templates" name="custom_fields[validation_type]">
                                                                                            <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                                            <option value="isInt">isInt</option>
                                                                                            <option value="isName">isName</option>
                                                                                            <option value="isEmail">isEmail</option>
                                                                                            <option value="isDate">isDate</option>
                                                                                            <option value="isUrl">isUrl</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td class="right"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set field as required or not required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="form-group">
                                                                                        <div class="col-lg-9">
                                                                                            <span class="switch prestashop-switch fixed-width-lg">
                                                                                                <input type="radio" name="custom_fields[required]" id="custom_fields[required]_on" value="1">
                                                                                                <label for="custom_fields[required]_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                                                                                                <input type="radio" name="custom_fields[required]" id="custom_fields[required]_off" value="0" checked="checked">
                                                                                                <label for="custom_fields[required]_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );?>
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
                                                                                    <i class="icon-question-sign tooltip_color" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set the field as active or inactive.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                                </td>
                                                                                <td class="supercheckout_popup_form_field">
                                                                                    <div class="form-group">
                                                                                        <div class="col-lg-9">
                                                                                            <span class="switch prestashop-switch fixed-width-lg">
                                                                                                <input type="radio" name="custom_fields[active]" id="custom_fields[active]_on" value="1" checked="checked">
                                                                                                <label for="custom_fields[active]_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                                                                                                <input type="radio" name="custom_fields[active]" id="custom_fields[active]_off" value="0">
                                                                                                <label for="custom_fields[active]_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );?>
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
                                                                <button type="button" onclick="closeModalPopup('modal_add_new_custom_field_form')" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</button>
                                                                <button type="button" onclick="submitForm()" class="btn btn-primary">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                    <img id='loader_add_form' class='loader_save_button hidden_custom' src='<?php echo $_smarty_tpl->tpl_vars['module_dir_url']->value;?>
/supercheckout/views/img/admin/ajax_loader.gif'/>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- End - Modal Popup Add new Custom Field -->
                                                
                                                <!-- Start -Modal Popup Edit Custom Field -->
                                                <div class="modal fade" id="modal_edit_custom_field_form" tab-index="-1" aria-hidden="true" aria-labelledby="modal-incentive-form">
                                                    <!-- Render edit form here -->
                                                </div>
                                                <!-- End - Modal Popup Edit Custom Field -->
                                                
                                                <div id="tab_custom_fields" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Fields','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <div>
                                                            <table class="table_custom_bordered" id="table_custom_fields_data" style="width: 100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'S. No.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Field Label','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                        <th class="center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbody_custom_fields_data">
                                                                    <?php $_smarty_tpl->_assignInScope('counter', "1");?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields_details']->value, 'array_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['array_field']->value) {
?>
                                                                        <tr class="pure-table-odd" id="tr_pure_table_<?php echo $_smarty_tpl->tpl_vars['array_field']->value['id_velsof_supercheckout_custom_fields'];?>
">
                                                                            <td><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</td>
                                                                            <td class="width_25"><div class="div_250px_ellipsis"><?php echo $_smarty_tpl->tpl_vars['array_field']->value['field_label'];?>
</div></td>
                                                                            <td><?php echo $_smarty_tpl->tpl_vars['array_field']->value['type'];?>
</td>
                                                                            <td><?php echo $_smarty_tpl->tpl_vars['array_field']->value['position'];?>
</td>
                                                                            <td><?php if ($_smarty_tpl->tpl_vars['array_field']->value['required'] == '1') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );
}?></td>
                                                                            <td><?php if ($_smarty_tpl->tpl_vars['array_field']->value['active'] == '1') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'supercheckout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'supercheckout'),$_smarty_tpl ) );
}?></td>
                                                                            <td class="center" style="padding: 12px;">
                                                                                <a style="margin-top: -26px;" href="javascript://" onclick="displayEditCustomFieldPopup(<?php echo $_smarty_tpl->tpl_vars['array_field']->value['id_velsof_supercheckout_custom_fields'];?>
)" type="11" class="velsof-glyphicons2 glyphicons pencil"><i title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this custom field','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></a>                                                                                                
                                                                                <a style="margin-top: -26px;" href="javascript://" onclick="deleteCustomFieldRow(<?php echo $_smarty_tpl->tpl_vars['array_field']->value['id_velsof_supercheckout_custom_fields'];?>
)" type="11" class="velsof-glyphicons2 glyphicons bin"><i title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this custom field','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
                                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    
                                                                    <tr id="tr_custom_fields_add_new">
                                                                        <td colspan="6" class="opacity_0"></td>
                                                                        <td class="left center">
                                                                            <a style="cursor: pointer; text-decoration: none;" href="javascript:void(0)" onclick="addNewCustomFieldPopup()" data-toggle="modal">
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
                                                
                                                <!--------------- End - Custom Fields -------------------->


                                                <!--------------- Start - Cart -------------------->

                                                <div id="tab_cart" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form">
                                                            <tr>
                                                                <td class="name vertical_top_align"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span>                                                                
                                                                    <i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Cart Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i>
                                                                </td>
                                                                <td class="settings">
                                                                    <input type="hidden" value="0" name="velocity_supercheckout[display_cart]" />
                                                                    <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['display_cart'] == 1) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[display_cart]" checked="checked" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[display_cart]" checked="checked" />
                                                                            </div>
                                                                        <?php }?>                                                                    
                                                                    <?php } else { ?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['IE7']->value == true) {?>
                                                                            <div>
                                                                                <input class="checkbox" type="checkbox" value="1" name="velocity_supercheckout[display_cart]" />
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="make-switch" data-on="primary" data-off="default">
                                                                                <input class="make-switch" type="checkbox" value="1" name="velocity_supercheckout[display_cart]"/>
                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                            
                                                        </table>

                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'], 'p_addr', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p_addr']->value) {
?>
                                                                    <tr>
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['id'];?>
" name="velocity_supercheckout[cart_options][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][id]" />
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" name="velocity_supercheckout[cart_options][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][title]" />
                                                                <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['title'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<input class="sort" class="input-sm form-control col-md-12" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['sort_order'])) {
echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['sort_order']);
}?>" name="velocity_supercheckout[cart_options][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][sort_order]" /></span></td>
                                                                <td class="left drag-col-2 col-pad-left">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[cart_options][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="left drag-col-2">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="checkboxinline no-bold">
                                                                            <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[cart_options][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_options'][$_smarty_tpl->tpl_vars['k']->value]['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                </tr>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <tr<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?> class="vss_scparent_ver15"<?php }?>>
                                                                <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Image Size','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Image Size Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></td>
                                                                <td colspan="2" class="left drag-col-2 col-pad-left">
                                                                    <div style="width: 45%" class='span1'><input type='text' <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>class="form-control vss-form-control-ver15"<?php }?> name='velocity_supercheckout[cart_image_size][width]' value='<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_image_size']['width']);?>
' /><span id="cart_product_image_size_width_error" class="supercheckout_error"></span></div>
                                                                    <div class="span0<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?> vss-resolution-ver15<?php }?>">X</div>
                                                                    <div style="width: 45%" class='span1'><input type='text' <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>class="form-control vss-form-control-ver15"<?php }?> name='velocity_supercheckout[cart_image_size][height]' value='<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['cart_image_size']['height']);?>
' /><span id="cart_product_image_size_height_error" class="supercheckout_error"></span></div>
                                                                </td>
                                                            </tr>
                                                            <tr<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?> class="vss_scparent_ver15"<?php }?>>
                                                                <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity update option','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Quantity Update option at front end in cart summary.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></td>
                                                                <td class="left drag-col-2 col-pad-left">
                                                                    <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[qty_update_option]" value="0"  <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['qty_update_option'] == 0) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'+/- Button','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                        <label class="radio coupon_type_radio">
                                                                            <input type="radio" class="radio coupon_type_radio" name="velocity_supercheckout[qty_update_option]" value="1" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['qty_update_option'] == 1) {?> checked="checked" <?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update Link','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td class="left drag-col-2">

                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <br><br>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product(s) Sub-Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Sub-Total Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][product_sub_total][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['product_sub_total']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['product_sub_total']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][product_sub_total][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['product_sub_total']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['product_sub_total']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voucher Input','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Voucher Input Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][voucher][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['voucher']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['voucher']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][voucher][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['voucher']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['voucher']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Price','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</span></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][shipping_price][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['shipping_price']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['shipping_price']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][shipping_price][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['shipping_price']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['shipping_price']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total tax','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</span></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][total_tax][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total_tax']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total_tax']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][total_tax][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total_tax']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total_tax']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</span></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][total][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[order_total_option][total][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['order_total_option']['total']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br><br>
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                        <table class="form alternate">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="left drag-col-2 col-pad-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                    <th class="left drag-col-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logged in Customer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable gift message details popup','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</span></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][gift_message][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['gift_message']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['gift_message']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][gift_message][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['gift_message']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['gift_message']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>                                                                
                                                                                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Term & Condition','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </span><i class="icon-question-sign supercheckout-tooltip-color" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Term & Condition Tooltip','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"></i></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][term_condition][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][term_condition][guest][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['guest']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['guest']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][term_condition][guest][checked]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['guest']['checked']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['guest']['checked'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show as Checked','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <i class="store_disabled" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option will not display, if disable from default prestashop settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"><span class="store_disabled_msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 !</span></i>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][term_condition][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][term_condition][logged][require]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['logged']['require']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['logged']['require'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Require','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][term_condition][logged][checked]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['logged']['checked']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['term_condition']['logged']['checked'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show as Checked','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                            <i class="store_disabled" data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option will not display, if disable from default prestashop settings','mod'=>'supercheckout'),$_smarty_tpl ) );?>
"><span class="store_disabled_msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 !</span></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment Box for Order','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</span></td>
                                                                    <td class="left drag-col-2 col-pad-left">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][order_comment_box][guest][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['order_comment_box']['guest']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['order_comment_box']['guest']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="left drag-col-2">
                                                                        <div class="widget-body uniformjs" style="padding: 0 !important;">
                                                                            <label class="checkboxinline no-bold">
                                                                                <input type="checkbox" class="checkbox input-checkbox-option" name="velocity_supercheckout[confirm][order_comment_box][logged][display]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['order_comment_box']['logged']['display']);?>
" <?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['confirm']['order_comment_box']['logged']['display'] == 1) {?>checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'supercheckout'),$_smarty_tpl ) );?>
                                                                        
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!--------------- End - Cart -------------------->
                                                                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['gdpr_tpl_dir']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                                                                <!--------------- Start - Design -------------------->

                                                <div id="tab_design" class="tab-pane tab-form">
                                                    <div class="block">
                                                        <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Design','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>                                                            
                                                        <div class="span3">
                                                            <select <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 15) {?>class="selectpicker vss_sc_ver15"<?php }?> name="velocity_supercheckout[layout]" onchange='$.cookie("designTab", 1);
                                                                    location.href = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&velsof_layout=" + $(this).val()'>
                                                                <?php if ($_smarty_tpl->tpl_vars['layout']->value == 1) {?>
                                                                    <option value="1" selected="selected">1-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Columns','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="1">1-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Columns','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['layout']->value == 2) {?>
                                                                    <option value="2" selected="selected">2-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Columns','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="2">2-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Columns','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['layout']->value == 3) {?>
                                                                    <option value="3" selected="selected">3-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Columns','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="3">3-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Columns','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                        <table class="form">
                                                            <tbody>
                                                                <tr>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                <input id="1_col_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort col-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][1_column][column]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['1_column']['column'];?>
" />
                                                                <input id="1_row_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort row-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][1_column][row]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['1_column']['row'];?>
" />
                                                                <input id="1_col_ins_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][1_column][column-inside]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['1_column']['column-inside'];?>
" />

                                                                <input id="2_col_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort col-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][2_column][column]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['column'];?>
" />
                                                                <input id="2_row_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort row-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][2_column][row]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['row'];?>
" />
                                                                <input id="2_col_ins_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][2_column][column-inside]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['column-inside'];?>
" />

                                                                <input id="3_col_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort col-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][3_column][column]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['column'];?>
" />
                                                                <input id="3_row_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort row-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][3_column][row]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['row'];?>
" />
                                                                <input id="3_col_ins_h_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][3_column][column-inside]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['column-inside'];?>
" />
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                            <!-- Start - Reserve previous values for all layouts -->
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design'], 'v', false, 'tab_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab_name']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['tab_name']->value != 'html') {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design'][$_smarty_tpl->tpl_vars['tab_name']->value], 'v1', false, 'col_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col_name']->value => $_smarty_tpl->tpl_vars['v1']->value) {
?>
                                                                        <input   type="hidden"  class="sort col-data" name="velocity_supercheckout[design][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
][column]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design'][$_smarty_tpl->tpl_vars['tab_name']->value][$_smarty_tpl->tpl_vars['col_name']->value]['column'];?>
" />
                                                                        <input   type="hidden"  class="sort row-data" name="velocity_supercheckout[design][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
][row]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design'][$_smarty_tpl->tpl_vars['tab_name']->value][$_smarty_tpl->tpl_vars['col_name']->value]['row'];?>
" />
                                                                        <input   type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
][column-inside]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design'][$_smarty_tpl->tpl_vars['tab_name']->value][$_smarty_tpl->tpl_vars['col_name']->value]['column-inside'];?>
" />
                                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                                                
                                                            <!-- End - Reserve previous values for all layouts -->                                                                                                                                

                                                            <!-- Start - Header and footer Html -->                                                                    
                                                            <input type="hidden" id="modals_bootbox_prompt_html_header_value" name="velocity_supercheckout[html_value][header]" value="<?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['html_value']['header'] != '') {
echo html_entity_decode($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['html_value']['header']);
}?>" />
                                                            <input type="hidden" id="modals_bootbox_prompt_html_footer_value" name="velocity_supercheckout[html_value][footer]" value="<?php if ($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['html_value']['footer'] != '') {
echo html_entity_decode($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['html_value']['footer']);
}?>" />
                                                            <!-- End - Header and footer html -->

                                                            <?php if ($_smarty_tpl->tpl_vars['layout']->value == 1) {?>
                                                                <!-- Start - Reserve previous width of all layouts -->
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width'], 'v', false, 'tab_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab_name']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                    <input type="hidden"  class="column-data-1 col" name="velocity_supercheckout[column_width][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width'][$_smarty_tpl->tpl_vars['tab_name']->value][1];?>
" />
                                                                    <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width'][$_smarty_tpl->tpl_vars['tab_name']->value][2];?>
" />
                                                                    <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][3]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width'][$_smarty_tpl->tpl_vars['tab_name']->value][3];?>
" />
                                                                    <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][inside][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width'][$_smarty_tpl->tpl_vars['tab_name']->value]['inside'][1];?>
" />
                                                                    <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][<?php echo $_smarty_tpl->tpl_vars['tab_name']->value;?>
][inside][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width'][$_smarty_tpl->tpl_vars['tab_name']->value]['inside'][2];?>
" />
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <!-- End - Reserve previous width of all layouts -->
                                                                <td  colspan="2" style="position:static; width: 960px;">
                                                                    <div class="portlet">
                                                                        <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HTML Header Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                        <div class="portlet-content">
                                                                            <div class="text" style="overflow:visible !important;" >
                                                                                <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals_bootbox_prompt_html_header" data-toggle="modal" class="glyphicons edit bootbox-design-edit-html" ><i></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul id="column-1" class="column column-1" col-data="1" col-inside-data="1" style="width:100%  !important;">
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['1_column']['row']);?>
" >
                                                                            <div class="portlet-header"><i class="icon-small-payment-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][payment_address][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][login][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-shipping-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][shipping_address][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-shipping-method"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][shipping_method][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-method"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][payment_method][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][cart][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet"  row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][confirm][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html']['0_0']['1_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Html Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra html content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][html][0_0][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html']['0_0']['1_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                            <li class="portlet" id="portlet_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['1_column']['row']);?>
">
                                                                                <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra html content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="portlet-content" id="portlet_content_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                                                                    <div class="text" style="overflow:visible !important;" >
                                                                                        <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="duplicate_button_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data="0" class="glyphicons more_windows"  onClick="duplicate_html(this);" ><i></i></a>

                                                                                        <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals-bootbox-prompt-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-toggle="modal" class="glyphicons edit bootbox-design-extra-html"  onClick="dialogExtraHtml(this);"><i></i></a>
                                                                                                <?php if ($_smarty_tpl->tpl_vars['k']->value != "0_0") {?>
                                                                                            <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="delete_button_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-toggle="modal" class="glyphicons remove"  onClick="remove_html(this);" ><i></i></a>
                                                                                                <?php }?>
                                                                                    </div>

                                                                                    <input id="row_text_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="text"  class="sort row-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][1_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['1_column']['row']);?>
" />
                                                                                </div>
                                                                            </li>
                                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </ul>
                                                                    <div class="portlet">
                                                                        <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HTML Footer Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                        <div class="portlet-content">
                                                                            <div class="text" style="overflow:visible !important;" >

                                                                                <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals_bootbox_prompt_html_footer" data-toggle="modal" class="glyphicons edit bootbox-design-edit-html" ><i></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value == 2) {?>
                                                                <td  colspan="2" style="position:static">
                                                                    <div class="portlet">
                                                                        <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HTML Header Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                        <div class="portlet-content">
                                                                            <div class="text" style="overflow:visible !important;" >

                                                                                <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals_bootbox_prompt_html_header" data-toggle="modal" class="glyphicons edit bootbox-design-edit-html" ><i></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="columns">
                                                                        <input type="hidden"  class="column-data-1 col" name="velocity_supercheckout[column_width][1_column][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column'][1];?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][1_column][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column'][2];?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][1_column][3]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column'][3];?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][1_column][inside][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column']['inside'][1];?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][1_column][inside][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column']['inside'][2];?>
" />

                                                                        <input type="hidden"  class="column-data-1 col" name="velocity_supercheckout[column_width][3_column][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][1];?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][3_column][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][2];?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][3_column][3]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][3];?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][3_column][inside][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column']['inside'][1];?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][3_column][inside][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column']['inside'][2];?>
" />

                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][2_column][3]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][3];?>
" />

                                                                        <input type="text" id="column-1-text"  class="column-data-1 col velsof-column-2-input" name="velocity_supercheckout[column_width][2_column][1]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][1];?>
" />
                                                                        <input type="text" id="column-2-text" class="column-data-2 col velsof-column-2-input" name="velocity_supercheckout[column_width][2_column][2]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][2];?>
" />
                                                                    </div>
                                                                    <div id="slider" class="ui-editRangeSlider"></div>
                                                                    <ul id="column-1" class="column column-1 layout_list_height" col-data="1" col-inside-data="1">
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_velocity_supercheckout[design][payment_address][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][payment_address][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][payment_address][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][login][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][login][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][login][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-shipping-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][shipping_address][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][shipping_address][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][shipping_address][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-shipping-method"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][shipping_method][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][shipping_method][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][shipping_method][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-method"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][payment_method][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][payment_method][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][payment_method][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][cart][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][cart][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][cart][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['2_column']['column-inside']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][confirm][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['2_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][confirm][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['2_column']['row']);?>
" />
                                                                                <input   type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][confirm][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['2_column']['column-inside']);?>
" />
                                                                            </div>
                                                                        </li>

                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>                                                                            
                                                                            <li class="portlet" id="portlet_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['row']);?>
" col-inside-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['column-inside']);?>
">
                                                                                <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra html content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="portlet-content" id="portlet_content_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                                                                    <div class="text" style="overflow:visible !important;" >
                                                                                        <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="duplicate_button_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data="0" class="glyphicons more_windows"  onClick="duplicate_html(this);" ><i></i></a>

                                                                                        <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals-bootbox-prompt-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-toggle="modal" class="glyphicons edit bootbox-design-extra-html"  onClick="dialogExtraHtml(this);"><i></i></a>
                                                                                                <?php if ($_smarty_tpl->tpl_vars['k']->value != "0_0") {?>
                                                                                            <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="delete_button_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-toggle="modal" class="glyphicons remove"  onClick="remove_html(this);" ><i></i></a>
                                                                                                <?php }?>
                                                                                    </div>

                                                                                    <input id="col_text_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"   type="text"  class="sort col-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][2_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['column']);?>
" />
                                                                                    <input id="row_text_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="text"  class="sort row-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][2_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['row']);?>
" />
                                                                                    <input id="col_inside_text_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][2_column][column-inside]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['2_column']['column-inside']);?>
" />
                                                                                </div>
                                                                            </li>
                                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </ul>
                                                                    <ul id="column-2" class="columnmk column-2 layout_list_height" col-data="2" >
                                                                        <ul id="column-2-upper" class="column column-1" col-data="1" col-inside-data="2" style="min-height: 30px !important; width:100% !important; height:auto !important;">

                                                                        </ul>
                                                                        <div class="columns">
                                                                            <input type="text" id="column-1-inside-text"  class="column-data-1 col" name="velocity_supercheckout[column_width][2_column][inside][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column']['inside'][1]);?>
" />
                                                                            <input type="text" id="column-2-inside-text"  class="column-data-2 col" name="velocity_supercheckout[column_width][2_column][inside][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column']['inside'][2]);?>
" />
                                                                        </div>
                                                                        <div id="slider_inside" class="ui-editRangeSlider" style="clear:both;"></div>

                                                                        <ul id="column-1-inside" class="column column-1" col-inside-data="3" col-data="1" style="min-height: 30px !important; height:auto !important;">

                                                                        </ul>
                                                                        <ul id="column-2-inside" class="column column-2" col-inside-data="3" col-data="2" style="min-height: 30px !important; height:auto !important;"></ul>
                                                                        <hr class="design-separator" size="2">
                                                                        <ul id="column-2-lower" class="column column-1" col-data="1" col-inside-data="4" style="min-height: 30px !important; width:100% !important; height:auto !important;">

                                                                        </ul>        
                                                                    </ul>
                                                                    <div class="portlet">
                                                                        <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HTML Footer Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                        <div class="portlet-content">
                                                                            <div class="text" style="overflow:visible !important;" >

                                                                                <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals_bootbox_prompt_html_footer" data-toggle="modal" class="glyphicons edit bootbox-design-edit-html" ><i></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                        
                                                                </td>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value == 3) {?>
                                                                <td  colspan="2" style="position:static">
                                                                    <div class="portlet">
                                                                        <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HTML Header Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                        <div class="portlet-content">
                                                                            <div class="text" style="overflow:visible !important;" >

                                                                                <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals_bootbox_prompt_html_header" data-toggle="modal" class="glyphicons edit bootbox-design-edit-html" ><i></i></a>
                                                                            </div>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="columns">
                                                                        <input type="hidden"  class="column-data-1 col" name="velocity_supercheckout[column_width][1_column][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column'][1]);?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][1_column][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column'][2]);?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][1_column][3]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column'][3]);?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][1_column][inside][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column']['inside'][1]);?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][1_column][inside][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['1_column']['inside'][2]);?>
" />

                                                                        <input type="hidden"  class="column-data-1 col" name="velocity_supercheckout[column_width][2_column][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][1]);?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][2_column][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][2]);?>
" />
                                                                        <input type="hidden"  class="column-data-2 col" name="velocity_supercheckout[column_width][2_column][3]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][3]);?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][2_column][inside][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column']['inside'][1]);?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][2_column][inside][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column']['inside'][2]);?>
" />

                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][3_column][inside][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column']['inside'][1]);?>
" />
                                                                        <input type="hidden"  class="column-data-3 col" name="velocity_supercheckout[column_width][3_column][inside][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column']['inside'][2]);?>
" />
                                                                        <input type="text" id="three-column-1" readonly="readonly" class="column-data-1 col" name="velocity_supercheckout[column_width][3_column][1]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][1]);?>
" />
                                                                        <input type="text" id="three-column-2" readonly="readonly" class="column-data-2 col" name="velocity_supercheckout[column_width][3_column][2]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][2]);?>
" />
                                                                        <input type="text" id="three-column-3" readonly="readonly" class="column-data-3 col" name="velocity_supercheckout[column_width][3_column][3]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][3]);?>
" />
                                                                    </div>
                                                                    <div id="slider" class="ui-editRangeSlider"></div>
                                                                    <ul id="column_1" class="column column-1 layout_list_height" col-data="1">
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Address Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][payment_address][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][payment_address][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_address']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][login][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][login][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['login']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-shipping-address"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][shipping_address][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][shipping_address][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_address']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-shipping-method"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][shipping_method][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][shipping_method][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['shipping_method']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-payment-method"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][payment_method][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][payment_method][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['payment_method']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][cart][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][cart][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['cart']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>
                                                                        <li class="portlet" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['3_column']['row']);?>
">
                                                                            <div class="portlet-header"><i class="icon-small-confirm"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="portlet-content">
                                                                                <div class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="text"><i class="icon-drag"></i><i class="icon-drag"></i></div>
                                                                                <input   type="text"  class="sort col-data" name="velocity_supercheckout[design][confirm][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['3_column']['column']);?>
" />
                                                                                <input   type="text"  class="sort row-data" name="velocity_supercheckout[design][confirm][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['confirm']['3_column']['row']);?>
" />
                                                                            </div>
                                                                        </li>


                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                            <li class="portlet" id="portlet_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" col-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['column']);?>
" row-data="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['row']);?>
">
                                                                                <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra html content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                                <div class="portlet-content" id="portlet_content_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                                                                    <div class="text" style="overflow:visible !important;" >
                                                                                        <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="duplicate_button_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data="0" class="glyphicons more_windows"  onClick="duplicate_html(this);" ><i></i></a>

                                                                                        <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals-bootbox-prompt-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-toggle="modal" class="glyphicons edit bootbox-design-extra-html"  onClick="dialogExtraHtml(this);"><i></i></a>
                                                                                                <?php if ($_smarty_tpl->tpl_vars['k']->value != "0_0") {?>
                                                                                            <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="delete_button_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-toggle="modal" class="glyphicons remove"  onClick="remove_html(this);" ><i></i></a>
                                                                                                <?php }?>
                                                                                    </div>

                                                                                    <input id="col_text_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"   type="text"  class="sort col-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][3_column][column]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['column']);?>
" />
                                                                                    <input id="row_text_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="text"  class="sort row-data" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][3_column][row]" value="<?php echo intval($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_smarty_tpl->tpl_vars['k']->value]['3_column']['row']);?>
" />
                                                                                </div>
                                                                            </li>                                                    
                                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </ul>
                                                                    <ul id="column_2" class="column column-2 layout_list_height" col-data="2"></ul>
                                                                    <ul id="column_3" class="column column-3 layout_list_height" col-data="3"></ul>
                                                                    <div class="portlet">
                                                                        <div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'HTML Footer Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                                                        <div class="portlet-content">
                                                                            <div class="text" style="overflow:visible !important;" >

                                                                                <a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals_bootbox_prompt_html_footer" data-toggle="modal" class="glyphicons edit bootbox-design-edit-html" ><i></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            <?php }?>

                                                            </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                </div>

                                                <!--------------- End - Design -------------------->
                                                <input type="hidden" id="modal_value" name="velocity_supercheckout[modal_value]" value="<?php echo $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['modal_value'];?>
" />
                                                <div id="extra_html_container">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                        <input type="hidden" id="modals_bootbox_prompt_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="velocity_supercheckout[design][html][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][value]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['k']->value;
$_prefixVariable31 = ob_get_clean();
echo html_entity_decode($_smarty_tpl->tpl_vars['velocity_supercheckout']->value['design']['html'][$_prefixVariable31]['value']);?>
" />
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </form>


                                            <!--------------- Start - Frequently Asked Questions -------------------->

                                            <div id="tab_faq" class="tab-pane outsideform">
                                                <div class="block">
                                                    <h4 class='velsof-tab-heading'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Frequently Asked Questions (Click to expand)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                                                    <br>

                                                    <div class="row faq-row" id="1">
                                                        <div class="span faq-span" id="faq-span1">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1. Need to change small icons next to "login options, delivery address, delivery method, payment method, confirm your order heading" in front end?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                                <span class="answer" id="answer1" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To change those icons, replace those imaes in following directory on your server.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                    /modules/supercheckout/views/img/front/
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>


                                                    <div class="row faq-row" id="2">
                                                        <div class="span faq-span" id="faq-span2">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2. Radio buttons for both Mr and Mrs. is always checked?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                            <div class="answer" id="answer2" style="color:black;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' If both Mr and Mrs. radio buttons are always checked, then add below code in custom css field of our module customizer tab to fix the issue.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                <br> <br><pre>
#customer_person_information_table div.radio input {
opacity: 99999;
position: relative !important;
margin: 0px !important;
}
                                                                </pre></div>
                                                            </p>
                                                        </div>
                                                    </div>



                                                    <div class="row faq-row" id="3">
                                                        <div class="span faq-span" id="faq-span3">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3. Third column is not correctly aligned or full width issue in Desktop?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                            <div class="answer" id="answer3" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Most probably your theme template CSS is conflicting with our module. Fix for this issue is very simple. Kindly add following code in Custom CSS field in Customizer tab of our module admin setting.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                <br><pre>
#columnleft-3{
width:28% !important;  
}
<br>
OR
<br>
#center_column{
width:100% !important;  
}									
                                                                </pre><br>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In case your issue is not solved, try changing this percentage to suit your theme otherwise contact us with admin and FTP login details.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="4">
                                                        <div class="span faq-span" id="faq-span4">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'4. Want to add an extra field in address form?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                                <span class="answer" id="answer4" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By default it is not possible to add custom field in our module, if you wish we can make this custom change for you for additional cost. Kindly contact us with your complete requirements.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="5">
                                                        <div class="span faq-span" id="faq-span5">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'5.  Some third party module is not working?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                                <span class="answer" id="answer5" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Third party modules are only made for default checkout of Prestashop. They may or may not work with our module. In case they are not working with our module, some custom changes need to be made to make them compatible with our module.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="6">
                                                        <div class="span faq-span" id="faq-span6">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'6. Want us to implement some specific feature for additional cost?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                                <span class="answer" id="answer6" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes, you can contact us with complete requirements. If changes are feasible, we can implement them for additional cost.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="7">
                                                        <div class="span faq-span" id="faq-span7">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'7. Facing any of these issues ?','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            <div class="answer" id="answer7" style="color:black;">
                                                                <br><pre>TECHNICAL ERROR: Request Failed Details:Error thrown: [object Object]Text status: error</pre>
                                                                <pre>500 Internal Server error</pre>
                                                                <pre>Progress Bar stuck on 80% after click on Place order</pre>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason for these errors are not specific. If you are facing any of these issues, kindly contact us with your admin and FTP details.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="8">
                                                        <div class="span faq-span" id="faq-span8">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'8. Payment method is not displaying additinal cost?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                                <span class="answer" id="answer8" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It is very rare issue and in case you face it, kindly contact us with your admin and FTP login details so that we can fix this issue for you.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="9">
                                                        <div class="span faq-span" id="faq-span9">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'9. Translated text is not reflecting in front-side?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><br><br>
                                                                <span class="answer" id="answer9" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Kindly try again after clearing your Prestashop cache using Advance Parameter->Performance->Clear cache button. If your issue persists even after that, make sure that your theme directory don\'t contain our module translation file. To check this, go to your theme directory','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 
                                                                    /your_theme_name/modules/ .<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Inside this modules directory, there should no Supercheckout directory, in case it exist just rename it to anything else.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When you translate text from our module admin panel, our module save translated text in ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 /modules/supercheckout/translations/ directory.
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'But when there is some translation exist in your theme directory, our module picks text from there and your translated text don\'t reflect in front side.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                    <br>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now question arise, in which case theme directory can have our module translated text file.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When you use default translation feature of Prestashop, then it save translated text in theme directory and our module use text from this themes directory rather than using text from module directory.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="10">
                                                        <div class="span faq-span" id="faq-span10">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'10. Payment method image is not coming?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br></span><span class="answer" id="answer10" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our module shows payment methods images from their root directory ("/modules/payment_method_name"). If some payment method don\'t have any image in their root directory then no image will be shown.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To display that payment method image, kindly upload image to the payment module directory. Image name should be same as payment method directory name. You can use any image format eg. jpg, png etc.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 
                                                                    <br><br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: To display Iupay payment module image, you need to add its image in','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 "/modules/iupay/" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'directory and image name must be iupay. Image extension can be anything and recommended image resolution is 95x20.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Don\'t hesistate to contact us if you need any assistance from our side.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="11">
                                                        <div class="span faq-span" id="faq-span11">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                                <span class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'11. In front end when you click login or place order button nothing happens?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br></span><span class="answer" id="answer11" style="color: black;">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To fix this issue, Under Advance parameters->performance->Turn ON "Move Javascript to the end". Don\'t forget to clear Prestashop cache using Advance Parameter->Performance->Clear cache button.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                    <br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In case your issue persists, contact us with your admin and FTP details.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="12">
                                                        <div class="span faq-span" id="faq-span12">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                            <div class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'12. How to translate custom HTML header/footer content?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br></div><div class="answer" id="answer12" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to translate custom HTML header/footer you have to add HTML content (in Custom HTML header or footer field in design tab) for all the languages as follows:','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br>
                                                                <pre>
&lt;div id="LANGISO1_content" style="display: none;"&gt;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your HTML content for the language','mod'=>'supercheckout'),$_smarty_tpl ) );?>
&lt;/div&gt;

&lt;div id="LANGISO2_content" style="display: none;"&gt;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your HTML content for the language','mod'=>'supercheckout'),$_smarty_tpl ) );?>
&lt;/div&gt;
	.
	.
	.
&lt;div id="LANGISOn_content" style="display: none;"&gt;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your HTML content for the language','mod'=>'supercheckout'),$_smarty_tpl ) );?>
&lt;/div&gt;
                                                                </pre>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="13">
                                                        <div class="span faq-span" id="faq-span13">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                            <div class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'13. Payment method not working and is stuck at 80% after click on place order button.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br></div><div class="answer" id="answer13" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This happens when your payment method has some unique code and need to be compatible with our module, kindly contact us to get it fixed for free.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row faq-row" id="14">
                                                        <div class="span faq-span" id="faq-span14">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                            <div class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'14.  How to get SEO url like','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 http://www.mysite.com/checkout? <br><br></div><div class="answer" id="answer14" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After installing our module, you need to go to Preferences -> SEO & URLs and create a rule over there to get desired SEO URL.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                            
                                                    <div class="row faq-row" id="15">
                                                        <div class="span faq-span" id="faq-span15">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                            <div class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'15.  How to Allow Guest Checkout only?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <br><br></div><div class="answer" id="answer15" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First of all change the default checkout option to Guest Checkout (`Default Option at Checkout` configuration in `General Settings` tab.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After that add the following CSS code to the `Custom CSS` field in `Customizer` tab.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                <br><pre>
#supercheckout-option > div:nth-child(3) { display: none; }
#supercheckout-option > div:nth-child(1) { display: none; }
                                                                </pre>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In case your issue is not solved, contact us with admin and FTP login details.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                            
                                                    <div class="row faq-row" id="16">
                                                        <div class="span faq-span" id="faq-span16">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                            <div class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'16. DNI/Identification Number number field is not visible in the front, what has been missed?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <br><br></div><div class="answer" id="answer16" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This happens when the DNI/Identification Number field is not enabled for the default country on the store. You can enable the same at the following path in your back office','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<br><br>
                                                                <pre>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'International->Locations->Countries->Edit country->Do you need a tax identification number?','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                                </pre>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In case your issue is not solved, contact us with admin and FTP login details.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br>
                                                                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The field will only be required if it is required in the default checkout.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                                
                                                    <div class="row faq-row" id="17">
                                                        <div class="span faq-span" id="faq-span17">
                                                            <p style="margin-bottom: 0; margin-right: 5px">
                                                            <div class="question" style="font-size: 15px;font-weight: bold; font-size: 15px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'17. VAT Number field is not appearing in the front end?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <br><br></div><div class="answer" id="answer17" style="color: black;">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The VAT Number field is dependent on a module (named `European VAT number`), just install the module and enable `Enable checking of the VAT number with the web service` configuration of the module.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In case your issue is not solved, contact us with admin and FTP login details.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<br><br>
                                                                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The field will only be required if it is required in the default checkout.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                            <!--------------- End - Frequently Asked Questions -------------------->
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>          
                </div>

                <!-- Start - Variables which will not submit and save -->
                <input type="hidden" id="modals_bootbox_prompt_header_html" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Your HTML Content Here','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" />
                <!-- Start - Variables which will not submit and save -->
            </div>
        </div>

        <!-- Themer -->
        <div id="themer" class="collapse">
            <div class="wrapper">
                <span class="close2">&times; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'close','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Themer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h4>
                <ul>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme','mod'=>'supercheckout'),$_smarty_tpl ) );?>
: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>            
                </ul>
                <div id="themer-getcode" class="hide">
                    <hr class="separator" />
                    <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get LESS','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</button>
                    <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get CSS','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
                 
        <!-- Start - Code Modified by Raghu on 22-Aug-2017 for inluding texts to language file. -->
        <div style="display: none;">
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DOB','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for NewsLetter','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Offer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vat Number','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Line 1','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Line 2','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification Number','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home Phone','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Phone','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other Information','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Model','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
        </div>
        <!-- End - Code Modified by Raghu on 22-Aug-2017 for inluding texts to language file. -->

        <?php $_smarty_tpl->_assignInScope('column_1', '');?>
        <?php $_smarty_tpl->_assignInScope('column_2', '');?>
        <?php $_smarty_tpl->_assignInScope('column_3', '');?>
        <?php $_smarty_tpl->_assignInScope('column_4', '');?>
        <?php $_smarty_tpl->_assignInScope('column_5', '');?>
        <?php $_smarty_tpl->_assignInScope('column_5_updated', '');?>
        <?php $_smarty_tpl->_assignInScope('main_width', 1);?>
        <?php if ($_smarty_tpl->tpl_vars['layout']->value == 2) {?>
            <?php $_smarty_tpl->_assignInScope('column_1', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][1]/$_smarty_tpl->tpl_vars['main_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('column_2', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column'][2]/$_smarty_tpl->tpl_vars['main_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('column_4', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column']['inside'][1]/$_smarty_tpl->tpl_vars['main_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('column_5', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['2_column']['inside'][2]/$_smarty_tpl->tpl_vars['main_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('column_5_updated', $_smarty_tpl->tpl_vars['column_5']->value-1);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value == 3) {?>
            <?php $_smarty_tpl->_assignInScope('column_1', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][1]/$_smarty_tpl->tpl_vars['main_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('column_2', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][2]/$_smarty_tpl->tpl_vars['main_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('column_3', $_smarty_tpl->tpl_vars['velocity_supercheckout']->value['column_width']['3_column'][3]/$_smarty_tpl->tpl_vars['main_width']->value);?>
        <?php }?>

        <style type="text/css">
            
                .ship2pay-glyphicons i:before{    
                    font-size: 17px;
                    padding: 3px;
                }
                .ship2pay-div{
                    cursor:pointer;
                    padding: 5px;
                    margin: 10px;
                    text-align: center;
                    font-size: 13px;
                    color: white;
                    width: 60%;
                    margin-left: 20%;
                }
                .tickcross-sign{
                    padding-right: 10px;
                    font-weight: bold;
                    font-size: 14px;
                }
                .faq-span{max-height:10px;}
                .faq-row{background: rgba(230, 230, 236, 0.37);
                         border-radius:3px;
                         margin-top:10px;
                         padding: 30px;
                         cursor: pointer;
                         padding-left: 10px;
                         padding-top: 15px;}
                .question{font-family:initial;color:rgb(213, 81, 81) !important;font-size:17px !important;}
                .answer{display:none;font-family:initial;font-size:15px;line-height:20px;letter-spacing:1px;}
                tr.even { background-color: #EDEDED; }
                tr.odd { background-color: white;}
                .column-1, .column-data-1{width:<?php echo $_smarty_tpl->tpl_vars['column_1']->value;?>
% ;}
                .column-2, .column-data-2{width:<?php echo $_smarty_tpl->tpl_vars['column_2']->value;?>
%;} 
                .column-3, .column-data-3{width:<?php echo $_smarty_tpl->tpl_vars['column_3']->value;?>
%;}
                #column-1-inside,#column-1-inside-text {width:<?php echo $_smarty_tpl->tpl_vars['column_4']->value;?>
%;}
                #column-2-inside,#column-2-inside-text {width:<?php echo $_smarty_tpl->tpl_vars['column_5_updated']->value;?>
%;}
            
            .lang-title td
            {
                padding: 2px 0px;
            }
        </style>

        <?php echo '<script'; ?>
 type="text/javascript">
            var ps_ver = '<?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
';
            <?php if ($_smarty_tpl->tpl_vars['layout']->value == 1) {?>
                
                    $(".column").sortable({
                        connectWith: ".column",
                        scroll: false,
                        stop: function(event, ui) {
                            $('.column').find("li").each(function(i, el) {

                                $(this).find(".row-data").val($(el).index())

                            });
                        }
                    });

                    $(".column").disableSelection();
                    $('#column-1 > li').tsort({attr: 'row-data'});
                    $('#column-1 > li').each(function() {
                        $(this).appendTo('#column-1');

                    })
                
            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value == 2) {?>
                
                    var main_width = 100 / 100;

                    $("#slider").slider({
                        range: false,
                        min: 0,
                        max: 100,
                        design: 1.00,
                        values: [<?php echo $_smarty_tpl->tpl_vars['column_1']->value;?>
],
                        slide: function(event, ui) {

                            $('#column-1-text').val(Math.round(main_width * (ui.values[ 0 ])))
                                    .attr('width-data', ui.values[ 0 ])
                                    .attr('left-data', 0)
                                    .css({'width': parseInt(ui.values[ 0 ]) + '%'})
                            $('#column-2-text').val(Math.round(main_width * (100 - ui.values[ 0 ])))
                                    .attr('width-data', 100 - ui.values[ 0 ] - 1)
                                    .attr('left-data', parseInt(ui.values[ 0 ]))
                                    .css({'width': parseInt(100 - ui.values[ 0 ] - 1) + '%'})
                            $('#column-1').css({'width': parseInt(ui.values[ 0 ]) + '%'})
                            $('#column-2').css({'width': parseInt(100 - ui.values[ 0 ] - 1) + '%'})
                        }
                    });
                    var main_width_inside = 100 / 100;

                    $("#slider_inside").slider({
                        range: false,
                        min: 0,
                        max: 100,
                        design: 1.00,
                        values: [<?php echo $_smarty_tpl->tpl_vars['column_4']->value;?>
],
                        slide: function(event, ui) {

                            $('#column-1-inside-text').val(Math.round(main_width_inside * (ui.values[ 0 ])))
                                    .attr('width-data', ui.values[ 0 ])
                                    .attr('left-data', 0)
                                    .css({'width': parseInt(ui.values[ 0 ]) + '%'})
                            $('#column-2-inside-text').val(Math.round(main_width_inside * (100 - ui.values[ 0 ])))
                                    .attr('width-data', 100 - ui.values[ 0 ] - 1)
                                    .attr('left-data', parseInt(ui.values[ 0 ]))
                                    .css({'width': parseInt(100 - ui.values[ 0 ] - 1) + '%'})
                            $('#column-1-inside').css({'width': parseInt(ui.values[ 0 ]) + '%'})
                            $('#column-2-inside').css({'width': parseInt(100 - ui.values[ 0 ] - 1) + '%'})
                        }
                    });
                    $(".column").sortable({
                        connectWith: ".column",
                        scroll: false,
                        stop: function(event, ui) {
                            $('.column').find("li").each(function(i, el) {

                                $(this).find(".row-data").val($(el).index())
                                $(this).find(".col-data").val($(this).parent().attr('col-data'))
                                $(this).find(".col-data-inside").val($(this).parent().attr('col-inside-data'))

                            });
                        }
                    });

                    $(".column").disableSelection();
                    $('.column > li').tsort({attr: 'col-inside-data'});
                    $('.column > li').each(function() {
                        if ($(this).attr('col-inside-data') == "4") {
                            $(this).appendTo('#column-2-lower');
                        }
                        else if ($(this).attr('col-inside-data') == "3") {
                            $(this).appendTo('#column-1-inside');
                        } else if ($(this).attr('col-inside-data') == "2") {
                            $(this).appendTo('#column-2-upper');
                        } else {
                            $(this).appendTo('#column-1');
                        }

                    })
                    $('#column-1 > li').tsort({attr: 'row-data'});
                    $('#column-1 > li').each(function() {
                        $(this).appendTo('#column-' + $(this).attr('col-data'));

                    })
                    $('#column-2-upper > li').tsort({attr: 'row-data'});
                    $('#column-2-upper > li').each(function() {
                        $(this).appendTo('#column-2-upper');

                    })
                    $('#column-2-lower > li').tsort({attr: 'row-data'});
                    $('#column-2-lower > li').each(function() {
                        $(this).appendTo('#column-2-lower');

                    })
                    $('#column-1-inside > li').tsort({attr: 'row-data'});
                    $('#column-1-inside > li').each(function() {
                        $(this).appendTo('#column-' + $(this).attr('col-data') + '-inside');

                    })
                
            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value == 3) {?>
                
                    var main_width = 100 / 100;

                    $("#slider").slider({
                        range: true,
                        min: 0,
                        max: 100,
                        step: 1.00,
                        values: [<?php echo $_smarty_tpl->tpl_vars['column_1']->value;?>
, <?php echo ($_smarty_tpl->tpl_vars['column_1']->value+$_smarty_tpl->tpl_vars['column_2']->value);?>
],
                        slide: function(event, ui) {

                            $('#three-column-1').val(Math.round(main_width * (ui.values[ 0 ])))
                                    .attr('width-data', ui.values[ 0 ])
                                    .attr('left-data', 0)
                                    .css({'width': parseInt(ui.values[ 0 ]) + '%'})
                            $('#three-column-2').val(Math.round(main_width * (ui.values[ 1 ] - ui.values[ 0 ])))
                                    .attr('width-data', ui.values[ 1 ] - ui.values[ 0 ])
                                    .attr('left-data', parseInt(ui.values[ 0 ] + 10))
                                    .css({'width': parseInt(ui.values[ 1 ] - ui.values[ 0 ]) + '%'})
                            $('#three-column-3').val(Math.round(main_width * (100 - ui.values[ 1 ])))
                                    .attr('width-data', 100 - ui.values[ 1 ] - 1)
                                    .attr('left-data', parseInt(ui.values[ 1 ]))
                                    .css({'width': parseInt(100 - ui.values[ 1 ] - 1) + '%'})
                            $('.column-1').css({'width': parseInt(ui.values[ 0 ]) + '%'})
                            $('.column-2').css({'width': parseInt(ui.values[ 1 ] - ui.values[ 0 ]) + '%'})
                            $('.column-3').css({'width': parseInt(100 - ui.values[ 1 ]) + '%'})


                        }
                    });
                    $(".column").sortable({
                        connectWith: ".column",
                        scroll: false,
                        stop: function(event, ui) {
                            $('.column').find("li").each(function(i, el) {

                                $(this).find(".row-data").val($(el).index())
                                $(this).find(".col-data").val($(this).parent().attr('col-data'))

                            });
                        }
                    });

                    $(".column").disableSelection();
                    $('.column > li').tsort({attr: 'row-data'});
                    $('.column > li').each(function() {
                        $(this).appendTo('.column-' + $(this).attr('col-data'));
                    })
                
            <?php }?>

            

                function duplicate_html(e) {
                    var portlet_id = $(e).parent().parent().attr('id');
                    var col_data = $('#' + portlet_id + ' .col-data').val();
                    var row_data = $('#' + portlet_id + ' .row-data').val();
                    if ("<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
" == 2) {
                        var col_data_inside = $('#' + portlet_id + ' .col-data-inside').val();
                    } else {
                        var col_data_inside = 4;
                    }
                    var data = parseInt($('#modal_value').val());
                    data++;
                    $('#modal_value').val(data);
                    string = '<li id="portlet_' + data + '_' + data + '" class="portlet" col-data="" row-data="" col-inside-data="">';
                    string += '<div class="portlet-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Html Content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>';
                    string += '<div id="portlet_content_' + data + '_' + data + '" class="portlet-content">';
                    string += '<div class="text" style="overflow:visible !important;" >';
                    string += '<a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="duplicate_button_' + data + '_' + data + '" data="' + (data) + '" class="glyphicons more_windows" onClick="duplicate_html(this);" ><i></i></a>';
                    string += '<a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="modals-bootbox-prompt-' + data + '_' + data + '" data-toggle="modal" class="glyphicons edit bootbox-design-extra-html" onClick="dialogExtraHtml(this);"><i></i></a>';
                    string += '<a data-toggle="tooltip"  data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this HTML content','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="delete_button_' + data + '_' + data + '" data="' + data + '_' + data + '" data-toggle="modal" class="glyphicons remove"  onClick="remove_html(this);" ><i></i></a>';
                    string += '</div>';

                    string += '<input   type="hidden"  class="sort col-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][column]" value="' + col_data + '" />';
                    string += '<input   type="hidden"  class="sort row-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][row]" value="' + row_data + '" />';
                    string += '<input   type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][column-inside]" value="' + col_data_inside + '" />';


                    string += '<input   type="hidden"  class="sort col-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][1_column][column]" value="' + col_data + '" />';
                    string += '<input   type="hidden"  class="sort row-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][1_column][row]" value="' + row_data + '" />';
                    string += '<input   type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][html][' + data + '_' + data + '][1_column][column-inside]" value="' + col_data_inside + '" />';


                    string += '<input   type="hidden"  class="sort col-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][3_column][column]" value="' + col_data + '" />';
                    string += '<input   type="hidden"  class="sort row-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][3_column][row]" value="' + row_data + '" />';
                    string += '<input   type="hidden"  class="sort col-data-inside" name="velocity_supercheckout[design][html][' + data + '_' + data + '][3_column][column-inside]" value="' + col_data_inside + '" />';

                    if (<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
 == 3) {
                        string += '<input id="col_text_' + data + '_' + data + '"  type="text"  class="sort col-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][3_column][column]" value="' + col_data + '" />';
                        string += '<input id="row_text_' + data + '_' + data + '"  type="text"  class="sort row-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][3_column][row]" value="' + row_data + '" />';
                    }
                    if (<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
 == 2) {
                        string += '<input id="col_text_' + data + '_' + data + '"  type="text"  class="sort col-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][column]" value="' + col_data + '" />';
                        string += '<input id="row_text_' + data + '_' + data + '"  type="text"  class="sort row-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][row]" value="' + row_data + '" />';
                        string += '<input id="col_inside_text_' + data + '_' + data + '"  type="text"  class="sort col-data-inside" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][row]" value="' + col_data_inside + '" />';
                    }
                    if (<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
 == 1) {
                        string += '<input id="row_text_' + data + '_' + data + '"  type="text"  class="sort row-data" name="velocity_supercheckout[design][html][' + data + '_' + data + '][2_column][row]" value="' + row_data + '" />';
                    }
                    string += '</div>';
                    string += '</li>';

                    $(e).parent().parent().parent().parent().append(string);

                    $('#extra_html_container').append('<input type="hidden" id="modals_bootbox_prompt_' + data + '_' + data + '" name="velocity_supercheckout[design][html][' + data + '_' + data + '][value]" value="" />')

                }

                if ($.cookie('designTab') == 1) {
                    $('#velsof_supercheckout_container').find('li').removeClass('active');
                    $("#velsof_tab_design").trigger('click');
                    $.cookie('designTab', 0);
                }

                $(document).ready(function() {
                    var clipboard = new Clipboard('.testurlbutton');
                    $('.ship2pay-div').click(function() {
                        var element_id = this.id;

                        if ($('.ship2pay-div input[name=\'' + element_id + '\']').is(":checked"))
                        {
                            $(this).css('background-color', 'rgb(83, 199, 83)'); //green
                            $(this).css('border', '1px solid #257925'); //dark green color border
                            $('.ship2pay-div input[name=\'' + element_id + '\']').prop('checked', false);
                            $(this).children('.tickcross-sign').html('&#10004;');

                        }
                        else
                        {
                            $('.ship2pay-div input[name=\'' + element_id + '\']').prop('checked', true);
                            $(this).css('background-color', 'rgb(224, 69, 69)'); //red
                            $(this).css('border', '1px solid #B13131'); //dark red color border
                            $(this).children('.tickcross-sign').html('&#10060;');
                        }



                    });
                    //added below two lines to show answer of first FAQ
                    $('#faq-span1').css('max-height', 'none');
                    $('#answer1').css('display', 'block')

                    // Carousal in FAQ
                    $('.faq-row').off('click').on('click', function() {
                        var element_id = this.id;
                        var i = 1;
                        for (i = 1; i < 20; i++)
                        {
                            if (i != element_id) {
                                //to hide answer of previously opened FAQ question
                                $('#faq-span' + i).css('max-height', '10px');
                                $('#answer' + i).css('display', 'none');
                            }
                        }
                        //added below to lines to show answer of question, when admin click on it
                        $('#faq-span' + element_id).css('max-height', 'none');
                        $('#answer' + element_id).css('display', 'block');

                    });

                    $('#tab_lang_translator').css('width', $('#tab_general_settings').width() + 'px');
                    if ($('input#supercheckout_test_mode').is(':checked')) {
                        $('#front_module_url').show();
                    }
                    $('#supercheckout_test_mode').change(function() {
                        if ($(this).is(":checked")) {
                            $('#front_module_url').show();
                        }
                        else
                            $('#front_module_url').hide();
                    });
                    if ($('input#supercheckout_google_auto_address').is(':checked')) {
                            $('#google_api_key').show();
                        }
                    $('#supercheckout_google_auto_address').change(function() {
                        if ($(this).is(":checked")) {
                            $('#google_api_key').show();
                        }
                        else
                            $('#google_api_key').hide();
                    });
                });

                    
        <?php echo '</script'; ?>
>
<?php }
}
