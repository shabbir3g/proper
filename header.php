<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proper
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta setup -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="">
		<meta name="decription" content="">
		<meta name="author" content="Asad Kabir">
		
	
		<!-- Fav Icon -->
		
		<?php $favicon =  cs_get_option('favicon-upload'); 
		if($favicon): ?>
		<link rel="icon" href="<?php echo  $favicon; ?>" />	
		<?php endif; ?>
		
		<style type="text/css"> 
		
		<?php echo cs_get_option('custom-css-add'); ?>
		
		</style>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		<!-- header-top part start -->		
		<div id="header" class="header-wrappper">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-top-left">
							<?php $mobilenumber =  cs_get_option('mobile-number'); 
							if($mobilenumber): ?>
							<span>Call <?php echo $mobilenumber; ?></span>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-top-right">
							<ul>
								
								<?php $facebook = cs_get_option('facebook-url'); 
								if($facebook): ?>
					   			<li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php endif; ?>
								
								
								<?php $twitter = cs_get_option('twitter-url'); 
								if($twitter): ?>
					   			<li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li>
								<?php endif; ?>
								
								
								<?php $linkedin = cs_get_option('linkedin-url'); 
								if($linkedin): ?>
					   			<li><a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in"></i></a></li>
								<?php endif; ?>
								
								

								<?php $google = cs_get_option('google-url'); 
								if($google): ?>
					   			<li><a href="<?php echo $google; ?>"><i class="fab fa-google-plus"></i></a></li>
								<?php endif; ?>
								
								

								<?php $skype = cs_get_option('skype-url'); 
								if($skype): ?>
					   			<li><a href="<?php echo $skype; ?>"><i class="fab fa-skype"></i></a></li>
								<?php endif; ?>
								
								

								<?php $youtube = cs_get_option('youtube-url'); 
								if($youtube): ?>
					   			<li><a href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a></li>
								<?php endif; ?>
								
								

								<?php $instagram = cs_get_option('instagram-url'); 
								if($instagram): ?>
					   			<li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li>
								<?php endif; ?>
								
								
					   		</ul>
						</div>
					</div>							
				</div>					
			</div>	
			<!-- header-top part end -->
			<!-- header-nav part start -->		
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="header-nav text-center">
							
						<?php $logo =  cs_get_option( 'logo-upload' ); 
							if($logo): ?>
							<ul id="nav logo">
								<li><a href="<?php echo home_url(); ?>">
									<img src="<?php echo $logo; ?>" alt="Logo">
								</a></li>
							</ul>
						<?php endif; ?>
							<div class="main-menu"> 
								<?php 
									wp_nav_menu(array(
										'theme_location'		=> 'left-menu',
										'menu_id'				=> 'nav left',
										'container'				=> '',
									));
								?>
								<?php 
									wp_nav_menu(array(
										'theme_location'		=> 'right-menu',
										'menu_id'				=> 'nav right',
										'container'				=> '',
									));
								?>
								<!--<ul id="">
									<li><a href="#">Home</a></li>
									<li><a href="#">About Us</a></li>
								</ul>
								<ul id="nav right">
									<li><a href="ournuts.html">Our Nuts</a></li>
									<li><a href="contact.html">Get In Touch</a></li>
								</ul> -->
							</div>
						</div>
					</div>									
				</div>					
			</div>	
			<!-- header-nav part end -->
		<?php if(is_front_page()): ?>
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="content-area">
							<div class="full-slider">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
								<div class="amader-slider">

									<?php 

									$gallery = cs_get_option( 'gallery-slider' );

									if( ! empty( $gallery ) ) {

									  $ids = explode( ',', $gallery );

									  foreach ( $ids as $id ) {
										$attachment = wp_get_attachment_image_src( $id, 'full' ); ?>
										
										<div class="item"><img src="<?php echo $attachment[0]; ?>" alt="cheese" /></div>
										<?php
									  }

									}


									?>
								
									
									
								</div>
								<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>				
					</div>			
					<a href="#propernut" class="text-center bottom-arow"><i class="fas fa-angle-down"></i></a>
				</div>					
			</div>	
			
			<?php endif; ?>
		</div>









