<?php get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="banner-search">
            <!-- Add your banner content here -->
            <div class="banner-content">
              <img src="<?php echo get_template_directory_uri(); ?>/images/search-bg.png" alt="Banner Image" style="background-size:cover;width:100%;"> 
              <h1>Search Result</h1>
            </div>
            
        </section>
      <div class="container">
        <section class="search-results common-style">
            <header class="page-header">
                <h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'your-theme-text-domain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header><!-- .page-header -->

            <?php if ( have_posts() ) : ?>
                <div class="search-results-list">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                            <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('full');
                                // echo '<img src="'.get_template_directory_uri().'/images/blog/blog-2.jpg" alt="">';
                                }
                                ?>
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-<?php the_ID(); ?> -->
                    <?php endwhile; ?>
                </div><!-- .search-results-list -->
                <div class="pagination-section">
                  <?php
                  the_posts_pagination( array(
                      'prev_text' => esc_html__( 'Previous', 'your-theme-text-domain' ),
                      'next_text' => esc_html__( 'Next', 'your-theme-text-domain' ),
                  ) );
                  ?>
                </div>
                
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'your-theme-text-domain' ); ?></p>
            <?php endif; ?>
        </section><!-- .search-results -->
      </div>
        
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>