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
		if(name== "" && paas=="")
		{
		m=1
		alert("Invalid User Name or Password")
		}
		if(m==0)
		{
		alert("Login Success")
		}
		}
</script>
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

			

<div class="container"><br>
  <center><h1>Feedback Details</h1></center>
  <br><br><table border="2" width="100%" cellpadding="20px">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Email Id</th>
        <th>Phone Number</th>
         <th>suggestion</th>
		 <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
      <tr>
   <?php
    // Create a connection to the MySQL database
    $conn = mysqli_connect("localhost:127.0.0.1","root","","jallikattu");
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  $result = mysqli_query($con,"SELECT * FROM contact");

  while($row = mysqli_fetch_array($result)){
     echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['suggestion'] . "</td>";
echo "<td>" . $row['feedback'] . "</td>";
echo "</tr>";
      }?>
      
    </tbody>
  </table>
</div>
<!-- js files -->
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
