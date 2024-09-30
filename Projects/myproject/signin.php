<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="images/logo3.png">

    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">

    <?php include "includes/css_file.php" ?>

</head>

    <a id="back2Top" title="Back to top" href="#">&#10148;</a>

    <!-- logo header wrapper Start -->
    <?php include "includes/logo_header.php" ?>
    <!-- logo header wrapper End -->

    <!-- Begin page -->
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="mdi mdi-home h1"></i></a>
    </div>

    <div class="wrapper-page">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages shadow-none mt-4">
                        <div class="card-body">
                            <div class="text-center mt-0 mb-3">
                                <a href="index.html" class="logo logo-admin">
                                    <img src="assets/images/logo-dark.png" class="mt-3" alt="" height="26"></a>
                                <p class="text-muted w-75 mx-auto mb-4 mt-4">Enter your email address and password to access admin panel.</p>
                            </div>

                            <form class="form-horizontal mt-4" action="Admin/login.php" method="post">

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="username">Email</label>
                                        <input class="form-control" type="text" required="" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>      
                                                        
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="usertype">User Type</label>
                                        <select name="usertype" id="" class="form-control">
                                            <option value="">Select One</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Teacher</option>
                                            <option value="3">Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="login">Log In</button>
                                    </div>
                                </div>

                                <div class="form-group text-center mt-4">
                                    <div class="col-12">
                                        <div class="float-left">
                                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                        <div class="text-right">
                                            <a href="pages-register.html" class="text-muted">Create an account</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <p class="mt-4 text-muted">Sign in with</p>
                                    <ul class="social-list list-inline mb-2">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->

        </div>

    </div>



    <!-- jQuery  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/metismenu.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.min.js"></script>

    <script src="js/bootstrap-datepicker.min.js"></script>

    <!-- App js -->
    <script src="js/app.js"></script>



    </body>

</html>