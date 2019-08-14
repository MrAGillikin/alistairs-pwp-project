<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/js-validator.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>


	<title>PWP Alistair's interface</title>
</head>
<body>
	<h1>Alistair's Interface</h1>
	<p>Awaiting Data Entry</p>

	<div class="jumbotron">
		<h1 class="display-4">Entry Form</h1>
		<p class="lead">This is currently a simple Jumbotron unit.</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</p>
		<hr class="my-4">
		<p>Be sure to add forms inside.</p>
	</div>

</body>

<footer>
	<p>Contact me at alistairgillikin@gmail.com or use the following form:</p>

	<form id="alistairs-contact-form" action="../php/index.php" method="post">
		<div class="form-group">
			<label for="contactDemoName">Name <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
				</div>
				<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="emailAddress">Email <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
				</div>
				<input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="contactDemoSubject">Subject</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
				</div>
				<input type="text" class="form-control" id="emailSubject" name="emailSubject" placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<label for="emailMessage">Message <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
				</div>
				<textarea class="form-control" rows="5" id="emailMessage" name="EmailMessage" placeholder="Enter Message Here"></textarea>
			</div>
		</div>

		<!-- reCAPTCHA-->
		<div class="g-recaptcha" data-sitekey="6LdF5LIUAAAAAJT9ZbSHhf6RC1me720Byh5l_UJu"></div>

		<button class="btn btn-success" type="submit">Send</button>

		<!-- Error/Success output -->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>




	</form>
</footer>

</html>