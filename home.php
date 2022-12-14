<?php include('controller.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Donation - </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage - doNation</title>
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9ba1f57a06.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    </head>
    <body>
        
        <section class="header">
            <nav>
                <a href="index.html"><img src="Css/signature2.png" ></a>
                <div class="nav-links" Id="navLinks"> 
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="About us.html">About</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
                <i class="fa  fa-bars"  onclick="showMenu()"></i>
            </nav>
                <div class="text-box">
                    <h1>World's Biggest Donetion Platform</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley</p>
                    <a href="" class="hero-btn">Visit Us to know more</a>
                    
                </div>
        </section>
  
        <section class="how">
            <h1>How It Works</h1>
            

            <div class="row">
                <div class="how-col">
                    <h3>NONPROFITS</h3>
                    <p>Nonprofits around the world apply and join doNation to access more funding, to build new skills, and make important connections
                    </p>
            </div>

                <div class="how-col">
                    <h3>DONORS</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    </p>
                </div>
                <div class="how-col">
                    <h3>OUR IMPACT</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    </p>
                </div>	
        </section>

        <section class="disaster">  
            <h1>Disaster Recovery</h1>
            <p>doNation makes it easy to donate to trusted, locally driven disaster relief and recovery efforts around the world.</p>

            <div class="row">
                <div class="disaster-col">
                    <img src="Hpics/H01.jpg" >
                    <div class="layer">
                    <a href="https://hpb.health.gov.lk/covid19-dashboard/"> <h3>Sri Lanka Covid-19 Situation</h3></a>
                    </div>
                </div>
                <div class="disaster-col">
                    <img src="Hpics/H02.jpg" >
                    <div class="layer">
                        <a href="https://www.aljazeera.com/where/afghanistan/"><h3>Afghanistan Emaergency Fund</h3></a>
                    </div>
                </div>
                <div class="disaster-col">
                    <img src="Hpics/H03.jpg" >
                    <div class="layer">
                        <a href="https://www.srilankaview.com/weather.htm"></a><h3>Sri Lanka Wheather</h3></a>
                    </div>
                </div>

            </div>
        </section>
        <section class="news">
            <h1>News Feed</h1>
        
            <div class="row">
                <div class="news-col">
                    <img src="Hpics/H04.jpg" >
                    <h3>Coronavirus Relief</h3>
                    <p>Support coronavirus relief efforts led by doNation vetted nonprofit partners.</p>
                </div>
                <div class="news-col">
                    <img src="Hpics/H05.jpg" >
                    <h3>We're Hiring</h3>
                    <p>Join our amazing team and help people around the world.</p>
                </div>
                <div class="news-col">
                    <img src="Hpics/H06.jpg" >
                    <h3>Wear Right Mask</h3>
                    <p>The doNation site is running a campaign these days about putting on the right mask.</p>
                </div>
            </div>
        
        </section>

<footer>
	<div class="row">
		<div class="col">
			<img src="Css/signature2.png" class="logo">
			<h2>About Us</h2>
			<p>Donations is made in order to help reduce poverty in the world.<br> So work with us to make a difference.</p>
			<h2>Contact us</h2>
			<p class="email-id">donationsworldwide007@gmail.com</p>
		</div>
		<div class="col">
			<h3>Our Details</h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Product</a></li>
				<li><a href="About us.html">About Us</a></li>
				<li><a href="Contact us.html">Contact Us</a></li>
				<li><a href="#">Sign Up | Sign In</a></li>
			</ul>
			
		</div>
		<div class="col">
			<h3>Our Genaral Managers</h3>
			<ul>
				<li><a href="#">Nisal</a></li>
				<li><a href="#">Nethum</a></li>
				<li><a href="#">Jaliya</a></li>
				<li><a href="#">Pashindu</a></li>
				<li><a href="#">Dewmin</a></li>
			</ul>
			
		</div>
		<div class="col">
			<h3>Join to Donate</h3>
			<form >
				<i class="far fa-envelope"></i>
				<input type="email" placeholder="Enter your Email" required>
				<button type="submit"><i class="fas fa-arrow-right"></i></button>
			</form>
			<div class="social-icons">
				<a href="https://www.facebook.com/Donations-102087662222457"><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/Donatio66123075"><i class="fab fa-twitter"></i></a>
				<a href="https://www.instagram.com/donationgrp03/?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
				<a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><i class="fab fa-linkedin"></i></a>
			</div>
		</div>
	
	</div>
	<hr>
	<p class="copyright">Copyright ?? 2021 <a href="#">donations</a>. All rights reserved</p>
</footer>

<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }
</script>


        
    </body>
    
</html>
