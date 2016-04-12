<!DOCTYPE html>
<html lang="en">

<head>

	<?php include('head.php'); ?>

</head>

<body>

		<!-- Navigation -->
		<?php include('nav.php'); ?>

		<!-- Page Content -->
		<div class="container top-space">

				<!-- Page Heading/Breadcrumbs -->
				<div class="row">
						<div class="col-lg-12">
								<h1 class="page-header">Contact</h1>
								<ol class="breadcrumb">
										<li><a href="index.html">Home</a>
										</li>
										<li class="active">Contact</li>
								</ol>
						</div>
				</div>
				<!-- /.row -->

				<!-- Content Row -->
				<div class="row">
						<!-- Map Column -->
						<div class="col-md-8">
								<!-- Embedded Google Map -->
								<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
						</div>
						<!-- Contact Details Column -->
						<div class="col-md-4">
								<h3>Contact Details</h3>
								<p>
										Academy Maris - Blanka Lacmanová<br>Ernst-Lehmann-Straße 19<br>39106 Magdeburg<br>
								</p>
								<p><i class="fa fa-phone"></i> 
										<abbr title="Phone">P</abbr>: 01520 8220615</p>
								<p><i class="fa fa-envelope-o"></i> 
										<abbr title="Email">E</abbr>: <a href="mailto:name@example.com">info@akademiemaris.de</a>
								</p>
								<p>More information on: www.akademiemaris.de<br>
								Talk to us, even if you have not found what you're interested.</p>
								<ul class="list-unstyled list-inline list-social-icons">
										<li>
												<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
										</li>
										<li>
												<a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
										</li>
										<li>
												<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
										</li>
										<li>
												<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
										</li>
								</ul>
						</div>
				</div>
				<!-- /.row -->

				<!-- Contact Form -->
				<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
				<div class="row">
						<div class="col-md-8">
								<h3>Send us a Message</h3>
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
										<button type="submit" class="btn btn-primary">Send Message</button>
								</form>
						</div>
				</div>
				<!-- /.row -->
		</div>
		<hr class="top-space">

		<!-- Footer -->
		<?php include('footer.php'); ?>
    <!-- /.container -->

    <!-- jQuery -->
    <?php include('footnotes.php'); ?>
</body>

</html>