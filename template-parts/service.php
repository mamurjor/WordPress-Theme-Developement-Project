<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php 
				
				$myservice=new WP_Query(array(
				   'post_type'		=> "service"
				));

				while($myservice->have_posts()):$myservice->the_post();

			   ?>

					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<i class="<?php echo get_post_meta(get_the_ID(),'unique_key_ser',true);?>"></i>
						
							<h4><a href="<?php the_permalink()?>">
							<?php esc_html(the_title());?></a></h4>
							<p><?php esc_html(the_excerpt());?> </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<?php 
					endwhile;
					
					?>
				</div>
			</div>
		</section>