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

/* __string_template__65dad6bfe226c9c799db477f59aaeb3817287a5de1fa427b7a0472e99c6ffe74 */
class __TwigTemplate_bf4aa74704966ac3178ce95509459ea5c831b59ca30fbaacbe01bf8de45667ca extends \Twig\Template
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
<html lang=\"uk\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>товар • H2S</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'uk';
    var lang_is_rtl = '0';
    var full_language_code = 'uk';
    var full_cldr_language_code = 'uk-UA';
    var country_iso_code = 'UA';
    var _PS_VERSION_ = '1.7.6.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'У магазині нове замовленя';
    var order_number_msg = 'Номер замовлення: ';
    var total_msg = 'Всього: ';
    var from_msg = 'Джерело: ';
    var see_order_msg = 'Переглянути цей замовлення';
    var new_customer_msg = 'Новий покупець зареєструвався в Вашому магазині.';
    var customer_name_msg = 'Ім\\\\\\'я клієнта: ';
    var new_msg = 'Нові повідомлення у вашому магазині.';
    var see_msg = 'Прочитати повідомлення';
    var token = '52ceb156eb66e2227e346a56a2b5fdbd';
    var token_admin_orders = '3ff38115c73c66fb6f9ae6971549c4f0';
    var token_admin_customers = '484e4dfc6e9a375219cdf3bc0abaa83a';
    var token_admin_customer_threads = '95630f202f8e884b2e1b9f691ba94ce1';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '5e28f09ba5c314f241d388906e373772';
    var choose_language_translate = 'Виберіть мову';
    var default_language = '1';
    var admin_modules_link = '/admin9318yx5nn/index.php/improve/modules/catalog/recommended?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU';
    var admin_notification_get_link = '/admin9318yx5nn/index.php/common/notifications?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU';
    var admin_notification_push_link = '/admin9318yx5nn/index.php/common/notifications/ack?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Успішно оновлено';
    var errorLogin = 'ПрестаШоп не може увійти в Додатки. Будь ласка, перевірте свої дані та ваше інтернет-з\\\\\\'єднання.';
    var search_product_msg = 'Пошук товару';
  </script>

      <link href=\"/admin9318yx5nn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin9318yx5nn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin9318yx5nn\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin9318yx5nn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\";
var currency = {\"iso_code\":\"UAH\",\"sign\":\"\\u20b4\",\"name\":\"\\u0423\\u043a\\u0440\\u0430\\u0457\\u043d\\u0441\\u044c\\u043a\\u0430 \\u0433\\u0440\\u0438\\u0432\\u043d\\u044f\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"\\u0415\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"UAH\",\"currencySymbol\":\"\\u20b4\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"\\u0415\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/admin9318yx5nn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.8\"></script>
<script type=\"text/javascript\" src=\"/admin9318yx5nn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.8\"></script>
<script type=\"text/javascript\" src=\"/admin9318yx5nn/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin9318yx5nn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin9318yx5nn/themes/default/js/bundle/module/module_card.js?v=1.7.6.8\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin9318yx5nn/index.php/common/notifications?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/admin9318yx5nn\\/index.php?controller=AdminGamification&token=7d7fc7c2cf086419cdd65603bfd1e8e1\";
            var current_id_tab = 10;
        </script>

";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-uk adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminDashboard&amp;token=fde1685e066b237ec5a37cc4b48b3473\"></a>
      <span id=\"shop_version\">1.7.6.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Швидкий Доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/admin9318yx5nn/index.php/improve/modules/manage?token=d8ffd847329cd3a4e33f11f82efca64d\"
                 data-item=\"Встановлені модулі\"
      >Встановлені модулі</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminOrders&amp;token=3ff38115c73c66fb6f9ae6971549c4f0\"
                 data-item=\"Замовлення\"
      >Замовлення</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d7247ee7bb79e062fe92d2985632d9d7\"
                 data-item=\"Зведення по Каталогу\"
      >Зведення по Каталогу</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/admin9318yx5nn/index.php/sell/catalog/categories/new?token=d8ffd847329cd3a4e33f11f82efca64d\"
                 data-item=\"Нова категорія\"
      >Нова категорія</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cc0201a4d3751695b74706cdb99ee0ea\"
                 data-item=\"Новий купон\"
      >Новий купон</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost:8080/admin9318yx5nn/index.php/sell/catalog/products/new?token=d8ffd847329cd3a4e33f11f82efca64d\"
                 data-item=\"Новий товар\"
      >Новий товар</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"199\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/22?-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\"
        data-post-link=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminQuickAccesses&token=b742891cabe5454a71f7cfa2eb0e3d1f\"
        data-prompt-text=\"Назвіть цей ярлик:\"
        data-link=\"Товари - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Додати поточну сторінку до ШвидкогоДоступу
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminQuickAccesses&token=b742891cabe5454a71f7cfa2eb0e3d1f\">
      <i class=\"material-icons\">settings</i>
      Керувати швидким доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin9318yx5nn/index.php?controller=AdminSearch&amp;token=7d320834edceaaedabf7bdc37c7a26d2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Пошук (наприклад, артикул товару, ім'я клієнта тощо)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        скрізь
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"скрізь\" href=\"#\" data-value=\"0\" data-placeholder=\"Що ви шукаєте?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> скрізь</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Назва товару, код, артикул...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клієнти за назвою\" href=\"#\" data-value=\"2\" data-placeholder=\"Е-пошта, назва...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клієнти за назвою</a>
        <a class=\"dropdown-item\" data-item=\"Клієнти за ір-адресою\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клієнти за IP-адресою</a>
        <a class=\"dropdown-item\" data-item=\"Замовлення\" href=\"#\" data-value=\"3\" data-placeholder=\"№ замовлення\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Замовлення</a>
        <a class=\"dropdown-item\" data-item=\"Рахунки\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер рахунку\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Рахунки</a>
        <a class=\"dropdown-item\" data-item=\"Кошики\" href=\"#\" data-value=\"5\" data-placeholder=\"ID кошика\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Кошики</a>
        <a class=\"dropdown-item\" data-item=\"Модулів\" href=\"#\" data-value=\"7\" data-placeholder=\"Назва модулю\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модулів</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">ПОШУК</span><i class=\"material-icons\">search</i></button>
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

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти до магазина
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
              Замовлення<span id=\"_nb_new_orders_\"></span>
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
              Клієнти<span id=\"_nb_new_customers_\"></span>
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
              Повідомлень <span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових замовлень :(<br>
              Ви перевірили <strong><a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=3362bda3f8573f0e6d49bdbe9c41123a\">покинуті кошики</a></strong>? <br>Там може ховатися ваше наступне замовлення!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових покупців :(<br>
              Ви думали про продаж на електронних платформах?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових повідомлень.<br>
              Це додатковий час для чогось ще!
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
      від <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зареєстрований <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/totalcommander100%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Вітаємо з поверненням, Ivan</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin9318yx5nn/index.php/configure/advanced/employees/1/edit?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\">
      <i class=\"material-icons\">settings</i>
      Ваш профіль
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Ресурси</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Навчання</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Знайти експерта</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Магазин PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Довідковий центр</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminLogin&amp;logout=1&amp;token=d29ace72bc114882e3aaaa513a9db194\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Вийти</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin9318yx5nn/index.php/configure/advanced/employees/toggle-navigation?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminDashboard&amp;token=fde1685e066b237ec5a37cc4b48b3473\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Панель інструментів</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажі</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminOrders&amp;token=3ff38115c73c66fb6f9ae6971549c4f0\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Замовлення
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminOrders&amp;token=3ff38115c73c66fb6f9ae6971549c4f0\" class=\"link\"> Замовлення
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin9318yx5nn/index.php/sell/orders/invoices/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Рахунки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminSlip&amp;token=ee752382820980a8a464bcd19a752517\" class=\"link\"> Кредитні квитанції
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin9318yx5nn/index.php/sell/orders/delivery-slips/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Транспортні накладні
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCarts&amp;token=3362bda3f8573f0e6d49bdbe9c41123a\" class=\"link\"> Кошики покупців
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin9318yx5nn/index.php/sell/catalog/products?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin9318yx5nn/index.php/sell/catalog/products?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Товари
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin9318yx5nn/index.php/sell/catalog/categories?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Категорії
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminTracking&amp;token=4f768fc2a15f61e2fefb30841fc2859e\" class=\"link\"> Моніторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminAttributesGroups&amp;token=8c615b370ab50849480afc6f59bc8a87\" class=\"link\"> Атрибути, Характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin9318yx5nn/index.php/sell/catalog/brands/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Виробники, Постачальники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminAttachments&amp;token=306e1751c988d9ba22375f60482e5658\" class=\"link\"> Файли
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCartRules&amp;token=cc0201a4d3751695b74706cdb99ee0ea\" class=\"link\"> Знижки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin9318yx5nn/index.php/sell/stocks/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin9318yx5nn/index.php/sell/customers/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клієнти
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin9318yx5nn/index.php/sell/customers/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Клієнти
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminAddresses&amp;token=31abb49671f14f10293bef7b814bb06b\" class=\"link\"> Адреси
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCustomerThreads&amp;token=95630f202f8e884b2e1b9f691ba94ce1\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Служба підтримки клієнтів
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCustomerThreads&amp;token=95630f202f8e884b2e1b9f691ba94ce1\" class=\"link\"> Служба підтримки клієнтів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminOrderMessage&amp;token=ad3dc521532d5fcabeb9d5895af312c1\" class=\"link\"> Коментарі до замовлень
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminReturn&amp;token=efdfb030ab4a43b3e081b53b3a8add29\" class=\"link\"> Повернення товарів
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminStats&amp;token=d7247ee7bb79e062fe92d2985632d9d7\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Параметри</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin9318yx5nn/index.php/improve/modules/manage?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модулів
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin9318yx5nn/index.php/improve/modules/manage?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin9318yx5nn/index.php/modules/addons/modules/catalog?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Каталог модулів
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin9318yx5nn/index.php/improve/design/themes/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin9318yx5nn/index.php/improve/design/themes/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Тема та логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin9318yx5nn/index.php/modules/addons/themes/catalog?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Каталог тем
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin9318yx5nn/index.php/improve/design/mail_theme/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Тема електронних листів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin9318yx5nn/index.php/improve/design/cms-pages/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Сторінки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin9318yx5nn/index.php/improve/design/modules/positions/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Позиції модулів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminImages&amp;token=a5a4fcf0fce1f51a9d7632f4162abce6\" class=\"link\"> Налаштування зображень
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin9318yx5nn/index.php/modules/link-widget/list?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCarriers&amp;token=862988cd24e52f1324beb16fb85b7993\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminCarriers&amp;token=862988cd24e52f1324beb16fb85b7993\" class=\"link\"> Перевізники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin9318yx5nn/index.php/improve/shipping/preferences?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Налаштування
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin9318yx5nn/index.php/improve/payment/payment_methods?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin9318yx5nn/index.php/improve/payment/payment_methods?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Платіжні модулі
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin9318yx5nn/index.php/improve/payment/preferences?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Налаштування
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin9318yx5nn/index.php/improve/international/localization/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Міжнародні
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin9318yx5nn/index.php/improve/international/localization/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Локалізація
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminZones&amp;token=a0b0ba04998b8141309ff14024f04202\" class=\"link\"> Країни
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin9318yx5nn/index.php/improve/international/taxes/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Податки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin9318yx5nn/index.php/improve/international/translations/settings?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Переклади
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Налаштувати</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin9318yx5nn/index.php/configure/shop/preferences/preferences?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Налаштування магазину
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin9318yx5nn/index.php/configure/shop/preferences/preferences?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Загальні
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin9318yx5nn/index.php/configure/shop/order-preferences/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Налаштування замовлень
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin9318yx5nn/index.php/configure/shop/product-preferences/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Налаштування товарів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin9318yx5nn/index.php/configure/shop/customer-preferences/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Налаштування покупця
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin9318yx5nn/index.php/configure/shop/contacts/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Контакти
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin9318yx5nn/index.php/configure/shop/seo-urls/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> SEO оптимізації
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminSearchConf&amp;token=0ea03d78bb76714f0c8ff6303853fd98\" class=\"link\"> Пошук
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminGamification&amp;token=7d7fc7c2cf086419cdd65603bfd1e8e1\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin9318yx5nn/index.php/configure/advanced/system-information/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Розширені параметри
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/system-information/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Інформація
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/performance/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Продуктивність
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/administration/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Адміністрування
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/emails/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Ел. пошта
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/import/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Імпортувати
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/employees/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Співробітники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/sql-requests/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> База даних
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/logs/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> Звіти
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin9318yx5nn/index.php/configure/advanced/webservice-keys/?_token=YFagxG-c7ZZ7ai-Ja6e-3xwIZKXbXDa6LmPU_QWXRnU\" class=\"link\"> WEB Сервіси
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
                
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1032
        $this->displayBlock('content_header', $context, $blocks);
        // line 1033
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1034
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1035
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1036
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О ні!</h1>
  <p class=\"mt-3\">
    Мобільна версія сторінки поки що недоступна.
  </p>
  <p class=\"mt-2\">
    Будь ласка використовуйте персональний комп'ютер для перегляду цієї сторінки, поки що вона не адаптована для мобільних пристроїв.
  </p>
  <p class=\"mt-2\">
    Дякуємо.
  </p>
  <a href=\"http://localhost:8080/admin9318yx5nn/index.php?controller=AdminDashboard&amp;token=fde1685e066b237ec5a37cc4b48b3473\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-UK&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/uk/login?email=totalcommander100%40gmail.com&amp;firstname=Ivan&amp;lastname=Media&amp;website=http%3A%2F%2Flocalhost%3A8080%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin9318yx5nn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Під'єднайте ваш магазин до PrestaShop Addons для автоматичного імпорту усіх придбаних вами додатків.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ще немає облікового запису?</h4>
\t\t\t\t\t\t<p class='text-justify'>Відкрийте для себе PrestaShop Addons! Перегляньте офіційний майданчик додатків PrestaShop та знайдіть більше 3500 іноваційних модулів і тем що оптимізують коефіцієнт конверсії, підвищують відвідуваність, лояльність покупців та вашу продуктивність</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Приєднатися до PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/uk/forgot-your-password\">Я забув пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/uk/login?email=totalcommander100%40gmail.com&amp;firstname=Ivan&amp;lastname=Media&amp;website=http%3A%2F%2Flocalhost%3A8080%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСтворити обліковий запис
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Увійти
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
        // line 1143
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1032
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1033
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1034
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1035
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1143
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
        return "__string_template__65dad6bfe226c9c799db477f59aaeb3817287a5de1fa427b7a0472e99c6ffe74";
    }

    public function getDebugInfo()
    {
        return array (  1233 => 1143,  1228 => 1035,  1223 => 1034,  1218 => 1033,  1213 => 1032,  1204 => 102,  1196 => 1143,  1087 => 1036,  1084 => 1035,  1081 => 1034,  1078 => 1033,  1076 => 1032,  142 => 102,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__65dad6bfe226c9c799db477f59aaeb3817287a5de1fa427b7a0472e99c6ffe74", "");
    }
}
