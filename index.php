<!DOCTYPE html>
<html ng-app="app">
<head>

	<!-- prevent nobase error with dynamic root directory string -->
	<base href="<?php $url_info = parse_url( site_url() ); echo trailingslashit( $url_info['path'] ); ?>">

	<title>Wordular Angpress</title>

	<?php wp_head(); ?>

</head>

<body>

	<header>
		<h1>
			<a href="<?php echo site_url(); ?>">
				<?php echo bloginfo('name'); ?>
			</a>
		</h1>
	</header>

	<div ng-view></div>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>


</body>

</html>