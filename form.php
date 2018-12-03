<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo $site_title; ?>
		</title>
		<?php echo file_POST_contents($_SERVER['DOCUMENT_ROOT']."/shared/themes_and_scripts.html");?>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		</head>
		<body class="background-light">
			<?php include($_SERVER['DOCUMENT_ROOT']."/shared/header.php");
	//	include($_SERVER['DOCUMENT_ROOT']."/scripts/dbconnect.php");

    ?>
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

		?>
			<div class="container background-light padded" id="form-well">
				<div class="paragraph padded">
					<p>
						<?php echo nl2br(file_POST_contents($_SERVER['DOCUMENT_ROOT']."/paragraph/form.txt")); ?>
					</p>
				</div>
				<form autocomplete="on" class="form-horizontal" action="" enctype="multipart/form-data" method="POST" name= "unit_assignments">
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="course_designation" class="col-lg-4 control-label">Course</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="course_designation" id="course_designation">
										<option value="" selected disabled>Please Select</option>
										<option value="_105">105</option>
										<option value="_105i">105i</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="year" class="col-lg-4 control-label">Year</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="year" id="year">
										<option value="" selected disabled>Please Select</option>
										<option value="_2018">2018</option>
										<option value="_2017">2017</option>
										<option value="_2016">2016</option>
										<option value="_2015">2015</option>
										<option value="_2014">2014</option>
										<option value="_2013">2013</option>
										<option value="_2012">2012</option>
										<option value="_2011">2011</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="semester" class="col-lg-4 control-label">Semester</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="semester" id="semester">
										<option value="" selected disabled>Please Select</option>
										<option value="fall">Fall</option>
										<option value="spring">Spring</option>
										<option value="summer">Summer</option>
										<option value="maymester">Maymester</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="discipline" class="col-lg-4 control-label">Discipline</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="discipline" id="discipline">
										<option value="" selected disabled>Please Select</option>
										<option value="nat_sciences">Natural Sciences</option>
										<option value="health_medicine">Health Medicine</option>
										<option value="social_sciences">Social Sciences</option>
										<option value="humanities">Humanities</option>
										<option value="digital_humanities">Digital Humanities</option>
										<option value="law">Law</option>
										<option value="business">Business</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="digital_literacy" class="col-lg-4 control-label">Type</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="digital_literacy" id="digital_literacy">
										<option value="" selected disabled>Please Select</option>
										<option value="podcast">Podcast</option>
										<option value="video">Video</option>
										<option value="webpage">Webpage</option>
										<option value="sparks">Sparks</option>
										<option value="illustrator">Illustrator</option>
										<option value="in_design">In Design</option>
										<option value="canvas">Canvas</option>
										<option value="pitochart">Pitochart</option>
										<option value="power_point">Power Point</option>
										<option value="spreadsheet">Spreadsheet</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="genre" class="col-lg-4 control-label">Genre</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="genre" id="genre">
										<option value="" selected disabled>Please Select</option>
										<option value="book_review">Book Review</option>
										<option value="film_review">Film Review</option>
										<option value="play_review">Play Review</option>
										<option value="literature_review">Literature Review</option>
										<option value="peer_reviewed_journal_articles">Peer Reviewed Journal Article</option>
										<option value="conference_paper">Conference Paper</option>
										<option value="conference_presentation">Conference Presentation</option>
										<option value="grant_proposal">Grant Proposal</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="method" class="col-lg-4 control-label">Method</label>
								<div class="col-lg-8">
									<select type="hidden" class="form-control" name="method" id="method">
										<option value="" selected disabled>Please Select</option>
										<option value="archival_research">Archival Research</option>
										<option value="textual_analysis">Textual Analysis</option>
										<option value="rhetorical_analysis">Rhetorical Analysis</option>
										<option value="reviewing_the_literature">Reviewing the Literature</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<center>
						<div class="col-sm-4">
							<h4></h4>
							<div class="panel panel-default background-light padded">
								<center>
									<input class="btn btn-primary btn-block" type="submit" value="submit">
									</center>
								</div>
							</div>
						</center>
					</form>
					<?php

			/*	if(isset($_POST['submit'])) {

					if (isset($_POST["course_designation"])) {
			      $course_designation = $_POST['course_designation'];
			    }

					    if (isset($_POST["year"])) {
					      $year = $_POST['year'];
					    }

			    if (isset($_POST["discipline"])) {
			      $discipline = $_POST['discipline'];
			    }

					    if (isset($_POST["digital_literacy"])) {
					      $digital_literacy = $_POST['digital_literacy'];
					    }

						    if (isset($_POST["genre"])) {
						      $genre = $_POST['genre'];
						    }

								    if (isset($_POST["method"])) {
								      $method = $_POST['method'];
								    }
									}   */
					    // define the list of fields
					    $fields = array('course_designation', 'year', 'discipline', 'digital_literacy', 'genre', 'method');
						 //$fields = array($course_designation, $year, $discipline, $digital_literacy, $genre, $method);

					    $conditions = array();
					    // loop through the defined fields
					    foreach($fields as $field){
					        // if the field is set and not empty
					        //if(isset($_POST[$field]) && $_POST[$field] != '') {
									if(!empty($_POST[$field])) {
					            // create a new condition while escaping the value inputed by the user (SQL Injection)
					           // $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($_POST[$field]) . "%'";
											$conditions[] = "$field` LIKE concat('%', ?, '%')" . mysqli_real_escape_string($_POST[$field]) . "%'";

					        }
					    }
				//	}
					    // builds the query
					    $query = "SELECT * FROM unit_assignments ";

					 //	$query = mysqli_query("SELECT * FROM unit_assignments ");
						echo count($conditions);

					    // if there are conditions defined
					    if(count($conditions) > 0) {
					        // append the conditions
					        $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
					    }

							echo "$query";

						$result = mysqli_query($mysqli_link, $query);


						mysqli_close($mysqli_link);

						    if(isset($_POST['submit'])) {
						        while($row = mysqli_fetch_array($result)) {
						        $course_designation = $row['course_designation'];
						        $year = $row['year'];
						        $discipline = $row['discipline'];
						        $digital_literacy = $row['digital_literacy'];
						        $genre = $row['genre'];
						        $method = $row['method'];

						echo "Course: $course_designation<br>Year: $year<br>Discipline: $discipline<br>digital_literacy: $digital_literacy<br>Genre: $genre<br>Method: $method<br>";
						    }
							}

								?>
				</div>
		</body>
	</html>
