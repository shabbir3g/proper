<?php 
get_header('contact');
/*
Template Name: contact page
*/
?>

	<?php
		while ( have_posts() ) :
			the_post();

			the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>



			</div>
		
<?php
get_footer();
