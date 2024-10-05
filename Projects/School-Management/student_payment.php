<?php session_start();


include_once 'database.php';
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'Teacher') {
  # code...
  header('Location:./logout.php');
}
?>
<?php


//include_once 'database.php';

?>


<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exam</title>
  <link rel="icon" href="../img/favicon2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <?php include_once 'header.php'; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include_once 'sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Exam
          <small>Exam Details</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Exam</a></li>
          <li class="active">Details</li>
        </ol>
      </section>

      <!-- Main content -->


      <section class="content">

        <div class="row">
          <div class="col-xs-4">



            <div class="alert alert-success alert-dismissible" style="display: none;" id="truemsg">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
              New Exam Successfully added
            </div>






            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">New Exam</h3>
              </div>
              <!-- /.box-header -->

              <!-- form start -->
              <form role="form" method="POST">
                <div class="box-body">
                    
                  <div class="form-group">
                    <label>Student ID</label>
                    <select class="form-control" style="width: 100%;" name="sid">
                      <option>Select One</option>
                      <?php
                      $sql = "SELECT * FROM student";
                      $result = $conn->query($sql);
                      while ($row = $result->fetch_assoc()) {
                        ?>
                      <option value="<?php echo $row['sid'] ?>"><?php echo $row['sid'] ?>&nbsp;|&nbsp;<?php echo $row['fname'] ?>&nbsp;<?php echo $row['lname'] ?></option>
                       <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Month</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="month">
                      <option>Select One</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label> Fee </label>
                    <input type="text" name="fee" class="form-control" placeholder="Enter amount">
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Make Payment</button>
                </div>
              </form>

              <?php

              if (isset($_POST['submit'])) {
                extract($_POST);

                try {

                  $sql = "INSERT INTO payment(id, sid, month, fee) VALUES (NULL, '$sid', '$month', '$fee')";

                  if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'> var x = document.getElementById('truemsg');
x.style.display='block';</script>";
                  } else {
                  }
                } catch (Exception $e) {
                }
                # code...
              }
              ?>
            </div>
          </div>

          <div class="col-xs-8">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">All Payments</h3>
              </div>

              <!-- /.box-header -->
              <div class="box-body" id="app_print">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Student ID</th>
                      <th>Month</th>
                      <th>Fee</th>
                      <th>Payment Date</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    $sql = "SELECT * FROM payment";
                    $result = $conn->query($sql);
                    $sn = 1;
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr><td> " . $sn . " </td><td> " . $row["sid"] . " </td><td> " . $row["month"] . " </td><td> " . $row["fee"] . "</td><td>" . $row["creationDate"] . "</td></tr>";
                        $sn++;
                      }
                    }
                    ?>
                  </tbody>
                </table>
                <input type="submit" onclick="printDiv('app_print')" value="PRINT">
              </div>

              

              <!-- /.box-body -->
            </div>

          </div>
          <!-- /.box -->



        </div>

        <!--------------------------
        | Your Page Content Here |
        -------------------------->

      </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include_once 'footer.php'; ?>


    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- Select2 -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

  <!-- bootstrap color picker -->
  <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page script -->
  

  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>




  <script>
    $('.select2').select2()
    $('#datepicker').datepicker({
      autoclose: true
    });
    var r = document.getElementById("exam");
    r.className += "active";
    $('.timepicker').timepicker({
      showInputs: false
    })
  </script>

    <script>
        function printDiv(app_print){
            var printContents = document.getElementById(app_print).innerHTML;
            var originalContents =document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML =originalContents;
        }
    </script>



  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>