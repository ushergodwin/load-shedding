<?php include("config.php"); ?>
<html>
<head>
	<title> Contact Us</title> <link rel="stylesheet" type="text/css" href="contactus.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="shedding.js"></script>
</head>
<body>
          <p id="unique">Need Help?</p>
		<form method="post" name="form1" action="mail.php">
			
			<div class="input-group">
			<label style="font-size: 16px; font-weight: bold;">Email Address</label>
			<input id="nice" type="email" name="EmailAddress" placeholder="someone@example.com" onclick="ValidateEmail(document.form1.EmailAddress)" required> <br>
		</div>
		<div class="input-group">
			<label style="font-size: 16px; font-weight: bold;">Inquiry</label>
			<textarea cols="30" rows="3" id="nice" placeholder="type your question here" required></textarea><br>
		</div>
			<input id="log" type="submit" name="submit" value="Send">
		</form>
</body>
</html>