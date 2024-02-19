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
    .dropdown-menu .dropdown-item:hover {
        background-color: #343a40;
        /* Dark background color */
        color: #edf4f8;
        /* Dark text color */
    }
    </style>
</head>

<body>
    <header>
        <div class="my-nav">
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
                                            <!-- <a class="dropdown-item" href="contact-us.php">Contact Us</a> -->
                                            <div class="dropdown-divider"></div>
                                            <?php
                                            session_start();
                                            if (isset($_SESSION['role']) && isset($_SESSION['user'])) {

                                                echo "<a class='dropdown-item' href='../controllers/logout.controller.php'>Logout</a>";
                                            } else {
                                                echo "<a class='dropdown-item' href='login.php'>Login</a>";
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
        <!-- ============Slider  Section  Start============ -->
        <section class="slider">
            <div class="shap"></div>
            <div class="shap-01">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="75px" height="75px" viewBox="0 0 75 75" enable-background="new 0 0 75 75"
                    xml:space="preserve">
                    <g id="Layer_1"></g>
                    <g id="Layer_2">
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="5.0576" y1="37.5" x2="69.9424"
                            y2="37.5">
                            <stop offset="0.35" style="stop-color: #edf4f8" />
                            <stop offset="0.439" style="stop-color: #f6fafc" />
                            <stop offset="0.5874" style="stop-color: #fdfefe" />
                            <stop offset="1" style="stop-color: #ffffff" />
                        </linearGradient>
                        <polygon fill="url(#SVGID_1_)"
                            points="21.279,65.596 5.058,37.5 21.279,9.404 53.721,9.404 69.942,37.5 53.721,65.596 	" />
                    </g>
                </svg>
            </div>
            <div class="shap-02">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="200px"
                    viewBox="0 0 30 200" style="enable-background: new 0 0 30 200" xml:space="preserve">
                    <path style="fill: #ffffff" d="M20.666,176.646C20.666,186.782,18.129,195,15,195l0,0c-3.129,0-5.667-8.218-5.667-18.354V23.352
                	C9.333,13.217,11.871,5,15,5l0,0c3.129,0,5.666,8.217,5.666,18.352V176.646z" />
                </svg>
            </div>
            <div class="shape-03"></div>
            <div class="container">
                <div class="row">
                    <div class="main-wrapper">
                        <div class="sub-wrapper-01">
                            <div class="content">
                                <h1>BROADEN YOUR KNOWLEDGE WITH TUTORS</h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Recusandae sint earum aspernatur nemo cum, nihil cupiditate
                                    eius, unde quam ab minima velit tenetur at. In iusto rem
                                    libero eius quaerat.
                                </p>
                                <div class="btn-01">
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Follow Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sub-wrapper-01">
                            <div class="image">
                                <div class="my-ba">
                                    <img src="../../assets/images/slider/1.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============bg-se-01  Section  Start============ -->

        <section class="bg-se-01">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>WHY CHOOS US</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-sm-2 order-2 order-md-0 order-lg-0 order-xl-0">
                        <div class="main-card">
                            <div class="sub-card">
                                <img src="../../assets/images/bg/1.png" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="main-card">
                            <div class="content">
                                <ol>
                                    <li>
                                        <h3>VARITY COURSES</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Quas magnam quae voluptatum voluptates asperiores iusto
                                            errorquo sed nobis
                                        </p>
                                    </li>
                                    <li>
                                        <h3>ATTRACTIVE PRICES</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Quas magnam quae voluptatum voluptates asperiores
                                            iustoerrorquo sed nobis
                                        </p>
                                    </li>
                                    <li>
                                        <h3>EVENTS</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Quas magnam quae voluptatum voluptates asperiores
                                            iustoerrorquo sed nobis
                                        </p>
                                    </li>
                                    <li>
                                        <h3>TALENTE TEACHERS</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Quas magnam quae voluptatum voluptates asperiores
                                            iustoerrorquo sed nobis
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============bg-se-02  Section  Start============ -->

        <section class="bg-se-02">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>POPULAR CATEGORY</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="main-wrapper">
                            <div class="content text-center">
                                <div class="icon">
                                    <i class="fal fa-code"></i>
                                </div>
                                <div class="sentence">
                                    <h3>DEVELOPMENT</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facilis molestias excepturi fugit, similique laborum
                                        necessitatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="main-wrapper">
                            <div class="content text-center">
                                <div class="icon">
                                    <i class="fal fa-business-time"></i>
                                </div>
                                <div class="sentence">
                                    <h3>BUSINESS</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facilis molestias excepturi fugit, similique laborum
                                        necessitatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="main-wrapper">
                            <div class="content text-center">
                                <div class="icon">
                                    <i class="fal fa-calculator-alt"></i>
                                </div>
                                <div class="sentence">
                                    <h3>ACCOUNTING</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facilis molestias excepturi fugit, similique laborum
                                        necessitatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="main-wrapper">
                            <div class="content text-center">
                                <div class="icon">
                                    <i class="fal fa-database"></i>
                                </div>
                                <div class="sentence">
                                    <h3>SOFTWARE</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facilis molestias excepturi fugit, similique laborum
                                        necessitatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="main-wrapper">
                            <div class="content text-center">
                                <div class="icon">
                                    <i class="fal fa-palette"></i>
                                </div>
                                <div class="sentence">
                                    <h3>ARTS & DESIGN</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facilis molestias excepturi fugit, similique laborum
                                        necessitatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="main-wrapper">
                            <div class="content text-center">
                                <div class="icon">
                                    <i class="fal fa-shopping-cart"></i>
                                </div>
                                <div class="sentence">
                                    <h3>MARKETING</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Facilis molestias excepturi fugit, similique laborum
                                        necessitatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============bg-se-03  Section  Start============ -->

        <section class="bg-se-03">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Featured Courses</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/1.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>MBA</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/2.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>BA</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/3.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>MA</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/4.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>ME</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/5.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>BE</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/6.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>MBBS</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="my-items">
                                        <div class="content">
                                            <div class="image-01">
                                                <img src="../../assets/images/courses/7.jpg" />
                                            </div>
                                            <div class="sentence">
                                                <b>MCA</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Culpa dolor
                                                </p>
                                                <ol>
                                                    <li>3 Year Course</li>
                                                    <li>100 Clasess</li>
                                                    <li>10 am - 1 pm</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============bg-se-04  Section  Start============ -->

        <section class="bg-se-04">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="_lk_bg_cd">
                            <i class="fal fa-history"></i>
                            <div class="counting" data-count="20">100</div>
                            <h5>YEAR OF HISTORY</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="_lk_bg_cd">
                            <i class="fal fa-graduation-cap"></i>
                            <div class="counting" data-count="80">100</div>
                            <h5>ACTIVE STUDENTS</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="_lk_bg_cd">
                            <i class="fal fa-globe"></i>
                            <div class="counting" data-count="27">100</div>
                            <h5>ONLINE COURSES</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="_lk_bg_cd">
                            <i class="fal fa-registered"></i>
                            <div class="counting" data-count="62">100</div>
                            <h5>REGISTERED STUDENTS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============bg-se-05  Section  Start============ -->

        <section class="bg-se-05">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Latest News</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <article class="_lk_bg_sd_we">
                            <div class="_bv_xs_we">
                                <img src="../../assets/images/blog/img-01.jpg" />
                            </div>
                            <div class="_xs_we_er">
                                <div class="_he_w">
                                    <h3>Easy English Learning Way</h3>
                                    <ol>
                                        <li>
                                            <span>by</span> admin<span class="_mn_cd_xs">August 20, 2020</span>
                                        </li>
                                    </ol>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <article class="_lk_bg_sd_we">
                            <div class="_bv_xs_we">
                                <img src="../../assets/images/blog/img-02.jpg" />
                            </div>
                            <div class="_xs_we_er">
                                <div class="_he_w">
                                    <h3>Easy English Learning Way</h3>
                                    <ol>
                                        <li>
                                            <span>by</span> admin<span class="_mn_cd_xs">August 20, 2020</span>
                                        </li>
                                    </ol>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <article class="_lk_bg_sd_we">
                            <div class="_bv_xs_we">
                                <img src="../../assets/images/blog/img-03.jpg" />
                            </div>
                            <div class="_xs_we_er">
                                <div class="_he_w">
                                    <h3>Easy English Learning Way</h3>
                                    <ol>
                                        <li>
                                            <span>by</span> admin<span class="_mn_cd_xs">August 20, 2020</span>
                                        </li>
                                    </ol>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============bg-se-06  Section  Start============ -->

        <section class="bg-se-06">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Our Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="team-card">
                            <div class="image-team">
                                <img src="../../assets/images/team/1.jpg" />
                            </div>
                            <div class="team-content">
                                <h3>John</h3>
                                <p>Web Developer</p>
                                <ol>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-pinterest-p"></i></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="team-card">
                            <div class="image-team">
                                <img src="../../assets/images/team/2.jpg" />
                            </div>
                            <div class="team-content">
                                <h3>Albert</h3>
                                <p>Web Designer</p>
                                <ol>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-pinterest-p"></i></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="team-card">
                            <div class="image-team">
                                <img src="../../assets/images/team/3.jpg" />
                            </div>
                            <div class="team-content">
                                <h3>Ronald</h3>
                                <p>SEO</p>
                                <ol>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-pinterest-p"></i></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="team-card">
                            <div class="image-team">
                                <img src="../../assets/images/team/4.jpg" />
                            </div>
                            <div class="team-content">
                                <h3>Smith</h3>
                                <p>Project Manager</p>
                                <ol>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-pinterest-p"></i></li>
                                </ol>
                            </div>
                        </div>
                    </div>
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

</html>