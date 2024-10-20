<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Arrow Driving School</title>
<?php 
$title = "Contact Arrow Driving School";
$description = "Contact Stephen Brown ADI";
	$is_contact = TRUE;
	include((__DIR__).'/inc/header.php'); 
?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <picture>
			<source class="img-fluid rounded" type="image/webp" srcset="images/stephen-brown-1.webp" title="Driving lessons with Stephen Brown ADI">
			<img class="img-fluid rounded" src="images/stephen-brown-1.jpg" alt="Driving lessons with Stephen Brown ADI" title="Driving lessons with Stephen Brown ADI">
		</picture>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-8 mb-4">
        <h3>Contact Stephen</h3>
        <p class="text-dark" ><i class="social fa fa-map-marker-alt fa-lg"></i>
		7 Forest Court,<br/>
Forest Way, Winford,<br/>
Sandown, Isle of Wight<br/>
PO36 0JL</p>
        <p>
          	<a class="text-dark" href="tel:+447837397741"><i class="text-dark social fa fa-mobile-alt fa-lg"></i>07837 397741</a><br/>
			<a class="text-dark" href="tel:+441983861521"><i class="text-dark social fa fa-phone fa-lg"></i>01983 861521</a>
        </p>
        <p>
          <a class="text-dark" href="mailto:arrowdrivingschool@outlook.com"><i class="text-dark social fa fa-envelope fa-lg"></i>arrowdrivingschool@outlook.com</a>
        </p>
        <p>
          <a class="text-dark" href="https://www.facebook.com/arrowdrivingschooliw/"><i class="text-dark social fab fa-facebook fa-lg"></i></a><a class="text-dark" href="https://twitter.com/arrowdriving/"><i class="text-dark social fab fa-twitter fa-lg"></i></a><a class="text-dark" href="https://www.instagram.com/stephen.brown.900388/"><i class="text-dark social fab fa-instagram fa-lg"></i></a>
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send Stephen a message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php include((__DIR__).'/inc/footer.php'); ?>
