<!DOCTYPE html>
<html>
	<head>

		<title>CODEMODE.CA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional Bootstrap theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- jQuery UI CSS CDN -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

		<!-- Fontawesome -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

		<!-- jQuery CDN -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

		<!-- jquery UI CDN-->
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- Temporarily add the Bootstrap Sticky Footer css in the head -->
		<style>
			html {
			  position: relative;
			  min-height: 100%;
			}
			body {
			  /* Margin bottom by footer height */
			  margin-bottom: 60px;
			}
			.footer {
			  position: absolute;
			  bottom: 0;
			  width: 100%;
			  /* Set the fixed height of the footer here */
			  height: 60px;
			  background-color: #f5f5f5;
			}
		</style>

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