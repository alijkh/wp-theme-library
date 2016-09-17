<html>
 <head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ermile.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
 </head>
<body>
 <div class="container wraper">
		<header class="row">
				<ul>
					<li><button type="">en</button></li>
					<li><button type="">fn</button></li>
					<li><button type="">ورود  |  ثبت نام</button></li>
					<li><span><?php echo jdate ('l, j F , Y');?></span></li>
				</ul>
				<div class="m-header">
						<h1>
							<a href="<?php bloginfo('url'); ?>">
							 	<img src="<?php bloginfo('template_directory');?>/images/Untitled-1.png" alt="">
							 </a>
						</h1>
				</div>
				<nav  class="category">
					<?php wp_nav_menu(['theme_location' => 'menu_header', 'depth' => '2',]); ?>
				</nav>
		</header>
