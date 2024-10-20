<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Arrow Driving School</title>
<?php 
$title = "About Arrow Driving School";
$description = "About Stephen Brown, your driving instructor";
$is_contact = FALSE;
include((__DIR__).'/inc/header.php'); 
?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About Stephen Brown</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

 <!-- About Steve Section -->
    <section id="about" class="row">
	<div class="col-lg-6">
        <picture>
			<source class="img-fluid rounded" type="image/webp" srcset="images/stephen-brown.webp">
			<img class="img-fluid rounded" src="images/stephen-brown.jpg" alt="Driving lessons with Stephen Brown ADI" title="Driving lessons with Stephen Brown ADI">
		</picture>
      </div>
      <div class="col-lg-6">
        <h2>It's not all driving for Stephen</h2>
        <p>Stephen has lived on the Isle of Wight since he was four years old.</p>
        
		<p>He loves the Island, particularly the Sandown area, where he has always lived. He is happily married to Emma and they live in Winford. Stephen passed his driving test in 1986 and his motorcycle test in 1999. He enjoys driving and has driven extensively in England, Scotland, the USA, Spain and Portugal.</p>
		
		<p>In his leisure time Stephen enjoys archery, cinema and music. He loves walking in the Island’s beautiful countryside and volunteers for the <a href="https://cinnamon.org.uk/">Cinnamon Trust</a> charity walking dogs whose owners are unable to walk them anymore. </p>
		
		<p>Stephen has been a keen bowman since he was a child and proudly represented the Isle of Wight at the Island Games in 1993 (Isle of Wight), 2001 (Isle of Man), 2003 (Guernsey), 2011 (Isle of Wight) and 2015 (Jersey). He contributed to the archery team winning a silver medal in 2001, a bronze medal in 2003 and 2 gold medals in 2015.</p>
      </div>
    </section>
<!-- /.row -->

  </div>
  <!-- /.container -->

<?php include((__DIR__).'/inc/footer.php'); ?>
