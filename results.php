<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo $site_title; ?>
		</title>
		<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/shared/themes_and_scripts.html");?>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		</head>
		<body class="background-light">
			<?php
    include($_SERVER['DOCUMENT_ROOT']."/shared/header.php");
    ?>
  </head>
  <body>
		<div class="container background-light padded" id="form-well">

<div>
	<?php
	$host    = "localhost";
	$user    = "root";
	$pass    = "root";
	$db_name = "unc_english";

	//create connection
	$connection = mysqli_connect($host, $user, $pass, $db_name);

	//test if connection failed
	if(mysqli_connect_errno()){
	    die("connection failed: "
	        . mysqli_connect_error()
	        . " (" . mysqli_connect_errno()
	        . ")");
	}

	//get results from database
	$result = mysqli_query($connection,"SELECT * FROM unit_assignments");
	$all_property = array();  //declare an array for saving property

	//showing property
	echo '<table class="data-table">
	        <tr class="data-heading">';  //initialize table tag
	while ($property = mysqli_fetch_field($result)) {
	    echo '<td>' . $property->name . '</td>';  //get field name for header
	    array_push($all_property, $property->name);  //save those to array
	}
	echo '</tr>'; //end tr tag
?>

				</div>
			</div>
		</body>
	</html>
