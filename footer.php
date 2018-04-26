<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proper
 */

?>

	<!-- footer part start -->		
		<div class="footer">
			<div class="container">
				<div class="row">
				
					<?php dynamic_sidebar('footer-widget'); ?>
					
					<div class="col-lg-3 col-md-3">
						<div class="footer-part-3">
						
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="footer-part-4">
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
		</div>	
		<!-- footer part end -->
		<!-- footer-bottom part start -->		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php $right =  cs_get_option('copy-right'); 
							if($right): ?>
						<div class="footer-bottom-part">
							<p><?php echo $right; ?></p>	
						</div>	
						<?php endif; ?>
					</div>				
				</div>					
			</div>	
		</div>	
		<!-- footer-bottom part end -->	
		
		
	<?php wp_footer(); ?>
	</body>
</html>