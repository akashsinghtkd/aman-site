<?php 
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

		<div class="grid-item">
			<div class="portfolio-item">
				
               	<div class="portfolio-content">
               		<?php if(has_post_thumbnail()): ?>                    
                    <?php  the_post_thumbnail($settings['thumbnail_size']);?>                    
                <?php endif;?>
	            	<?php if(!empty($settings['read_more_text'])):?>
	            	<div class="p-icon">
						<a  href="<?php the_permalink(); ?>" ><?php echo esc_html($settings['read_more_text']);?> <i class="glyph-icon flaticon-next"></i></a>
	                </div>  
	                <?php endif;?>  

	            	<?php if(get_the_title()):?>
	            		<h3 class="p-title">
	            			<a href="<?php the_permalink();?>"><?php the_title();?></a>            	
	            		</h3>
	            	<?php endif;?>
	            </div>
            </div>

		</div>
	<?php	
	endwhile;
	wp_reset_query();  
 ?>  
