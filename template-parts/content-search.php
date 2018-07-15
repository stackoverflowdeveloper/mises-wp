<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mises
 */

?>

                    <div class="post post__flex"><?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php //the_title_attribute(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => "post-header"]); ?>
                    </a><?php endif; ?>
                    <!-- <img src="<?php // echo get_the_post_thumbnail(); ?>" alt="" class="post-header"> -->
                        <div class="post-heading">
                            <h2><a href="<?php echo get_permalink(); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h2>
                            <div class="post-icons">
                                <span class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/date.png" alt="">
                                    <span class="date"><?php  echo get_the_date(); ?></span></span>
                                    <?php if ( has_category() ) : ?>
                                <a href="<?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; //echo get_the_category_list();  
?>" 
class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/categories.png" alt="">
<span class="categories"><?php  echo $firstCategory;?></span></a><?php endif; ?> 
                                <a href="#" class="post-icons-info"><img src="<?php echo get_template_directory_uri(); ?>/img/comment.png" alt=""><span class="comments">komentarze</span></a>
                            </div>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="post-open"><div class=" post-readMore hide-small">czytaj dalej</div> </a>
                        </div>   
                        <a class="post-open" href="<?php the_permalink(); ?>"><div class="post-readMore hide-big">czytaj dalej</div> </a>   
                    </div>


<!-- <article id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>> -->
	<!-- <header class="entry-header"> -->
		<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php //if ( 'post' === get_post_type() ) : ?>
		<!-- <div class="entry-meta"> -->
			<?php
			//mises_posted_on();
			//mises_posted_by();
			?>
		<!-- </div> -->
        <!-- .entry-meta -->
		<?php //endif; ?>
	<!-- </header> -->
    <!-- .entry-header -->

	<?php //mises_post_thumbnail(); ?>

	<!-- <div class="entry-summary"> -->
		<?php //the_excerpt(); ?>

	<!-- </div> -->
    <!-- .entry-summary -->

	<!-- <footer class="entry-footer"> -->
		<?php //mises_entry_footer(); ?>
	<!-- </footer> -->
    <!-- .entry-footer -->
<!-- </article> -->
<!-- #post-<?php //the_ID(); ?> -->
