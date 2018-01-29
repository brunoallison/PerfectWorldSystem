<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-skins.min.css">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon/favicon.ico" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- #APP SCREEN / ICONS -->
    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="/img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/splash/touch-icon-ipad-retina.png">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

</head>

<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  01. #CSS Links                |  all CSS links and file paths  |
|  02. #FAVICONS                 |  Favicon links and file paths  |
|  03. #GOOGLE FONT              |  Google font link              |
|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
|  05. #BODY                     |  body tag                      |
|  06. #HEADER                   |  header tag                    |
|  07. #PROJECTS                 |  project lists                 |
|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
|  09. #MOBILE                   |  mobile view dropdown          |
|  10. #SEARCH                   |  search field                  |
|  11. #NAVIGATION               |  left panel & navigation       |
|  12. #MAIN PANEL               |  main panel                    |
|  13. #MAIN CONTENT             |  content holder                |
|  14. #PAGE FOOTER              |  page footer                   |
|  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
|  16. #PLUGINS                  |  all scripts and plugins       |

===================================================================

-->

<!-- #BODY -->
<!-- Possible Classes

    * 'smart-style-{SKIN#}'
    * 'smart-rtl'         - Switch theme mode to RTL
    * 'menu-on-top'       - Switch to top navigation (no DOM change required)
    * 'no-menu'			  - Hides the menu completely
    * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
    * 'fixed-header'      - Fixes the header
    * 'fixed-navigation'  - Fixes the main menu
    * 'fixed-ribbon'      - Fixes breadcrumb
    * 'fixed-page-footer' - Fixes footer
    * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
-->
<body class="">

<!-- #HEADER -->
<header id="header">
    <div id="logo-group">
        <span id="logo"> <img src="/img/logo.png" alt="SmartAdmin"> </span>
    </div>
</header>
<!-- END HEADER -->

<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS/SASS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="/img/avatars/sunny.png" alt="me" class="online" />
						<span>
							{{ auth()->user()->nome . ' ' . auth()->user()->sobrenome }}
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
    -->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="">
                <a href="{{ route('user.index') }}" title="blank_"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Informações Básicas</span></a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Minha conta</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">Perfil</a>
                    </li>
                    <li>
                        <a href="buttons.html">Sacar gold</a>
                    </li>
                    <li>
                        <a href="buttons.html">Logs</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">Loja</span></a>
                <ul>
                    <li>
                        <a href="#">Itens</a>
                        <ul>
                            <li>
                                <a href="fa.html">Consumíveis</a>
                            </li>
                            <li>
                                <a href="glyph.html">Pedras</a>
                            </li>
                            <li>
                                <a href="flags.html">Montarias</a>
                            </li>
                            <li>
                                <a href="flags.html">Vôos</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="products-view.html">Carrinho de compras</a></li>
                    <li><a href="products-detail.html">Histórico de compras</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-ticket"></i> <span class="menu-item-parent">Rifas</span></a>
                <ul>
                    <li>
                        <a href="#">Especial</a>
                        <ul>
                            <li>
                                <a href="fa.html">Em andamento</a>
                            </li>
                            <li>
                                <a href="glyph.html">Finalizadas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Normal</a>
                        <ul>
                            <li>
                                <a href="fa.html">Em andamento</a>
                            </li>
                            <li>
                                <a href="glyph.html">Finalizadas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Grátis</a>
                        <ul>
                            <li>
                                <a href="fa.html">Em andamento</a>
                            </li>
                            <li>
                                <a href="glyph.html">Finalizadas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-trophy"></i> <span class="menu-item-parent">Eventos</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">Resgate</a>
                    </li>
                    <li>
                        <a href="buttons.html">Senha secreta</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-heart-o"></i> <span class="menu-item-parent">Doações</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">Fazer doação</a>
                    </li>
                    <li>
                        <a href="buttons.html">Ver pedidos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-lg fa-fw glyphicon glyphicon-user"></i> <span class="menu-item-parent">Personagens</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">Personagem 1</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('logout')}}"><i class="fa fa-lg fa-fw fa-sign-out"></i> <span class="menu-item-parent">Sair</span></a>
            </li>
        </ul>


    </nav>

    <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
<!-- END NAVIGATION -->

<!-- #MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li>
            <li>Informações Básicas</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right" style="margin-right:25px">
            <a href="#" id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa fa-grid"></i> Change Grid</a>
            <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa fa-plus"></i> Add</span>
            <button id="search" class="btn btn-ribbon" data-title="search"><i class="fa fa-search"></i> <span class="hidden-mobile">Search</span></button>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- #MAIN CONTENT -->


    <!-- col -->
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">

            <!-- PAGE HEADER -->
            <i class="fa-fw fa fa-home"></i>
            Informações
            <span>>
							Jogador
						</span>
        </h1>
    </div>
    <!-- end col -->


    <!-- end row -->

    <!-- END #MAIN CONTENT -->

</div>
<!-- END #MAIN PANEL -->

<!-- #PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Perfect World X <span class="hidden-xs"> - Todos os direitos reservados</span> © {{ date('Y') }}</span>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- END FOOTER -->

<!-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
     Note: These tiles are completely responsive, you can add as many as you like -->
<div id="shortcut">
    <ul>
        <li>
            <a href="/index.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


<!-- #PLUGINS -->
<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="/js/libs/jquery-3.2.1.min.js"><\/script>');
    }
</script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="/js/libs/jquery-ui.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="/js/app.config.js"></script>

<!-- BOOTSTRAP JS -->
<script src="/js/bootstrap/bootstrap.min.js"></script>

<!--[if IE 8]>
<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="/js/app.min.js"></script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script>

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>

</html>