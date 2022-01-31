<?php get_header(); ?>
    <form action="content-single.php"></form>

    <?php
    while (have_posts()) {
        the_post();

        get_template_part( 'content-single', get_post_format() );

        ?>

    <?php } ?>

<?php get_footer(); ?>