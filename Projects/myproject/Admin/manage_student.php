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
    <title>Manage Student</title>
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
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Student</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Manage Student</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Manage Student</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                    <?php 
                                        include_once "dbconfig.php";
                                        $sql = $db->query("SELECT * FROM students");
                                        $sn = 1;
                                    ?>

                                        <table id="datable_3" class="table table-neon text-default w-100 display">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Roll No</th>
                                                    <th>Student Name</th>
                                                    <th>Department</th>
                                                    <th>Class</th>
                                                    <th>Parents Name</th>
                                                    <th>Address</th>
                                                    <th>Gender</th>
                                                    <th>Date of Birth</th>
                                                    <th>Contact</th>
                                                    <th>Admission Date</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($row = $sql->fetch_assoc()){ ?>
                                                <tr>
                                                    <td><?php echo $sn ?></td>
                                                    <td><?php echo $row['roll_no'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['department'] ?></td>
                                                    <td><?php echo $row['class'] ?></td>
                                                    <td><?php echo $row['parents_name'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>
                                                    <td><?php echo $row['gender'] ?></td>
                                                    <td><?php echo $row['dob'] ?></td>
                                                    <td><?php echo $row['contact_no'] ?></td>
                                                    <td><?php echo $row['creationDate'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><a href="admin_student_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-info btn-rounded">Edit</a> | 
                                                    <a onclick="return confirm('Are you sure to delete?')" href="admin_student_delete.php?did=<?php echo $row['id'] ?>" class="btn btn-outline-danger btn-rounded">Delete</a></td>
                                                </tr>
                                            <?php 
                                            $sn++;
                                            } 
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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