<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>El Internado</title>    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->       
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top nav-custom">
        <div class="container" style="padding-bottom: 10px;">
            <div class="col-xs-12">
                <p class="text-right"><!--radio--></p>
            </div>
        </div>
        <div class="container-custom">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header navbar-header-custom">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" class="logo-navbar" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-collapse-custom" id="bs-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a id="menu-lugar" href="#" class="f-cj text-menu-link"><span class="f-atw text-menu-number">N 01-.</span> El Lugar</a></li>
                        <li><a id="menu-cocina" href="#" class="f-cj text-menu-link"><span class="f-atw text-menu-number">N 02-.</span> Cocina</a></li>
                        <li><a id="menu-blog" href="#" class="f-cj text-menu-link"><span class="f-atw text-menu-number">N 03-.</span> Blog</a></li>
                        <li><a id="menu-contacto" href="#" class="f-cj text-menu-link"><span class="f-atw text-menu-number">N 04-.</span> Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--<header id="carousel-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-generic" data-slide-to="1"></li>
            <li data-target="#carousel-generic" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="fill" style="background-image:url('imgs/header.jpg');"></div>
                <div class="carousel-caption">
                    El Internado
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imgs/header.jpg');"></div>
                <div class="carousel-caption">
                    El Internado
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imgs/header.jpg');"></div>
                <div class="carousel-caption">
                    El Internado
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </header>-->
    <header>
        <div class="fill" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/imgs/header.jpg');"></div>
    </header>