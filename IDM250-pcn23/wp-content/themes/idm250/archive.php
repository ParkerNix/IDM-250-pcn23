<?php get_header(); ?>

<h1 class="container"><?php the_archive_title(); ?>
</h1>
<div class="container sidebar">
  <div class="sidebar-main grid-2">
    <?php
    while (have_posts()) : the_post();
      get_template_part('components/teaser');
    endwhile;
    the_posts_pagination(
        [
            'mid_size' => 2,
            'prev_text' => 'Previous',
            'next_text' => 'Next'
        ]
    );
  ?>
  </div>
  <aside class="sidebar-aside">
    <?php dynamic_sidebar('sidebar-primary'); ?>
  </aside>
</div>

<?php get_footer();?>