<?php
////////////////////////////////////////////////////////////////////////////////////////
//                                                                                    //
//    This script processes form submissions                               //
//                                                                                    //
////////////////////////////////////////////////////////////////////////////////////////
$db = db_connect();
$error = "";
$application_data = ["course_designation" => $_GET["course_designation"],
    "year" => $_GET["year"],
    "discipline" => $_GET["discipline"],
    "digital_literacy" => $_GET["digital_literacy"],
    "genre" => $_GET["genre"],
    "method" => $_GET["method"],
    "publication_venue" => $_GET["publication_venue"],

];
redirect_to("/form.php");
