<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>ICT | <?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<link href="<?php bloginfo('template_directory'); ?>/css/web-font.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?>>

<!-- Header Part Start-->
<header class="top-part">
	<div class="container">
    	<div class="row">

			<nav class="main-nav">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<nav class="navbar navbar-default">
								  <div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									  </button>
									  	 
									</div>
									
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									  
																	 <?php wp_nav_menu( array( 'container_class' => 'nav navbar-nav','menu_class' => 'nav navbar-nav', 'theme_location' => 'primary' ) ); ?>			
										
										<?php if ( get_theme_mod( 'ict_logo' ) ) : ?>
										<ul class="nav navbar-nav">
										<li class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'ict_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a></li>
										<?php endif; ?>
										</ul>
										 <?php wp_nav_menu( array( 'container_class' => 'nav navbar-nav','menu_class' => 'nav navbar-nav', 'theme_location' => 'secondary' ) ); ?>			
										
										<ul class="nav navbar-nav">
										
								
                                       
                                            <li class="social-part">
                                            <ul>
                                          <?php echo ict_show_social_icons(); ?>   
                                            </ul>
                                            </li>
                                        
										</ul>
									</div><!-- /.navbar-collapse -->
								  </div><!-- /.container-fluid -->
						</nav>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>

<!-- Header Part End-->
