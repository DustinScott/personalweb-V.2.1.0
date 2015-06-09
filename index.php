<?php include('includes/ewp.php');

$siteName = "DustinsSite";
	
include('includes/mail_script.php');   

?> 

<html>
  <head>
    <title>Brandon Espinoza | Front-End Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <script type="text/javascript" src="emailkey/jquery.js"></script>
  </head>
<!--   <body> -->
  <body data-spy="scroll" data-target="navbar-nav">
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
          <a class="navbar-brand" href="#">Brandon Espinoza</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#iDo">What I Do</a></li>
            <li><a href="#clients">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="col-md-12 col-lg-12 elslide">

    </div>



    <div id="about" class="col-lg-12">
      <h1 class="h1s h1Margins">About Me</h1>
      <div class="col-lg-6 elemMargins">
        <div class="col-lg-2">
          <h3 class="h3s">Profile:</h3>
        </div>
        <div class="col-lg-10">
          <h3 class="h3s">Web Developer, Photographer, Web Designer</h3>
        </div>
        <!-------- * SKILLS PROGRESS BAR * -------->
        <div class="col-lg-3">
          <h3 class="h3s">My Skills:</h3>
        </div>
        <div class="col-lg-8">
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">HTML 90%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">CSS 90%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
              <span class="skillDesc">JavaScript 70%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              <span class="skillDesc">Ruby 60%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
              <span class="skillDesc">Photoshop 85%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">Foundation 90%</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="skillDesc">Twitter Bootstrap 90%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 elemMargins" >

<img class="img-responsive" src="img/profile.png">

      </div>
    </div>

<!--------------- * WHAT I DO * ----------------->
    <div id="iDo" class="iDo col-lg-12">
      <h1 class="h1s h1Margins whtIdo">What I Do</h1>
      <div class="container">
        <div class="col-lg-12 elemMargins">
          <div class="h1Margins col-lg-3 squares">
            <h3 class="Squaresh3s">Clean Code <i class="fa fa-code"></i> </h3>
            <p class="squaresPs">As a Front-End Developer I always do my best to write clean and sharp code and to use the newest and the best tools, which eliminates excess code.</p>
          </div>
          <div class="col-lg-offset-1 col-lg-3 squares">
            <h3 class="Squaresh3s">Responsive<i class="dibujo fa fa-desktop"></i><i class="dibujo fa fa-laptop"></i><i class="dibujo fa fa-tablet"></i><i class="dibujo fa fa-mobile"></i></h3>
            <p class="squaresPs">A responsive website means that your website will work on any screen size, from large-desktop sizes to small desktop to tablets to mobile phones. Having a website that works on any screen size means your website will be more appealing for your visitors.</p>
          </div>
          <div class="col-lg-offset-1 col-lg-3 squares">
            <h3 class="Squaresh3s">Design<i class="dibujo fa fa-pencil-square-o"></i></h3>
            <p class="squaresPs">My website design are a modern and clean design that adapts to your business or project.</p>
          </div>
        </div>
      </div>
    </div>
<!--------------- * Portfolio * ----------------->
    <div id="clients" class="col-lg-12">
      <h1 class="h1s h1Margins">Portfolio and Clients</h1>
      <div class="container cont">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <a target="_blank" href="http://www.brotherwindows.com"><img class="img-responsive" src="img/portfolio/clearchoice_logo3.png"></a>
          </div>
          <div class="col-sm-offset-1 col-sm-3 col-lg-3">
            <a target="_blank" href="http://www.cheffitpro.com"><img class="img-responsive" src="img/portfolio/ChefItLOGO.png"></a>
          </div>
          <div class="col-sm-offset-1 col-sm-3 col-lg-3">
            <a target="_blank" href="http://www.ezlawncarellc.com"><img class="img-responsive" src="img/portfolio/LOGO%20Jan%202012.png"></a>
          </div>
        </div>
      </div>
    </div>
<!--------------- * Contact Form * ----------------->


	



    <div id="contact" class="col-lg-12 cont">
      <div class="container">
        <div class="row">
	        
	        
          <form  action="" method="post" class="col-lg-8 col-lg-offset-2">
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
          
               
          <div class="col-lg-4">
            <a target="_blank" href="htpp://www.github.com/bespinoza10"><i class="fa fa-github"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/bespinoza10"><i class="dibujo fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    
<!--  EMAIL SYSTEM INSTALL -->

<?php
$mailer_change = $_GET['mailer'];

if(!empty($mailer_change)){

$if_show = 'style="display:inherit;"';

}
	
?>	
    <div <?php echo $if_show; ?> id="con_sel" class="col-lg-12 cont">
     <div class="container" >
        <div class="row">
         
         <?php include('emailkey/emailer.php')?>
         
          
         </div>
      </div>
    </div>
 
 
    
    
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
  </body>
</html>