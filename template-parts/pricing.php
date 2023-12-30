<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php 
				
				$myservice=new WP_Query(array(
				   'post_type'		=> "mprice"
				));

				while($myservice->have_posts()):$myservice->the_post();

				$iconclass=get_post_meta(get_the_ID(),'iconclass',true);
				$package_price=get_post_meta(get_the_ID(),'package_price',true);
				$bookingurl=get_post_meta(get_the_ID(),'bookingurl',true);

				$myfaturelist=get_post_meta(get_the_ID(),'yourprefix_group_demo',true);
			  
				//var_dump($myfaturelist);

			
			
			  ?>

					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="<?php echo $iconclass;?>"> </i>
								</div>
								<h4 class="title"><?php the_title();?></h4>
								<div class="price">
									<p class="amount"> <?php echo $package_price;?>/</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<?php 
								
								foreach($myfaturelist as $singlfeature){
									
								
								?>
								<li><i class="icofont icofont-ui-check"></i><?php echo  $singlfeature['title'];?></li>
							<?php 
							
								}
							
							?>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="<?php echo $bookingurl;?>">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<?php 
					endwhile;
					
					?>
				</div>	
			</div>	
		</section>