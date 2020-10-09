<!-- covid-19 live tracker -->
<!-- created by Amit Barman -->
<!-- http://www.github.com/amit-barman -->

<?php

session_start();

if(!isset($_SESSION['username'])) {
	header('location:index.php');
}

?>

  <head>
    <?php include "assets/link.php"; ?>
    <title>Covid-19 live data</title>
  </head>


  <body>
  	<container class="">
<div class="main container-fluid">
<html lang="en">
<h2 class="heading">welcome <?php echo $_SESSION['username']; ?></h2>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>

    <?php

  include "config.php";

  $selectquery = "select * from contact";

  $query = mysqli_query($con, $selectquery);

  $nums = mysqli_num_rows($query);

  while($res = mysqli_fetch_array($query)) {
    ?>

    <tr>
      <td><?php echo $res['name'];?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['phone'];?></td>
      <td><?php echo $res['message'];?></td>
    </tr>

    <?php
  }

  ?>

  </tbody>
</table>

<div class="logout">
<form method="" action="logout.php">
<input type="submit" class="btn btn-success" value="Logout">
</form>

<form method="" action="reset.php">
<input type="submit" class="btn btn-success" value="Update admin password">
</form>

<div>

</div>

</container>

  </body>
  </html>