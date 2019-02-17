<?php get_header(); 


if ( have_posts() ){
    if( is_day() ){
        echo 'Day Archive';
    }elseif( is_month()) {
        echo 'Monthly Archive';
    }elseif( is_year()){
        echo ' yearly Archive';
    }

    while( have_posts() ){
        the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>

    <?php }
}else {
    echo 'There have no archive';
}


get_footer(); ?>

