<?php
	/*the header file 
	
	*/
 ?>
 <!doctype html>
	<head>
		<html ?php languae_attributes(); ?>>
		<meta charset="<?php  bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, intial-scale=1">
		<?php wp_head(); ?>
		<!-- Bootstrap-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- adding custom css but not working!!!!!-->
		<link rel="stylesheet" href="<?php echo esc_url(home_url('.
		\teapro\wordpress\wp-content\themes\teatheme\assets\css\custom.css')); ?>">
		<!-- Google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">	
	</head>
	<body <?php body_class(); ?>>
		<header>
			<nav class="navbar navbar-light bg-light">
			<a href="<?php echo esc_url(home_url() ) ;?>">
					<img src="<?php echo esc_url(home_url('wp-content/uploads/2022/04/logo.jpg'));?>" alt="logo" class="img" width="100px;">
				</a>
				<?php
				wp_nav_menu(array(
					'menu' 				=> 'main',
					'theme_location' 	=>'',
					'depth'				=>2,
					'fallback_cb'		=>false,
					'container'			=> 'ul',
					'menu_class'		=> 'class-menu'

				));
				?>
			</nav>
		</header>
</html>
