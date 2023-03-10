<?php
    global $swipy_option;    
    $header_width_meta = get_post_meta(get_the_ID(), 'header_width_custom', true);
    if ($header_width_meta != '' && empty($swipy_option['enable_global'])){  
        $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
    }else{
        $header_width = $swipy_option['header-grid'];
        $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
    }
?>
<?php 
$banner_hide = get_post_meta(get_the_ID(), 'banner_hide', true);
$post_meta_data = get_post_meta(get_the_ID(), 'banner_image', true); 

//theme option chekcing
    if($post_meta_data == ''){
        if(!empty($swipy_option['page_banner_main']['url'])):
        $post_meta_data = $swipy_option['page_banner_main']['url'];
        endif;
    }  

    if( 'show' == $banner_hide ||  $banner_hide == '' ){  
        $post_meta_data = $post_meta_data;
    }else{
        $post_meta_data = '';
    }

    $post_menu_type = get_post_meta(get_the_ID(), 'menu-type', true); 
    $content_banner = get_post_meta(get_the_ID(), 'content_banner', true); 
?>

<div class="rs-breadcrumbs  porfolio-details fdf">

<?php if($post_meta_data !='') { ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $post_meta_data );?>')">
        <div class="<?php echo esc_attr($header_width);?>">
          <div class="row">
            <div class="col-md-12">
              <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
                <?php 
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <h1 class="page-title">
                        <?php if($content_banner !=''){
                           echo wp_kses_post($content_banner);
                        } else {
                           the_title();
                        }
                        ?>
                    </h1>
                    <?php } 
                    if(!empty($swipy_option['off_breadcrumb'])){
                        $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                        if( $rs_breadcrumbs != 'hide' ):        
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                        endif;
                    }
                ?>    
              </div>
            </div>
          </div>
        </div>
    </div>
<?php }
 $post_meta_bread = get_post_meta(get_the_ID(), 'select-bread', true);
 if($post_meta_bread =='show' || $post_meta_bread ==''){

    ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $swipy_option['department_single_image']['url'] );?>')">
        <div class="<?php echo esc_attr($header_width);?>">
          <div class="row">
            <div class="col-md-12">
              <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
                <?php 
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <h1 class="page-title">
                        <?php if($content_banner !=''){
                                echo wp_kses_post($content_banner);
                            } else {
                                the_title();
                            }
                        ?>
                    </h1>
                    <?php } 
                    if(!empty($swipy_option['off_breadcrumb'])){
                        $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                        if($rs_breadcrumbs != 'hide' ):        
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                        endif;
                    }
                ?>
              </div>
            </div>
          </div>
        </div>
    </div>    
<?php } else{ 
    $post_meta_bread = get_post_meta(get_the_ID(), 'select-bread', true);
    if($post_meta_bread =='show' || $post_meta_bread ==''){ ?>
    <div class="rs-breadcrumbs-inner">
          <div class="<?php echo esc_attr($header_width);?>">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">
                <?php 
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                        <h1 class="page-title">
                           <?php if($content_banner !=''){
                               echo wp_kses_post($content_banner);
                               } else {
                                   the_title();
                               }
                           ?>
                        </h1>
                    <?php }
                    if(!empty($swipy_option['off_breadcrumb'])){
                        $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                        if($rs_breadcrumbs != 'hide' && function_exists('bcn_display') ):                        
                            bcn_display();                   
                        endif;
                    }
                ?>             
                </div>
              </div>
            </div>
          </div>
    </div>
<?php } } ?>
</div>