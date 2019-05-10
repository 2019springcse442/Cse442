<?php
	include 'database.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Professor's Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="Create.css">
    <meta charset = "utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  </head>
  <body>
		<!-- navigation bar -->
	  <header class="header">
	  <a href="homepage.php" class="logo">UBStalking'-'</a>
		<form action="Result.php" method="post">
      <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = "search"  maxlength ="50"
      autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" name = "submit-search" value="Go!"/>
    </form>
	  <input class="menu-btn" type="checkbox" id="menu-btn" />
	  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	  <ul class="menu">
	    <li><a href="OfficeNavigation.php">Office Navigation</a></li>
			<li><a href="EventHandler.php">Event Handler</a></li>
	    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
	  </ul>
	</header>

	<?php
		if (isset($_POST['submit'])) {
			$to = 'ubstalking@gmail.com';
			$subject = 'Requesting New Professor Profile';
			$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
			$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
			$message .= 'Office Hour: ' . $_POST['officehour'] . "\r\n\r\n";
			$message .= 'Office: ' . $_POST['office'] . "\r\n\r\n";
			$message .= 'Courses: ' . $_POST['courses'];

/*
			ini_set("SMTP","localhost");
		  ini_set("smtp_port","25");
		  ini_set("sendmail_from","ubstalking@gmail.com");
		  ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
*/
			$headers = "From: ubstalking@gmail.com\r\n";
			$headers .= 'Content-Type: text/plain; charset=utf-8';
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			if ($email) {
				$headers .= "\r\nReply-To: $email";
			}
			$success = mail($to, $subject, $message, $headers, 'ubstalking@gmail.com');
		}
	?>

	<?php if (isset($success) && $success) { ?>
		<span class="professor">Thank you!</span>
		<br>
		<span class="professor">We have recieved your request.</span>
	<?php } else { ?>
		<span class="professor">Sorry, there was a prroblem sending your message.</span>
	<?php } ?>

    </body>
</html>
