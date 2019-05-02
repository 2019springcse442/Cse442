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
    <li><a href="OfficeNavigation.php">Office Navigation</a></li>
    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
    <li><a href="homepage.php">Home</a></li>
  </ul>
</header>
<div class="big-title">
<h1>Schedule Matching</h1>
</div>
<form action="" method="post" class="oh"><span class="oh">Office Hour:</span>
    <input type = "text" id = "search-officehour" placeholder = "Search for your professors!" value ="" maxlength ="50"
    autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-oh-btn" value="Go!"/>
</form>

<!-- table part below -->
<table class= "schedule" cellspacing="0">
  <tr>
    <!-- table row -->

   <td></td>
  <td>Monday</td>
  <td>Tuesday</td>
  <td>Wednesday</td>
  <td>Thursday</td>
  <td>Friday</td>
  <td>Saturday</td>
  <td>Sunday</td>


  </tr>

  <tr>
    <td>8:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>8:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
    <tr>
    <td>9:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
    <tr>
    <td>9:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>10:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>10:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>11:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>11:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>12:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>13:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>13:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>14:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>14:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>15:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>15:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>16:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>16:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>17:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>17:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>18:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>18:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>19:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>19:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>20:00</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
  <tr>
    <td>20:30</td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
    <td> <form><input type="checkbox" id="timeslot"/><label for="timeslot"></label></form></td>
  </tr>
</table>


<div class = "symbolandresult">
  <h2>Result </h2>
  <div>Office Hour:<span class = "officetime"><!--need a function here--></span></div>
  <div class="available">Available time<span class="available"></span></div>
  <div class="unavailable">Unavailable time<span class="unavailable"></span></div>
</div>


</body>
</html>
