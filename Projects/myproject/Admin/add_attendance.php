<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['utype'])) {
    header("Location:../signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Add Attendance</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Data Table CSS -->
    <link href="vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <?php include "parts/top_navbar.php" ?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <?php include "parts/vertical_nav.php" ?>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Attendance</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Add Attendance</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Add Attendance</h5>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <!-- <h4 class="mt-0 header-title">Add Attendance</h4> -->
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                extract($_POST);
                                                include_once "dbconfig.php";


                                                $db->query("INSERT INTO attendance (id, name, roll_no, class, status, date) VALUES (NULL, '$name', '$roll_no', '$cls', '$status', '$date')");

                                                if ($db->affected_rows) {
                                                    echo "INSERTED";
                                                }
                                            }
                                            ?>

                                            <p class="sub-title"></p>


                                            <form class="form-inline" action="" method="post">

                                                <div class="form-group">
                                                    <label>Students Name: &nbsp;</label>
                                                    <?php
                                                    include_once "dbconfig.php";
                                                    $sql = $db->query("SELECT name FROM students");
                                                    ?>
                                                    <select name="name" id="" class="form-control">
                                                        <option value="">Select One</option>
                                                        <?php while ($row = $sql->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>&nbsp;

                                                <div class="form-group">
                                                    <label>Roll No: &nbsp;</label>
                                                    <?php
                                                    include_once "dbconfig.php";
                                                    $sql = $db->query("SELECT roll_no FROM students");
                                                    ?>
                                                    <select name="roll_no" id="" class="form-control">
                                                        <option value="">Select One</option>
                                                        <?php while ($row = $sql->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['roll_no'] ?>"><?php echo $row['roll_no'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>&nbsp;

                                                <div class="form-group">
                                                    <label>Class: &nbsp;</label>
                                                    <?php
                                                    include_once "dbconfig.php";
                                                    $sql = $db->query("SELECT class FROM class");
                                                    ?>
                                                    <select name="cls" id="" class="form-control">
                                                        <option value="">Select One</option>
                                                        <?php while ($row = $sql->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['class'] ?>"><?php echo $row['class'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>&nbsp;

                                                <div class="form-group">
                                                    <label>Status: &nbsp;</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="">Select One</option>
                                                            <option value="1">Present</option>
                                                            <option value="2">Absent</option>
                                                    </select>
                                                </div>&nbsp;

                                                <div class="form-group">
                                                    <label>Date: &nbsp;</label>
                                                    <input type="date" class="form-control" required name="date" />
                                                </div>&nbsp;


                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                                            Add Attendance
                                                        </button>
                                                        <button type="reset" name="cancel" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

            <!-- Footer -->
            <?php include "parts/footer.php" ?>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Data Table JavaScript -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dist/js/dataTables-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>

</html>