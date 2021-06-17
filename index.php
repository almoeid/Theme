<?php get_header();?>
<div class="container">
<h1>Rooms:</h1>
<div class="row">
    <div class= "col-4">
        <div style = "border : 1px solid black ; border-radius: 10px; padding : 10px;">
            <img style = "display : block;max-height: 200px; margin: 0 auto;" src="<?php the_field('property_image'); ?>" />
            <h2><?php the_title();?> </h2>
            <p><?php the_content();?></p>
            <p><?php echo the_field('square_feet'); ?></p>
        <div>
    </div>
</div>
</div>

<?php get_footer();?>