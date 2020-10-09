<!-- covid-19 live tracker -->
<!-- created by Amit Barman -->
<!-- http://www.github.com/amit-barman -->

<html lang="en">
  <head>
    <?php include "links/link.php"; ?>
    <title>Covid-19 live data</title>
  </head>
  <body>
    
<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #33AFFF">
  <a class="navbar-brand font-weight-bold" href="#">Covid-19 <img class="logo" src="images/coronavirus.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="global.php">Global</a>
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

<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home-banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>C<img class="logo" src="images/coronavirus.png">vid-19 livd gobal data</h3>
        <p>Stay home stay safe from coronavirus and take care of family.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/photo-1584634731339-252c581abfc5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>C<img class="logo" src="images/coronavirus.png">vid-19 livd gobal data</h3>
        <p>Stay home stay safe be a worier fight against coronavirus.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/brian-mcgowan-gkpszAElZf8-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>C<img class="logo" src="images/coronavirus.png">vid-19 livd gobal data</h3>
        <p>Wear mask wash hands maintain social distancing is protect you from coronavirus.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$covid_data = json_decode($data, true);

?>

<!-- global data -->
<section class="covid_update">
<div>
<div class="mb-3">
<h3 class="text-uppercase text-center">Covid-19 upate</h3>
</div>

<div class="d-flex justify-content-around align-item-center">
<div class="mb-3">
<h1 class="count"><?php echo $covid_data['Global']['NewConfirmed']; ?></h1>
<p>New Confirmed</p>
</div>

<div class="mb-3">
<h1 class="count"><?php echo $covid_data['Global']['TotalConfirmed']; ?></h1>
<p>Total Confirmed</p>
</div>

<div class="mb-3">
<h1 class="count"><?php echo $covid_data['Global']['TotalDeaths']; ?></h1>
<p>Total Deaths</p>
</div>

<div class="mb-3">
<h1 class="count"><?php echo $covid_data['Global']['TotalRecovered']; ?></h1>
<p>Total recoverrd</p>
</div>
</div>
</div>

<!-- ***** about section **** -->
<div class="container-fluid sub_selection pt-5 pb-5" id="aboutid">
<div class="selection_header text-center mb-5 mt-4">
<h1>About COVID-19</h1>
</div>
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5">
  <img src="images/coronavirus.jpg" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-12">
  <h2>About corrona virous</h2>
  <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
  <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.Although for most people COVID-19 causes only mild illness, it can make some people very ill. More rarely, the disease can be fatal. Older people, and those with pre- existing medical conditions (such as high blood pressure, heart problems or diabetes) appear to be more vulnerable.</p>
</div>
</div>
</div>

<!-- somptoms -->
<div class="container-fluid sub_selection pt-5 pb-5" id="aboutid">
<div class="row pt-5">
<div class="col-lg-6 col-md-6 col-12 ml-5">
  <h2>Simptoms of virous</h2>
  <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
  <p>Most common symptoms:
  fever,
dry cough,
tiredness.
Less common symptoms:
aches and pains,
sore throat,
diarrhoea,
conjunctivitis,
headache,
loss of taste or smell,
a rash on skin, or discolouration of fingers or toes.
Serious symptoms:
difficulty breathing or shortness of breath,
chest pain or pressure,
loss of speech or movement.Seek immediate medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.
People with mild symptoms who are otherwise healthy should manage their symptoms at home.
On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</p>
</div>
<div class="col-lg-5 col-md-6 col-12">
  <img src="images/Symptoms.0.jpg" class="img-fluid">
</div>
</div>
</div>

<!-- pruventions -->
<div class="container-fluid sub_selection pt-5 pb-5" id="aboutid">
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5">
  <img src="images/stop-covid.jpg" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-12">
  <h2>How to privent corrona virous</h2>
    <p>To prevent the spread of COVID-19:
Clean your hands often. Use soap and water, or an alcohol-based hand rub.
Maintain a safe distance from anyone who is coughing or sneezing.
Wear a mask when physical distancing is not possible.
Don’t touch your eyes, nose or mouth.
Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.
Stay home if you feel unwell.
If you have a fever, cough and difficulty breathing, seek medical attention.
Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.
Masks
Masks can help prevent the spread of the virus from the person wearing the mask to others. Masks alone do not protect against COVID-19, and should be combined with physical distancing and hand hygiene. Follow the advice provided by your local health authority.
</div>
</div>
</div>
</section>

<!-- links -->
<div class="container-fluid covid_links pt-5 pb-5" id="aboutid">
<div class="selection_header text-center mb-5 mt-4">
<h1>Other important links</h1>
</div>
<div class="container">
<div class="row pt-5">
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/who.jpg" class="img-fluid">
</div>
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/hmind.jpg" class="img-fluid">
</div>
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/COVID19_RESPONSE.jpg" class="img-fluid">
</div>
<div class="container">
<div class="row pt-5">
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/img.jpeg" class="img-fluid">
</div>
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/stop-corona.jpg" class="img-fluid">
</div>
<div class="col-lg-4 col-md-4 col-12">
  <img src="images/covid-19.jpg" class="img-fluid">
</div>

</div>
</div>
</div>
</div>
</div>

<!-- footer -->
	<footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="footer-paragraph">Covid-19 live tracer by, <a href="">Amit Barman</a>.</p>
        </div>
    </footer>

</body>
</html>