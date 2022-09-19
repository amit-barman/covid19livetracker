<!-- covid-19 live tracker -->
<!-- created by Amit Barman -->
<!-- http://www.github.com/amit-barman -->

<!doctype html>
<html lang="en">
  <head>
	<?php include "links/link.php";?>
	<link rel="stylesheet" href="css/contact.css">
    <title>Covid-19 live data</title>
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-info" style="background-color: #33AFFF">
  <a class="navbar-brand font-weight-bold" href="#">Covid-19 <img class="logo" src="images/coronavirus.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="global.php">Global</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="india.php">India</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="" tabindex="-1" aria-disabled="true">Contact us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container contact-form">
            <div class="contact-image">
                <img src="images/envelope-icon.jpg" alt="rocket_contact"/>
            </div>
            <form method="POST" action="">
                <h3>Drop a Message for Us</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="Email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="Phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Submit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="Msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

<!-- php data post block -->
<?php

include "config.php";

if(isset($_POST['Submit'])) {
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $phone = $_POST['Phone'];
  $message = $_POST['Msg'];

  $insert = $con->prepare("INSERT INTO contact(name, email, phone, message) VALUES(?, ?, ?, ?)");
  $insert->bind_param("ssss", $name, $email, $phone, $message);

  $res =$insert->execute();

  if($res) {
    ?>
    <script>
      alert("Thankyou for contact us");
      location.replace("index.php");
    </script>

    <?php

  } else {
    ?>

    <script>
      alert("Unable to contact try again later");
    </script>

    <?php
  }
}
?>

<footer class="mastfoot mt-auto">
        <div class="inner">
          <p style="color: #fff;" class="footer-paragraph">Covid-19 live tracer by, <a href="">Amit Barman</a>.</p>
        </div>
    </footer>
	
  </body>
</html>