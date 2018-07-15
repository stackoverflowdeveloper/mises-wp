<?php /* Template Name: onas */ ?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!---->
<div class='mises'> 
<!---->
	<header>
        <!-- <div class='logo'><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class='logo' alt="mises">
            <span class='title'>Instytut Edukacji Ekonomicznej <br> im. Ludwiga von Misesa</span>   
        </div> -->
        <div class='logo'>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class='logo' alt="mises">
            <span class='title'>Instytut Edukacji Ekonomicznej <br> im. Ludwiga von Misesa</span></a>   
        </div>
            <div class='header-right'>
                <div class='social'>
                    <a href="https://www.youtube.com/user/MisesInstitutePL"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="social share youtube"></a>
                    <a href="https://twitter.com/misespl"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="social share twitter"></a>
                    <a href="https://www.facebook.com/InstytutMisesa/"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="social share facebook"></a>
                </div>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/wsparcie"><div class='support-btn'><span>Wesprzyj nas</span><div class='support-btn-strzalki'><i class="fa fa-usd" aria-hidden="true"></i>
                </div></div></a>

                <!-- <a href="#"><div class='support-btn'><span>Wesprzyj nas</span><div class='support-btn-strzalki'><img src="./img/btn-wsparcie-strzalki.png" alt="wsparcie"></div></div></a> -->

                <div class='nav-icon' id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>


            </div>
    </header><!-- #masthead -->
		<nav id="navigation" class="nav-top">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->


	<div id="content" class="site-content container">
    <main class='full-width'>

        <div class="container aboutContainer">
            <h1 class="title">Kim jesteśmy</h1>
            <div class="gridWrapper">
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
            </div>
            <div class="gridWrapper">
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
            </div>
            <div class="gridWrapper">
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
            </div>
            <div class="gridWrapper">
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
            </div>
            <div class="gridWrapper">
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
                <div class="column">
                    <img class="about__foto" src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
                    <h5 class="about__member">Anna Gruhn</h5>
                    <p class="about__info">
                        <strong class="about__relevant">Lorem ipsum dolor -</strong> sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non
                        felis. Ma</p>
                    <div class="about__icon about__icon-Phone">123 456 789</div>
                    <div class="about__icon about__icon-Mail">loremipsum@mises.pl</div>
                </div>
            </div>
        </div>

        <div class="about__context">
            <h2 class="about__heading">Czym się zajmujemy</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi doloremque quisquam temporibus accusantium
                iure nemo repellendus! Sed mollitia reprehenderit alias explicabo illum dolor in deserunt perferendis dolores?
                Maxime, magni laborum! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora sed neque nulla
                itaque consequuntur quae iusto. Neque illum minima magni, repudiandae maxime eos et, sequi distinctio, dolore
                animi dignissimos dicta?</p>
        </div>
        <div class="about__context">
            <h2 class="about__heading">Szkoła austriacka</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi doloremque quisquam temporibus accusantium
                iure nemo repellendus! Sed mollitia reprehenderit alias explicabo illum dolor in deserunt perferendis dolores?
                Maxime, magni laborum! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora sed neque nulla
                itaque consequuntur quae iusto. Neque illum minima magni, repudiandae maxime eos et, sequi distinctio, dolore
                animi dignissimos dicta?</p>
        </div>
        <div class="about__banner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about__banner.png" alt="" srcset="">
        </div>
    <main class='full-width'>    
    </div>


<?php get_footer(); ?>