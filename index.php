<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arrow Driving School</title>

<?php 
$is_contact = FALSE;
$title = "Arrow Driving School";
$description = "Learn to drive on the Isle of Wight with Stephen Brown ADI";
include((__DIR__).'/inc/header.php'); 
?>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/slider-headon-warren.jpg')">
          <div class="carousel-caption d-md-block">
            <a class="d-none d-md-inline btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="d-none d-md-inline btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
			<div class="caption-text">
				<h1>Learn to drive on the Isle of Wight</h1>
				<h3>With Stephen Brown ADI</h3>
			</div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/slider-couple.jpg')">
          <div class="carousel-caption d-md-block">
            <a class="d-none d-md-inline btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="d-none d-md-inline btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
			<div class="caption-text">
				<h1>A gateway to freedom</h1>
				<h3>Driving gives you new opportunities</h3>
			</div>
          </div>
        </div>		
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/slider-Freshwater-Causeway.jpg')">
          <div class="carousel-caption d-md-block">
		  <a class="d-none d-md-inline btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="d-none d-md-inline btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
			<div class="caption-text">
				<h1>Manual and automatic</h1>
				<h3>Drive our cars or your own</h3>
			</div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/slider-mini.jpg')">
          <div class="carousel-caption d-md-block">
            <a class="d-none d-md-inline btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="d-none d-md-inline btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
			<div class="caption-text">
				<h1>Driving to success</h1>
				<h3>Where will your new licence take you?</h3>
			</div>
          </div>
        </div>		
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/slider-Newtown.jpg')">
          <div class="carousel-caption d-md-block">
            <a class="d-none d-md-inline btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="d-none d-md-inline btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
			<div class="caption-text">         
				<h1>Driving lessons for everyone</h1>
				<h3>Specialising in drivers with English as a second language, and those using special adaptations</h3>
			</div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/slider-hands.jpg')">
          <div class="carousel-caption d-md-block">
            <a class="d-none d-md-inline btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="d-none d-md-inline btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
			<div class="caption-text">
				<h1>Putting you in control</h1>
				<h3>Time to move forward - time to drive!</h3>
			</div>
          </div>
        </div>		
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <!-- Features Section -->
    <section id="features">
	<div class="row text-center" id="mobile-cta">
		<a class="btn btn-lg btn-primary btn-cta" href="contact.php">Learner driver lessons</a> <a class="btn btn-lg btn-danger btn-prices" href="pricing.php">Prices</a>
	</div>
	<div class="row">
      <div class="col-lg-6">
        <h2>Driving lessons with Stephen Brown ADI</h2>
        <p>Stephen is one of the Isle of Wight's most experienced and successful driving instructors.</p>
        <ul>
          <li>
            <strong>Stephen Brown ADI</strong>
          </li>
          <li>Driving lessons with Arrow Driving School</li>
		  <li>Manual and automatic</li>
          <li>Fully qualified since 2004</li>
          <li>Comprehensively insured</li>
          <li>Dual controls fitted for your safety</li>
        </ul>
	 </div>
      <div class="col-lg-6">
        <picture>
			<source class="img-fluid rounded" type="image/webp" srcset="images/arrow-driving-cars.webp" title="Arrow driving school cars">	  
			<img class="img-fluid rounded" src="images/arrow-driving-cars.jpg" alt="Arrow driving school cars" title="Arrow driving school cars">	
		</picture>
      </div>
	  </div>
	<div class="row">
		<div class="col-lg-12">
			<p>Driving is for everyone, and Stephen is particularly experienced with nervous drivers and those who are returning to driving. He has had many successful students who speak English as a second language, and drivers who use special adaptations. </p>
		</div>
	</div>

	
    </section>
    <!-- /.row -->

<!-- Counter Section -->
<?php 
date_default_timezone_set("Europe/London");
$teaching = (date("Y") - 2004); 
$earlier = new DateTime("2004-01-01");
$now = new DateTime();
$diff = $now->diff($earlier)->format("%a");
$milesperday = 54.55;
$miles = round($milesperday * $diff);
?>
		<section id="counter" class="row text-center">
	        <div class="col-md-3">
	        <div class="counter">
      <i class="fa fa-car-side fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="112" data-speed="13000"></h2>
       <p class="count-text ">Successful students (manual)</p>
    </div>
	        </div>
              <div class="col-md-3">
               <div class="counter">
      <i class="fa fa-car fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="68" data-speed="10000"></h2>
      <p class="count-text ">Successful students (automatic)</p>
    </div>
              </div>
              <div class="col-md-3">
                  <div class="counter">
      <i class="fa fa-shipping-fast fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo($miles); ?>" data-speed="30000"></h2>
      <p class="count-text ">Miles driven</p>
    </div></div>
              <div class="col-md-3">
              <div class="counter">
      <i class="fa fa-clipboard-check fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo $teaching; ?>" data-speed="7000"></h2>
      <p class="count-text ">Years teaching</p>
    </div>
              </div>
         </section>
<!-- / counter -->

<!-- Yell.com reviews script -->
<script type="text/javascript" src="//sites.yext.com/329509-reviews.js"></script>

<!-- Testimonials -->
<?php
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

  </div>
  <!-- /.container -->

<?php include((__DIR__).'/inc/footer.php'); ?>