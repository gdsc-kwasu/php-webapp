<?php
$db= mysqli_connect("localhost","root","","dsc");
if (isset($POST['submit'])) {
	$query="INSERT INTO `feedback_table` (`id`, `Name`, `Email`, `comment`) VALUES (NULL, '$_POST[name]', '$_POST[Email]', '$_POST[comments]');";
	$result=mysqli_query($db,$query);
	if ($result) {
		echo "success";
	}
	else{
		echo "please enter your details correctly";
	}
}
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Developer Students Club, KWASU Chapter</title>
    <link rel="icon" href="images/dsclogo.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark nav-header px-3 px-md-5">
            <a class="navbar-brand" href="#">
                <img src="images/dsclogo.jpg" alt="logo" width="130" height="45" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-light" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#leads">LEADS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#partners">PARTNERS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#gallery">GALLERY</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid bg-intro">
        <div class="row">
            <div class="col-12 intros">
                <p class="head text-center">
                    Developer Student Clubs<br> Kwara State University
                </p>
                <p class="text-center sub">Developer Student Clubs, KWASU chapter is an affiliate of Google Incorporation to introduce University Students to various programming and development Skills to make them self dependent and ease off the stress of unemployment</p>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="about">
        <div class="row">
            <div class="col-md-4 col-8 offset-2 offset-md-0 px-md-5 py-md-5 pt-3">
                <i class="d-flex justify-content-center fas fa-lightbulb fa-2x text-primary"></i>
                <p class="about-head text-center mt-2 mt-md-3">Mission</p>
                <p class="about-sub text-center">Developer Student Clubs (DSC) are community groups for students from any academic background in their undergraduate or graduate term. To remove them from the thought of employment</p>
            </div>
            <div class="col-md-4 col-8 offset-2 offset-md-0 px-md-5 py-md-5">
                <i class="d-flex justify-content-center fas fa-search fa-2x text-primary"></i>
                <p class="about-head text-center mt-2 mt-md-3">Value</p>
                <p class="about-sub text-center">A Non-profit group created by Developers for Developers. To initiate the spirit of coding and critical thinking. </p>
            </div>
            <div class="col-md-4 col-8 offset-2 offset-md-0 px-md-5 py-md-5">
                <i class="d-flex justify-content-center fas fa-eye fa-2x text-primary"></i>
                <p class="about-head text-center mt-2 mt-md-3">Ambition</p>
                <p class="about-sub text-center">By joining a DSC, students build their professional and personal network, get access to Google developer resources, and work together to build solutions for local problems in a peer-to-peer learning environment.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid section py-3 py-md-5" id="leads">
        <div class="row">
            <div class="col-12">
                <p class="text-center lead-head">Leads</p>
                <p class="text-center lead-sub text-muted">Meet our Leads</p>
            </div>
            <div class="row col-10 offset-1 col-md-3 offset-md-0 shadow bg-light mr-1 lead-radius mt-2">
                <div class="col-5 col-md-12 py-2">
                    <div class="d-flex justify-content-center">
                        <img src="images/logo.jpg" class="lead-img">
                    </div>
                    <p class="text-center lead-name mt-2">Jekayinoluwa Olabemiwo</p>
                    <p class="text-center lead-post">DSC Lead</p>
                </div>
                <div class="col-7 col-md-12 align-self-center">
                    <p class="quote text-center">"I am always ready to impact. Inspired with the zeal to build World Next Developers. I am a man oh humour and valour. My stack is my way of life. I love who I am."</p>
                </div>
            </div>
            <div class="row col-10 offset-1 col-md-3 offset-md-0 shadow bg-light mr-1 lead-radius mt-2">
                <div class="col-5 col-md-12 py-2 order-2 order-md-1">
                    <div class="d-flex justify-content-center">
                        <img src="images/logo.jpg" class="lead-img">
                    </div>
                    <p class="text-center lead-name mt-2">Jekayinoluwa Olabemiwo</p>
                    <p class="text-center lead-post">DSC Lead</p>
                </div>
                <div class="col-7 col-md-12 align-self-center order-1 order-md-2">
                    <p class="quote text-center">"I am always ready to impact. Inspired with the zeal to build World Next Developers. I am a man oh humour and valour. My stack is my way of life. I love who I am."</p>
                </div>
            </div>
            <div class="row col-10 offset-1 col-md-3 offset-md-0 shadow bg-light mr-1 lead-radius mt-2">
                <div class="col-5 col-md-12 py-2">
                    <div class="d-flex justify-content-center">
                        <img src="images/logo.jpg" class="lead-img">
                    </div>
                    <p class="text-center lead-name mt-2">Adedeji Stephen</p>
                    <p class="text-center lead-post">Web Lead</p>
                </div>
                <div class="col-7 col-md-12 align-self-center">
                    <p class="quote text-center">"I am always ready to impact. Inspired with the zeal to build World Next Developers. I am a man oh humour and valour. My stack is my way of life. I love who I am."</p>
                </div>
            </div>
            <div class="row col-10 offset-1 col-md-3 offset-md-0 shadow bg-light lead-radius mt-2">
                <div class="col-5 col-md-12 py-2 order-2 order-md-1">
                    <div class="d-flex justify-content-center">
                        <img src="images/logo.jpg" class="lead-img">
                    </div>
                    <p class="text-center lead-name mt-2">Salako Dolapo</p>
                    <p class="text-center lead-post">IOT Lead</p>
                </div>
                <div class="col-7 col-md-12 align-self-center order-1 order-md-2">
                    <p class="quote text-center">"I am always ready to impact. Inspired with the zeal to build World Next Developers. I am a man oh humour and valour. My stack is my way of life. I love who I am."</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5 px-5 py-3 py-md-5 tracks border-bottom">
        <div class="row">
            <div class="col-10 offset-1 offset-md-0 col-md-4 px-0 px-md-2 my-2 pt-2">
                <div class="tracks-bg shadow p-3">
                    <p class="head"> <span class="fas fa-box fa-1x mr-3"></span>Web Track</p>
                    <p class="sub"><span class="fas fa-sort-amount-up fa-1x mr-3"></span>20 Students trained</p>
                </div>
            </div>
            <div class="col-10 offset-1 offset-md-0 col-md-4 px-0 px-md-2 my-2 pt-2">
                <div class="tracks-bg shadow p-3">
                    <p class="head"> <span class="fas fa-box fa-1x mr-3"></span>Artificial Intelligence</p>
                    <p class="sub"><span class="fas fa-sort-amount-up fa-1x mr-3"></span>20 Students trained</p>
                </div>
            </div>
            <div class="col-10 offset-1 offset-md-0 col-md-4 px-0 px-md-2 my-2 pt-2">
                <div class="tracks-bg shadow p-3">
                    <p class="head"> <span class="fas fa-box fa-1x mr-3"></span>UI/UX</p>
                    <p class="sub"><span class="fas fa-sort-amount-up fa-1x mr-3"></span>20 Students trained</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid partners py-2 py-md-3" id="partners">
        <div class="row">
            <div class="col-12">
                <p class="text-center partners-head">Partners</p>
                <p class="text-center partners-sub text-muted">Partnership is the soul of progression</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="images/gdg.jpg" class="partners-img mt-2">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="images/nacoss.jpg" class="partners-img mt-2">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="images/gdgp.png" class="partners-img mt-2">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="images/nuesa.jpg" class="partners-img mt-2">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid subscribe" id="contact">
        <div class="row py-3 py-md-4 px-md-5 mx-0">
            <div class="col-lg-6 col-12 px-5 desc align-self-center">
                <p>What Do you observe?
                </p>
                <p class="right">Make a Feedbackabout your exploration!</p>
            </div>
            <div class="col-md-6 col-12 px-md-5 px-1 mt-1 mt-md-3 align-self-center">
            	<form action="DSC.PHP" method="POST">
	                <div class="form-group row">
	                    <input type="text" name="name" class="form-control col-10 offset-1 mr-3" placeholder="Full Name">
	                    <input type="email" name="Email" class="form-control col-10 offset-1 mr-3 mt-2" placeholder="Email Address">
	                    <textarea class="form-control col-10 offset-1 mr-3 mt-2" name="comments" placeholder="Drop your Feedback"></textarea>
	                    <button name="Submit" class="btn btn-primary col-10 offset-1 mt-2">
	                        Submit
	                        <i class="fas fa-sign-in-alt ml-1"></i>
	                    </button>
	                </div>
            	</form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="row pt-3 pl-3 pl-md-4">
            <div class="col-md-3 col-12 order-md-1 order-2 mt-3 mt-md-0">
                <p class="copy">&copy; Coyright 2019</p>
                <p class="made">DSC KWASU</p>
            </div>
            <div class="col-md-2 col-12 order-md-2 order-1 offset-md-7 d-flex justify-content-center">
                <a href="#" class="link mx-2"><span class="fab fa-instagram fa-2x"></span></a>
                <a href="#" class="link mx-2"><span class="fab fa-facebook-square fa-2x"></span></a>
                <a href="#" class="link ml-2"><span class="fab fa-twitter fa-2x"></span></a>
            </div>
        </div>
    </div>
    <!-- call to action section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>