<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SmartHouse
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php
				while ( have_posts() ) :
					the_post();
?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

        <div class="main">
            <div class="container">
                 <div class="banner">
                    <img src="images/foto1.svg">
                     <div id="banner-content">
                <h1>Header1</h1>
                <h2>Header2</h2>
                <a class="btn1" href="#">Button1</a>
                <a class="btn2" href="#">Button2</a>
                     </div>
                 </div>

                <h2>Header2</h2>
                <p>Text text text</p>
            </div>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
