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
    <title>Add Staff</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Add Staff</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Add Staff</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">

                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Add Staff</h5>
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <div class="card">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Staff Entry Form</h4>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                extract($_POST);

                                                include_once "dbconfig.php";

                                                $photo_name = $_FILES['photo']['name'];
                                                $photo_tname = $_FILES['photo']['tmp_name'];
                                                $path = "image/staff/";
                                                $url = $path . $photo_name;

                                                if (move_uploaded_file($photo_tname, $path . $photo_name)) {
                                                    $db->query("INSERT INTO staff(id, name, sector, photo, contact_no, shift, email, password) VALUES (NULL, '$name', '$sector', '$photo_name', '$contact', '$shift', '$email', '$pass')");

                                                    if ($db->affected_rows) {
                                                        echo "INSERTED";
                                                    }
                                                }
                                            }
                                            ?>

                                            <p class="sub-title"></p>

                                            <form class="" action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Sector</label>
                                                    <?php
                                                    include_once "dbconfig.php";
                                                    $sql = $db->query("SELECT sector FROM sector");
                                                    ?>
                                                    <select name="sector" id="" class="form-control">
                                                        <option value="">Select One</option>
                                                    <?php while($row = $sql->fetch_assoc()){ ?>
                                                        <option value="<?php echo $row['sector'] ?>"><?php echo $row['sector'] ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Staff Name</label>
                                                    <input type="text" class="form-control" required placeholder="Enter Name" name="name" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Photo</label>
                                                    <input type="file" class="form-control" name="photo" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Shift</label>
                                                    <input type="text" class="form-control" required placeholder="Enter Shift" name="shift" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" required placeholder="Enter Contact Number" name="contact" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" required placeholder="Enter Email" name="email" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="password" id="pass2" class="form-control" required placeholder="Password" name="pass" />
                                                    </div>
                                                    <div class="mt-2">
                                                        <input type="password" class="form-control" required data-parsley-equalto="#pass2" name="repeatpass" placeholder="Re-Type Password" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
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