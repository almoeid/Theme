<?php get_header();?>
<div class="container">
<h1>Rooms:</h1>
<article>

<?php 
$args = array(
    "post_type" => "room",
    "post_status" => "publish",
    "posts_per_page" => 8,
    "orderby" => "post_date",
    "order" => "DESC"
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <div class="row">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-3" style = "display: inline-block;border : 1px solid black ; border-radius: 10px; padding : 10px;margin-bottom:10px; margin-right: 5px;">
                <img style = "display : block;max-height: 200px; margin: 0 auto;" src="<?php the_field('property_image'); ?>" />
                <h2><?php the_title();?> </h2>
                <p><?php the_content();?></p>
                <p><?php echo the_field('square_feet'); ?></p>
                <p>Rent Per Month : $<?php echo the_field('rent'); ?></p>
            </div>
    <?php endwhile; ?>
    </div>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
</article>
<?php get_footer();?>