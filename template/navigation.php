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