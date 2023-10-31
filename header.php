<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>

	<!-- Navigation -->

	<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri();?>/img/icorrect-logo.svg" alt="logo"></a>
			<a href="#" class="nav-link fs-6"><small><i class="fa-solid fa-phone"></i> +44 207 099 8517</small></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
				?>
			</div>
		</div>
	</nav>