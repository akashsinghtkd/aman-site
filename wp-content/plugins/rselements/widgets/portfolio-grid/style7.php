<?php 
	use Elementor\Icons_Manager;
    $cat = $settings['portfolio_category'];
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	if(empty($cat)){
    	$best_wp = new wp_Query(array(
				'post_type'      => 'portfolios',
				'posts_per_page' => $settings['per_page'],								
		));	  
    }   
    else{
    	$best_wp = new wp_Query(array(
				'post_type'      => 'portfolios',
				'posts_per_page' => $settings['per_page'],				
				'tax_query'      => array(
			        array(
						'taxonomy' => 'portfolio-category',
						'field'    => 'slug', //can be set to ID
						'terms'    => $cat //if field is ID you can reference by cat/term number
			        ),
			    )
		));	  
    }

	while($best_wp->have_posts()): $best_wp->the_post();
	$cats_show = get_the_term_list( $best_wp->ID, 'portfolio-category', ' ', '<span class="separator">,</span> ');	
	?>	
	<div class="col-lg-<?php echo esc_html($settings['portfolio_columns']);?> col-md-6 grid-item ">
			<div class="portfolio-item content-overlay">
				<?php if(has_post_thumbnail()): ?>
                    <div class="portfolio-img">
                    	<a href="<?php the_permalink();?>"><?php  the_post_thumbnail($settings['thumbnail_size']);?></a>
                    </div>
                <?php endif;?>
                <div class="portfolio-content">
                    <div class="portfolio-inner">
                    	<p class="p-category"><?php echo wp_kses_post($cats_show); ?></p>
                    	<?php if(get_the_title()):?>
                    		<h3 class="p-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    	<?php endif;?>


                    	<?php if(!empty($settings['selected_icon'])){ ?>
	                    	<a href="<?php the_permalink(); ?>" class="link7">
		    		    		<?php 
		    		    		if ( $settings['selected_icon'] ):
		    			    		Icons_Manager::render_icon( $settings['selected_icon'], [ 'aria-hidden' => 'true' ] ); 
		    			    	endif; ?>
	                    	</a>
                    	<?php }else{ ?>
                    		<a class="p-icon" href="<?php the_permalink(); ?>" class="link7">
                    			<?php if(!empty($settings['selected_icon_image'])) :?>
                    				<img src="<?php echo esc_url( $settings['selected_icon_image']['url'] );?>" alt="image"/>
                    			<?php endif;?>
                    		</a>
                    	<?php } ?>
                    	
                    </div>
                </div>
            </div>
		</div>
	<?php	
	endwhile;
	wp_reset_query();
	
	$paginate = paginate_links( array(
	    'total' => $best_wp->max_num_pages
	));

	if(!empty($paginate ) && ($settings['blog_pagination_show_hide'] == 'yes')){ ?>
		<div class="pagination-area"><div class="nav-links"><?php echo wp_kses_post($paginate); ?></div></div>
	<?php } ?>