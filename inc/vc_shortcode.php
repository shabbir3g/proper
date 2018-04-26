<?php 




	function proper_signup($one, $two){ 

		$signup_atts = shortcode_atts( array( 
				'title'			=> 'Sign up to our newsletter for new products, offers, & latest newsl',
			), $one);

		?>

		
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="header-bottom-left text-center row">
							<p><?php echo $signup_atts['title']; ?></p>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="header-bottom-right">
							<form action="index.html" method="post">
								<input type="text" name="fname" placeholder="First Name" />
								<input type="text" name="lname" placeholder="last Name" />
								<input type="email" name="email" placeholder="Email Address" />
								<input type="submit" value="Sign up!" />
							</form>
						</div>
					</div>									
				</div>					
			</div>	
		</div>	
		
		
		


	<?php }
	add_shortcode('newslatter','proper_signup');

	if(function_exists(vc_map)){

		vc_map(array( 
			'name'				=> 'Newsletter Form',
			'base'				=> 'newslatter',
			'icon'				=> get_template_directory_uri().'/img/fav.png',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title',
							'type'					=> 'textfield',
							'heading'				=> 'Type section title'
						),
				)
		));


	}
	
	
	
	function proper_propernut($one, $two){ 

		$proper_image = shortcode_atts( array( 
				'image'			=> '',
				'textarea'		=> '',
				
			), $one);

		?>

		
		<div class="propernut-right">
			<?php echo wp_get_attachment_image($proper_image['image'], 'large'); ?>
			<div class="propernut-right-content text-center">
				<?php echo $proper_image['textarea']; ?>
				
			</div>
			<div class="propernut-social">
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

	<?php }
	add_shortcode('imagesss','proper_propernut');

	if(function_exists(vc_map)){

		vc_map(array( 
			'name'				=> 'Propernut Image',
			'base'				=> 'imagesss',
			'icon'				=> get_template_directory_uri().'/img/fav.png',
			'params'			=> array( 
					array( 
							'param_name'			=> 'image',
							'type'					=> 'attach_image',
							'heading'				=> 'Add Your image'
						),
						array( 
							'param_name'			=> 'textarea',
							'type'					=> 'textarea',
							'heading'				=> 'Add Your Text Here'
						),
				)
		));


	}
	

	
	
	
	function proper_cheeseonion($one, $two){ 

		$proper_cheeseonion = shortcode_atts( array( 
				'images'			=> '',
				'textareas'		=> '',
				
			), $one);

		?>

		<div class="cheeseonion-left">
			<?php echo wp_get_attachment_image($proper_cheeseonion['images'], 'large'); ?>		
			<div class="cheeseonion-social">
				<p><?php echo $proper_cheeseonion['textareas']; ?></p>
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

	<?php }
	add_shortcode('imagessschess','proper_cheeseonion');

	if(function_exists(vc_map)){

		vc_map(array( 
			'name'				=> 'cheeseonion Image',
			'base'				=> 'imagessschess',
			'icon'				=> get_template_directory_uri().'/img/fav.png',
			'params'			=> array( 
					array( 
							'param_name'			=> 'images',
							'type'					=> 'attach_image',
							'heading'				=> 'Add Your image'
						),
						array( 
							'param_name'			=> 'textareas',
							'type'					=> 'textarea',
							'heading'				=> 'Add Your Text Here'
						),
				)
		));


	}
	


