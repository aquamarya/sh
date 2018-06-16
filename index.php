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
              <img src="<?php echo get_template_directory_uri() . '/images/img1.jpg'?>" />
              <div class="banner_content">
                <h1>Заголовок</h1>
                <h3>Заголовок</h3>
                <a class="btn1" href="#">Кнопка1</a>
                <a class="btn2" href="#">Кнопка2</a>
              </div>
           </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center">Заголовок из четырех слов</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3 class="text-left">Header header header</h3>
                        <p class="text-left">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri() . '/images/img2.jpg'?>" />
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri() . '/images/img3.jpg'?>" />
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <h3 class="text-left">Header header header</h3>
                        <p class="text-left">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>


                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <h4 class="text-left">Header header header</h4>
                        <p class="text-left">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                    </div>
                     <div class="col-xs-12 col-md-4">
                         <h4 class="text-left">Header header header</h4>
                         <p class="text-left">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum</p>
                     </div>
                     <div class="col-xs-12 col-md-4">
                         <h4 class="text-left">Header header header</h4>
                         <p class="text-left">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                     </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        Level 1: .col-xs-12
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                Level 2: .col-xs-6 .col-md-3
                            </div>
                            <div class="col-xs-6 col-md-3">
                                Level 2: .col-xs-6 .col-md-3
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                Level 2: .col-xs-6 .col-md-3
                            </div>
                            <div class="col-xs-6 col-md-3">
                                Level 2: .col-xs-6 .col-md-3
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">.col-xs-12</div>
                </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="container">
                        <div class="banner">
                        <img src="<?php echo get_template_directory_uri() . '/images/img19.jpg'?>" />
                        <h2 class="text-center">Header header header</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</>
                        <a class="btn btn-default" href="#" role="button">Button</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                     <h3 class="text-center">Header header header</h3>
                     <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <img src="<?php echo get_template_directory_uri() . '/images/img25.jpg'?>" />
                            <h5 class="text-center">Header Header</h5>
                            <p class="text-center"><em><small>Lorem ipsum dolor sit amet.</small></em></p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <img src="<?php echo get_template_directory_uri() . '/images/img21.jpg'?>" />
                            <h5 class="text-center">Header Header</h5>
                            <p class="text-center"><em><small>Lorem ipsum dolor sit amet.</small></em></p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <img src="<?php echo get_template_directory_uri() . '/images/img22.jpeg'?>" />
                            <h5 class="text-center">Header Header</h5>
                            <p class="text-center"><em><small>Lorem ipsum dolor sit amet.</small></em></p>
                        </div>
                    </div>
            </div>


            <div class="row">
                <div class="container">
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img4.jpg'?>" />
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img30.jpg'?>" />
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img36.jpg'?>" />
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img39.jpg'?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img8.jpg'?>" />
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img74.jpg'?>" />
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img51.jpg'?>" />
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/images/img50.jpg'?>" />
                    </div>
                </div>
            </div>
                <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center">Header header header</h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <img src="<?php echo get_template_directory_uri() . '/images/img71.jpg'?>" />
                            <h5 class="text-left">Header Header</h5>
                            <p class="text-left"> At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, </p>
                            <a href="URL">READ MORE</a>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <img src="<?php echo get_template_directory_uri() . '/images/img72.jpg'?>" />
                            <h5 class="text-left">Header Header</h5>
                            <p class="text-left">Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? </p>
                            <a href="URL">READ MORE</a>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <img src="<?php echo get_template_directory_uri() . '/images/img73.jpg'?>" />
                            <h5 class="text-left">Header Header</h5>
                            <p class="text-left">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat,</p>
                            <a href="URL">READ MORE</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center">Header header header</h3>
                        <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center">Header</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="btn btn-default" href="#" role="button">Button</a>
                        <img src="<?php echo get_template_directory_uri() . '/images/img.jpg'?>" />
                        <img src="<?php echo get_template_directory_uri() . '/images/img.jpg'?>" />
                    </div>
                </div>

            </div>
              <div class="row">
                  <div class="col-xs-12 col-md-3">
                      <h4 class="text-left">About</h4>
                      <p class="text-left"><small>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</small></p>
                  </div>
                  <div class="col-xs-12 col-md-3">
                      <h4 class="text-left">Navigation</h4>
                      <p class="text-left"><small>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum</small></p>
                  </div>
                  <div class="col-xs-12 col-md-3">
                      <h4 class="text-left">Recent comments</h4>
                      <p class="text-left"><small>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</small></p>
                  </div>
                  <div class="col-xs-12 col-md-3">
                      <p class="text-left"><small></small><address>
                          <strong>Twitter, Inc.</strong><br>
                          1355 Market Street, Suite 900<br>
                          San Francisco, CA 94103<br>
                          <abbr title="Phone">P:</abbr> (123) 456-7890
                      </address>

                      <address>
                          <strong>Full Name</strong><br>
                          <a href="mailto:#">first.last@example.com</a>
                      </address></small></p>
                  </div>
              </div>

        </div>

        </div>





<?php get_sidebar(); ?>
<?php get_footer(); ?>
