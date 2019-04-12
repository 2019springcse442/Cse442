<?php include 'database.php' ; ?>

<!DOCTYPE html>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="ScheduleMatching.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> UBStalking'-' </title>
</head><!---->
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
    <li><a href="OfficeNavigation.html">Office Navigation</a></li>
    <li><a href="#">Report Bugs</a></li>
    <li><a href="homepage.php">Home</a></li>
  </ul>
</header>
<div class="big-title">
<h1>Schedule Matching</h1>


</div>
</body>
</html>
