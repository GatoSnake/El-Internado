<?php get_header(); ?>
<div class="content">

		<div id="historia" class="container section-space f-atw-style">
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center f-swk">LA HISTORIA</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p class="text-center  class="f-atw"">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>

<?php 
	$query = new WP_Query( array( 'category_name' => 'lugar' , 'posts_per_page' => 10) );
	if ($query->have_posts()) : 
?>
		<div id="lugar" class="container-fluid section-space section-border-header">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center f-clw section-header">EL LUGAR</h1>
				</div>
			</div>
		</div>
		
		<div class="container section-space">
			<div class="row">
				<div class="col-xs-12">
					<div id="gallery" style="display:none;">
	<?php 
		while( $query->have_posts() ):
			$query->the_post();
			if (has_post_thumbnail( $post->ID ) ):
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	?>
						<img alt="Image 1 Title" src="<?php echo $image[0];?>"
							data-image="<?php echo $image[0]; ?>"
							data-description="Image 1 Description">						
	<?php		
			endif;
		endwhile;
	?>

					</div>
				</div>
			</div>
		</div>
<?php
	endif;
?>

		<div class="container section-space f-atw-style">
			<div class="row">
				<div class="col-xs-12">
					<div class="square" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/imgs/header.jpg');"></div>
				</div>
			</div>
		</div>

<?php 
	$queryp = new WP_Query( array( 'category_name' => 'picadas' , 'posts_per_page' => 10) );
	$querys = new WP_Query( array( 'category_name' => 'sandwich' , 'posts_per_page' => 10) );
	if ($queryp->have_posts() || $querys->have_posts()) : 
?>
		<div id="cocina" class="container-fluid section-space section-border-header">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center f-clw section-header">COCINA</h1>
				</div>
			</div>
		</div>
		<div class="container section-space f-atw-style">
<?php
		if ($queryp->have_posts()):
?>
			<div class="section-platos">
				<div class="row section-space">
					<div class="col-xs-12">
						<h3 class="f-clw">PICADAS</h3>
					</div>
				</div>
				<div class="row">
		<?php 
			while( $queryp->have_posts() ):
				$queryp->the_post();
				if (has_post_thumbnail( $post->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="col-xs-12 col-sm-6">
							<img src="<?php echo $image[0]; ?>" class="img-responsive img-thumbnail" alt="picadas_<?php echo $post->ID; ?>">
						</div>
												
						<div class="col-xs-12 col-sm-6">
							<p class="f-cj text-menu-link"><?php echo get_the_title(); ?></p>
							<p class="f-atw">
						<?php 
							$content = get_the_content(); 							
							$re1 = '.*?';
  							$re2 = '(\\$)';	
						  	$re3 = '(\\d+)';	
						  	$re4 = '(\\.)';	
						  	$re5 = '(-)';
						  	$patron = '/.*?(\\$)(\\d+)(\\.)(-)/i';
							$descrip = preg_replace($patron, '', $content);
							echo $descrip;
						?>
							</p>
						<?php 
							if ($c=preg_match_all ("/".$re1.$re2.$re3.$re4.$re5."/is", $content, $matches)):							  
							      $c1=$matches[1][0];
							      $int1=$matches[2][0];
							      $c2=$matches[3][0];
							      $c3=$matches[4][0];							      						  
						?>
							<p><span class="f-clw"><?php echo $c1;?></span><span class="f-cj text-menu-link lighter-font"><ins><?php echo $int1;?></ins></span><span class="f-clw"><?php echo $c2.$c3;?></span></p>
						<?php endif; ?>						
						</div>
					</div>
		<?php		
				endif;
			endwhile;
		?>
					</div>					
				</div>
			
	
<?php
		endif;
?>	
<?php
		if ($querys->have_posts()):
?>
			<div class="section-platos">
				<div class="row section-space">
					<div class="col-xs-12">
						<h3 class="f-clw">SANDWICHES</h3>
					</div>
				</div>
				<div class="row">
		<?php 
			while( $querys->have_posts() ):
				$querys->the_post();
				if (has_post_thumbnail( $post->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="col-xs-12 col-sm-6">
							<img src="<?php echo $image[0]; ?>" class="img-responsive img-thumbnail" alt="sandwiches_<?php echo $post->ID; ?>">
						</div>
												
						<div class="col-xs-12 col-sm-6">
							<p class="f-cj text-menu-link"><?php echo get_the_title(); ?></p>
							<p class="f-atw">
						<?php 
							$content = get_the_content(); 							
							$re1 = '.*?';
  							$re2 = '(\\$)';	
						  	$re3 = '(\\d+)';	
						  	$re4 = '(\\.)';	
						  	$re5 = '(-)';
						  	$patron = '/.*?(\\$)(\\d+)(\\.)(-)/i';
							$descrip = preg_replace($patron, '', $content);
							echo $descrip;
						?>
							</p>
						<?php 
							if ($c=preg_match_all ("/".$re1.$re2.$re3.$re4.$re5."/is", $content, $matches)):							  
							      $c1=$matches[1][0];
							      $int1=$matches[2][0];
							      $c2=$matches[3][0];
							      $c3=$matches[4][0];							      						  
						?>
							<p><span class="f-clw"><?php echo $c1;?></span><span class="f-cj text-menu-link lighter-font"><ins><?php echo $int1;?></ins></span><span class="f-clw"><?php echo $c2.$c3;?></span></p>
						<?php endif; ?>						
						</div>
					</div>
		<?php		
				endif;
			endwhile;
		?>
					</div>					
				</div>
			</div>
	
<?php
		endif;
?>	
<?php
	endif;
?>		

<?php 
	$query = new WP_Query( array( 'category_name' => 'blog' , 'posts_per_page' => 15) );
	if ($query->have_posts()) : 
?>
		<div id="blog" class="container-fluid section-space section-border-header">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center f-clw section-header">BLOG</h1>
				</div>
			</div>
		</div>
		
		<div class="container section-space">
			<div class="row">
				<div class="col-xs-12">
					<div id="gallery2" style="display:none;">
	<?php 
		while( $query->have_posts() ):
			$query->the_post();
			if (has_post_thumbnail( $post->ID ) ):
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	?>
						<img alt="Image 1 Title" src="<?php echo $image[0];?>"
							data-image="<?php echo $image[0]; ?>"
							data-description="Image 1 Description">						
	<?php		
			endif;
		endwhile;
	?>

					</div>
				</div>
			</div>
		</div>
<?php
	endif;
?>	

		
<?php get_footer(); ?>