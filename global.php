<!-- covid-19 live tracker -->
<!-- created by Amit Barman -->
<!-- http://www.github.com/amit-barman -->

<html lang="en">
  <head>
    <?php include "links/link.php"; ?>
    <title>Covid-19 live data</title>
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #33AFFF">
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
        <a class="nav-link font-weight-bold" href="">Global</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="india.php">India</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="contact-us.php" tabindex="-1" aria-disabled="true">Contact us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="heading">
<h2>C<img class="logo" src="images/coronavirus.png">vid-19 live data of all country</h2>
</div>

<div class="container-fluid">
  <center><img src="images/header.jpg" class="img-fluid"></center>
</div>

<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$covid_data = json_decode($data, true);

$total_count = count($covid_data['Countries']);

$i = 0;
while ($i < $total_count) {

?>
<div class ="table-responsive container-fluid">
<table class="table table-bordered">
  <thead>
  <tr>
	<th class="" colspan="6">Country</th>
  </tr>
  <tr>
	<th class="" colspan="6"><?php echo $covid_data['Countries'][$i]['Country']; ?></th>
  </tr>
    <tr>
      
      <th style="color: #fff; background : #F93309;">New confirmed</th>
      <th style="color: #fff; background : #F7E107;">Total confirmed</th>
      <th style="color: #fff; background : #49F30E;">New deaths</th>
	  <th style="color: #fff; background : #0EF3BB;">Total deaths</th>
	  <th style="color: #fff; background : #320FF2;">New recoverrd</th>
	  <th style="color: #fff; background : #F010B2;" scope="col">Total recoverrd</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td style="background : #F99A86;"><?php echo $covid_data['Countries'][$i]['NewConfirmed']; ?></td>
      <td style="background : #E5D856;"><?php echo $covid_data['Countries'][$i]['TotalConfirmed']; ?></td>
	  <td style="background : #BEF163;"><?php echo $covid_data['Countries'][$i]['NewDeaths']; ?></td>
	  <td style="background : #AAEADB;"><?php echo $covid_data['Countries'][$i]['TotalDeaths']; ?></td>
	  <td style="background : #8F7FE9;"><?php echo $covid_data['Countries'][$i]['NewRecovered']; ?></td>
	  <td style="background : #D67FBE;"><?php echo $covid_data['Countries'][$i]['TotalRecovered']; ?></td>
    </tr>
	<?php
	$i++;
	?>
  </tbody>
</table>
</div>
<?php } ?>

	<footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="footer-paragraph">Covid-19 live tracer by, <a href="">Amit Barman</a>.</p>
        </div>
    </footer>

</body>
</html>