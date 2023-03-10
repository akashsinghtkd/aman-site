<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="//gmpg.org/xfn/11">
<?php global $swipy_option; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>    

	<?php 
		if( ! function_exists( 'wp_body_open' ) ) {
		    function wp_body_open() {
		    	do_action( 'wp_body_open' );
		    }
		}
	?> 
     
    <!--Preloader start here-->
    <?php 
        get_template_part( 'inc/header/preloader' );     
        get_template_part('inc/header/pointers');
    ?> 
    <!--Preloader area end here-->
    <div id="page" class="site">        
        <!-- End Header Menu End -->
        <?php 
        $page_bg = get_post_meta(get_the_ID(), 'page_bg', true);
        if($page_bg !='' && is_page()): ?>
            <div class="main-contain offcontents" style="background-image: url('<?php echo esc_url( $page_bg );?>'); ">
        <?php else: ?>
            <div class="main-contain offcontents">                
        <?php endif;
?>
