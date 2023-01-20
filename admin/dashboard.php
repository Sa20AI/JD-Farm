<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Dashboard</title>
  <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

  <?php

  require('inc/header.php');

  $is_shutdown = mysqli_fetch_assoc(mysqli_query($con, "SELECT `shutdown` FROM `settings`"));

  ?>

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">

        <div class="d-flex align-items-center justify-content-between mb-4">
          <h3>DASHBOARD</h3>
          <?php
          if ($is_shutdown['shutdown']) {
            echo <<<data
                <h6 class="badge bg-danger py-2 px-3 rounded">Shutdown Mode is Active!</h6>
              data;
          }
          ?>
        </div>

        <div id="page-wrapper">
          <div id="page-inner">


            <div class="row">
              <div class="col-md-12">
                <h1 class="page-header">
                  Status <small>Room Booking </small>
                </h1>
              </div>
            </div>
            <!-- /. ROW  -->
            <?php
            include('db.php');
            $sql = "select * from roombook";
            $re = mysqli_query($con, $sql);
            $c = 0;
            while ($row = mysqli_fetch_array($re)) {
              $new = $row['stat'];
              $cin = $row['cin'];
              $id = $row['id'];
              if ($new == "Not Confirm") {
                $c = $c + 1;
              }

            }
            ?>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">

                  </div>
                  <div class="panel-body">
                    <div class="panel-group" id="accordion">

                      <div class="panel panel-primary" style="color:black;">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              <button class="btn btn-default" type="button">
                                New Room Bookings <span class="badge"><?php echo $c; ?></span>
                              </button>
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                          <div class="panel-body">
                            <div class="panel panel-default">

                              <div class="panel-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Status</th>
                                        <th>More</th>

                                      </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                        $tsql = "select * from roombook";
                                        $tre = mysqli_query($con, $tsql);
                                        while ($trow = mysqli_fetch_array($tre)) {
                                          $co = $trow['stat'];
                                          if ($co == "Not Confirm") {
                                            echo "<tr>
                                                  <th>" . $trow['id'] . "</th>
                                                  <th>" . $trow['FName'] . " " . $trow['LName'] . "</th>
                                                  <th>" . $trow['Email'] . "</th>
                                                  <th>" . $trow['cin'] . "</th>
                                                  <th>" . $trow['cout'] . "</th>
                                                  <th>" . $trow['stat'] . "</th>
                                                <th><a href='roombook.php?rid=" . $trow['id'] . " ' class='btn btn-primary'>Action</a></th>
                                              </tr>";
                                          }
                                       }
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                            <!-- End  Basic Table  -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                      $rsql = "SELECT * FROM `roombook`";
                      $rre = mysqli_query($con, $rsql);
                      $r = 0;
                      while ($row = mysqli_fetch_array($rre)) {
                        $br = $row['stat'];
                        if ($br == "Confirm") {
                          $r = $r + 1;
                        }
                      }

                    ?>

                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                            <button class="btn btn-primary" type="button">
                              Booked Rooms <span class="badge"><?php echo $r; ?></span>
                            </button>

                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                          <?php
                          $msql = "SELECT * FROM `roombook`";
                          $mre = mysqli_query($con, $msql);

                          while ($mrow = mysqli_fetch_array($mre)) {
                            $br = $mrow['stat'];
                            if ($br == "Confirm") {
                              $fid = $mrow['id'];

                              echo "<div class='col-md-3 col-sm-12 col-xs-12'>
                                <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                  <div class='panel-body'>
                                    <i class='fa fa-users fa-5x'></i>
                                    <h3>" . $mrow['FName'] . "</h3>
                                  </div>
                                  <div class='panel-footer back-footer-blue'>
                                      <a href=show.php?sid=" . $fid . "><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                                    Show
                                    </button></a>
                                        " . $mrow['NRoom'] . "
                                      </div>
                                  </div>	
                              </div>";

                            }
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /. ROW  -->

      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

  </div>
  </div>


  <?php require('inc/scripts.php'); ?>
  <script src="scripts/dashboard.js"></script>
</body>

</html>