<?php
	include 'database.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="ProfessorProfileTemplate.css">
    <meta charset = "utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  </head>
  <body>
		<!-- navigation bar -->
	  <header class="header">
	  <a href="homepage.php" class="logo">UBStalking'-'</a>
	  <form action="" method="post">
	      <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" maxlength ="50"
	      autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" value="Go!"/>
	  </form>
	  <input class="menu-btn" type="checkbox" id="menu-btn" />
	  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	  <ul class="menu">
	    <li><a href="OfficeNavigation.php">Office Navigation</a></li>
			<li><a href="EventHandler.php">Event Handler</a></li>
	    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
	  </ul>
	</header>

<h2>
  <?php
  	if(isset($_POST['submit-search'])){
  		$search = mysqli_real_escape_string($con, $_POST['search']);
  		$sql = "SELECT * FROM info WHERE name LIKE '%$search%'";
    	$result = mysqli_query($con, $sql);
    	$queryResults = mysqli_num_rows($result);

    	if($queryResults >0){
    		while($row = mysqli_fetch_assoc($result)){
      		echo "<ul>
        	<li>".$row['name']."</li>
        	<li>".$row['office']."</li>
        	<li>".$row['hours']."</li>
        	<li>".$row['course']."</li>
      		</ul>";
    }

    	}else{
    		echo "There are no result matching your search!";
    	}
  	}

  ?>
</h2>

    </body>
</html>
