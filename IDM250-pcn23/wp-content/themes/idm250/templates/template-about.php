<?php
/* Template Name: About */
?>
<?php get_header(); ?>
<div class="fill">
        <?php while (have_posts()) : the_post(); ?>
        <div class="">
            <h1 class="title"><?php the_title(); ?></h1>
        
            <div class="aboutstuff">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?>
</div>
<?php get_footer(); ?>