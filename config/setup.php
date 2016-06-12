<?php
// Setup File:

# Database connection ----------------------->>>

$dbc = mysqli_connect('localhost', 'AdminTemp', 'password1', 'codemodecms') OR die ('Could not connect because: '.mysqli_connect_error()); 

$site_title = 'CODEMODE.CA';

# Constants ---------------------------------->>>

DEFINE('D_TEMPLATE', 'template'); // use PHPs D_TEMPLATE function to point to the template folder. This allows us to easily point to another template folder if we were to choose to make another version ie. /template-new/ with a new set of template files inside. We would change 'template' to 'template-new' and the entire site would point to that new folder.

# Functions ---------------------------------->>>
include('functions/data.php');


if(isset($_GET['page'])) { // if the url has a ?page=x key then...

	$pageid = $_GET['page'];

} else {

	$pageid = 1; // if there's not a page key in the url, then set it to the home page

}

//Page Setup
$page = data_page($dbc, $pageid);

?>