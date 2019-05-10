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
<div class="big-title">
	<h1>Creating a new professor profile...</h1>
</div>
<div class="information-entrance">
	<span class="professor">Your professor's...</span>
	<form action="CreateResult.php" method="post">
	<ul>
	<li>Name: <input type = "text" id = "enter-bar" name = "name"
	 autocompleete = "off" onMousedown ="" onBlur = "" /></li>
	<li>Email: <input type = "text" id = "enter-bar" name = "email"
	 autocompleete = "off" onMousedown ="" onBlur = "" /></li>
	<li>Office Hour: <input type = "text" id = "enter-bar" name = "officehour"
	 autocompleete = "off" onMousedown ="" onBlur = "" /></li>
	<li>Office: <input type = "text" id = "enter-bar" name = "office"
	 autocompleete = "off" onMousedown ="" onBlur = "" /></li>
	<li>Courses: <input type = "text" id = "enter-bar" name = "courses"
	 autocompleete = "off" onMousedown ="" onBlur = "" /></li>
	<input type = "submit" id = "create-btn" name="submit" value="Submit!"/>
</form>
</div>
    </body>
</html>
