<?php include 'database.php' ; ?>

<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> UBStalking'-' </title>
</head><!---->
<body>

  <!-- navigation bar -->
  <header class="header">
  <a href="" class="logo">UBStalking'-'</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a lang="en" href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
    <li><a href="OfficeNavigation.html">Office Navigation</a></li>
    <li><a href="ScheduleMatching.php">Schedule Matching</a></li>
  </ul>
</header>
   <!-- big logo -->
   <div class="center-logo">
     <h1 href="homepage.php" class="center-logo-text">UBStalking'-'</h1>
     </div>

  <!-- search bar -->
  <div>
   <form action="ProfessorProfileTemplate.php" method="post">
     <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = "search"  maxlength ="50"
     autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" name = "submit-search" value="Go!"/>
   </form>
   </div>


</body>
</html>
