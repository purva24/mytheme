<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mytheme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		
    <div><img src="http://www.themotorreport.com.au/content/image/2/0/2013_audi_r8_australia_32_1-0321.jpg"></div>


    <div class="home-widget col-md-4">
         <?php dynamic_sidebar( 'home-sidebar-2' ); ?>
    </div>
    <div class="home-widget col-md-4">
         <?php dynamic_sidebar( 'home-sidebar-3' ); ?>
    </div>
    <div class="home-widget col-md-4">
        <?php dynamic_sidebar( 'home-sidebar-4' ); ?>
    </div>

        <div class="intro">
            <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
        </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
