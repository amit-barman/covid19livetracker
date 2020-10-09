<!-- covid-19 live tracker -->
<!-- created by Amit Barman -->
<!-- http://www.github.com/amit-barman -->

<?php

session_start();

?>

<html lang="en">
  <head>
    <?php include "assets/link.php"; ?>
    <title>Covid-19 live data</title>
  </head>
  <body>

<!-- php code for login -->
<?php

  include "config.php";
  
  if(isset($_POST['submit'])) {
    
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    $user_search = "select * from admin where username='$user' && password='$password'";
    
    $query = mysqli_query($con, $user_search);
    
    $num = mysqli_num_rows($query);
    
    if($num == 1) {
      $_SESSION['username'] = $user;
      
      header('location:home.php');

    } else {
      
      header('location:index.php');
    }
  }

  ?>

<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
              <div class="heading">
                <center><h1>Admin Login</h1></center>
               </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter Password" name="password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>

</body>
</html>