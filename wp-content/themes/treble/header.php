<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="Treble theme">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/images/ico/favicon.png">
   	<!-- TREBLE STYLESHEETS -->
    <!-- <link rel="stylesheet/less" href="assets/style/bootstrap.less" media="all" /> -->
    <!-- <link rel="stylesheet" href="/assets/style/bootstrap.css" type="text/css" /> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <!-- GOOGLE WEB FONTS -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'> -->

	<?php wp_head(); ?>
</head>
<body>
    <!-- NAVIGATION -->
    <nav class="fixed-top" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Treble">
                    </a>
                    <!-- END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->
                    
                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="#page-welcome">Principal</a></li>
                        <li><a href="#page-work">Exames</a></li>
                        <li><a href="#page-features">Depoimentos</a></li>
                        <li><a href="#page-about">Equipe</a></li>
                        <li><a href="#page-blog">Artigos & Notícias</a></li>
                        <li><a href="#page-contact">Contato</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                        <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                        <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                        <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
    <script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php',null); ?>";
    </script>   