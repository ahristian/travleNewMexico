
<?php
while (have_posts()) {
    get_header();
    the_post(); ?>

    <h2>
        <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
    <?php
    get_footer();
}

?>