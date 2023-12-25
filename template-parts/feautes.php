<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php 
				
				 $myservice=new WP_Query(array(
					'post_type'		=> "mywonlider"
				 ));

				 while($myservice->have_posts()):$myservice->the_post();
				?>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="<?php echo get_post_meta(get_the_ID(),'unique_key',true);?>"></i>
							</div>
							<a href="<?php the_permalink()?>"><h3><?php esc_html(the_title());?></h3> </a>
							<p><?php esc_html(the_excerpt());?></p>
						</div>
						<!-- End Single features -->
					</div>
					<?php 
					endwhile;
					
					?>
				</div>
			</div>
		</section>