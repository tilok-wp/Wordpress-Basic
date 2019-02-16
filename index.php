<?php get_header(); ?>

    <section>
        <div class="post-area">
    <?php 
    if ( have_posts() ){
        while( have_posts() ){
            the_post(); ?>
            <div class="single-post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                <!-- <p> <?php the_content(); ?></p> // Full Content -->
                <p><?php the_excerpt(); ?></p>
                <?php the_post_thumbnail(); ?>
            </div>
        <?php }
    }else {
        echo 'There have no post';
    }

    ?>

        </div>
    </section>

<?php get_footer(); ?>