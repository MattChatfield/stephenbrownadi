<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 
$is_contact = FALSE;
include((__DIR__).'/inc/header.php'); 
?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "stephen";
$password = "forest";
$dbname = "stephenbrownadi_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 

$sql="SELECT * FROM newsuccesses ORDER BY name";

$result = $conn->query($sql);
?>

<!-- Testimonials -->
<section id="testimonials" class="container">
	<div class="row">
		<div class="col-md-12 col-center m-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner" id="testimonial-carousel">

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if ($row["name"]=="Charlie Fairclough") // tests if this is the first row
			{$active = "active";} else {$active="";}
		echo '<div class="item carousel-item '.$active.'">';
		echo '<div class="img-box"><img src="images/clients/'. $row["imagename"] .'" alt="'.$row["name"].'"></div>';
		echo '<p class="testimonial">'. $row["quote"] .'</p>';
		echo '<p class="overview"><b>'. $row["name"] .'</b>, '. $row["town"] .'</p></div>';
    }
} else {
    echo "No testimonials at the moment.";
}
mysqli_close($conn);
?>
		
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Testimonials -->


<?php include((__DIR__).'/inc/footer.php'); ?>