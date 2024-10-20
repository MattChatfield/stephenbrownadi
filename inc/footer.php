  <!-- Footer -->
  <footer class="py-5 bg-dark pl-5">
    <div class="container-fluid">
	<div class="row text-white social-bar">
		<div class="col-md-3">
		<p>
		<i class="social fa fa-map-marker-alt fa-lg"></i>
		7 Forest Court,<br/>
Forest Way, Winford,<br/>
Sandown, Isle of Wight<br/>
PO36 0JL</p>
		</div>
		<div class="col-md-3">
		<p><a href="mailto:arrowdrivingschool@outlook.com"><i class="social fa fa-envelope fa-lg"></i>arrowdrivingschool@outlook.com</a></p>
		</div>
		<div class="col-md-3">
			<p><a href="tel:+447837397741"><i class="social fa fa-mobile-alt fa-lg"></i>07837 397741</a><br/>
			<a href="tel:+441983861521"><i class="social fa fa-phone fa-lg"></i>01983 861521</a></p>
		</div>
		<div class="col-md-3">
			<p><a href="https://www.facebook.com/arrowdrivingschooliw/"><i class="social fab fa-facebook fa-lg"></i></a><a href="https://twitter.com/arrowdriving/"><i class="social fab fa-twitter fa-lg"></i></a><a href="https://www.instagram.com/stephen.brown.900388/"><i class="social fab fa-instagram fa-lg"></i></a></p>
		</div>
	</div>     

	<div class="row px-2">
	 <p class="text-center text-white-50">Copyright &copy; <?php echo date("Y"); ?> Stephen Brown ADI</p>
	 </div>
	<div class="row px-2">
	 <p class="text-center text-white-50"><a href="/privacy.php">Privacy</a></p>
	 </div>	 
    </div>
    <!-- /.container -->
  </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php if ($is_contact) { /* tests to see if we are on the contact page, as these scripts are only needed on that page */?>
<!-- Contact form JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js"></script>
<script src="js/contact_me.js"></script>
<?php } ?>
  
</body>

</html>