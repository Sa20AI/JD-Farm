<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:dashboard.php");
}
?>

<?php
if (!isset($_GET["rid"])) {

    header("location:index.php");
} else {
    $curdate = date("Y/m/d");
    include('db.php');
    $id = $_GET['rid'];


    $sql = "Select * from roombook where id = '$id'";
    $re = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($re)) {
        $title = $row['Title'];
        $fname = $row['FName'];
        $lname = $row['LName'];
        $email = $row['Email'];
        $Phone = $row['Phone'];
        $nroom = $row['NRoom'];
        $cin = $row['cin'];
        $cout = $row['cout'];
        $sta = $row['stat'];
        $days = $row['nodays'];



    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    <?php echo $_SESSION["user"]; ?>
                </a>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->




        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small> <?php echo $curdate; ?> </small>
                        </h1>
                    </div>


                    <div class="col-md-8 col-sm-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Booking Conformation
                            </div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>

                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th>
                                                <?php echo $title . $fname . $lname; ?>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>

                                        </tr>
                                        <tr>
                                            <th>Phone No </th>
                                            <th>
                                                <?php echo $Phone; ?>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>No Of the Room </th>
                                            <th>
                                                <?php echo $nroom; ?>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>Check-in Date </th>
                                            <th><?php echo $cin; ?></th>

                                        </tr>
                                        <tr>
                                            <th>Check-out Date</th>
                                            <th>
                                                <?php echo $cout; ?>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>No of days</th>
                                            <th><?php echo $days; ?></th>

                                        </tr>
                                        <tr>
                                            <th>Status Level</th>
                                            <th>
                                                <?php echo $sta; ?>
                                            </th>

                                        </tr>





                                    </table>
                                </div>



                            </div>
                            <div class="panel-footer">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Select the Confirmation</label>
                                        <select name="conf" class="form-control">
                                            <option value selected> </option>
                                            <option value="Confirm">Confirm</option>


                                        </select>
                                    </div>
                                    <input type="submit" name="co" value="Confirm" class="btn btn-success">

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. ROW  -->




        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
if (isset($_POST['co'])) {
    $st = $_POST['conf'];



    if ($st == "Confirm") {
        $urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";

        if ($f1 == "NO") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
        } else if ($f2 == "NO") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";

        } else if ($f3 == "NO") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
        } else if ($f4 == "NO") {
            echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
        } else if (mysqli_query($con, $urb)) {
            //echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
            //echo "<script type='text/javascript'> window.location='home.php'</script>"

            $ttot = $days * $nroom;
            $fintot = $ttot + $btot;

            // echo "<script type='text/javascript'> alert('$count_date')</script>";
            $psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`,`nroom`, `cin`, `cout`,`ttot`,`btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$nroom','$cin','$cout','$ttot','$btot','$fintot','$days')";

            if (mysqli_query($con, $psql)) {
                $notfree = "NotFree";
                if (mysqli_query($con, $rpsql)) {
                    echo "<script type='text/javascript'> alert('Booking Confirm')</script>";
                    echo "<script type='text/javascript'> window.location='roombook.php'</script>";
                }


            }

        }


    }

}




?>