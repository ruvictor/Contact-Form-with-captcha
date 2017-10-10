<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<title>
			Contact
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
		<script type='text/javascript' src='js/jquery.min.js'></script>
		<script type='text/javascript' src='js/javascript.js'></script>
	</head>
	<body>
		<div style="text-align: center; margin-top: 20px;">
			<img src="css/img/logo.png" style="margin: 0 auto;"/>
		</div>
		<div class="container">
			<div class="response"></div>
			<form action="" id="contact_form" method="POST">
				<p>Name:</p>
				<input type="text" name="name" placeholder="Enter name" required=""/>
				<p>Email:</p>
				<input type="email" name="email" placeholder="Enter email" required=""/>
				<p>Message:</p>
				<textarea name="message" rows="10" cols="30" required=""></textarea>
				<p>Captcha:</p>
				<img src="captcha.php" id="captcha"/>
				<input type="text" name="captcha" placeholder="Enter code" required=""/>
				<input type="submit" value="Submit" />
			</form>
		</div>
	</body>
</html>