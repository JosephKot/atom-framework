<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>

		<title><?php echo $page['title'].' | '.$site_title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include('config/css.php') ?>
		<?php include('config/js.php') ?>

	</head>
	
	<body>

		<div id="wrap">

			<?php include(D_TEMPLATE.'/navigation.php'); ?><!-- replace the template folder with the D_TEMPLATE constant defined in setup.php -->

			<div class="container">
			
				<h1><?php echo $page['header']; ?></h1>
				<p><?php echo $page['body']; ?>

			</div><!-- END CONTENT CONTAINER -->

		</div><!-- END WRAP -->

		<?php include(D_TEMPLATE.'/footer.php'); ?>

	</body>
</html>