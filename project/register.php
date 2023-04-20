<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="full-page">    
		<!-- navbar start from here  -->
 		<nav class="navbar">
			<h2 class="navbar-logo">
			  <a href="#">
				  <h3>JOBHU<span>B</span>UTWAL</h3>
			  </a>
	  		</h2>
 		</nav>
  	</div>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

  <!-- footer -->
  <footer class="footer">
        <div class="footer-wrapper">
            <h3>JOBHU<span>B</span>UTWAL</h3>
            <p class="small text-justify">
                Since inception in 2009, we have turned out to be number one jobs provider in Nepal with 300
                thousand+ page views with 6o thousand + progressive visits every month, created 2,00,000+ success stories
                and registered 7,50,000+ job seekers in our database. <a href="about" target="_blank" class="text-secondary">Read more...</a>
            </p>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-wrapper">
            <h4 class="exolore">EXPLORE</h4>
            <a href="#">Top Companies</a>
            <a href="#">Podcast</a>
            <a href="#">Careers</a>
            <a href="#">Terms of services</a>
        </div>

        <div class="footer-wrapper">
            <h4 class="support">SUPPORT</h4>
            <a href="#">Customer service</a>
            <a href="#">Trust & Safety</a>
            <a href="#">Partnership</a>
        </div>
        <div class="footer-wrapper">
            <h4 class="community">COMMUNITY</h4>
            <a href="#">Invite a Friend</a>
            <a href="#">Event</a>
        </div>
        </div>
        <div class="footer-wrapper">
            <h4 class="about">ABOUT</h4>
            <a href="#">FAQ</a>
            <a href="#">Get Inspired</a>
            <a href="#">Blog</a>
        </div>

        <div class="footer-wrapper">
            <h4 class="contact as">CONTACT US</h4>
            <i class="fa-solid fa-location-dot"></i> Butwal Rupandehi, Nepal

            <a href="tel:+977-9812345678" class="text-white-50 mb-1 mt-1">+977 9866043966</a>
            <!-- <a href="tel:+977-9812345678" class="text-white-50 mb-1 mt-1">+977 1 4106700</a> -->

            <a class="text-white-50" href="jobhubutwal.com">www.jobhubutwal.com</a>

    </footer>
	
</body>
</html>