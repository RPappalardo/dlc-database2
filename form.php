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
			<div class="container background-light padded" id="form-well">
				<div class="paragraph padded">
					<p>
						<?php echo nl2br(file_get_contents($_SERVER['DOCUMENT_ROOT']."/paragraph/form.txt")); ?>
					</p>
				</div>
				<form autocomplete="on" class="form-horizontal" action="/scripts/submit_form.php" enctype="multipart/form-data" method="GET" >
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="course_designation" class="col-lg-4 control-label">Course</label>
								<div class="col-lg-8">
									<select class="form-control" name="course_designation" id="course_designation">
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
									<select class="form-control" name="year" id="year">
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
									<select class="form-control" name="semester" id="semester">
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
									<select class="form-control" name="discipline" id="discipline">
										<option value="" selected disabled>Please Select</option>
										<option value="natural_sciences">Natural Sciences</option>
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
									<select class="form-control" name="digital_literacy" id="digital_literacy">
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
									<select class="form-control" name="genre" id="genre">
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
									<select class="form-control" name="method" id="method">
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
					<div class="col-sm-4">
						<h4></h4>
						<div class="panel panel-default background-light padded">
							<div class="form-group">
								<label for="publication_venue" class="col-lg-4 control-label">Publication Venue</label>
								<div class="col-lg-8">
									<select class="form-control" name="publication_venue" id="publication_venue">
										<option value="" selected disabled>Please Select</option>
										<option value="newspaper">Newspaper</option>
										<option value="magazine">Magazine</option>
										<option value="peer_reviewed_journal">Peer-Reviewed Journal</option>
										<option value="website">Website</option>
										<option value="carolina_scientific">Carolina Scientific</option>
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
									<input class="btn btn-primary btn-block" type="submit" value="Search">
									</center>
								</div>
							</div>
						</center>
					</form>
				</div>
		</body>
	</html>
