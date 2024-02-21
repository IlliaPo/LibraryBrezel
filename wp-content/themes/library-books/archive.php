<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Library Books
 */
get_header(); ?>
<div class="container">
     <div class="page_content">
        <section class="site-main">
            <?php if ( have_posts() ) : ?>
                <header class="page-header">
                   <?php
                    the_archive_title( '<h1 class="entry-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                  ?>
                </header><!-- .page-header -->
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); 
                          get_template_part( 'content', get_post_format() );
                          endwhile;
                    ?>
                </div>
                <?php  
                // Previous/next post navigation.
                the_posts_pagination( array(
                            'mid_size' => 2,
                            'prev_text' => esc_html__( 'Back', 'library-books' ),
                            'next_text' => esc_html__( 'Next', 'library-books' ),
                            'screen_reader_text' => esc_html__( 'Posts navigation', 'library-books' )
                ) );
                // Додайте цей рядок для сортування за рейтингом
                if (function_exists('the_ratings')) { the_ratings(); }
                ?>
            <?php else : get_template_part( 'no-results');
            endif; 
            ?>
        </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->
<?php get_footer(); ?>