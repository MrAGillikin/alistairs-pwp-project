<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- This one's my own stylesheet. To be used only for styling. -->
	<link rel="stylesheet" href="./style.css"/>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="./script.js"></script>
	<script src="js/js-validator.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>


	<title>PWP Alistair's interface</title>
</head>
<body>

	<div id="header" class="text-light text-center">
		<h1>Alistair's Interface</h1>
		<p>Awaiting Data Entry</p>

		<h3>About the maker:</h3>
		<p >Alistair Gillikin is a computer programmer and web developer. This interface was made to test out what could be done with HTML forms, and different ways a page could react to input. Enjoy fiddling with it, and if it interests you, feel free to send an email.</p>
	</div>

	<div id="Main Interface" class="jumbotron offset-md-1 col-10 text-center">
		<h1 class="display-4">Entry Form</h1>
		<p class="lead">This form takes a user input, examines it, and gives back a response. Currently, it is programmed to count the number of letters in each word. Simply type what you want into the input, then press the Submit button and the response will appear below.</p>
		<form onsubmit="">
			Input<br>
			<input type="text" id="interfaceinput" value="Enter" size="50"><br>
			<button type="button" onclick="createResponse()">Submit</button>
			<hr class="my-4">

		</form>
		<p class="lead">After the submit button is pressed, the response will be shown below.</p>
		<div class="row">
			<div class="col-xs-12">
				<div id="response"></div>
			</div>
		</div>
	</div>


</body>

<footer>
	<p>Contact me at alistairgillikin@gmail.com or use the following form:</p>

	<form id="alistairs-contact-form" action="../php/index.php" method="post">
		<div class="form-group">
			<label for="contactName">Name <span class="text-danger">*</span></label>
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
			<label for="emailSubject">Subject</label>
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
				<textarea class="form-control" rows="5" id="emailMessage" name="emailMessage" placeholder="Enter Message Here"></textarea>
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