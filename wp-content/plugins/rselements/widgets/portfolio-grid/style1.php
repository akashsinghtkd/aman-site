<?php 
	use Elementor\Icons_Manager;
    $cat = $settings['portfolio_category'];
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	if(empty($cat)){
    	$best_wp = new wp_Query(array(
			'post_type'      => 'portfolios',
			'posts_per_page' => $settings['per_page'],	
			'orderby' => 'menu_order',
			'order' 			=> $settings['pre_posts_sort'],							
		));	  
    }   
    else{
    	$best_wp = new wp_Query(array(
				'post_type'      => 'portfolios',
				'posts_per_page' => $settings['per_page'],	
				'orderby' => 'menu_order',
				'order' 			=> $settings['pre_posts_sort'],			
				'tax_query'      => array(
			        array(
						'taxonomy' => 'portfolio-category',
						'field'    => 'slug', //can be set to ID
						'terms'    => $cat //if field is ID you can reference by cat/term number
			        ),
			    )
		));	  
    }

    $x=1;

	while($best_wp->have_posts()): $best_wp->the_post();	
		
		$content       = get_the_content();
		$client        = get_post_meta( get_the_ID(), 'client', true );
		$location      = get_post_meta( get_the_ID(), 'location', true );
		$surface_area  = get_post_meta( get_the_ID(), 'surface_area', true );
		$created       = get_post_meta( get_the_ID(), 'created', true );
		$date          = get_post_meta( get_the_ID(), 'date', true );
		$project_value = get_post_meta( get_the_ID(), 'project_value', true );

		$cats_show = get_the_term_list( $best_wp->ID, 'portfolio-category', ' ', '<span class="separator">,</span> ');
								
	?>

		<div class="col-lg-<?php echo esc_html($settings['portfolio_columns']);?> col-md-<?php echo esc_html($settings['portfolio_md_columns']);?> col-xs-1 grid-item">
			<div class="portfolio-item content-overlay">
				<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>">
                    <div class="portfolio-img">
                    	<?php the_post_thumbnail($settings['thumbnail_size']);?>
                    	<?php if ( 'yes' === $settings['show_button'] ):?>
			            	<div class="p-icon">
			        	        <a href="<?php the_permalink(); ?>"><?php echo esc_html($settings['read_more_text']);?> <i class="glyph-icon flaticon-next"></i></a>  
			        	    </div>
			        	<?php endif;?>
                    </div>
                    </a>
                <?php endif;?>

                <div class="portfolio-details">
                	<p class="p-category"><?php echo wp_kses_post( $cats_show ); ?></p>
                	<?php if(get_the_title()):?>
                		<h3 class="p-title">
                			<?php if($settings['grid_popup']=='popup'): ?>
                				<a class="pointer-events" href="#rs_port_<?php echo esc_attr($x);?>" data-effect="mfp-zoom-in"><?php the_title();?></a>
                			<?php else: ?>
                				<a href="<?php the_permalink() ?>" ><?php the_title();?></a>
                			<?php endif ?>
                		</h3>
                	<?php endif;?>
                	
                </div>
            </div>
		</div>

		<!-- Popup Content Information -->
		<div id="rs_port_<?php echo esc_attr($x);?>" class="rspopup_style1 mfp-with-anim mfp-hide" <?php echo wp_kses_post($popup_port_background);?>>
							
			<div class="rsteam_content">
				<h3 class="title" <?php echo wp_kses_post($popup_port_title_color);?>><?php the_title();?></h3>
				<div class="team-des" <?php echo wp_kses_post($popup_port_content_color);?>>
					<?php the_content();?>
				</div>

				<ul class="project-info" <?php echo wp_kses_post($popup_port_info_color);?>>
					<?php if(!empty($client)):?>
						<li><span><?php echo esc_html('client:', 'rsaddon');?></span> <?php echo esc_html($client);?></li>
					<?php endif;?>

					<?php if(!empty($location)):?>
						<li><span><?php echo esc_html('Location:', 'rsaddon');?></span> <?php echo esc_html($location);?></li>
					<?php endif;?>
					
					<?php if(!empty($surface_area)):?>
						<li><span><?php echo esc_html('Surface Area:', 'rsaddon');?></span> <?php echo esc_html($surface_area);?></li>
					<?php endif;?>
					
					<?php if(!empty($created)):?>
						<li><span><?php echo esc_html('Architect:', 'rsaddon');?></span> <?php echo esc_html($created);?></li>
					<?php endif;?>
					
					<?php if(!empty($date)):?>
						<li><span><?php echo esc_html('Year Of Complited:', 'rsaddon');?></span> <?php echo esc_html($date);?></li>
					<?php endif;?>
					
					<?php if(!empty($project_value)):?>
						<li><span><?php echo esc_html('Project Value:', 'rsaddon');?></span> <?php echo esc_html($project_value);?></li>
					<?php endif;?>
				</ul>
			</div>			
			
		</div>
	<?php
	$x++;	
	endwhile;
	wp_reset_query();  
	
	$paginate = paginate_links( array(
	    'total' => $best_wp->max_num_pages
	));

	if(!empty($paginate ) && ($settings['blog_pagination_show_hide'] == 'yes')){ ?>
		<div class="pagination-area col-lg-12"><div class="nav-links"><?php echo wp_kses_post($paginate); ?></div></div>
	<?php } ?>