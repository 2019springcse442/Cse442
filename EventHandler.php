<?php include 'database.php' ; ?>

<!DOCTYPE html>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
    <link rel="stylesheet" href="EventHandler.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> UBStalking'-' </title>
</head><!---->
<body>

  <!-- navigation bar -->
  <header class="header">
  <a href="homepage.php" class="logo">UBStalking'-'</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="OfficeNavigation.php">Office Navigation</a></li>
    <li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
    <li><a hred="homepage.php">Home</a></li>
  </ul>
</header>
<!-- Search Bar -->
<div>
 <form action="Result.php" method="post">
   <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = "search"  maxlength ="50"
   autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" name = "submit-search" value="Go!"/>
 </form>
 </div>

 <!-- page title -->
<div class="big-title">
<h1>Event Handler</h1>
</div>

<div class="event-table">
<!-- table part below -->
<table class= "schedule" cellspacing="0">
  <tr>
    <!-- table row -->
   <td></td>







  <td>   <!-- 1 -->
  <script>
  var currentDate = new Date();
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);

  </script></td>

  <td><!-- 2 -->
  <script>
  var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);
  </script></td>

  <td><!-- 3 -->
  <script>
  var currentDate = new Date(new Date(new Date().getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000);
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);
  </script></td>
  <td><!-- 4 -->
  <script>
  var currentDate = new Date(new Date(new Date(new Date().getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000);
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);
  </script></td>

  <td><!-- 5 -->
  <script>
  var currentDate = new Date(new Date(new Date(new Date(new Date().getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000);
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);
  </script></td>

  <td><!-- 6 -->
  <script>
  var currentDate = new Date(new Date(new Date(new Date(new Date(new Date().getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000);
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);
  </script>
</td>

  <td><!-- 7 -->
  <script>
  var currentDate = new Date(new Date(new Date(new Date(new Date(new Date(new Date().getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000).getTime() + 24 * 60 * 60 * 1000);
  var weekday = new Array(7);
   weekday[0] = "Sunday";
   weekday[1] = "Monday";
   weekday[2] = "Tuesday";
   weekday[3] = "Wednesday";
   weekday[4] = "Thursday";
   weekday[5] = "Friday";
   weekday[6] = "Saturday";
   var days = weekday[currentDate.getDay()];
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write(days + "<br>" + month + "/"+day+ "/"  + year);
  </script>
</td>
  </tr>

  <tr>
    <td>8:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>

  </tr>

    <tr>
    <td>9:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td><div class="tooltip"><a target=_blank href="http://www.buffalo.edu/commencement/ceremonies/degree-conferral-ceremonies/mgt/mgt-undergraduate.html"
      >SOM Undergraduate<br>Commencement Ceremony</a>
  <div class="tooltiptext">Location: Alumni Arena</div>
</div></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>10:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td><div class="tooltip"><a target=_blank href="https://www.sciencebuff.org/event/spacefest/?fbclid=IwAR2Q9a2VKLHz-MIOQLGkrOtgVRDrIBhWEvrBjncYGT2uV-fcVngVdAu26zc"
      >SPACEFEST</a>
  <div class="tooltiptext"><img src="https://pbs.twimg.com/profile_images/1017703181785104385/MNlVihmH_400x400.jpg">Location: Buffalo Museum of Science</div>
</div></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>11:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>12:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>13:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <div class="tooltip"><a target=_blank href="http://www.buffalo.edu/commencement/ceremonies/degree-conferral-ceremonies/seas/seas-graduate.html"
      >SEAS Graduate<br>Commencement Ceremony</a>
  <div class="tooltiptext">Location: Alumni Arena</div>
</div></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
</tr>

  <tr>
    <td>14:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <div class="tooltip"><a target=_blank href="http://www.buffalo.edu/commencement/ceremonies/degree-conferral-ceremonies/seas/seas-undergraduate.html"
      >SEAS Undergraduate<br>Commencement Ceremony</a>
  <div class="tooltiptext">Location: Alumni Arena</div>
</div></td><form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>15:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <div class="tooltip"><a target=_blank href="http://www.buffalo.edu/commencement/ceremonies/degree-conferral-ceremonies/cas/cas-undergraduate2.html"
      >CAS Undergraduate<br>Commencement Ceremony</a>
  <div class="tooltiptext">

    Location: Alumni Arena</div>
</div></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>16:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
</tr>

  <tr>
    <td>17:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>18:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>19:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>

  <tr>
    <td>20:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>
  <tr>
    <td>21:00</td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <form></form></td>
    <td> <div class="tooltip"><a target=_blank href="https://www.youtube.com/watch?v=ZeqpA760TeA"
      >Last Day of School!</a>
  <div class="tooltiptext"><img src="https://media.giphy.com/media/XB6pGqvOfJqY8/200.gif">See you in Fall<br>OR<br>Hopefully you graduated</div>
</div></td>
    <td> <form></form></td>
    <td> <form></form></td>
  </tr>
</table>
</div>

</body>
</html>
