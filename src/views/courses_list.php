
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
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
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
            <div class="container">
            <div class="col-md-6">
            <form class="row g-3" action="" method="GET">
    <div class="col-auto">
        <input type="text" class="form-control" id="search" name="search" placeholder="Search..." value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
    </div>
    <!-- <div class="col-auto">
        <select class="form-select" name="category" value="
      
        ">
            <option value="">All Categories</option>
            <option value="Data Science">Data Science</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Business">Business</option>
        </select>
    </div> -->
    <div class="col-auto">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>
            </div>
                <div class="row">
                    <div class="heading">
                        <h2>OUR Coures</h2>
                    </div>
                </div>

                <div class="row">
                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    include_once '../models/Courses_list.php';
                    $courses = new Course;
                  $word = $_GET['search'] ;
                  $search = $courses->search($word );
                  if($search) {
                    foreach($search as $course) {
                        echo "<div class='col-lg-4 col-md-4 col-sm-6 col-12'>";
                        echo "<div class='main-wrapper'>";
                        echo "<div class='content text-center'>";
                        echo "<div class='sentence'>";
                        echo "<img src='{$course['imageurl']}'>";
                        echo "<h3>{$course['title']}</h3>";
                        echo "<p>Instructor: {$course['firstname']}</p>";
                        echo "<p>Category: {$course['category']}</p>";
                        echo "<p>{$course['description']}</p>";
                        echo "<p>Price: {$course['price']}</p>";
                        echo "<a href='#?id={$course['id']}' >Show Details</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No data found";
                }
                    }
                    
                ?>      
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

</html>
