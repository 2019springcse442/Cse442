<?php
	include 'database.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Professor's Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="ProfessorProfileTemplate.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset = "utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  </head>

  <body>
		<!-- navigation bar -->
	  <header class="header">
	  <a href="homepage.php" class="logo">UBStalking'-'</a>
	  <input class="menu-btn" type="checkbox" id="menu-btn" />
	  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	  <ul class="menu">
	    <li><a href="OfficeNavigation.php">Office Navigation</a></li>
			<li><a href="EventHandler.php">Event Handler</a></li>
	    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
	  </ul>
	</header>
	<!-- Search Bar -->
	<div>
   <form action="Result.php" method="post">
     <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = "search"  maxlength ="50"
     autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" name = "submit-search" value="Go!"/>
   </form>
   </div>
	<!--information field-->
<div class="profile">
	  <?php
	  		$sql = "SELECT * FROM info WHERE id LIKE '0'";//change the id
	    	$results = mysqli_query($con, $sql);
	    	$result = mysqli_fetch_assoc($results);
	      		echo "
						<div class='result'>
						<ul>
	        	<li><div class='big-title'>".$result['name']."</div></li>
	        	<li><div class='other-info'>".$result['office']."</div></li>
	        	<li><div class='other-info'>".$result['hours']."</div></li>
	        	<li><div class='other-info'>".$result['course']."</div></li>
						</ul>
						</div>";
	  ?>
		<hr style="border: 2px solid black;">
</div>
<!-- comment input -->
<commentbox class="comment-input">
	<input type='text' id='messageInput'  placeholder='Enter comments here...'>
	<button type="button" id='messageButton' onclick="savedata()">Post</button>
	</commentbox>
	<!-- comment display -->
<div class="comment-title">
	<h8>Students' comments</h8>
</div>
<div class="read-comment">
			<textarea id="results" readonly></textarea>
			<div class="payment">

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="kuanlu@buffalo.edu">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="item_name" value="Delete bad comment">
				<input type="hidden" name="amount" value="5.00">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="button_subtype" value="services">
				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
				<p>If you are the professor and want to delete one of comments, <button id="payment-button" name="submit" alt="PayPal - The safer, easier way to pay online!">click me!</button></p>
				</form>
			</div>
</div>

<script>
//Enter key
var input = document.getElementById("messageInput");
		input.addEventListener("keyup", function(event) {
			if (event.keyCode === 13) {
				event.preventDefault();
				document.getElementById("messageButton").click();
				}
				});

	    var messagesRef = new Firebase('https://ubstalking-19cf2.firebaseio.com/0');//change id
	    var messageField = document.getElementById('messageInput');
	    var messageResults = document.getElementById('results');
	    // Save data to firebase
	    function savedata(){
	      var message = messageField.value;
	      messagesRef.push({fieldName:'messageField', text:message});
	      messageField.value = '';
	    }
	    // Update results when data is added
	    messagesRef.limitToLast(10).on('child_added', function (snapshot) {
	        var data = snapshot.val();
	        console.log(snapshot.val());
	        var message = data.text;
	        if (message != undefined)
	        {
	          messageResults.value += '\n' + message;
	        }
	    });
</script>
	    </body>
	</html>
