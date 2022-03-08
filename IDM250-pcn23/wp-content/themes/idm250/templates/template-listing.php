<?php
/* Template Name: Listing */
?>
<?php get_header(); ?>
<!--<div class="workbody">
  <div class="items">
    <div class="title">
    <h1>My works</h1>
    </div>
    <div class="first">
      <a href="first.html"><h2>My First Prototype</h2>
      <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
      <p>Have a look at my first attempt at wireframes, sitemaps, and other things.</p></a>
    </div>
    <div class="redesign">
      <a href="reddit.html"><h2>Redesigning Reddit</h2>
      <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
      <p>Another expedition into the prototyping process, but now with the added task of redesigning the whole brand.</p></a>
    </div>
    <div class="teado">
      <a href="https://parkerishere.com/IDM232/case_study.php".html"><h2>Recipe & Me</h2>
      <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
        <p>This is a case study on my recipe site that was made using php.</p></a>
    </div>
    <div class="jsproject">
      <a href="IDM231-pcn23/whats_for_dinner.html"><h2>What's for dinner?</h2>
      <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
      <p>A project that I created while learning how to use JavaScript.</p>
      </a>
    </div>
  </div>
  <div class="items">
    <div class="title">
    </div>
    <div class="teado">
      <a href="teado.html"><h2>Redesigning Tea-Do</h2>
      <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
        <p>A team effort to create a redesign for a boba tea shop in Philadelphia.</p></a>
  </div>
</div>-->

<div class="fill">

    <?php while (have_posts()) : the_post(); ?>
<div class="container">



  <div class="grid-3">
    <?php
      // https://developer.wordpress.org/reference/classes/wp_query/
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $arg = [
          'post_type' => 'idm-projects',
          'post_status' => 'publish',
          'posts_per_page' => 9,
          'order' => 'DESC',
          'paged' => $paged

      ];
      $project_query = new WP_Query($arg);

      ?>
  <h1 class="title"><?php echo get_the_title(); ?></h1>
  <div class="homebuttons">
    <div class="row">
    <?php
        while ($project_query->have_posts()) : $project_query->the_post();
            get_template_part('components/teaser');
        endwhile;
        // Custom Pagination for Custom loops
        $big = 999999999; // need an unlikely integer
        echo paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $project_query->max_num_pages
        ]);
        echo '</nav>';
        // After looping through a separate query, this function restores the $post global to the current post in the main query.
        wp_reset_postdata();
      ?>
<?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>