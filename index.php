<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Penilaian kontraktor</title>
  <!-- Bootstrap core CSS-->
  <link rel="icon" type="image/png" href="http://www.serpongjaya.com/website/images/logo/logo-jaya-property.png">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Sistem Penilaian Kontraktor</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">About Us</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="ranking.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Ranking Kontraktor</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Login</a>
        </li>
      </ul>
    </div>

  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div class="row intro">
      <?php
  include 'conf/conf.php'; 
  $lihatmember = mysql_query("SELECT * FROM `content` WHERE id_content = 3");
   $member = mysql_fetch_array($lihatmember);{?>
        <div class="col-12">
          <h1><?php echo $member["head_title"] ?></h1>
          <p><?php  echo $member["description"] ?></p>
        </div>
        <?php } ?>
        <?php
  include 'conf/conf.php'; 
  $lihatmember = mysql_query("SELECT * FROM `content` WHERE id_content = 1");
   $member = mysql_fetch_array($lihatmember);{?>
        <div class="col-6">
          <h1><?php echo $member["head_title"] ?></h1>
          <p><?php  echo $member["description"] ?></p>
        </div>
        <?php } ?>
        <?php
  include 'conf/conf.php'; 
  $lihatmember = mysql_query("SELECT * FROM `content` WHERE id_content = 2");
   $member = mysql_fetch_array($lihatmember);{?>
        <div class="col-6">
          <h1><?php echo $member["head_title"] ?></h1>
          <p><?php  echo $member["description"] ?></p>
        </div>
        <?php } ?>

      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © PT. Jaya Real Property, Tbk 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Welcome To Sistem Penilaian</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Login</div>
              <div class="card-body">
                <form action="log.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User ID</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="userid" aria-describedby="emailHelp" placeholder="Enter User ID">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                  </div>
                  <input type="submit" name="login" class="btn-primary" value="Login" />
                </form>
                <div class="text-center">
                  <a class="d-block small mt-3" href="register.html">Register an Account</a>
                  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
