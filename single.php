<?php get_header(); ?>

    <section>
        <div class="post-area">
    <?php 
    if ( have_posts() ){
        while( have_posts() ){
            the_post(); ?>
            <div class="single-post">
                <h3><?php the_title(); ?></h3>
                <p> <?php the_content(); ?></p>
                <?php the_post_thumbnail('single-page-img'); ?>
            </div>
        <?php }
    }else {
        echo 'There have no post';
    }

    ?>

        </div>
    </section>

<?php get_footer(); ?>