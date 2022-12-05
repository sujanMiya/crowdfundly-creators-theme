<?php
get_header();
?>
<div class="container page-wrapper">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
        <?php
    endwhile;
    ?>
</div>

<?php
get_footer();
?>