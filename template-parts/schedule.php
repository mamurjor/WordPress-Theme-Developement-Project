<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
					<?php 				
				$myservice=new WP_Query(array(
				   'post_type'		=> "schedule"
				));
				while($myservice->have_posts()):$myservice->the_post();
			   ?>
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span><?php esc_html(the_title());?></span>
										<h4><?php esc_html(the_excerpt());?></h4>
										<p><?php esc_html(the_content());?></p>
										<a href="<?php the_permalink()?>">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<?php 
					endwhile;
					
					?>
					</div>
				</div>
			</div>
		</section>