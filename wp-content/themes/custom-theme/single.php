<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?><?php get_header("inner"); ?>
<style>
.gallery-item{
    display: inline-block;
}
</style>
<section class="page-section">
    <div class="col-md-12" style="background-color: white;">
        <div class="container page-content">
            <h1><?php echo get_the_title(); ?></h1><br/>
            <?php while ( have_posts() ) : the_post();
                    $image = "";
                    if (has_post_thumbnail( $post->ID ) ){
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    }
            ?>


                    <div class="col-md-12 left page-description" style="padding-left:60px;">
                    <?php if( $image[0] != "" ) { ?>
                    <div class="left" style="margin-right: 20px;"><img class="page" src="<?php echo $image[0]; ?>"/></div>
                    <?php } ?>
                    <?php 
                    get_template_part( 'template-parts/page/content', 'page' );
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    //if ( comments_open() || get_comments_number() ) :
                    //    comments_template();
                    //endif;

                endwhile; // End of the loop.
            ?>
            </div>
        </div>



    </div>
 </section>
<?php get_footer("inner"); ?>