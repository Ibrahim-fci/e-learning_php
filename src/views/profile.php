<?php

include_once __DIR__ . "/../models/Student.php";
include_once __DIR__ . "/../models/Teacher.php";
// check if there is a session
session_start();
if (!isset($_SESSION['user'])) {
    // Session exists
    header("Location: login.php");
    die();
}

if ($_SESSION['role'] == "student") {

    $student = new Student('', '', '', '');
    $result = $student->getStudentById($_SESSION['user_id']);
    $data = json_decode(json_encode($result), true);
} else {

    $teacher = new Teacher('', '', '', '', '', '');
    $result = $teacher->getTeacherById($_SESSION['user_id']);
    $data = json_decode(json_encode($result), true);
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>School</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/all.min.css" />
    <link rel="stylesheet" href="../../assets/css/plugins/owl.carousel.css" />
    <link rel="stylesheet" href="../../assets/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <style>
    /* Custom CSS for Profile Page */
    .profile-image {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 0 auto;
        display: block;
    }
    </style>
</head>

<body>
    <header>
        <div class="my-nav sub-01">
            <div class="container">
                <div class="row">
                    <div class="nav-items">
                        <div class="menu-toggle">
                            <div class="menu-hamburger"></div>
                        </div>
                        <div class="logo">
                            <img src="../../assets/images/logo-01.png" />
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="courses_list.php">Courses</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Profile
                                        </a>
                                        <div class="dropdown-menu bg-dark text-dark" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="services.php">Services</a>
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a class="dropdown-item" href="about-us.php">About Us</a>
                                            <a class="dropdown-item" href="contact-us.php">Contact Us</a>
                                            <div class="dropdown-divider"></div>
                                            <?php
                                            if (isset($_SESSION['role']) && isset($_SESSION['user'])) {

                                                echo "<a class='dropdown-item' href='../controllers/logout.controller.php'>Logout</a>";
                                            } else {
                                                echo "<a class='dropdown-item' href='login.php'>Logout</a>";
                                            }

                                            ?>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container my-5">


            <form action="../controllers/profile.controller.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <img src="<?php echo $data['image']; ?>" alt="Profile Image" class="profile-image"
                            id="profileImage">
                        <label for="fileInput" class="btn btn-primary mt-3">Change</label>
                        <input type="file" id="fileInput" style="display:none" name="image"
                            onchange="loadFile(event, 'profileImage')">
                    </div>
                </div>

                <?php
                session_start();
                if (isset($_SESSION['update_errors'])) {
                    foreach ($_SESSION['update_errors'] as $error) {
                        echo "<div class='alert alert-danger mt-3'>$error</div>";
                    }
                    unset($_SESSION['update_errors']);
                }


                ?>


                <div class="row mt-5">
                    <div class="col-md-6 offset-md-3">
                        <div class="row justify-content-between">

                            <div class="form-group col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your First Name"
                                    name="first_name" value="<?= $data['first_name'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your Last Name"
                                    name="last_name" value="<?= $data['last_name'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email"
                                name="email" value="<?= $data['email'] ?>" disabled>
                        </div>

                        <div class="row justify-content-between">

                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter your phone number"
                                    name="phone" value="<?= $data['phone'] ?>">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter your password" name="password" value="<?= $data['password'] ?>">
                            </div>
                        </div>
                        <div class="row justify-content-between">

                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender" value="<?= $data['gender'] ?>">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <select class="form-control" id="country" name="country"
                                    value="<?= $data['country'] ?>">
                                    <option value="egypt">Egypt</option>
                                    <option value="canada">Canada</option>
                                    <option value="uk">UK</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>



                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        </div>
        </div>

    </main>

    <!-- ============Footer  Start============ -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="_kl_de_w">
                        <h3>Smart Group</h3>
                        <p>
                            ipsum dolor sit amet, Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>home</li>
                            <li><i class="far fa-angle-right"></i>About Us</li>
                            <li><i class="far fa-angle-right"></i>Services</li>
                            <li><i class="far fa-angle-right"></i>Blog</li>
                            <li class="last">
                                <i class="far fa-angle-right"></i>Contact Us
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <div class="_kl_de_w">
                        <h3>Featured Courses</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>MBA</li>
                            <li><i class="far fa-angle-right"></i>ME</li>
                            <li><i class="far fa-angle-right"></i>MBBS</li>
                            <li><i class="far fa-angle-right"></i>MA</li>
                            <li class="last"><i class="far fa-angle-right"></i>MCA</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <div class="_kl_de_w">
                        <h3>Contact Us</h3>
                        <form class="my-form">
                            <div class="form-group">
                                <input class="form-control" type="emal" name="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="#">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="end-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="last-card">
                        <p>
                            © 2020 All Rights Reserved by
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../../assets/js/jquery-3.2.1.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/owl.carousel.js"></script>
<script src="../../assets/js/plugins/owl.carousel.min.js"></script>
<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/previewImage.js"></script>

</html>