<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>

		<title>CODEMODE.CA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include('config/css.php') ?>
		<?php include('config/js.php') ?>

	</head>
	
	<body>

		<div id="wrap"><!-- for Sticky footer -->

			<nav class="navbar navbar-default" role="navigation"> 

				<div class="container"><!-- line up the menu with the content -->
				
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li> <!-- add the active class -->
						<li><a href="#">About Us</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact</a></li>
					</ul>

				</div><!-- END NAVIGATION CONTAINER -->

			</nav><!-- END NAV -->

			<div class="container">
			
				<h1>Content Area</h1>

			</div><!-- END CONTENT CONTAINER -->

		</div><!-- END WRAP -->

		<!-- Add Bootstrap's Sticky Footer CSS in the head and class="footer" to the <footer>, then wrap the navigation and the content with a <div id="wrap"> -->
		<footer class="footer">

			<div class="container">

				<p>This is the footer</p>

			</div><!-- END FOOTER CONTAINER -->

		</footer><!-- END FOOTER -->

	</body>
</html>