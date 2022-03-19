<?php get_header(); ?>
<div class="fill">
    <div class="top">    
        <div class="back">
            <h1>Welcome!</h1>
            <p>You made it to my site!</p>
        </div>
    </div>
    <?php while (have_posts()) : the_post(); ?>
        <div class="homebuttons">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <!--<div class="homebuttons">
        <div class="row">
            <div class="item">
                <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
                <h2>Recent Work</h2>
                <a href="#">See More ></a>
            </div>
            <div class="item">
                <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
                <h2>About Me</h2>
                <a href="#">See More ></a>
            </div>
        </div>
        <div class="row">
            <div class="item">
                <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
                <h2>Resume</h2>
                <a href="#">See More ></a>
            </div>
            <div class="item">
                <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/Alpha.png" alt="original site">
                <h2>Random</h2>
                <a href="#">Random It Up ></a>
            </div>
        </div>
    </div>-->
</div>
<?php get_footer(); ?>