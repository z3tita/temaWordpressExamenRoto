<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title"> <?php the_title(); ?> </h2>

        <?= the_content(); ?>
        
    </div>
<?php } ?>

<?php get_footer(); ?>