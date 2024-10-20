<!DOCTYPE html>
<html lang="en">

<head>
  <title>Arrow Driving School: successful students</title>
<?php 
$is_contact = FALSE;
include((__DIR__).'/inc/header.php'); 
$servername = "localhost";
$username = "stephen";
$password = "forest";
$dbname = "stephenbrownadi_1";
$cardwidth = 3;
$newline = "\r\n";

$cardcode = '						<div class="card-body">
							<p class="card-text">
								Card content
							</p>
						</div>
						<div class="card-footer">
							<p>Testimonial</p>
						</div>
					</div>
				</div>'.$newline;
$rowstart = '			<div class="row">'.$newline;
$rowend = '			</div>'.$newline;
$colstart = '				<div class="col-md-'. 12/$cardwidth .'">
					<div class="card successcard">
						<div class="card-header">
							<h5> Name </h5>' .$newline . '	<p> Man/Auto </p>					</div>'.$newline;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM newsuccesses ORDER BY name";
$result = $conn->query($sql);

$totalstudents = $result->num_rows;

/* numeric array */
$datarow = $result->fetch_array(MYSQLI_NUM);
// printf ("%s (%s)\n", $datarow[0], $datarow[1]);

// calculate how many rows we need
$cardrows = round(($totalstudents/$cardwidth), 0, PHP_ROUND_HALF_DOWN);
$leftover = $totalstudents-($cardrows*$cardwidth);

?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Pass your driving test like these successful students</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Successes</li>
    </ol>

 <!-- Successes Section -->
    <section id="successes" class="row">
		<div class="container-fluid">

			<div class="col-md-<?php echo 12/$cardwidth ?>">
				<div class="card successcard">
					<div class="card-header">
						<h5><?php printf ("%s, %s.\n", $datarow[0], $datarow[1]); ?></h5> 
						<p>(<?php if ($datarow[2]) {echo "Manual";} else {echo "Automatic";} ?>)</p>
					</div>
					<div class="card-body">
						<div class="card-text">
							<div class="img-box">
								<img class="img-fluid" src="images/clients/<?php echo $datarow[3] .'" alt="'.$datarow[0].'">'; ?>
							</div>	
						</div>
					</div>
					<div class="card-footer">
						<?php echo '<p class="testimonial">"'. $datarow[4] .'"</p>'; ?>
					</div>
				</div>
			</div>




		

<?php 
//loop to generate rows
for ($m; $m < $cardrows; $m++) 
	{
		echo $rowstart;
		// loop to generate cards within a row
			for ($n; $n < $cardwidth; $n++) { 
				echo ($colstart . $cardcode);
			}
		echo $rowend;
		$n = 0;
	}
	
//generate leftover cards in final row
echo $rowstart;
		// loop to generate cards within a row
			for ($n; $n < $leftover; $n++) { 
				echo ($colstart . $cardcode);
			}		
echo $rowend;
?>


		</div>


    </section>
<!-- /.row -->

  </div>
  <!-- /.container -->

<pre>
<?php
var_dump($datarow);
?>
</pre>



<?php include((__DIR__).'/inc/footer.php'); 
mysqli_close($conn);
?>
