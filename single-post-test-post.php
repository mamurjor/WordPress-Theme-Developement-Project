<?php  get_header();?>
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Blog Single</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Blog Single</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		<?php 
    
    while(have_posts()): the_post();
    ?>
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
                 <?php the_post_thumbnail('large',['class' => 'hadi jaman', 'title' => 'Feature image']);?>
										<!-- <img src="img/blog1.jpg" alt="#"> -->
									</div>
									<!-- News Title -->
									<h1 class="news-title"><a href="news-single.html">

                  <?php echo the_title();?>
                  </a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="author"><a href="#"><?php 
											
											echo get_avatar(get_the_author_meta("ID"),1);
											?><img src="img/author1.jpg" alt="#">
                    
												<?php the_author(); ?>
												</a></span>
																		<span class="date"><i class="fa fa-clock-o"></i>
												<?php the_date('d M, Y');?>
												</span>
										</div>
										<div class="meta-right">
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
											<span class="views"><i class="fa fa-eye"></i>33K Views</span>
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
                   <?php the_content();?>
									</div>
									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="blog-comments">
									<h2>All Comments</h2>
									<div class="comments-body">
										<!-- Single Comments -->
										<div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author1.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Afsana Mimi</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<div class="single-comments left">
											<div class="main">
												<div class="head">
													<img src="img/author2.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Naimur Rahman</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority 
                            have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author3.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Suriya Molharta</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		
										<!--/ End Single Comments -->											
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="comments-form">
									<h2>Leave Comments</h2>
									<!-- Contact Form -->
									<form class="form" method="post" action="mail/mail.php">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-user"></i>
													<input type="text" name="first-name" placeholder="First name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="text" name="last-name" placeholder="Last name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="email" name="email" placeholder="Your Email" required="required">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group message">
													<i class="fa fa-pencil"></i>
													<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group button">	
													<button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
												</div>
											</div>
										</div>
									</form>
									<!--/ End Contact Form -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
           
							<div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									
								<?php foreach(get_the_category() as $category) {
									
									?>
					
												<li><a href="#"><?php echo  $category->name; ?></a></li>
												
												<?php 
												
								}?>
									
										
								
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/blog-sidebar1.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We have annnocuced our new product.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/blog-sidebar2.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top five way for solving teeth problems.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/blog-sidebar3.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We provide highly business soliutions.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
		
    <?php endwhile; get_footer();?>