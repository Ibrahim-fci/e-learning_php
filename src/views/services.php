<?php
include_once __DIR__ . "/../models/Category.php";
include_once __DIR__ . "/../models/Course.php";

// get all categories
$category = new Category();
$categories = $category->getAllCategories();

// get all courses
$course = new Course('', '', '', '', '', '', '');
$courses = $course->getAllCourses();

session_start();
$userRole = $_SESSION['role'];

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="../../assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <style>
        /* Adjust styles as needed */
        .search-input {
            width: 100%;
            height: 50px;
            border-radius: 20px;
        }

        .plus-icon {
            margin-left: 10px;
            margin-right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #007bff;
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            right: 0;
            transition: all 0.3s ease;


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
                            <img src="../../assets/images/logo-01.png">
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="courses_list.php">Courses</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <!-- ============abt-01 Section  Start============ -->

        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Courses</h3>
                            <ol>
                                <li>Hmoe<i class="far fa-angle-double-right"></i></li>
                                <li>Courses</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============bg-se-02  Section  Start============ -->

        <section class="bg-se-02">
            <?php

            if ($_SESSION['role'] != "student") {
                echo " <div class='plus-icon' style='z-index: 1999;' data-toggle='modal' data-target='#imageModal'>";
                echo "<i class='fas fa-plus-circle'></i>";
                echo "</div>";
            } else {
            }

            ?>

            <div class="container">
                <div class="input-group mb-5">
                    <input type="text" class="form-control search-input" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="heading">
                        <h2>POPULAR Courses</h2>
                    </div>
                </div>

                <div class="row">

                    <?php

                    foreach ($courses as $course) {

                        echo "<div class='col-lg-4 col-md-4 col-sm-6 col-12' >";
                        echo "<div class='main-wrapper p-0' style='min-height: 240px'>";
                        echo "<div class='content text-center p-0'>";
                        echo "<div class=' w-100' >";
                        echo "<img src='$course[imageurl]' class='card-img-top w-100' alt='...'' style='height: 200px'>";
                        echo "</div>";
                        echo "<div class='sentence'>";
                        echo "<h3>$course[title]</h3>";
                        echo "<p>$course[description]";
                        echo "</p>";
                        echo "</div>";
                        if ($_SESSION['role'] != "student") {
                            echo "<div class='row justify-content-end w-100 my-3'>";
                            echo "<button class='btn btn-primary mt-3 mr-1' data-toggle='modal' data-target='#updateModal' onclick='updateCourse( $course[id], \"$course[title]\", \"$course[description]\", \"$course[imageurl]\", \"$course[price]\", \"$course[duration]\", \"$course[category_id]\")'>update</button>";
                            echo "<button class='btn btn-danger mt-3'   data-toggle='modal' data-target='#deleteModal'  onclick='deleteCourse($course[id], \"$course[title]\")'>delete</button>";
                            echo "</div>";
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }

                    ?>


                </div>
            </div>
        </section>


        <!-- Add Modal -->
        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Add Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/courses.controller.php" method="POST" enctype="multipart/form-data">
                            <!-- Image -->
                            <div class=" ">
                                <img src="https://learning.zelleducation.com/theme/images/default.jpg" class="img-fluid mb-1 w-100" alt="Sample Image" style="height: 300px;" id="outputImage">
                                <label for="fileInput" class="btn btn-primary w-100 mb-3">Change</label>
                                <input type="file" id="fileInput" style="display:none" name="image" onchange="loadFile(event,'outputImage')">
                            </div>

                            <!-- Form -->

                            <div class="form-group ">
                                <input type="text" class="form-control" placeholder="Course Title" name="title">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" placeholder="Price" name="price">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="duration" name="duration">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="category">
                                        <?php
                                        foreach ($categories as $c) {
                                            echo "<option value='{$c['id']}'>{$c['title']}</option>";
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control">
                                        <option>Select 2</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Description" style="resize: none;" name="description"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>



        <!-- UPDATE Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Update Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/updateCourse.controller.php" method="POST" enctype="multipart/form-data">
                            <!-- Image -->
                            <input type="hidden" name="id" id="update_id">
                            <div class=" ">
                                <img src="https://learning.zelleducation.com/theme/images/default.jpg" class="img-fluid mb-1 w-100" alt="Sample Image" style="height: 300px;" id="update_image">
                                <label for="fileInput" class="btn btn-primary w-100 mb-3">Change</label>
                                <input type="file" id="fileInput" style="display:none" name="update_image" onchange="loadFile(event,'update_image')">
                            </div>

                            <!-- Form -->

                            <div class="form-group ">
                                <input type="text" class="form-control" placeholder="Course Title" name="title" id="update_title">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" placeholder="Price" name="price" id="update_price">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="duration" name="duration" id="update_duration">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="category" id="update_category">
                                        <?php
                                        foreach ($categories as $c) {
                                            echo "<option value='{$c['id']}'>{$c['title']}</option>";
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control">
                                        <option>Select 2</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Description" style="resize: none;" name="description" id="update_description"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Delete Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/deleteCourse.controller.php" method="POST" enctype="multipart/form-data">
                            <!-- Image -->
                            <input type="hidden" name="delete_id" id="delete_id">
                            <div>
                                <p>Are you sure you want to delete Course With Title <span class="text-danger" id="delete_title"></span></p>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

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
                        <p>ipsum dolor sit amet, Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                            <li class="last"><i class="far fa-angle-right"></i>Contact Us</li>
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
                                <input class="form-control" type="emal" name="email" placeholder="Email">
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
                        <p>© 2020 All Rights Reserved by<a href="https://www.smarteyeapps.com">SMARTEYEAPPS</a></p>
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