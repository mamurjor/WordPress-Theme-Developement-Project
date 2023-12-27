
<?php  get_header();
echo  do_shortcode('[passcode]');

?>

		
		<!-- Slider Area -->
		<?php get_template_part('template-parts/slider');?>

		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<?php get_template_part('template-parts/schedule');?>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<?php get_template_part('template-parts/feautes');?>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<?php get_template_part('template-parts/fun');?>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		
		<?php get_template_part('template-parts/why-choose');?>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<?php get_template_part('template-parts/calltoaction');?>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		<?php get_template_part('template-parts/portfolio');?>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<?php get_template_part('template-parts/service');?>
		<!--/ End service -->
		
		<!-- Pricing Table -->
		<?php get_template_part('template-parts/pricing');?>
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		
		<?php get_template_part('template-parts/content');?>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<?php get_template_part('template-parts/clients');?>
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		<?php get_template_part('template-parts/appointment');?>
		
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		<?php get_template_part('template-parts/newsletter');?>
		<!-- /End Newsletter Area -->
		
	
		<?php get_footer();?>