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

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

////////////////////////////////////////////////////////////////////////////////////////
//                                                                                    //
//    This script processes form submissions                               //
//                                                                                    //
////////////////////////////////////////////////////////////////////////////////////////
//$db = db_connect();
//$error = "";
$result = mysqli_query($connection,"SELECT * FROM `unit_assignments` WHERE "course_designation" ");

$application_data = ["course_designation" => $_GET["course_designation"],
    "year" => $_GET["year"],
    "discipline" => $_GET["discipline"],
    "digital_literacy" => $_GET["digital_literacy"],
    "genre" => $_GET["genre"],
    "method" => $_GET["method"],
    "publication_venue" => $_GET["publication_venue"],

];
echo $application_data["course_designation"];
echo $application_data["year"];
echo $application_data["discipline"];
echo $application_data["digital_literacy"];
echo $application_data["genre"];
echo $application_data["method"];
echo $application_data["publication_venue"];

redirect_to("/form.php");

?>

</div>
</div>
</body>
</html>
