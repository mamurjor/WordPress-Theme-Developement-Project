<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2> <?php 
							$myoption_Field=get_option('myunqiueidthemeoption');
							
							echo $myoption_Field['about-headone'];
							
							?></h2>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
							<p><?php 
							
							echo $myoption_Field['about-headtwo'];
							?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3><?php 
							
							echo esc_html($myoption_Field['abouttitle']);
							?></h3>
							<p><?php 
							
							echo esc_html($myoption_Field['about-de']);
							?> </p>
							
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
									<?php
							
							
							//var_dump($myoption_Field);
							$myfeatuerlist =  $myoption_Field['about-feature'];	
							
							// var_dump($myfeatuerlist);

							foreach($myfeatuerlist as $single_fatuere){
								?>
	

								<li><i class="fa fa-caret-right"></i> <?php echo $single_fatuere['feature-option'];?> </li>
							<?php
							}
							?>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<iframe width="652" height="367"
								 src="<?php echo $myoption_Field['about-video'];?>" title="Complete E-commerce Project PHP MySQL || Part#01 Mastering || Hadi jaman || Mamurjor IT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								<?php 
							
							
							?>
								
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>