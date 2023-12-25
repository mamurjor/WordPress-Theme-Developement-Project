<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
						<?php 				
				$myservice=new WP_Query(array(
				   'post_type'		=> "portfolio"
				));
				while($myservice->have_posts()):$myservice->the_post();
			   ?>
						<div class="single-pf">
								<?php the_post_thumbnail()?>
								<a href="<?php the_permalink()?>" class="btn">View Details</a>
							</div>
							<?php 
					endwhile;
					
					?>
						</div>
					</div>
				</div>
			</div>
		</section>