<?php get_header(); ?>

<h3>This page is welcome page.</h3>
<?php wp_nav_menu(array(
    'theme_location' => 'Front_page_menu'
))?>

<div class="serarch--form">
    <?php get_search_form(); ?>
</div>

<div class="widget--section">
    <?php 
    if( ! dynamic_sidebar('top-calander') ) {
        echo 'There have no sidebar here';
    }
    ?>    
</div>

<?php 
    // $custom_post = new WP_Query('post_type=test--product&posts_per_page=3');
    $custom_post = null;
    $custom_post = new WP_Query(array (
        'post_type'         => 'test--product',
        'posts_per_page'    => 3,

    ));

    if( $custom_post -> have_posts() ){
        while( $custom_post -> have_posts() ){
            $custom_post -> the_post();
           $emailId = get_post_meta(get_the_ID(), 'email__id', true);
           $m_number = get_post_meta(get_the_ID(), 'm-number', true);
            ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
            <h4><?php echo $emailId; ?></h4>
            <h4><?php echo $m_number; ?></h4>
       <?php }
    }else {
        echo ' There have no pages';
    }
    wp_reset_postdata();
?>

<?php 
    $custom_post = null;
    $custom_post = new WP_Query(array (
        'post_type'         => 'test--service',
        'posts_per_page'    => 5,

    ));

    if( $custom_post -> have_posts() ){
        while( $custom_post -> have_posts() ){
            $custom_post -> the_post();
           $ser_ctg = get_post_meta(get_the_ID(), 'service_name', true);
            ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
            <h4><?php echo $ser_ctg; ?></h4>
       <?php }
    }else {
        echo ' There have no pages';
    }
    wp_reset_postdata();
?>
<?php 
    $custom_post = null;
    $custom_post = new WP_Query(array (
        'post_type'         => 'post',
        'posts_per_page'    => 2,
        // 'category_name'     => 'menu–service , test–theme',
        'category_name'     => 'menu–service + test–theme',

    ));

    if( $custom_post -> have_posts() ){
        while( $custom_post -> have_posts() ){
            $custom_post -> the_post();
            ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
       <?php }
    }else {
        echo ' There have no pages';
    }
    wp_reset_postdata();
?>

<?php get_footer(); ?>

