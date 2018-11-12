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

/*$result = mysqli_query($connection,"SELECT * FROM `unit_assignments` WHERE year = value ");

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

?> */


$query = $_GET['unit_assignments'];
// gets value sent over search form

$min_length = 3;
// you can set minimum length of the query if you want

if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

		$query = htmlspecialchars($query);
		// changes characters used in html to their equivalents, for example: < to &gt;

		$query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection

		$raw_results = mysql_query("SELECT * FROM unit_assignments
				WHERE (`discipline` LIKE '%".$query."%') OR (`digital_literacy` LIKE '%".$query."%') or (`genre` LIKE '%".$query."%') or (`method` LIKE '%".$query."%')") or die(mysql_error());
				//OR (`course_designation` LIKE '%".$query."%') OR (`year` LIKE '%".$query."%') OR (`semester` LIKE '%".$query."%')")
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table

		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

		if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following

				while($results = mysql_fetch_array($raw_results)){
				// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

						echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
						// posts results gotten from database(title and text) you can also show id ($results['id'])
				}

		}
		else{ // if there is no matching rows do following
				echo "No results";
		}

}
else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
}
?>



</div>
</div>
</body>
</html>
