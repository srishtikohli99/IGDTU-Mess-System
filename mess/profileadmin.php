<!DOCTYPE html>
<?php
    session_start();
    if($_SESSION['admin_username']==null)
    {
        header("Location: ../mess/loginadmin.php");
    }
    $connection = mysqli_connect('localhost','root','','users');
    $query = "SELECT * FROM ADMINDASH";
    $result =  mysqli_query($connection, $query);
    
?>
<html lang="en">
    

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
  <!-- Custom styles for this template-->
  <link href="sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
        <?php  
            while($row=mysqli_fetch_assoc($result))
            {
                $item = $row['item'];
                $link = $row['link'];
                echo "<li class='nav-item active'>
                <a class='nav-link' href='$link'>
                <i class='fas fa-fw fa-tachometer-alt'></i>
                <span>$item</span></a>
                    </li>";
            }
?>
      <!-- Divider -->
      </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Topbar Search -->
         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow mx-1">
             

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class ='mr-2 d-none d-lg-inline text-gray-600 small'>  <?php echo $_SESSION['admin_username']; ?> </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <?php 
              $user = $_SESSION['admin_username'];
              $query = "SELECT first_name from loginadmin where username = '$user'";
              $result = mysqli_query($connection,$query);
              $row = mysqli_fetch_assoc($result);
              $first_name=$row['first_name'];
           echo "<h1 class='h3 mb-0 text-gray-800'>How are you doing today, $first_name?</h1>";
                ?>
              <form  method="post" action="#">
              <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" name="logout" value="Logout">
              </form><?php
              if(isset($_POST["logout"]))
              { $_SESSION["admin_username"]= null;
                 header("Location: ../mess/loginadmin.php");
              }?></div>
<h2>Your Details:</h2>
            <br>
            <br>
            <?php 
            
            $user = $_SESSION['admin_username'];
              $query = "SELECT * from loginadmin where username = '$user'";
              $result = mysqli_query($connection,$query);
              $row = mysqli_fetch_assoc($result);
              $first_name=$row['first_name'];
             $last_name=$row['last_name'];
             $username=$row['username'];
             $email=$row['email'];
            $date=$row['date'];
            
            echo
"<h4>First Name: $first_name </h4>
 <br>
<h4>Last Name:  $last_name </h4>
 <br>
<h4>Username: $username </h4>
 <br>
<h4>E-mail: $email </h4>
 <br>
<h4>Member Since: $date </h4>
 <br>";?>

          
          </div>
          
      <!-- End of Footer -->
          

    </div>
    <!-- End of Content Wrapper -->

  </div>
      </div>
  <!-- End of Page Wrapper -->

  <!-- Logout Modal-->
  <!-- Bootstrap core JavaScript-->
    
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
