<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="wrapper">
	<header class="header">

		<div class="container">

			<div class="row align-items-center">
				<div class="brand col-lg-3">
					<a href="<?= home_url(); ?>" title="<?php bloginfo('name'); ?>">
						<h2>PM showcase</h2>
					</a>
				</div>
				<div class="desktop-nav col-lg-9">
					<?php show_menu('top_desktop'); ?>
				</div>
				<div class="menu-btn">
					<a href="#" id="mobile-menu-open" title="Mobile Menu">
						<span class="fa fa-bars"></span>
					</a>
				</div>
			</div>

		</div>

	</header>
	<div class="container">



