<?php get_header(); ?>
<h2><?php printf('Search Result : %s', get_search_query() ) ?></h2>
<?php 
    if( have_posts() ) {
        while( have_posts() ){
            the_post(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
       <?php }
    }else {
        echo ' There have no search result';
    }
get_footer(); ?>

