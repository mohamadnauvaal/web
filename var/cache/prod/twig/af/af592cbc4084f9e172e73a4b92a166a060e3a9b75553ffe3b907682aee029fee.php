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

/* __string_template__4afb87468f9130f24b2c90acf1982ec8e04c840a7437f888c40e7bf4798594c4 */
class __TwigTemplate_2ceaaa1bf73847be3f00859aa30b035c2992ae08f352b690e20c81a108e930b9 extends \Twig\Template
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
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Product • Hammerstout</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
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
    var token = '9c88619072213cf92cfb13acba651ff3';
    var token_admin_orders = 'bebaebacb20f33f689e688fdc44acf74';
    var token_admin_customers = '03f681a16ce02bf929971698e08d5d07';
    var token_admin_customer_threads = '72866bb92c715eb422c1994220550148';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '0fb6859fce49ba939387573fb9e24525';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/adminjuara/index.php/improve/modules/catalog/recommended?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg';
    var admin_notification_get_link = '/adminjuara/index.php/common/notifications?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg';
    var admin_notification_push_link = '/adminjuara/index.php/common/notifications/ack?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/modules/iqitextendedproduct/views/css/admin_tab.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminjuara/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminjuara\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminjuara\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Indonesian Rupiah\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var iqitModulesAdditionalTabs = {\"ajaxUrl\":\"https:\\/\\/hammerstoutdenim.com\\/adminjuara\\/index.php?controller=AdminModules&token=52f81cf85341991f048eaa96ac30ece5&ajax=1&configure=iqitadditionaltabs\"};
var iqitModulesSizeCharts = {\"ajaxUrl\":\"https:\\/\\/hammerstoutdenim.com\\/adminjuara\\/index.php?controller=AdminModules&token=52f81cf85341991f048eaa96ac30ece5&ajax=1&configure=iqitsizecharts\"};
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
    let adminController = \"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAjaxFaviconBO&amp;token=fb3178498a53dd357034d5370a27a75f\";
</script>

<script>
            var admin_gamification_ajax_url = \"https:\\/\\/hammerstoutdenim.com\\/adminjuara\\/index.php?controller=AdminGamification&token=6ea6fe913909417243c947b95c1fa7ab\";
            var current_id_tab = 10;
        </script>

";
        // line 176
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-en adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminDashboard&amp;token=2fcb8ab565db1d631d2ca68594c19da2\"></a>
      <span id=\"shop_version\">1.7.6.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminModules&amp;configure=iqitmegamenu&amp;token=52f81cf85341991f048eaa96ac30ece5\"
                 data-item=\"MENU\"
      >MENU</a>
          <a class=\"dropdown-item\"
         href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminModules&amp;configure=supercheckout&amp;token=52f81cf85341991f048eaa96ac30ece5\"
                 data-item=\"SUPERCHECKOUT\"
      >SUPERCHECKOUT</a>
          <a class=\"dropdown-item\"
         href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminIqitThemeEditor&amp;token=db211cb19a664dcb647dbc5b2754b20b\"
                 data-item=\"THEME EDITTOR\"
      >THEME EDITTOR</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"191\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/41\"
        data-post-link=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminQuickAccesses&token=709817adc37c23d94b0047e8684455db\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminQuickAccesses&token=709817adc37c23d94b0047e8684455db\">
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
      action=\"/adminjuara/index.php?controller=AdminSearch&amp;token=bbb2be83516ac5bb674d2d6728ff7d68\"
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
             title=\"<p class='text-left'><strong>Your shop is in maintenance.</strong></p><p class='text-left'>Your visitors and customers cannot access your shop while in maintenance mode.&lt;br /&gt; To manage the maintenance settings, go to Shop Parameters &amp;gt; Maintenance tab.</p>\" href=\"/adminjuara/index.php/configure/shop/maintenance/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\"
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
              That's more time for something else!
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/mohamadnauvaal%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Noval</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminjuara/index.php/configure/advanced/employees/4/edit?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\">
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
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminLogin&amp;logout=1&amp;token=18bb82652e39aa09e2737f2e1115a288\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminjuara/index.php/configure/advanced/employees/toggle-navigation?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminDashboard&amp;token=2fcb8ab565db1d631d2ca68594c19da2\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminOrders&amp;token=bebaebacb20f33f689e688fdc44acf74\" class=\"link\">
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
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminOrders&amp;token=bebaebacb20f33f689e688fdc44acf74\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/adminjuara/index.php/sell/orders/invoices/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSlip&amp;token=39a160d16988eee2be7880eebb0f4783\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/adminjuara/index.php/sell/orders/delivery-slips/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCarts&amp;token=86eee015d8b4146318fd7563467db466\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/adminjuara/index.php/sell/catalog/products?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/adminjuara/index.php/sell/catalog/products?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/adminjuara/index.php/sell/catalog/categories?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminTracking&amp;token=b149769a68b03740624145e7644c73a7\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAttributesGroups&amp;token=1daad38e30028d08b9e18f5b6edd5a58\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/adminjuara/index.php/sell/catalog/brands/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAttachments&amp;token=4dc62ac499437e7b07c516f7987f5e28\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCartRules&amp;token=a2e02d0c218df45938dc974dbe2e8250\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/adminjuara/index.php/sell/stocks/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/adminjuara/index.php/sell/customers/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
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
                              <a href=\"/adminjuara/index.php/sell/customers/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminAddresses&amp;token=7b24bb0635c38f6da17c07dc21baaf17\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCustomerThreads&amp;token=72866bb92c715eb422c1994220550148\" class=\"link\">
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
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCustomerThreads&amp;token=72866bb92c715eb422c1994220550148\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminOrderMessage&amp;token=0e0533b908e91b3ecb487a4bfa169df0\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminReturn&amp;token=cea92eaf377e3b885c461a4842d8cb66\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminStats&amp;token=825b52163e3cd7e40a0c1381db00a350\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/adminjuara/index.php/improve/modules/manage?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
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
                              <a href=\"/adminjuara/index.php/improve/modules/manage?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsMboModule&amp;token=d027a295190332432b93de3cd70cb240\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/adminjuara/index.php/improve/design/themes/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/adminjuara/index.php/improve/design/themes/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminPsMboTheme&amp;token=1df117a6914d0ebff619dba67cdbd9dd\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/adminjuara/index.php/improve/design/mail_theme/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/adminjuara/index.php/improve/design/cms-pages/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/adminjuara/index.php/improve/design/modules/positions/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminImages&amp;token=8d68f86ff4713effb2b5845b20091f06\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/adminjuara/index.php/modules/link-widget/list?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminIqitElementor\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminIqitElementor&amp;token=53fb65485d56021d768608b4bcd20797\" class=\"link\"> Iqit Elementor - Page builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-IqitFrontThemeEditor\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=IqitFrontThemeEditor&amp;token=b4aec3f62dbdf0c147115906701c7da2\" class=\"link\"> IqitThemeEditor - Live
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminIqitThemeEditor\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminIqitThemeEditor&amp;token=db211cb19a664dcb647dbc5b2754b20b\" class=\"link\"> IqitThemeEditor - Backoffice
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCarriers&amp;token=aabce5e2d6d5bd8e1c5e3995e6938c94\" class=\"link\">
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
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminCarriers&amp;token=aabce5e2d6d5bd8e1c5e3995e6938c94\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/adminjuara/index.php/improve/shipping/preferences?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminMinimumRange\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminMinimumRange&amp;token=fd9a4723f019232fa84f73a134a13520\" class=\"link\"> KURIRQ Minimum Range
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/adminjuara/index.php/improve/payment/payment_methods?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
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
                              <a href=\"/adminjuara/index.php/improve/payment/payment_methods?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/adminjuara/index.php/improve/payment/preferences?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/adminjuara/index.php/improve/international/localization/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
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
                              <a href=\"/adminjuara/index.php/improve/international/localization/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminZones&amp;token=c0fe2a24b546af709056ebca47edc760\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/adminjuara/index.php/improve/international/taxes/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/adminjuara/index.php/improve/international/translations/settings?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/adminjuara/index.php/configure/shop/preferences/preferences?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
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
                              <a href=\"/adminjuara/index.php/configure/shop/preferences/preferences?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/order-preferences/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/product-preferences/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/adminjuara/index.php/configure/shop/customer-preferences/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/adminjuara/index.php/configure/shop/contacts/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/adminjuara/index.php/configure/shop/seo-urls/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSearchConf&amp;token=fca1a299ab7ffe5a04cec16c3faee4f1\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminGamification&amp;token=6ea6fe913909417243c947b95c1fa7ab\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/adminjuara/index.php/configure/advanced/system-information/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\">
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
                              <a href=\"/adminjuara/index.php/configure/advanced/system-information/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/adminjuara/index.php/configure/advanced/performance/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/adminjuara/index.php/configure/advanced/administration/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/adminjuara/index.php/configure/advanced/emails/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/adminjuara/index.php/configure/advanced/import/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/adminjuara/index.php/configure/advanced/employees/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/adminjuara/index.php/configure/advanced/sql-requests/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/adminjuara/index.php/configure/advanced/logs/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/adminjuara/index.php/configure/advanced/webservice-keys/?_token=P5fI4Qv_e9xYJ8LSlS0b_6KKNpWMy0uRFboG1ksLBjg\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                                
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminMenuTabs\">
                              <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminMenuTabs&amp;token=3cf140c83f2e121097fbb4dbbb69d74c\" class=\"link\"> Menu
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"134\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevsliderSliders&amp;token=1775c4d7841fa55f3afe82f66ad572bd\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=f8b547a49f853f1f54bcb292ec58410c\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevolutionsliderAddons&amp;token=573ff60311cb6a7dba3f21998886eeea\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminRevolutionsliderNavigation&amp;token=eab2d5d4dbf6b6eb68a867cb2293dccc\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogCategories&amp;token=cd23e86b0892a1b0171c67739b2b8740\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogPosts&amp;token=d0b5079aa7f488ed1e7f2f191e8c15a4\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogComments&amp;token=5cce23fe86d67bbcc46ecc1672d0b1ce\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogTags&amp;token=11c7c63f6334181c599925ce1dbd18e1\" class=\"link\">
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
                  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminSimpleBlogSettings&amp;token=41b62f9ffdd78de03dbca56f2e2ffffd\" class=\"link\">
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
                
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1301
        $this->displayBlock('content_header', $context, $blocks);
        // line 1302
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1303
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1304
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1305
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Recommended Modules and Services</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
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
  <a href=\"https://hammerstoutdenim.com/adminjuara/index.php?controller=AdminDashboard&amp;token=2fcb8ab565db1d631d2ca68594c19da2\" class=\"btn btn-primary py-1 mt-3\">
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
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=mohamadnauvaal%40gmail.com&amp;firstname=Noval&amp;lastname=Web&amp;website=http%3A%2F%2Fhammerstoutdenim.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/adminjuara/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=mohamadnauvaal%40gmail.com&amp;firstname=Noval&amp;lastname=Web&amp;website=http%3A%2F%2Fhammerstoutdenim.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
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
        // line 1426
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 176
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1301
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1302
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1303
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1304
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1426
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
        return "__string_template__4afb87468f9130f24b2c90acf1982ec8e04c840a7437f888c40e7bf4798594c4";
    }

    public function getDebugInfo()
    {
        return array (  1516 => 1426,  1511 => 1304,  1506 => 1303,  1501 => 1302,  1496 => 1301,  1487 => 176,  1479 => 1426,  1356 => 1305,  1353 => 1304,  1350 => 1303,  1347 => 1302,  1345 => 1301,  216 => 176,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4afb87468f9130f24b2c90acf1982ec8e04c840a7437f888c40e7bf4798594c4", "");
    }
}
