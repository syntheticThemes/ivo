<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ivo
 */

get_header();
?>

	<main id="primary" class="site-main">

        <?php if (class_exists('ErrorPage')): ?>
            <?php new ErrorPage() ?>
        <?php else: ?>
        
            <div id="0" class="blog-section col-sm-12 col-md-12 blog-wrap ">
                <div class="container ">
                    <div class="row">
                        <div class="col-sm-12 section-element-inside ">
                            <div class="row inside">
                                <div id="header-ighnkfw2aaa" class="blog-section col-sm-12 col-md-12">
                                    <div class="col-sm-12 section-element-inside ">
                                        <header class="page-header">
                                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ivo' ); ?></h1>
                                        </header><!-- .page-header -->
                                    </div>
                                </div>
                                <div id="header-ighnkfw2bbb" class="blog-section col-sm-12 col-md-12">
                                    <div class="col-sm-12 section-element-inside ">
                                        <div class="page-content">
                                            <p>
                                                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ivo' ); ?>
                                            </p>
                                        </div><!-- .page-content -->
                                    </div>
                                </div>
                                <div id="header-ighnkfw2bbb" class="blog-section col-sm-12 col-md-12">
                                    <div class="col-sm-12 section-element-inside ">
                                        <div class="page-content">
                                            <?php get_search_form(); ?>
                                        </div><!-- .page-content -->
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>
            
	</main><!-- #main -->

<?php
get_footer();
