<!-- covid-19 live tracker -->
<!-- created by Amit Barman -->
<!-- http://www.github.com/amit-barman -->

<?php

session_start();

if(!isset($_SESSION['username'])) {
  header('location:index.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <?php include "assets/link.php"; ?>
    <title>Forget password</title>
  </head>
  <body>

<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                  <h3><img class="lock-icon" src="assets/891399.png"></h3>

                    <div class="card-body">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off" method="POST">

                            <div class="form-group input-group">
                              <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                           </div>
                                <input type="password" class="form-control" placeholder="Enter New Password" name="password">
                            </div>

                            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Reset password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- php code for update password -->
<?php

include "config.php";

if(isset($_POST['submit'])) {
 $password = $_POST['password'];

  $update_query = $con->prepare("UPDATE admin SET password =? WHERE id=1");
  $update_query->bind_param("s", $password);

  $res = $update_query->execute();

  if($res) {
    ?>
    <script>
      alert("Password update successfully");
      // replace location to logout.php
      location.replace("logout.php");
    </script>

    <?php

  } else {
    ?>

    <script>
      alert("Unable to update");
    </script>

    <?php
  }
}

?>
  </body>
</html>