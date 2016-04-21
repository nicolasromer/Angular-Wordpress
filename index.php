<!DOCTYPE html>
<html ng-app>
<head>

	<title>Wordular Angpress</title>
	<?php wp_head(); ?>

</head>

<body>

	<header>
		<h1>
			<a href="<?php echo site_url(); ?>">
				Wordular Angpress
			</a>
		</h1>
	</header>

	<div>
		<p>Name: <input type="text" ng-model="name"></p>

		<p>Hello, {{name}}!</p>
	</div>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>


</body>

</html>