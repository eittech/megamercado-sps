<?php

/* __string_template__221813f8a82c0c15c2bcd85c262877d4ca1cd229572ebe27ccabdf70dc397ba5 */
class __TwigTemplate_808d4a17fd62ea4fb25de3c587419681fb91c6446791f616b206556f82ad7421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gestor de módulos • Tecnopolis</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'VE';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '5df8feb372d50a0869d9e198cbc421fd';
    var token_admin_orders = '72135ca10480db495a302b2dcc966837';
    var token_admin_customers = '47148f30a42052a97fdcb5f730d16985';
    var token_admin_customer_threads = 'f7323a38cd660aceed58094469c5cb88';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'd31ba4e0c376d89bdc5e0d6f1fc38688';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin860854syz/index.php/improve/modules/catalog/recommended?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin860854syz/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin860854syz/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin860854syz\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"VEF\",\"sign\":\"Bs\",\"name\":\"bol\\u00edvar venezolano\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js\"></script>
<script type=\"text/javascript\" src=\"/admin860854syz/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/admin860854syz/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin860854syz/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://megamercado.io/admin860854syz/index.php?controller=AdminGamification&token=4822ba97426c09b311c304791154e94b';
\t\t\t\tvar current_id_tab = 48;
\t\t\t</script>
<script type=\"text/javascript\">
\t(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-138493297-1', 'auto');
                        ga('set', 'nonInteraction', true);
    
    ga('require', 'ec');
</script>



";
        // line 97
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-es adminmodulesmanage\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminDashboard&amp;token=7dbd182fddab04f208841d42b30266e4\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://megamercado.io/tecnopolis/admin860854syz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8ff4e76b28786a0b1db9de87579ba31c\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item active\"
         href=\"http://megamercado.io/tecnopolis/admin860854syz/index.php/improve/modules/manage?token=538f7d947211a46d80037c4284871e94\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://megamercado.io/tecnopolis/admin860854syz/index.php?controller=AdminCategories&amp;addcategory&amp;token=6d911a2a8ff9dde1126524bfad354b2e\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://megamercado.io/tecnopolis/admin860854syz/index.php/sell/catalog/products/new?token=538f7d947211a46d80037c4284871e94\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://megamercado.io/tecnopolis/admin860854syz/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=367f78f1289ea0db0028f1353a97877b\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://megamercado.io/tecnopolis/admin860854syz/index.php?controller=AdminOrders&amp;token=72135ca10480db495a302b2dcc966837\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"84\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://megamercado.io/admin860854syz/index.php?controller=AdminQuickAccesses&token=6c4c95d93df99a88beb52fb01048820a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Eliminar de acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminQuickAccesses&token=6c4c95d93df99a88beb52fb01048820a\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin860854syz/index.php?controller=AdminSearch&amp;token=ecb671cb9e31a672753b870db8216418\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
        <div id=\"shop-list\" class=\"shop-list dropdown ps-dropdown stores\">
    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"dropdown\">
      <span class=\"selected-item\">
        <i class=\"material-icons visibility\">visibility</i>
                  Tecnopolis
                <i class=\"material-icons arrow-down\">arrow_drop_down</i>
      </span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right ps-dropdown-menu\">
      <ul class=\"items-list\"><li><a class=\"dropdown-item\" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=\">Todas las tiendas</a></li><li class=\"group\"><a class=\"dropdown-item\" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=g-1\">grupo Default</a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=s-1\">MegaMercado</a><a class=\"link-shop\" href=\"/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"group\"><a class=\"dropdown-item\" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=g-3\">grupo MegaMercado</a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=s-5\">Alicay</a><a class=\"link-shop\" href=\"/alicay/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=s-2\">ArtMakeupRoom</a><a class=\"link-shop\" href=\"/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=s-6\">Hierbabuena</a><a class=\"link-shop\" href=\"/hierbabuena/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=s-3\">Puro Extremo</a><a class=\"link-shop\" href=\"/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"shop active\"><a class=\"dropdown-item \" href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM&amp;setShopContext=s-4\">Tecnopolis</a><a class=\"link-shop\" href=\"/tecnopolis/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li></ul>

    </div>
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
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Y si incluyes algunos descuentos de temporada?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Ha enviado algún correo electrónico de adquisición últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              ¡Eso significa más tiempo para otras cosas!
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/systems%40eittech.net.jpg\" />
      <span>Eittech Systems</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=d31ba4e0c376d89bdc5e0d6f1fc38688\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminLogin&amp;logout=1&amp;token=cb02281b16ad26c277965584d8f1789c\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminDashboard&amp;token=7dbd182fddab04f208841d42b30266e4\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminOrders&amp;token=72135ca10480db495a302b2dcc966837\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminOrders&amp;token=72135ca10480db495a302b2dcc966837\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin860854syz/index.php/sell/orders/invoices/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminSlip&amp;token=bcdeb1a4d6135862ef7791d2399d627b\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin860854syz/index.php/sell/orders/delivery-slips/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCarts&amp;token=4184d8ede4eba09e802185b26a41df38\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin860854syz/index.php/sell/catalog/products?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin860854syz/index.php/sell/catalog/products?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCategories&amp;token=6d911a2a8ff9dde1126524bfad354b2e\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminTracking&amp;token=25eeccde9c416c897ddeb15f4553209f\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminAttributesGroups&amp;token=5ea04e35b75bfe59d5bea806b4be611a\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminManufacturers&amp;token=d9cff5712d041460aceda5b6099aeecd\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminAttachments&amp;token=9c944f4a1db2e5550aaac06396dafc77\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCartRules&amp;token=367f78f1289ea0db0028f1353a97877b\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin860854syz/index.php/sell/stocks/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCustomers&amp;token=47148f30a42052a97fdcb5f730d16985\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCustomers&amp;token=47148f30a42052a97fdcb5f730d16985\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminAddresses&amp;token=fa366c260e7906b14b38caf53425fb50\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCustomerThreads&amp;token=f7323a38cd660aceed58094469c5cb88\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCustomerThreads&amp;token=f7323a38cd660aceed58094469c5cb88\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminOrderMessage&amp;token=4bf1aae6f6854da0c3e360a33bb0dcb8\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminReturn&amp;token=64fe95076888e8b464c9ef4131bc981d\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminStats&amp;token=8ff4e76b28786a0b1db9de87579ba31c\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminPsMboModule&amp;token=678042dcf9279ae97d5e1dde82d6e2ff\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminPsMboModule&amp;token=678042dcf9279ae97d5e1dde82d6e2ff\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminThemes&amp;token=370a788f3b3c5efbc8a7ed1e70289954\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminThemes&amp;token=370a788f3b3c5efbc8a7ed1e70289954\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminPsMboTheme&amp;token=2a4635fd8da7e76015e96ac289809144\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCmsContent&amp;token=f324a2ec7a93bd883225d4a91e37833e\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin860854syz/index.php/improve/design/modules/positions/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminImages&amp;token=0dc4697c4d8dcc68551c79f796e0312c\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminLinkWidget&amp;token=5c599c15f31e437a294c8cca7ae1cd99\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCarriers&amp;token=d6d829bbc76f4bf4f52e2a39f6c33dd4\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminCarriers&amp;token=d6d829bbc76f4bf4f52e2a39f6c33dd4\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin860854syz/index.php/improve/shipping/preferences?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin860854syz/index.php/improve/payment/payment_methods?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin860854syz/index.php/improve/payment/payment_methods?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin860854syz/index.php/improve/payment/preferences?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin860854syz/index.php/improve/international/localization/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin860854syz/index.php/improve/international/localization/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminZones&amp;token=ddc58a2be7638987a6179209b5adce4e\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminTaxes&amp;token=0b8111d06391dc5789add41184dccfcf\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin860854syz/index.php/improve/international/translations/settings?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin860854syz/index.php/configure/shop/preferences/preferences?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin860854syz/index.php/configure/shop/preferences/preferences?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin860854syz/index.php/configure/shop/order-preferences/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin860854syz/index.php/configure/shop/product-preferences/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin860854syz/index.php/configure/shop/customer-preferences/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminContacts&amp;token=b4ac1e2addcbaaa59db5c405fd5a3917\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin860854syz/index.php/configure/shop/seo-urls/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminSearchConf&amp;token=d5a6fe1ff4c012fdc09fb2990d73e316\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminGamification&amp;token=4822ba97426c09b311c304791154e94b\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin860854syz/index.php/configure/advanced/system-information/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin860854syz/index.php/configure/advanced/system-information/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin860854syz/index.php/configure/advanced/performance/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin860854syz/index.php/configure/advanced/administration/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin860854syz/index.php/configure/advanced/emails/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/admin860854syz/index.php/configure/advanced/import/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminEmployees&amp;token=d31ba4e0c376d89bdc5e0d6f1fc38688\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminRequestSql&amp;token=d968e72d4e3bd66d342f4087c98cd866\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin860854syz/index.php/configure/advanced/logs/?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminWebservice&amp;token=c57ff83d9b7fe93ca163fe9028b1f8d8\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminShopGroup\">
                              <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminShopGroup&amp;token=1eed274231742feefb90084a7ba71a7b\" class=\"link\"> Multitienda
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestor de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://megamercado.io/admin860854syz/index.php?controller=AdminPsMboModule&token=678042dcf9279ae97d5e1dde82d6e2ff';
    var controller = 'AdminModulesManage';
    
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
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Subir un módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>
                  Subir un módulo
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Conectarse a Addons Marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>
                  Conectarse a Addons Marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin860854syz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminModules%253Fversion%253D1.7.5.1%2526country%253Des/Ayuda?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/admin860854syz/index.php/improve/modules/manage?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"48\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin860854syz/index.php/improve/modules/alerts?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"49\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin860854syz/index.php/improve/modules/updates?_token=BBVvls_gO4ePEUk3C9O9ggTG01WNUucCy4PkjebXaJM\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"50\">
                      Actualizaciones
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
        // line 1180
        $this->displayBlock('content_header', $context, $blocks);
        // line 1181
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1182
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1183
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1184
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos y Servicios recomendados</h3>
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
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://megamercado.io/admin860854syz/index.php?controller=AdminDashboard&amp;token=7dbd182fddab04f208841d42b30266e4\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=systems%40eittech.net&amp;firstname=Eittech&amp;lastname=Systems&amp;website=http%3A%2F%2Fmegamercado.io%2Ftecnopolis%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin860854syz/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=systems%40eittech.net&amp;firstname=Eittech&amp;lastname=Systems&amp;website=http%3A%2F%2Fmegamercado.io%2Ftecnopolis%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
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
        // line 1307
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 97
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1180
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1181
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1182
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1183
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1307
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__221813f8a82c0c15c2bcd85c262877d4ca1cd229572ebe27ccabdf70dc397ba5";
    }

    public function getDebugInfo()
    {
        return array (  1386 => 1307,  1381 => 1183,  1376 => 1182,  1371 => 1181,  1366 => 1180,  1357 => 97,  1349 => 1307,  1224 => 1184,  1221 => 1183,  1218 => 1182,  1215 => 1181,  1213 => 1180,  126 => 97,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__221813f8a82c0c15c2bcd85c262877d4ca1cd229572ebe27ccabdf70dc397ba5", "");
    }
}
