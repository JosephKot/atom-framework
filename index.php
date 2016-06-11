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

		<div id="wrap"><!-- for Sticky footer -->

			<nav class="navbar navbar-default" role="navigation"> 

				<div class="container"><!-- line up the menu with the content -->
				
					<ul class="nav navbar-nav">
						<!-- ?page=1 is explained in part 10 - sending an id to th url to dynamically change the pages query -->
						<li<?php if($pageid == 1) { echo ' class="active"'; } ?>><a href="?page=1">Home</a></li>
						<li<?php if($pageid == 2) { echo ' class="active"'; } ?>><a href="?page=2">About Us</a></li>
						<li<?php if($pageid == 3) { echo ' class="active"'; } ?>><a href="?page=3">FAQ</a></li>
						<li<?php if($pageid == 4) { echo ' class="active"'; } ?>><a href="?page=4">Contact</a></li>
					</ul>

				</div><!-- END NAVIGATION CONTAINER -->

			</nav><!-- END NAV -->

			<div class="container">
			
				<h1><?php echo $page['header']; ?></h1><!-- display the header data from id-1 - the Home Page - in the pages table -->
				<p><?php echo $page['body']; ?><!-- display the body data -->

			</div><!-- END CONTENT CONTAINER -->

		</div><!-- END WRAP -->

		<footer class="footer"><!-- must be a class for sticky footer to work -->

			<div class="container">

				<p>This is the footer</p>

			</div><!-- END FOOTER CONTAINER -->

		</footer><!-- END FOOTER -->

	</body>
</html>