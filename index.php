<?php include('includes/ewp.php');

include('includes/mail_script.php');

?>

<html>
  <head>
    <title>Brandon Espinoza | Front-End Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="EspinozaBrand is Skilled group of Programmers(Backend / Web development) who endure in doung the best website for you company. Founded by Brandon Espinoza, Websites, apps, database"/>
    <meta name="keywords" content="web design Nashville ,Franklin Web Design, Spring Hill Web design, Columbia Web Design, Nashville, TN, Nashville Software School, Spring Hill, Franklinweb development, Hosting, SEO, Social Media Marketing, programmers, programming.">
    <meta name="description" content="Brandon Espinoza Web designer in Nashville Tn, Spring Hill TN, Franklin Tn, Brentwood TN.">
    <meta name="keywords" content="EspinozaBrand, Brandon Espinoza, Brandon Espinoza Nashville, EspinozaBrand USA, EspinozaBrand Nashville, espinozabrand.">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mediaQ.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="emailkey/jquery.js"></script>
  </head>
<!--   <body> -->

  <body data-spy="scroll" data-target="navbar-nav">

    <!-- NAV-BAR -->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  class="navbar-brand" href="#home">Brandon Espinoza</a>
        </div>
            <!-- LOGIN BUTTON -->
			<div style="display:none;" id="loginSEC" class="col-lg-12 cont">
     		<div class="container">
       		<div class="row">
						<div>
		        	<form action="" method="POST">
               <label>Login</label>
               <input type="text" name="usnm" placeholder="username" />
               <input type="password" name="pswd" placeholder="password" />
							 <input type="submit" value="submit">
		         	</form>
		        </div>
           </div>
          </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#iDo">What I Do</a></li>
            <li><a href="#clients">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
			<li id="login_toggle"><a href="#">Login</a></li>

           <script>
                   $("#login_toggle").click(function(){
                       $("#loginSEC").slideToggle();

                   })
           </script>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- INTRODUCCION SQUARE -->
    <div id="home" class="col-sm-12 col-md-12 col-lg-12 elslide">
      <div class="wow slideInDown col-sm-5 col-md-12 col-lg-5 introsquare col-lg-offset-3" data-wow-delay=".3s" >
        <h1 class="introH1">Brandon Espinoza</h1>
        <h3 class="introP">Web Designer | Web Developer | Photograher</h3>
      </div>
    </div>

    <!----- * ABOUT SECTION * ---->

    <div id="about" class="col-sm-12 col-md-12 col-lg-12">
      <h1 class="wow fadeInLeft  h1s h1Margins" data-wow-offset="10" >About Me</h1><hr>
      <div class="col-sm-6 col-lg-6 elemMargins wow flipInX " data-wow-offset="10" data-wow-delay=".6s">
        <div class="col-md-1 col-lg-2">
          <h3 class="h3s">Profile:</h3>
        </div>
        <div class="col-md-11 col-lg-10">
          <h3 class="h3s">Web Developer, Photographer, Web Designer</h3>
        </div>
        <!--- SKILLS PROGRESS BAR ---->
        <div class="col-lg-3">
          <h3 class="h3s">My Skills:</h3>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-8">
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="1.1s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">HTML 90%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="1.3s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">CSS 90%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="1.5s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
              <span class="skillDesc">JavaScript 70%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="1.7s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              <span class="skillDesc">Ruby 60%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="1.9s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
              <span class="skillDesc">Photoshop 85%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="2.1s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">Foundation 90%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar wow slideInLeft " data-wow-offset="20" data-wow-delay="2.3s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">Twitter Bootstrap 90%</span>
            </div>
          </div>
        </div>
      </div>

      <div class="wow bounceInRight col-sm-6 col-md-6 col-lg-6 profilePP elemMargins" data-wow-offset="10" >
        <div class="col-sm-3 col-md-5 col-lg-5 col5Pad">
          <img class="wow bounceInRight mifoto img-responsive" src="img/BrandonShots/profile_pic2.jpg" data-wow-offset="10" data-wow-delay=".6s">
        </div>
        <div class="col-sm-3 col-md-6 col-lg-5">
          <p class="wow fadeIn proImgP" data-wow-offset="10" data-wow-delay="1.3s">I am a recent graduate of  Nashville Software School. I enjoy coding and learning new languages. I also do some freelancing making websites and photography. Thanks for visiting my site. Please, feel free to contact me!</p>
        </div>
				<!-- <img class="img-responsive" src="img/profile.png"> -->

      </div>
    </div>
    <div id="iDo" class="iDo col-sm-12 col-md-12 col-lg-12">
      <h1 class="h1s h1Margins whtIdo wow fadeInLeft " data-wow-offset="10">What I Do</h1><hr>
      <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12 elemMargins">
          <div class="col-sm-4 col-md-4 col-md-offset-1 col-lg-offset-1 col-lg-3 squares wow bounceInUp " data-wow-offset="10" data-delay=".9 s">
            <h3 class="Squaresh3s">Design<i class="dibujo fa fa-pencil-square-o"></i></h3>
            <p class="squaresPs">My website design are a modern and clean design that adapts to your business or project.</p>
          </div>
          <div class="col-sm-4 col-md-4 col-md-offset-1 col-lg-3 squares wow bounceInUp " data-wow-offset="10" data-delay=".5s">
            <h3 class="Squaresh3s">Clean Code <i class="fa fa-code"></i> </h3>
            <p class="squaresPs">As a Front-End Developer I always do my best to write clean and sharp code and to use the newest and the best tools, which eliminates excess code.</p>
          </div>
          <div class="col-sm-4 col-md-9 col-md-offset-1 col-lg-offset-1 col-lg-3 squares wow bounceInUp " data-wow-offset="10" data-delay=".7s">
            <h3 class="Squaresh3s">Responsive<i class="dibujo fa fa-desktop"></i><i class="dibujo fa fa-laptop"></i><i class="dibujo fa fa-tablet"></i><i class="dibujo fa fa-mobile"></i></h3>
            <p class="squaresPs">A responsive website means that your website will work on any screen size, from large-desktop sizes to small desktop to tablets to mobile phones. Having a website that works on any screen size means your website will be more appealing for your visitors.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="clients" class=" col-sm-12 col-md-12 col-lg-12">
      <h1 class="h1s h1Margins wow fadeInLeft " data-wow-offset="10" >Portfolio and Clients</h1><hr>
      <div class="container cont">
        <div class="row">
          <div class="col-sm-2 col-md-3 col-lg-3 wow rubberBand" data-wow-offset="10" data-wow-delay=".8s">
            <a target="_blank" href="http://www.brotherwindows.com"><img class="img-responsive" src="img/portfolio/clearchoice_logo3.png"></a>
          </div>
          <div class="col-sm-offset-1 col-md-3 col-sm-3 col-lg-3 wow rubberBand" data-wow-offset="10" data-wow-delay="1s">
            <a target="_blank" href="http://www.cheffitpro.com"><img class="img-responsive" src="img/portfolio/ChefItLOGO.png"></a>
          </div>
          <div class="col-sm-offset-1 col-md-3 col-sm-3 col-lg-3 wow rubberBand" data-wow-offset="10" data-wow-delay="1.2s">
            <a target="_blank" href="http://www.ezlawncarellc.com"><img class="img-responsive" src="img/portfolio/LOGO%20Jan%202012.png"></a>
          </div>
        </div>
      </div>
    </div>
      <!-- EMAIL CONTACT FORM  -->
    <div id="contact" class="col-sm-12 col-md-12 col-lg-12 cont">
      <div class="container">
        <div class="row">
          <form  action="" method="post" class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <h1 class="whtIdo h1s contactH1 cont">Contact</h1>
            <div class="form-group">
              <label class="contactHs">Full Name:</label>
              <input type="text" name="Name" class="form-control" value="<?php get_data('Name'); ?>" placeholder="John Smith">
            </div>
            <div class="form-group">
              <label class="contactHs">Email address</label>
              <input type="email" name="Email" class="form-control" id="exampleInputEmail1" value="<?php get_data("Email"); ?>" placeholder="john@smith.com">
            </div>
            <label class="contactHs">Your Message</label>
            <textarea class="form-control" rows="3" name="Comments" placeholder="Hello this is my message"><?php get_data("Comments"); ?></textarea>
            <button type="submit" class="btn btn-default btn-lg contactHs">Submit</button>
          </form>
          <div class="col-md-4 col-lg-4 wow shake" data-wow-offset="10" data-wow-iteration="3">
            <a target="_blank" href="htpp://www.github.com/bespinoza10"><i class="fa fa-github social"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/bespinoza10"><i class="dibujo fa fa-linkedin social"></i></a>
          </div>
        </div>
      </div>
    </div>

<!--  EMAIL SYSTEM INSTALL -->
<?php

    $u_nm = $_POST['usnm'];
    $p_wd = $_POST['pswd'];


    if($u_nm == 'Brandon' && $p_wd == 'control'){

    echo '<div id="con_sel" class="col-lg-12 cont">';
		     echo '<div class="container" >';
		         
		         echo '<div class="row">';
		         
		         include('emailkey/emailer.php');
		         
	        echo ' </div>';
	      echo ' </div>';


      }

      ?>



    <script type="text/javascript">
        $(document).ready(function(){
          $('.nav li a').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname) {
              var $target = $(this.hash);
              $target = $target.length && $target
              || $('[name=' + this.hash.slice(1) +']');
              if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body')
                .animate({scrollTop: targetOffset}, 1000);
               return false;
              }
            }
          });
        });
    </script>




    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>

  </body>
</html>
