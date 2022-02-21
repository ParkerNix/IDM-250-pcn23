<?php
/* Template Name: About */
?>
<?php get_header(); ?>
<div class="fill">
    <div class="back">
        <?php while (have_posts()) : the_post(); ?>
        <div class="">
            <h1 class="title"><?php the_title(); ?></h1>

            <?php the_post_thumbnail(); ?>
        
            <div class="">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>