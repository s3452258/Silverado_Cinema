<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="referrer" content="always">
<title>Weekly Schedule</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/menu.css"/>
</head>
<body id ="priceinfoPage">
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">Silverado<span>Cinema</span></a></h1> </div>

    <!-- Top Navigation -->
    <?php include('menu.php') ?>
    <!-- / Top Navigation -->
  </div>
  <!-- / Header -->

  <!-- Main -->
  <div id="main">
      <!-- Content -->
      <div id="contact">
        <div class="block">
          <div class="head">
              <h3>Price & Schedule Information</h3>
          </div>
		 
          <table border="1" style="width:100%">
            <tr>
              <td> Price List </td>
              <td> Mon - Tue (All Day)<br>
				   Mon - Fri (1pm only)
			  </td>
              <td> Wed - Fri (not 1pm)<br>
				   Sat - Sun (All Day)
			  </td>
            </tr>
            <tr>
              <td> 
                Standard-Full<br>
				Standard-Conc<br>
				Standard-Child<br>
				<br>
				FirstClass-Adult<br>
				FirstClass-Child<br>
				Beanbag*
              </td>

              <td> 
                $12<br>
				$10<br>
				$8<br>
				<br>
				$25<br>
				$20<br>
				$20
              </td>

              <td> 
                $18<br>
				$15<br>
				$12<br>
				<br>
				$30<br>
				$25<br>
				$30<br>
              </td>
	
			  
              </tr>
			  
              </table>
			  <p>* Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. One price fits all!</p>
		
        </div>
      </div>
    <!-- / Content -->
    <div class="cl">&nbsp;</div>
  </div>
<!-- / Main -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>