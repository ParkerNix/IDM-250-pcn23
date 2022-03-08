<?php get_header(); ?>
<div class="fill">
    <!--<h1 class="search">Results for<br>"Project"</h1>
    <div class="homebuttons">
        <div class="row">
            <div class="item searchi">
            <a href="first.html"><h2>My First Prototype</h2>
            <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
            <p>Have a look at my first attempt at wireframes, sitemaps, and other things.</p></a>
            </div>
            <div class="item searchi">
            <a href="reddit.html"><h2>Redesigning Reddit</h2>
            <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
            <p>Another expedition into the prototyping process, but now with the added task of redesigning the whole brand.</p></a>
            </div>
            <div class="item searchi">
            <a href="https://parkerishere.com/IDM232/case_study.php".html"><h2>Recipe & Me</h2>
            <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
            <p>This is a case study on my recipe site that was made using php.</p></a>
            </div>
        </div>
    </div>-->


<?php
    $search_word = $_GET['s'];

    $args = [
        's' => $search_word
    ];
    $search_query = new WP_Query($args);
?>

<h1 class="search">Search Results for "<?php echo $search_word?>"</h1>

<div class="homebuttons">
    <div class="row">
        <?php
            if ($search_query->have_posts()) {
                while ($search_query->have_posts()) : $search_query->the_post();
                get_template_part('components/teaser');
                endwhile;
                wp_reset_postdata();
            } else {
                echo "<p style='margin: 0 2rem;'>I have no idea what you mean by <b>$search_word</b>! Try a different search or something.</p>";
            } 
        ?>
    </div>
</div>
</div>
<?php get_footer(); ?>