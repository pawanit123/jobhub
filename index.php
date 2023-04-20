<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Nunito&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>JOBHUB-BUTWAL</title>


 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- <link href="css/style1.css" rel='stylesheet' type='text/css' /> -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

</head>

<body>
   
    <!-- navbar start from here  -->
    <?php include('includes/header.php');?>
    <?php include('includes/navbar.php');?>
   

    <!-- Now Header are start here   -->
    <header>

        <h1 class="header-title">
            FIND YOUR<br> <span>PERFTECT JOB</span> <br> EASILY
        </h1>
    </header>

    <!-- search -->
    <div class="search-wrapper">
        <div class="search-box">
            <div class="search-card">
            
                <input type="text" class="search-field bussiness" placeholder="Bussiness,services..">

                <input type="text" class="search-field location" placeholder="location">
                <button class="search-button"> Search</button> 

            </div>
        </div>
    </div>



    <!-- join -->
    <section class="join">
        <div class="join-detail">
            <h1 class="section-title">LETS START YOUR NEW JOBS WITH US</h1>
            <p>Get your favourable job in Butwal</p>
        </div>
        <button class="join-button">Join Now</button>
    </section>

    <!-- featured company-->
    <!-- &#x2022; this is . sign -->
    <section class="featured" id="companies">
        <h1 class="section-title">Feature Companies</h1>
        <p>Our hiring company today</p>
        <div class="features-wrapper">
            <div class="features-card">
                <img class="featured-image" src="images/ebay.jpg">
                <p>&#x2022; Ebay</p>
                <button class="features-button">View 1 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/youtube.jpg">
                <p>&#x2022; IT company at Bhairahawa</p>
                <button class="features-button">View 2 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/facebook .jpg">
                <p>&#x2022; Medicine factory in Manigram</p>
                <button class="features-button">View 2 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/tesla.jpg">
                <p>&#x2022; Agricultural Bank</p>
                <button class="features-button">View 9 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/google.jpg">
                <p>&#x2022; Google</p>
                <button class="features-button">View 3 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/tiktok.jpg">
                <p>&#x2022; Road department</p>
                <button class="features-button">View 2 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/apple.jpg">
                <p>&#x2022; Apple company</p>
                <button class="features-button">View 7 job</button>
            </div>
            <div class="features-card">
                <img class="featured-image" src="images/amazon.jpg">
                <p>&#x2022; Buddha Air</p>
                <button class="features-button">View 2 job</button>
            </div>
        </div>
        <button class="job-more" >More List</button>
    </section>
    <!-- featured company end here -->

    <!-- testimoni -->
    <section class="testimoni" id="testimoni">
        <h1 class="section-title">Testimoni</h1>
        <P>Lets see what our clients say about us</P>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <i class="fas fa-quote-left"></i>
                    <h3>Our happy clients.</h3>
                    <div class="testimoni-pic">
                        <img src="images/profile3.jpg">
                        <p>Pawan Pathak</p>
                        <span>Bussiness Development</span>
                    </div>
                </div>
            
            </div>
            <div class="swiper-page"></div>
        </div>
    </section>

    <!-- blog -->
    <section class="blog" id="blog">
        <h1 class="section-title">Career Advices</h1>
        <p>Learn more career tips from Company's receiver</p>
        <div class="bolg-wrapper">
            <div class="blog-card">
                <img src="images/blog-img1.jpg" class="blog-imgs">
                <div class="blog-detail">
                    <span>11 apr 2022</span>
                    <h4>Pawan Pathak</h4>
                    <p>Web Development</p>
                    <hr class="divider">
                    <a href="#" class="blog-more">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="images/blog-img2.jpg" class="blog-imgs">
                <div class="blog-detail">
                    <span>11 apr 2022</span>
                    <h4>Kamal Pathak</h4>
                    <p>Data Analyzer</p>
                    <hr class="divider">
                    <a href="#" class="blog-more">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="images/blog-img3.jpg" class="blog-imgs">
                <div class="blog-detail">
                    <span>11 apr 2022</span>
                    <h4>Ganesh Pathak</h4>
                    <p>Product Analyzer</p>
                    <hr class="divider">
                    <a href="#" class="blog-more">Read More</a>
                </div>
            </div>
        </div>
    </section>






    <?php include('includes/package.php');?>



    <!-- post detail start -->
    <div class="container" id="daily-post">

        <h1 class="heading">our daily posts</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 8 june, 2022 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 8 june, 2022 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 8 june, 2022 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 8 june, 2022 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 8 june, 2022 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 1 jun, 2023 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 1 jun, 2023 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 11 jun, 2023 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>hello namaste!</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 1 jun, 2023 </span>
                        <span> <i class="fas fa-user"></i> by admin </span>
                    </div>
                </div>
            </div>

        </div>

        <div id="load-more"> Read More </div>

    </div>

    <script>
        
        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 3;

        loadMoreBtn.onclick = () => {
            let boxes = [...document.querySelectorAll('.container .box-container .box')];
            for (var i = currentItem; i < currentItem + 3; i++) {
                boxes[i].style.display = 'inline-block';
            }
            currentItem += 3;

            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none';
            }
        }

    </script>

    
    <script src="app.js"></script>
   

    <?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>

</html>