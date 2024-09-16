<div class="edu_team_main_wrapper float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="edu_heading_wrapper float_left">
                    <h3>OUR TEACHERS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, libero non
                        <br>interdum maximus, ligula nulla pretium ligula, a egestas ex nibh.
                    </p>
                </div>
            </div>
            <?php
                include_once "Admin/dbconfig.php";
                $sql = $db->query("SELECT * FROM teachers");
                while ($row = $sql->fetch_assoc()) {
            ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 self_align_center">
                    <div class="edu_team_main_box">
                        <h3><a href="#"><?php echo $row['name'] ?></a></h3>
                        <p><?php echo $row['department'] ?></p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                        <div class="edu_team_inner_box">
                            <img src="Admin/image/<?php echo $row['photo'] ?>" alt="img">
                        </div>

                    </div>
                </div>
            <?php } ?>

            <div class="col-md-12">
                <div class="edu_bottom_btn_wrapper float_left"> <a href="teacher.php">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>