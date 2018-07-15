<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mises
 */

get_header();
?>

	<!-- <div id="primary" class="content-area"> -->
		<main id="main" class="site-main">

            <div class='slider-1'>
                    SLIDER1
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-gold-coast.jpg" alt="">
                        <div class='blue'>
                            <figcaption>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse
                            a pellentesque dui, non felis.</figcaption>
                            <span class='before'></span>
                            <span class='next'></span>
                        </div>
                    </figure>
                </div>
                <h3>Nasze projekty</h3>
                <div class='slider-2'>SLIDER2 
                    <span class='before'></span>
                    <span class='next'></span>
            </div>


		<?php
		if ( have_posts() ) : ?><div class="post-list">
            
			<?php if ( is_home() && ! is_front_page() ) :
                ?>
            



				<!-- <header>
					<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
				</header> -->
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );?>
            
			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

        </main><!-- #main -->
        
    <!-- </div> -->
    <!-- #primary -->

<?php
get_sidebar();
get_footer();
