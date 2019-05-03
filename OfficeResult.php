<?php include 'database.php' ; ?>

<!DOCTYPE html>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="OfficeResult.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> UBStalking'-' </title>
</head><!---->
<body>

  <!-- navigation bar -->
  <header class="header">
  <a href="homepage.php" class="logo">UBStalking'-'</a>
    <form action="ProfessorProfileTemplate.php" method="post">
      <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" maxlength ="50"
      autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" value="Go!"/>
  </form>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="OfficeNavigation.php">Office Navigation</a></li>
    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
    <li><a href="homepage.php">Home</a></li>
  </ul>
</header>
<div class="big-title">
<h1>Search Result...</h1>
</div>
<div class="result">
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
  <div>
