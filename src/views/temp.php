<?php

include_once __DIR__ . "/../models/Course.php";
include_once __DIR__ . "/../models/Teacher.php";
include_once __DIR__ . "/../models/Category.php";
include_once __DIR__ . "/../models/Review.php";

// Get query parameters
$queryParams = $_GET;
$id = $queryParams['course_id'];

$course = new Course('', '', '', '', '', '', '');
$result = $course->getCourseById($id);

// get teacher by id
$teacher = new Teacher('', '', '', '', '', '');
$teacherResult = $teacher->getTeacherById($result['teacher_id']);



//get category by id

$category = new Category();
$categoryResult = $category->getCategoryById($result['category_id']);



// get course reviews
session_start();
$review = new Review('', '', '',  $_SESSION['user_id']);
$reviews = $review->getAllReviews($id);


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
        /* Custom CSS for Profile Page */
        .profile-image {
            width: 60px;
            height: 60px;
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
                                            session_start();

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
                            <h3>Course Details</h3>
                            <ol>
                                <li>Hmoe<i class="far fa-angle-double-right"></i></li>
                                <li>course-details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============abt-02 Section  Start============ -->

        <section class="abt-02">
            <div class="container">
                <div class="row">
                    <div class="abt-main d-flex">
                        <div class="abt-spirit">
                            <div class="image-box  ">
                                <img src="<?php echo $result['imageurl'] ?>" class="img-fluid w-100 h-100 ">
                            </div>
                        </div>
                        <div class="abt-spirit">
                            <div class="abt-content-card">
                                <h2><?php echo $result['title'] ?></h2>
                                <p><?php echo $result['description'] ?>.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem tenetur
                                    debitis autem, repellat nihil maiores nam odio consectetur voluptatum ipsam. Dolor,
                                    quod iusto. Adipisci, cum. Odit in sapiente eum?
                                    Error explicabo voluptate atque tempora ad vel eum quaerat ea doloribus ratione modi
                                    minus sed aliquid alias, doloremque sunt id aliquam excepturi? Ipsa eaque amet
                                    accusamus dignissimos iure incidunt minima.</p>




                                <span>
                                    <?php
                                    session_start();
                                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'student') {

                                        echo " <a href=''>Enroll Course</a>";
                                    }

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container my-5">
                <div class="row">
                    <div class="col-md-8">
                        <h1><?php echo $result['title'] ?></h1>
                        <p><?php echo $result['description'] ?></p>
                        <p><strong>Price:</strong> <?php echo $result['price'] . ' ' . '$' ?></p>
                        <p><strong>Duration:</strong> <?php echo $result['duration'] ?> weeks</p>
                        <p><strong>Instructor:</strong>
                            <?php echo $teacherResult['first_name'] . ' ' . $teacherResult['last_name'] ?></p>
                        <p><strong>Category:</strong> <?php echo $categoryResult['title'] ?></p>
                        <div class="abt-content-card-footer d-flex justify-content-center">
                            <div class="rating"><i class="fas fa-star"></i></div>
                            <div class="rating"><i class="fas fa-star"></i></div>
                            <div class="rating"><i class="fas fa-star"></i></div>
                            <div class="rating"><i class="fas fa-star"></i></div>
                            <div class="rating"><i class="fas fa-star"></i></div>
                        </div>



                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $teacherResult['image'] ?>" class="card-img-top" alt="Instructor Image" style="height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $teacherResult['first_name'] . ' ' . $teacherResult['last_name'] ?></h5>
                                <p class="card-text"><?php echo $teacherResult['email'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center my-5">

                    <h2 class="text-center text-secondary">Reviews</h2>
                </div>
                <div class='row w-100 justify-content-between'>

                    <?php
                    foreach ($reviews as $review) {

                        // get student by student id 
                        include_once __DIR__ . "/../models/Student.php";

                        $student = new Student('', '', '', '', '', '');
                        $studentResult = $student->getStudentById($review['student_id']);

                        echo "

                        <div class='rating w-50 bg-dark text-white p-2 my-3 rounded-3 col-md-5' style='border-radius: 20px'>
                            <div class='d-flex align-items-center '>
                                <img src='" . $studentResult['image'] . "' alt='Profile Image' class='profile-image mb-2' id='profileImage'><br />
                            </div>
                            <h5 class='card-title m-auto text-center mb-5'>" . $studentResult['first_name'] . ' ' . $studentResult['last_name'] . "</h5>

                            <p class='card-text p-2'>";


                        for ($i = 0; $i < $review['Rating']; $i++) {

                            echo "<i class='fas fa-star'></i>";
                        }

                        echo "
                            
                            </p>
                            <p class='card-text p-2'> " . $review['Comment'] . "</p>
                        </div>
                        ";
                    }

                    ?>
                </div>


                <div class="container mt-5">
                    <h2>Course Review</h2>
                    <form action="../controllers/review.controller.php" method="post">
                        <input type="hidden" name="course_id" value="<?php echo $result['id'] ?>">
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating:</label>
                            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" step="0.5" required name="rating">
                            <div class="invalid-feedback">Please provide a rating between 1 and 5.</div>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment:</label>
                            <textarea class="form-control" id="comment" name="comment" rows="4" required name="comment"></textarea>
                            <div class="invalid-feedback">Please provide a comment.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>
        </section>









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
                        <p>© 2020 All Rights Reserved by</p>
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

</html>