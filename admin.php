

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vegetable Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css links -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/typo.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/hoverex-all.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/inner.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/caption-hover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circle-hover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css links -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- font files -->
<!-- js files  -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<!-- /js files -->


	<script>
		function validate()
		{
		x=document.forms
		name=x.name.value
		paas=x.pass.value
		m=0
		if(name=="admin" && paas=="admin")
		{
			window.open("adview.php");
		}
		else
		{
			alert("Invalid User Name or Password!")
			}
		}
</script>



<!-- /validation -->	
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">TAMILNADU JALLIKATTU REGISTRATION</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">Registration</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li class="active"><li><a href="admin.php">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /Fixed navbar -->
<!-- banner section -->	
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(images/jall_1.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>The practice of Jallikattu, also known as Eruthazhuvuthal or Manju virattu</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000" style="background-image:url(images/jall-2.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>The term 'Jallikattu' originates from the Tamil words Salli and Kattu, referring to silver or gold coins tied to the bulls' horns</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000" style="background-image:url(images/jall_3.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Jallikattu is believed to have been practiced at least 2,500 years ago</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/jall_4.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Jallikattu is taming the bull</h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<!-- Contact -->

	<section class="contact-form">
	<h3 class="text-center slideanim">Administration login</h3>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<form method="post" name="forms">
					<div class="row">
						<div class="form-group col-lg-4">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="" required>
						</div>
						<div class="form-group col-lg-4">
							<label>password</label>
							<input type="password" name="pass" class="form-control" placeholder="" required>
						</div>
						<div class="form-group col-lg-12">
							 <input type="submit" name="del" onclick="validate()" class="btn btn-lg btn-outline"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>		



		
		<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
			<div class="footer-col col-md-4">
                    <h4>Location</h4>
                    <p>xxx<br>yyy, Chennai-600001</p>
                	</div>
                 <div class="footer-col col-md-4">
                    <h4>About Jallikattu</h4>
                    <p>The ultimate goal is not the develope this website,we want develope <br>the jallaikattu event <br>all over the world</p>
                </div>
				<div class="footer-col col-md-4">
                    <h4>Contact Us</h4>
                    <p>Tamilnadu Government<br>Chennai-600001</p>
                	</div>
        </div>
	</div>
   
</footer><!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/index2.js"></script>
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main2.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>

<script src="js/retina-1.1.0.js"></script>
<script src="js/jquery.hoverex.min.js"></script>
<!-- /js files -->
</body>
 </html>
   