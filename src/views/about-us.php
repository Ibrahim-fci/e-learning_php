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
                                            <!-- <a class="dropdown-item" href="contact-us.php">Contact Us</a> -->
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
                            <h3>About Us</h3>
                            <ol>
                                <li>Hmoe<i class="far fa-angle-double-right"></i></li>
                                <li>About Us</li>
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
                            <div class="image-box">
                                <img src="../../assets/images/about-image-1-min.jpg">
                            </div>
                        </div>
                        <div class="abt-spirit">
                            <div class="abt-content-card">
                                <h2>About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consequuntur
                                    veritatis fugit est
                                    provident quibusdam quis reiciendis, beatae neque harum maxime laborum. Esse,
                                    deserunt sunt debitis
                                    quasi officiis molestiae necessitatibus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consequuntur
                                    veritatis fugit est
                                    provident quibusdam quis reiciendis, beatae neque harum maxime laborum. Esse,
                                    deserunt sunt debitis
                                    quasi officiis</p>

                                <span>
                                    <a href="#">Follow Us</a>
                                </span>
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
                                <img src="../../assets/images/team/1.jpg">
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
                                <img src="../../assets/images/team/2.jpg">
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
                                <img src="../../assets/images/team/3.jpg">
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
                                <img src="../../assets/images/team/4.jpg">
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
                                <img src="../../assets/images/bg/1.png">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="main-card">
                            <div class="content">
                                <ol>
                                    <li>
                                        <h3>VARITY COURSES</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae
                                            voluptatum voluptates asperiores iusto errorquo sed nobis</p>
                                    </li>
                                    <li>
                                        <h3>ATTRACTIVE PRICES</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae
                                            voluptatum voluptates asperiores iustoerrorquo sed nobis</p>
                                    </li>
                                    <li>
                                        <h3>EVENTS</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae
                                            voluptatum voluptates asperiores iustoerrorquo sed nobis</p>
                                    </li>
                                    <li>
                                        <h3>TALENTE TEACHERS</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas magnam quae
                                            voluptatum voluptates asperiores iustoerrorquo sed nobis</p>
                                    </li>
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