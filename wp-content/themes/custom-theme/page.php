<?php get_header('inner'); ?>
<section class="page-section">
    <div class="col-md-12" style="background-color: white;">
        <div class="container page-content">
            <h1><?php the_title();?></h1>
            <br>
            <div class="col-md-12">
                <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/page/content', 'page' );
                        the_content();
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </div>
 </section>
<?php get_footer('inner'); ?>