<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mises
 */

?>



		<?php
		if ( is_singular() ) : ?>
			<div class="post-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- <header class="entry-header"><h1 class="entry-title">', '</h1>' -->
            <h2 class="author"><?php mises_posted_by(); ?></h2>
		 <?php else :   ?>
                    <div class="post post__flex"><?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php //the_title_attribute(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => "post-header"]); ?>
                    </a>
<?php endif; ?>
                    <!-- <img src="<?php // echo get_the_post_thumbnail(); ?>" alt="" class="post-header"> -->
                        <div class="post-heading">
                            <h2><a href="<?php echo get_permalink(); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h2>
                            <div class="post-icons">
                                <span class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/date.png" alt="">
                                    <span class="date"><?php  echo get_the_date(); ?></span></span>
                                <a href="<?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; //echo get_the_category_list();  
?>" 
class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/categories.png" alt="">
                                    <span class="categories"><?php  echo $firstCategory;?></span></a>
                                <a href="#" class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/comment.png" alt=""><span class="comments">komentarze</span></a>
                            </div>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="post-open"><div class=" post-readMore hide-small">czytaj dalej</div> </a>
                        </div>   
                        <a class="post-open" href="<?php the_permalink(); ?>"><div class="post-readMore hide-big">czytaj dalej</div> </a>   
                    </div>
                    <?php
			// the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        if ( is_singular() ) :
		    if ( 'post' === get_post_type() ) :
            ?>
            <h1 class="title"><?php the_title_attribute(); ?></h1>

                                        <div class="post-icons">
                                <span class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/date.png" alt="">
                                    <span class="date"><?php  echo get_the_date(); ?></span></span>
                                <a href="<?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; //echo get_the_category_list();  
?>" 
class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/categories.png" alt="">
                                    <span class="categories"><?php  echo $firstCategory;?></span></a>
                                <a href="#" class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/comment.png" alt=""><span class="comments">komentarze</span></a>
                            </div>
			<!-- <div class="entry-meta"> -->
				<?php
				//mises_posted_on();
				//mises_posted_by();
				?>
			<!-- </div> -->
            <!-- .entry-meta -->
            


            
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php //mises_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mises' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mises' ),
			'after'  => '</div>',
		) );?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mises_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    

                        <div class="support">
                        <div class="support-text">  <h2 class='support-text'>Podobał Ci się artykuł?</h2></div> 

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/wsparcie" class='center'><div class='support-btn'><span>Wesprzyj nas</span><div class='support-btn-strzalki'><i class="fa fa-usd" aria-hidden="true"></i>
                        </div></div></a>
                    </div>

                    <div class="author-art">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/autor-art.jpg" alt="author">
                        <div class='padding'>
                        <h3 class='author__name italic'>O Autorze:</h3><h3 class='italic'>Pankracy Przedpełski-Kłos</h3>
                        <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam.</p>
                        </div>
                    </div>
</div><!-- #post-<?php the_ID(); ?> -->	<?php endif; ?>
