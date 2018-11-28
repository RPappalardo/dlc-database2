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




echo "1";




/*		$course_designation = "course_designation";
		$year = "year";
		$discipline = "discipline";
		$digital_literacy = "digital_literacy";
		$genre = "genre";
		$method = "method"; */
//				if(isset($_GET['submit'])) {
		// define the list of fields
		$fields = array('course_designation', 'year', 'discipline', 'digital_literacy', 'genre', 'method');
	//$fields = array($course_designation, $year, $discipline, $digital_literacy, $genre, $method);

		$conditions = array();
echo "2";
		// loop through the defined fields
		foreach($fields as $field){
				// if the field is set and not empty
				if(isset($_[$field]) && $_GET[$field] != '') {
						// create a new condition while escaping the value inputed by the user (SQL Injection)
						$conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($_GET[$field]) . "%'";
				}
		}
//			}
echo "3";
		// builds the query
		$query = "SELECT * FROM unit_assignments ";
	//	$query = mysqli_query($conn,"SELECT * FROM unit_assignments ");
	echo count($conditions);

		// if there are conditions defined
		if(count($conditions) > 0) {
				// append the conditions
echo "hello";
				$query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
		}

		echo "$query";

	$result = mysqli_query($mysqli_link, $query);


	mysqli_close($mysqli_link);

			if(isset($_GET['submit'])) {
					while($row = mysqli_fetch_array($result)) {
					$course_designation = $row['course_designation'];
					$year = $row['year'];
					$discipline = $row['discipline'];
					$digital_literacy = $row['digital_literacy'];
					$genre = $row['genre'];
					$method = $row['method'];


	echo "Course: $course_designation<br>Year: $year<br>Discipline: $discipline<br>digital_literacy: $digital_literacy<br>Genre: $genre<br>Method: $method<br>";
			}





















/*$result = mysqli_query($conn,"SELECT * FROM `unit_assignments` WHERE year = value ");

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

redirect_to("/form.php"); */
///////////////////////////////////////////////////////////////////////////////////
/*
if(isset($_GET['submit'])) {
    // define the list of fields
    $fields = array('course_designation', 'year', 'discipline', 'digital_literacy', 'genre', 'method', 'publication_venue');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_[$field]) && $_GET[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($_GET[$field]) . "%'";
        }
    }
}
    // builds the query
    $query = "SELECT * FROM unit_assignments ";
	//	$query = mysqli_query($conn,"SELECT * FROM unit_assignments ");

    // if there are conditions defined
    if(count($conditions) > 0) {
        // append the conditions
echo "hello";
        $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
    }

		echo "$query";

	$result = mysqli_query($mysqli_link, $query);


	mysqli_close($mysqli_link);

	    if(isset($_GET['submit'])) {
	        while($row = mysqli_fetch_array($result)) {
	        $course_designation = $row['course_designation'];
	        $year = $row['year'];
	        $discipline = $row['discipline'];
	        $digital_literacy = $row['digital_literacy'];
	        $genre = $row['genre'];
	        $method = $row['method'];
	        $publication_venue = $row['publication_venue'];


	echo "Course: $course_designation<br>Year: $year<br>Discipline: $discipline<br>digital_literacy: $digital_literacy<br>Genre: $genre<br>Method: $method<br>publication_venue: $publication_venue<hr><br>";
	        }
	    }    */
//////////////////////////////////////////////////////////////////////////////////////
/*

echo '<br /> Course:' $application_data["course_designation"];
echo '<br /> Year:' $application_data["year"];
echo '<br /> Discipline:' $application_data["discipline"];
echo '<br /> Digital Literacy:' $application_data["digital_literacy"];
echo '<br /> Genre:' $application_data["genre"];
echo '<br /> Method:' $application_data["method"];
echo '<br /> Publication Venue:' $application_data["publication_venue"];


*/

?>



</div>
</div>
</body>
</html>
