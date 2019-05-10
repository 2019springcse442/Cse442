<?php
	include 'database.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Professor's Profile</title>
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
			<li><a href="ScheduleMatching.php">Schedule Matching</a></li>
	    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
	  </ul>
	</header>


<h2>
  <?php
  	if(isset($_POST['submit-search'])){
  		$search = mysqli_real_escape_string($con, $_POST['search']);
  		$sql = "SELECT * FROM message WHERE name LIKE '%$search%'";
    	$result = mysqli_query($con, $sql);
    	$queryResults = mysqli_num_rows($result);

    	if($queryResults >0){
    		while($row = mysqli_fetch_assoc($result)){
      		echo "<ul>
        	<li>".$row['name']."</li>
        	<li>".$row['Office']."</li>
        	<li>".$row['Hours']."</li>
        	<li>".$row['Current course']."</li>
      		</ul>";
    }

    	}else{
    		echo "There are no result matching your search!";
    	}
  	}

  ?>
	<ul class="professorpic"> <!--map and schedule button-->
		<!-- here is the map navigation -->
		<li><a href="#">Map</a></li>
		<!-- here is the schedule navigation -->
		<li><a href="#">Schedule</a></li>
	</ul>
</h2>
<h1></h1>
<!-- here is the comment box -->
<commentbox>
	<input type='text' id='messageInput'  placeholder='Enter comments here...'>
	<button type="button" id='messageButton' onclick="savedata()">Post</button>
</commentbox>
<!-- here is the comment area -->
<h1></h1>
<h8>Students' comments</h8>
<h1></h1>
<textarea id="results" readonly></textarea>
    <script>
    var messagesRef = new Firebase('https://ubstalking-19cf2.firebaseio.com/');
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
