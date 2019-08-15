<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ff801e14870247921541d203dc2f3c19e8f5daca6baf4594d6fc3ffa6f6f02d8 */
class __TwigTemplate_c0e225c7eca32ff166e342e06906251bad5d0527249e9ac635b9601f454c8be6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Theme & Logo > Theme • Hammerstout</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.6.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '85084567eeed19cea353b71ca95fd900';
    var token_admin_orders = 'd2ee6c6fd7c3f06944e0bbf22328c878';
    var token_admin_customers = '4e8f190aaa53712dcc1276e1ab9df376';
    var token_admin_customer_threads = '5b0edcd1ca937dad6b87fed4418c8a6a';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '737cdc6c4cb2142c0e98ecef0de30e55';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/adminjuara/index.php/improve/modules/catalog/recommended?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs';
    var admin_notification_get_link = '/adminjuara/index.php/common/notifications?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs';
    var admin_notification_push_link = '/adminjuara/index.php/common/notifications/ack?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs';
    var tab_modules_list = 'easywebtoapp';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminjuara/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminjuara/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminjuara\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminjuara\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Indonesian Rupiah\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var iqitModulesAdditionalTabs = {\"ajaxUrl\":\"https:\\/\\/hammerstoutdenim.com\\/adminjuara\\/index.php?controller=AdminModules&token=eae2599da60be30c3a130d8783d2f526&ajax=1&configure=iqitadditionaltabs\"};
var iqitModulesSizeCharts = {\"ajaxUrl\":\"https:\\/\\/hammerstoutdenim.com\\/adminjuara\\/index.php?controller=AdminModules&token=eae2599da60be30c3a130d8783d2f526&ajax=1&configure=iqitsizecharts\"};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/adminjuara/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.0\"></script>
<script type=\"text/javascript\" src=\"/adminjuara/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.0\"></script>
<script type=\"text/javascript\" src=\"/adminjuara/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminjuara/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAjaxFaviconBO&amp;token=7b572bb1b6de704722132539ac8abc3d\";
</script>

<script>
            var admin_gamification_ajax_url = \"https:\\/\\/hammerstoutdenim.com\\/adminjuara\\/index.php?controller=AdminGamification&token=235aa2a0c0bd95366cdfe4e3403707b8\";
            var current_id_tab = 53;
        </script>

";
        // line 177
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-en adminthemes\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminDashboard&amp;token=4bb8491e1474c4b2eeb4abb7609ed27f\"></a>
      <span id=\"shop_version\">1.7.6.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminModules&amp;configure=iqitmegamenu&amp;token=eae2599da60be30c3a130d8783d2f526\"
                 data-item=\"MENU\"
      >MENU</a>
          <a class=\"dropdown-item\"
         href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminModules&amp;configure=supercheckout&amp;token=eae2599da60be30c3a130d8783d2f526\"
                 data-item=\"SUPERCHECKOUT\"
      >SUPERCHECKOUT</a>
          <a class=\"dropdown-item\"
         href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminIqitThemeEditor&amp;token=b1b006bbe1b7ce318c340b9cf37088d3\"
                 data-item=\"THEME EDITTOR\"
      >THEME EDITTOR</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"177\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-rUmKN61v0oJd4KpYbVs\"
        data-post-link=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminQuickAccesses&token=01b84be3f56fa220b0b602ca3f89b83d\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Theme &amp; Logo - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminQuickAccesses&token=01b84be3f56fa220b0b602ca3f89b83d\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminjuara/index.php?controller=AdminSearch&amp;token=65ab7d30f311c8ca6282319cea584306\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Your shop is in maintenance.</strong></p><p class='text-left'>Your visitors and customers cannot access your shop while in maintenance mode.&lt;br /&gt; To manage the maintenance settings, go to Shop Parameters &amp;gt; Maintenance tab.</p>\" href=\"/adminjuara/index.php/configure/shop/maintenance/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\"
          >
            <i class=\"material-icons\">build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://hammerstoutdenim.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              How about some seasonal discounts?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you considered selling on marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              No news is good news, isn't it?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/fahmi474%40outlook.co.id.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Fahmi</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminjuara/index.php/configure/advanced/employees/1/edit?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\">
      <i class=\"material-icons\">settings</i>
      Your profile
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminLogin&amp;logout=1&amp;token=323ec7fe2f3b59bf26eff9b74a7d236a\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminjuara/index.php/configure/advanced/employees/toggle-navigation?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminDashboard&amp;token=4bb8491e1474c4b2eeb4abb7609ed27f\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminOrders&amp;token=d2ee6c6fd7c3f06944e0bbf22328c878\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Orders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminOrders&amp;token=d2ee6c6fd7c3f06944e0bbf22328c878\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/adminjuara/index.php/sell/orders/invoices/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSlip&amp;token=7df7dcc177f01707d7ee842e56a90c95\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/adminjuara/index.php/sell/orders/delivery-slips/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCarts&amp;token=b3c835c487ba98ba2eb5a56ba895c25e\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/adminjuara/index.php/sell/catalog/products?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/adminjuara/index.php/sell/catalog/products?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/adminjuara/index.php/sell/catalog/categories?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminTracking&amp;token=5cf71ab531ce013eae99765b6feac77e\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAttributesGroups&amp;token=f1fbcc82c6d163e8133e790a33b40569\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/adminjuara/index.php/sell/catalog/brands/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAttachments&amp;token=a6f88f5d75a4e7f501806234f4b60b88\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCartRules&amp;token=722e0a75e76c14765ffe30085bb8de6d\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/adminjuara/index.php/sell/stocks/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/adminjuara/index.php/sell/customers/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Customers
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/adminjuara/index.php/sell/customers/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAddresses&amp;token=7355f2c849982df1e235319f9751f9a4\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCustomerThreads&amp;token=5b0edcd1ca937dad6b87fed4418c8a6a\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Customer Service
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCustomerThreads&amp;token=5b0edcd1ca937dad6b87fed4418c8a6a\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminOrderMessage&amp;token=93a4c45fc9dc995ddd4e6d1867975dbd\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminReturn&amp;token=9774e1670e90b785c57a68d0c132c774\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminStats&amp;token=0f91cf8df9c918f6f37565cae8acc428\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/adminjuara/index.php/improve/modules/manage?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/adminjuara/index.php/improve/modules/manage?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsMboModule&amp;token=efbb924058fffe6a2f54695f0b285506\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/adminjuara/index.php/improve/design/themes/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/adminjuara/index.php/improve/design/themes/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsMboTheme&amp;token=293f6f2aa0397d39e9365c7d17251bb0\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/adminjuara/index.php/improve/design/mail_theme/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/adminjuara/index.php/improve/design/cms-pages/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/adminjuara/index.php/improve/design/modules/positions/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminImages&amp;token=742aa96e66abd66d97e14d7e6190876d\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/adminjuara/index.php/modules/link-widget/list?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminIqitElementor\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminIqitElementor&amp;token=c7076ad14a3a34ae2b0fce581b679674\" class=\"link\"> Iqit Elementor - Page builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-IqitFrontThemeEditor\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=IqitFrontThemeEditor&amp;token=03449d3e4113407d0c24ae7d57493d12\" class=\"link\"> IqitThemeEditor - Live
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminIqitThemeEditor\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminIqitThemeEditor&amp;token=b1b006bbe1b7ce318c340b9cf37088d3\" class=\"link\"> IqitThemeEditor - Backoffice
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCarriers&amp;token=d793d7a3fa35ee999d443aaee283907d\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Shipping
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCarriers&amp;token=d793d7a3fa35ee999d443aaee283907d\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/adminjuara/index.php/improve/shipping/preferences?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminMinimumRange\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminMinimumRange&amp;token=2a18e7c0ff9db099601218f155cad38b\" class=\"link\"> KURIRQ Minimum Range
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/adminjuara/index.php/improve/payment/payment_methods?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Payment
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/adminjuara/index.php/improve/payment/payment_methods?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/adminjuara/index.php/improve/payment/preferences?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/adminjuara/index.php/improve/international/localization/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/adminjuara/index.php/improve/international/localization/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminZones&amp;token=7a3ef34ce46d130ecc03bd2e75cabe5b\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/adminjuara/index.php/improve/international/taxes/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/adminjuara/index.php/improve/international/translations/settings?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/adminjuara/index.php/configure/shop/preferences/preferences?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Shop Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/preferences/preferences?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/order-preferences/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/product-preferences/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/customer-preferences/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/adminjuara/index.php/configure/shop/contacts/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/adminjuara/index.php/configure/shop/seo-urls/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSearchConf&amp;token=6ee5f2cefba8f22ece8fdf94454e836b\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminGamification&amp;token=235aa2a0c0bd95366cdfe4e3403707b8\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/adminjuara/index.php/configure/advanced/system-information/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Advanced Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/adminjuara/index.php/configure/advanced/system-information/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/adminjuara/index.php/configure/advanced/performance/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/adminjuara/index.php/configure/advanced/administration/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/adminjuara/index.php/configure/advanced/emails/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/adminjuara/index.php/configure/advanced/import/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/adminjuara/index.php/configure/advanced/employees/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/adminjuara/index.php/configure/advanced/sql-requests/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/adminjuara/index.php/configure/advanced/logs/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/adminjuara/index.php/configure/advanced/webservice-keys/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                                
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminMenuTabs\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminMenuTabs&amp;token=43c7a283b5d9475cca327e8fd0b125d3\" class=\"link\"> Menu
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"134\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevsliderSliders&amp;token=11ebbb4828c06a07d74349ef261435cb\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Sliders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=2c601f01fb48ec765a2a555ccab752e7\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Global Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"137\" id=\"subtab-AdminRevolutionsliderAddons\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevolutionsliderAddons&amp;token=b537c5039a70039bf6f000f240fc3713\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Addons
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"138\" id=\"subtab-AdminRevolutionsliderNavigation\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevolutionsliderNavigation&amp;token=7fdb00f0f62f389c8749ec2de445486a\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Navigation
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"148\" id=\"tab-AdminSimpleBlog\">
              <span class=\"title\">Blog for PrestaShop</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminSimpleBlogCategories\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogCategories&amp;token=5c81753ccfd3405621d421c501ba59ab\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Categories
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminSimpleBlogPosts\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogPosts&amp;token=a15963d9058279ad8cdb2933de1037ab\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Posts
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminSimpleBlogComments\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogComments&amp;token=150cb6601fea4647f8126cbfbdc9edc7\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Comments
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminSimpleBlogTags\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogTags&amp;token=bcbd40fc7297648cc4ccf2e004f3d978\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Tags
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminSimpleBlogSettings\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogSettings&amp;token=be826efefa4a7e7e37145be4d796df5c\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Theme &amp; Logo &gt; Theme          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsMboModule&token=efbb924058fffe6a2f54695f0b285506';
    var controller = 'AdminThemes';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/adminjuara/index.php/improve/design/themes/import?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\"                  title=\"Add new theme\"                >
                  <i class=\"material-icons\">add</i>                  Add new theme
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/adminjuara/index.php/improve/design/themes/export?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\"                  title=\"Export current theme\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Export current theme
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/adminjuara/index.php/improve/modules/catalog?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminjuara/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D1.7.6.0%2526country%253Den/Help?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/adminjuara/index.php/improve/design/themes/?_token=F6RTHoLTqj2gJJX5u6AWzwh-rUmKN61v0oJd4KpYbVs\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsThemeCustoConfiguration&token=12f5457be8cb88f713484c25d37547f7\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Homepage Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsThemeCustoAdvanced&token=7077f7a7b37ae46ec1da3d50bb75737f\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1456
        $this->displayBlock('content_header', $context, $blocks);
        // line 1457
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1458
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1459
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1460
        echo "
             
<div class=\"panel clearfix\" id=\"prestastore-content\"></div>
<script type=\"text/javascript\">
\t\$.ajax({
\t\ttype: 'POST',
\t\theaders: { \"cache-control\": \"no-cache\" },
\t\turl: 'index.php?controller=AdminPsMboModule&token=efbb924058fffe6a2f54695f0b285506',
\t\tasync: true,
\t\tcache: false,
\t\tdataType : \"html\",
\t\tdata: {
\t\t\tajax: '1',
\t\t\taction:'getMboAddonsThemes',
\t\t},
\t\tsuccess: function(htmlData) {
\t\t\t\$(\"#prestastore-content\").html(\"<h3><i class='icon-picture-o'></i> Live from PrestaShop Addons!</h3>\"+htmlData);
\t\t}
\t});

\t// These variable will move the form to another location
\tvar formToMove = \"appearance\";
\tvar formDestination = \"js_theme_form_container\";
</script>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminDashboard&amp;token=4bb8491e1474c4b2eeb4abb7609ed27f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=fahmi474%40outlook.co.id&amp;firstname=Fahmi&amp;lastname=Imadudin&amp;website=http%3A%2F%2Fhammerstoutdenim.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/adminjuara/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=fahmi474%40outlook.co.id&amp;firstname=Fahmi&amp;lastname=Imadudin&amp;website=http%3A%2F%2Fhammerstoutdenim.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1589
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 177
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1456
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1457
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1458
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1459
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1589
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__ff801e14870247921541d203dc2f3c19e8f5daca6baf4594d6fc3ffa6f6f02d8";
    }

    public function getDebugInfo()
    {
        return array (  1679 => 1589,  1674 => 1459,  1669 => 1458,  1664 => 1457,  1659 => 1456,  1650 => 177,  1642 => 1589,  1511 => 1460,  1508 => 1459,  1505 => 1458,  1502 => 1457,  1500 => 1456,  217 => 177,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ff801e14870247921541d203dc2f3c19e8f5daca6baf4594d6fc3ffa6f6f02d8", "");
    }
}
