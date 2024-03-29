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


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>DevCourse - Bootstrap 5 Landing Page Template For Online Courses</title> -->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">






    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <link rel="stylesheet" href="../../assets/css/detailsstyle.css">

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


    <section class="hero-section">
        <div class="hero-mask">
        </div>
        <!--//hero-mask-->
        <div class="container text-center py-5">
            <div class="single-col-max mx-auto">
                <div class="hero-heading-upper pt-5 mb-3">Promote Your Online Course <br class="d-md-none">Like A
                    Pro</div>

                <h1 class="hero-heading mb-5">
                    <span class="brand mb-4 d-block"><span class="text-highlight pr-2">{</span><span
                            class="name"><?php echo $result['title'] ?></span><span
                            class="text-highlight pl-2">}</span></span>
                  
                    <span class="desc d-block"><?php echo $categoryResult['title'] ?></span>
                </h1>
                <div class="text-center mb-5">
                    <a href="#section-pricing" class="btn btn-primary btn-lg scrollto">Start Learning Now</a>
                </div>

                <div class="hero-summary">
                    <div class="row">
                        <div class="item col-3">
                            <div class="summary-desc mb-1"><i class="icon fas fa-video me-2"></i>Content</div>
                            <h4 class="summary-heading">80+ <span class="desc">Videos</span></h4>

                        </div>
                        <!--//col-->
                        <div class="item col-3">
                            <div class="summary-desc mb-1"><i class="icon fas fa-clock me-2"></i>Duration</div>
                            <h4 class="summary-heading"><?php echo $result['duration'] ?><span class="desc">Hours</span>
                            </h4>

                        </div>
                        <!--//col-->
                        <div class="item col-3">
                            <div class="summary-desc mb-1"><i class="icon fas fa-user-circle me-2"></i>Access</div>
                            <h4 class="summary-heading">Lifetime</h4>

                        </div>
                        <!--//col-->
                        <div class="item col-3">
							
								<div class="summary-desc mb-1"><i class="icon fas fa-money-bill-wave me-2"></i>Price</div>
								<h4 class="summary-heading">$<?php echo $result["price"];?></h4>
								
							</div><!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//hero-summary-->
            </div>
            <!--//single-col-max-->
        </div>
        <!--//container-->
        <div class="hero-bg"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?php echo $result['imageurl']; ?>'); background-size: cover; background-position: center;">
        </div>
        </div>
    </section>
    <!--//hero-section-->
    </header>
    <!--//header-->

    <div class="sections-wrapper">


        <div class="section-blocks mb-5">

            <div id="section-overview" class="section-overview section pt-md-4 pt-lg-5">
                <div class="container py-5">
                    <div class="section-col-max mx-auto">
                        <h3 class="section-title mb-4">What Will You Learn</h3>
                        <p class="mb-4"><?php echo $result["description"]; ?></p>
                        <div class="text-center mb-3">
                            <ul class="column-list list-unstyled mx-auto d-inline-block">
                                <li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
                                <li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
                                <li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
                                <li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
                                <li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
                                <li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
                            </ul>
                        </div>
                        <!--//text-center-->
                        <div class="text-center mb-5">
                            <a class="btn btn-primary scrollto" href="#section-pricing">Join Course Now</a>
                        </div>

                    </div>
                    <!--//video-container-->

                </div>
                <!--//section-col-max-->
            </div>
            <!--//container-->
        </div>
        <!--//section-overview-->

        <div id="section-content" class="section-content section">
            <div class="container py-5">
                <div class="section-col-max mx-auto">
                    <h3 class="section-title mb-5">What's Included</h3>

                    <div class="data-summary justify-content-center text-center">
                        <div class="row mb-5">
                            <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                                <div class="data">10+</div>
                                <div class="meta">Modules</div>
                            </div>
                            <!--//item-->
                            <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                                <div class="data">80+</div>
                                <div class="meta">Videos</div>
                            </div>
                            <!--//item-->
                            <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                                <div class="data">40+</div>
                                <div class="meta">Resources</div>
                            </div>
                            <!--//item-->
                            <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                                <div class="data"><?php echo $result["duration"]; ?></div>
                                <div class="meta">Hours</div>
                            </div>
                            <!--//item-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//course-summary-->

                    <h4 class="text-center mb-4">Course Modules</h4>

                    <div class="accordion module-accordion" id="module-accordion">
                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-1">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-1" data-bs-toggle="collapse"
                                        data-bs-target="#module-1" aria-expanded="true" aria-controls="module-1">
                                        <i class="module-toggle-icon fas fa-minus me-2"></i>
                                        Module 1 - Lorem Ipsum Dolor Sit Amet
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-1" class="module-content collapse show" aria-labelledby="module-heading-1">
                                <div class="card-body p-0">
                                    <div class="module-intro p-3">Module intro goes here. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Pellentesque interdum elit non neque venenatis, ut
                                        mattis sapien lobortis. Integer eget turpis non ipsum convallis convallis vitae
                                        eu nunc.</div>
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">1.1</span><a
                                                    class="video-play-trigger text-highlight" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#modal-video">Module Intro
                                                    Video</a><span class="badge btn-primary ms-2">Preview</span></div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">1.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">1.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">1.4</span>Module
                                                Suspendisse Porttitor</div>
                                            <div class="col-3 text-end extra-info">07:50</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">1.5</span>Module
                                                Related Resources</div>
                                            <div class="col-3 text-end extra-info"><span
                                                    class="icon dripicons-download me-2"></span>Resources</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->

                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-2">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-2" data-bs-toggle="collapse"
                                        data-bs-target="#module-2" aria-expanded="true" aria-controls="module-2">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 2 - Lorem Ipsum Dolor Sit Amet
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-2" class="module-content collapse" aria-labelledby="module-heading-2">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">2.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">2.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">2.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->

                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-3">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-3" data-bs-toggle="collapse"
                                        data-bs-target="#module-3" aria-expanded="true" aria-controls="module-3">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 3 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-3" class="module-content collapse" aria-labelledby="module-heading-3">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">3.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">3.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">3.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-4">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-4" data-bs-toggle="collapse"
                                        data-bs-target="#module-4" aria-expanded="true" aria-controls="module-4">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 4 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-4" class="module-content collapse" aria-labelledby="module-heading-4">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">4.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">4.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">4.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-5">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-5" data-bs-toggle="collapse"
                                        data-bs-target="#module-5" aria-expanded="true" aria-controls="module-5">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 5 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-5" class="module-content collapse" aria-labelledby="module-heading-5">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">5.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">5.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">5.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-6">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-6" data-bs-toggle="collapse"
                                        data-bs-target="#module-6" aria-expanded="true" aria-controls="module-6">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 6 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-6" class="module-content collapse" aria-labelledby="module-heading-6">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">6.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">6.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">6.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-7">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-7" data-bs-toggle="collapse"
                                        data-bs-target="#module-7" aria-expanded="true" aria-controls="module-6">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 7 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-7" class="module-content collapse" aria-labelledby="module-heading-7">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">7.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">7.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">7.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-8">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-8" data-bs-toggle="collapse"
                                        data-bs-target="#module-8" aria-expanded="true" aria-controls="module-6">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 8 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-8" class="module-content collapse" aria-labelledby="module-heading-8">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">8.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">8.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">8.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-9">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-9" data-bs-toggle="collapse"
                                        data-bs-target="#module-9" aria-expanded="true" aria-controls="module-6">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 9 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-9" class="module-content collapse" aria-labelledby="module-heading-9">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">9.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">9.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">9.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                        <div class="module-item card">
                            <div class="module-header card-header" id="module-heading-10">
                                <h4 class="module-title mb-0">
                                    <a class="card-toggle module-toggle" href="#module-10" data-bs-toggle="collapse"
                                        data-bs-target="#module-10" aria-expanded="true" aria-controls="module-6">
                                        <i class="module-toggle-icon fas fa-plus me-2"></i>
                                        Module 10 - Lorem ipsum dolor sit amet.
                                    </a>
                                </h4>
                            </div>
                            <!--//card-header-->

                            <div id="module-10" class="module-content collapse" aria-labelledby="module-heading-10">
                                <div class="card-body p-0">
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">10.1</span>Module
                                                Intro Video</div>
                                            <div class="col-3 text-end extra-info">02:30</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">10.2</span>Module
                                                Lorem Ipsum</div>
                                            <div class="col-3 text-end extra-info">15:20</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->
                                    <div class="module-sub-item p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-9"><span class="theme-text-secondary me-2">10.3</span>Module
                                                Suscipit Arcu</div>
                                            <div class="col-3 text-end extra-info">23:15</div>
                                        </div>
                                    </div>
                                    <!--//module-sub-item-->


                                </div>
                                <!--//card-body-->
                            </div>
                            <!--//module-content-->
                        </div>
                        <!--//module-item-->

                    </div>
                    <!--//module-accordion-->

                    <div class="text-center mt-5">
                        <a class="btn btn-primary scrollto" href="#" id="section-pricing">Enrol Now</a>
                    </div>


                </div>
            </div>
            <!--//container-->
        </div>
        <!--//section-content-->

        <div id="section-requirements" class="section-requirements section">
            <div class="container py-5">
                <div class="section-col-max mx-auto">
                    <h3 class="section-title mb-4">Who Is This Course For</h3>
                    <p class="mb-4">This course is designed for developers lorem ipsum consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>


                </div>
            </div>
            <!--//container-->
        </div>
        <!--//section-requirements-->

        <div id="section-tutor" class="section-tutor   section pb-5">
            <div class="container">
                <div class="container-inner p-5 position-relative btn-primary rounded">
                    <div class="section-bg-container"></div>
                    <div class="row over-section-bg">
                        <div class="col-12 col-lg-3">
                            <div class="tutor-img-holder mb-5 mb-lg-0 text-center">
                                <img class="tutor-profile img-fluid rounded" src="<?php echo $teacherResult['image'] ?>" alt="">
                            </div>
                            <!--//tutor-img-holder-->
                        </div>
                        <!--//col-->
                        <div class="col-12 col-lg-9">
                            <div class="pl-lg-4">
                                <h3 class="section-title mb-4 text-white text-lg-start"><?php echo $teacherResult['first_name'] . " ".$teacherResult['last_name'] ?></h3>
                                
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                    Curae; Etiam auctor leo at mi dignissim, tempor porttitor leo vehicula.</p>
                                <div class="text-center text-lg-start">
                                    <ul class="social-list list-unstyled mt-4 mb-0 mx-auto mx-lg-0">
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-twitter fa-fw"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-globe fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-blog fa-fw"></i></a>
                                        </li>
                                    </ul>
                                    <!--//social-list-->
                                </div>
                            </div>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//container-inner-->
            </div>
            <!--//container-->
        </div>
        <!--//section-tutor-->

        <div id="section-reviews" class="section-reviews py-5">
            <div class="container">
                <h3 class="section-title mb-5">Course Reviews</h3>
                <div class="row">
                    <?php
                    foreach ($reviews as $review) {

                        // get student by student id 
                        include_once __DIR__ . "/../models/Student.php";

                        $student = new Student('', '', '', '', '', '');
                        $studentResult = $student->getStudentById($review['student_id']);




                        echo "

                        <div class='col-12 col-md-6 col-lg-4 mb-4'>
                        <div class='review-item rounded p-5'>
                            <blockquote class='quote mb-4'>
                                <div class='quote-icon-holder'>
                                    <svg class='quote-icon-svg' width='20px' height='16px' viewBox='0 0 20 16'
                                        version='1.1' xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink'>
                                        <g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                            <path class='quote-icon-path'
                                                d='M19.2093023,0 L19.2093023,1.17365269 C17.5968912,1.78044216 16.3333379,2.73452443 15.4186047,4.03592814 C14.5038714,5.33733186 14.0465116,6.69061174 14.0465116,8.09580838 C14.0465116,8.39920311 14.0930228,8.62275377 14.1860465,8.76646707 C14.2480623,8.86227593 14.3178291,8.91017964 14.3953488,8.91017964 C14.4728686,8.91017964 14.5891465,8.85429198 14.744186,8.74251497 C15.2403126,8.37524766 15.8682133,8.19161677 16.627907,8.19161677 C17.5116323,8.19161677 18.2945702,8.56287054 18.9767442,9.30538922 C19.6589181,10.0479079 20,10.9301346 20,11.9520958 C20,13.0219614 19.608531,13.9640678 18.8255814,14.7784431 C18.0426317,15.5928184 17.0930288,16 15.9767442,16 C14.6744121,16 13.5503923,15.4491073 12.6046512,14.3473054 C11.65891,13.2455035 11.1860465,11.7684723 11.1860465,9.91616766 C11.1860465,7.76046826 11.8294509,5.82835186 13.1162791,4.11976048 C14.4031072,2.4111691 16.4340947,1.03792934 19.2093023,0 Z M8.02325581,0 L8.02325581,1.17365269 C6.41084465,1.78044216 5.1472914,2.73452443 4.23255814,4.03592814 C3.31782488,5.33733186 2.86046512,6.69061174 2.86046512,8.09580838 C2.86046512,8.39920311 2.90697628,8.62275377 3,8.76646707 C3.06201581,8.86227593 3.13178256,8.91017964 3.20930233,8.91017964 C3.28682209,8.91017964 3.4031,8.85429198 3.55813953,8.74251497 C4.05426605,8.37524766 4.68216674,8.19161677 5.44186047,8.19161677 C6.32558581,8.19161677 7.10852372,8.56287054 7.79069767,9.30538922 C8.47287163,10.0479079 8.81395349,10.9301346 8.81395349,11.9520958 C8.81395349,13.0219614 8.42248453,13.9640678 7.63953488,14.7784431 C6.85658523,15.5928184 5.90698233,16 4.79069767,16 C3.48836558,16 2.36434581,15.4491073 1.41860465,14.3473054 C0.472863488,13.2455035 0,11.7684723 0,9.91616766 C0,7.76046826 0.643404419,5.82835186 1.93023256,4.11976048 C3.2170607,2.4111691 5.24804814,1.03792934 8.02325581,0 Z'>
                                            </path>
                                        </g>
                                    </svg>
                                    <!--//quote-icon-->
                                </div>
                                <p>" . $review['Comment'] . ".</p>
                        </blockquote>
                        <!--//quote-->
                        <div class='source'>
                            <div class='row align-items-center'>
                                <div class='col-3 col-lg-4'>
                                    <div class='profile'><img class='profile-image img-fluid' src='" . $studentResult['image'] . "' alt='' style='width: 50px; height: 50px; border-radius: 50%'></div>
                                </div>
                                <!--col-12-->
                                <div class='col-9 col-lg-8'>
                                    <div class='name font-weight-bold'>" . $studentResult['first_name'] . ' ' . $studentResult['last_name'] . " </div>
                                    <div class='meta'>" . $studentResult['email'] . "</div>
                                    ";

                        for ($i = 0; $i < $review['Rating']; $i++) {

                            echo "<i class='fas fa-star'></i>";
                        }



                        echo "</div>
                                    <!--//col-12-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//source-->
                        </div>
                        <!--//item-->
                    </div>
                            
                                  
                        
                        ";
                    }

                    ?>




                </div>
                <!--//row-->
                <div class="container mt-3 ">
                    <form action="../controllers/review.controller.php" method="post">
                        <input type="hidden" name="course_id" value="<?php echo $result['id'] ?>">
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating:</label>
                            <input type="number" class="form-control " id="rating" name="rating" min="1" max="5"
                                step="0.5" required name="rating">
                            <div class="invalid-feedback">Please provide a rating between 1 and 5.</div>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment:</label>
                            <textarea class="form-control" id="comment" name="comment" rows="5" required
                                name="comment"></textarea>
                            <div class="invalid-feedback">Please provide a comment.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--//container-->
        </div>
        <!--//section-reviews-->

        



       




        <footer class="footer pb-5 text-center">
            <div class="container">
                <div class="copyright mb-2">
                    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                    Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i>
                    by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a>
                    for developers
                </div>
                <div class="legal mb-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Privacy</a></li>
                        <li class="list-inline-item theme-text-light">|</li>
                        <li class="list-inline-item"><a href="#">Terms of Services</a></li>
                    </ul>
                </div>
            </div>
            <!--//container-->
        </footer>
        <!--//footer-->

       




        <script src="../../assets/js/main.js"></script>
        <script src="../../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script src="../../assets/js/plugins/owl.carousel.js"></script>
        <script src="../../assets/js/plugins/owl.carousel.min.js"></script>
        <script src="../../assets/js/script.js"></script>
</body>

</html>