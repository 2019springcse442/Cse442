<?php
	include 'database.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Professor's Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="Result.css">
    <meta charset = "utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  </head>
  <body>
		<!-- navigation bar -->
	  <header class="header">
	  <a href="homepage.php" class="logo">UBStalking'-'</a>
		<form action="Result.php" method="post">
			<input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = search maxlength ="50"
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
	<h1>Search Results...</h1>
</div>

<h2>
  <?php
  	if(isset($_POST['submit-search'])){
  		$search = mysqli_real_escape_string($con, $_POST['search']);
  		$sql = "SELECT * FROM info WHERE name LIKE '%$search%'";
    	$result = mysqli_query($con, $sql);
    	$queryResults = mysqli_num_rows($result);

    	if($queryResults >0){
    		while($row = mysqli_fetch_assoc($result)){
      		echo "
					<div class='result'>
					<ul>
        	<li class='prof-name'><a href='".$row['id'].".php'>".$row['name']."</a></li>
        	<li class='office'>".$row['office']."</li>
        	<li class='hour'>".$row['hours']."</li>
        	<li>".$row['course']."</li>
      		</ul>
					</div>";
    }

    	}else{
    		echo
				"<div class='no-result'>
					<ul><li>There are no result matching your search!</li>
					<li class='create-prof'>Do you want to enter your professor's information?
					<form action='create.php'><input type ='submit' id ='new-prof' value='Sure'/></form>
					</li>
					</ul>
					";
    	}
  	}

  ?>

</h2>
    </body>
</html>
