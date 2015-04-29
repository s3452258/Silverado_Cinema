<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="referrer" content="always">
<title>Contact Us</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/menu.css"/>
</head>
<body id = "contactPage">
<!-- Page -->
<div id="page" class="shell" style="width:1000px;">
  <!-- Header -->
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">Silverado<span>Cinema</span></a></h1> </div>

    <!-- Top Navigation -->
    <?php include_once('menu.php') ?>
    <!-- / Top Navigation -->
  </div>
  <!-- / Header -->
  <!-- Main -->
  <div id="main">
      <div id="contact">
        <div class="block">
          <div class="head">
            <h3> Contact Form </h3>
            </div>
            <div class="form">
              <br>
              <form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="POST">
                Email: <input type="text" name="email" required>
                <br> <br>
                Subject:
                <select name="subject">
                  <option value="general">General Enquiry</option>
                  <option value="group">Group and Corporate Bookings</option>
                  <option value="complaints">Suggestions &amp; Complaints</option>
                </select>
                <br><br>
                Message: 
                <br>
                <textarea name="message" rows="10" cols="80" placeholder="Enter Message Here" required ></textarea>
                <br>
                <br>
                <input type='checkbox' name='test-email' value='true'> Test Email
                <br> 
                <div class="submitButton">
                <input type="submit" value="Submit">
              </div>
              </form>
            </div>
            <div class="cl">&nbsp;</div>
          </div>
      </div>
  </div>
<!-- / Main -->

<!-- Footer -->
<?php include_once('footer.php'); ?>

<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>
