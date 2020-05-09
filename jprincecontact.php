<?php
error_reporting(0);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "jprincedesigns";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>


<!DOCTYPEhtml>

<html>
<head>
   <title>https://jprincedesigns.com</title>
<style>
  #header {
         
		 
}
h6 {
	 
	 font-size: 20px;
	 
	
}

img {
    position: relative;
    max-width: 100%;
	max-height: 90%;
}
* .body {
         font-family: calibri;
		 font-size: 20px;
}
* .contact {
         border: 7px solid violet;
		 width: 350px;
		 margin: 40px;
}
p {
   color: white;
}
* .why {
        background-color: violet;
		animation-name: colorchange;
		animation-duration: 50s;
		
}
@keyframes colorchange {
   
        0% {background-color: violet;}
		10%{background-color: red;}
		20%{background-color: gold;}
        30% {background-color: blue;}
		40%{background-color: red;}
		50%{background-color: gold;}		
        60% {background-color: violet;}
		70%{background-color: red;}
		80%{background-color: gold;}		
        90% {background-color: Lime ;}
		95%{background-color: red;}
		100%{background-color: gold;}	
}
form {
      background-color: violet;
	  height: 500px;
	  width: 800px;
	  max-width: 100%;
}
* .inner {
         margin: 50px;
}
* .inner input[type="text"], input[type="password"], input[type="email"]
{
        width: 750px;
		max-width: 100%;
}
* .inner input[type="submit"]
{
	height: 35px;
	width: 150px;
	border-radius: 25px;
	background-color: ;
	color: blue;
}
* .inner input[type="submit"]:hover
{
	cursor: pointer;
	background: violet;
	color: skyblue;
	
	
}

h1 {
    text-align: center;
	font-family: algerian;
}

address {
         background: violet;
		
		 text-align: center;
		 color: white;
	 	
}

</style>
	
	
	
	<link rel='stylesheet' id='astra-theme-css-css'  href='http://localhost/wordpress/wp-content/themes/astra/assets/css/minified/style.min.css?ver=2.1.3'
	type='text/css' media='all' />




</head>

<body>
<div id="header">
<h6><a href="jprincehome.php"><img src="main.png" width="300px"></a>&nbsp &nbsp &nbsp &nbsp <span style="font-size: 30px; font-family: algerian;
color: violet">
JPRINCEDESIGNS</span> &nbsp &nbsp &nbsp &nbsp
<a href="jprincehome.php" style="color: violet">HOME</a>|
<a href="jprinceabout.php" style="color: violet">ABOUT</a>|
<a href="jprinceservices.php" style="color: violet">OUR SERVICES</a>|
<a href="jprincecontact.php" style="color: violet">CONTACT US</a>|

</h6>
</div>

<div class="contact">
<h2>OUR TELEPHONE NO.</h2>
<b><h2 style="color:blue"> +234 815 967 1291<br/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp OR <br/> +234 802 056 0669</h2></b>
<h2>EMAIL US AT: <a href="https://gmail.com/jprincedesigns57@gmail.com">jprincedesigns57@gmail.com</a></h2>

<a href="https://www.facebook.com/abdulwadudoluwa/"><img src="face.png" width="50px" height="50px"></a> 
<a href=" https://chat.whatsapp.com/KWBsitWHJ2zBHer0O9lMfX"><img src="whats.jpg"  width="40px" height="40px"></a>
<a href="https://www.pinterest.com/pasmow2/"><img src="pin.jpg"  width="40px" height="40px"></a>
<a href="https://www.linkedin.com/in/j-prince-designs-29ba671a6/"><img src="in.jpg"  width="40px" height="40px"></a>
<a href="whatsapp.com"><img src="git.jpg"  width="40px" height="40px"></a>
<a href="https://www.youtube.com/channel/UCPxqHZzuGYJCTAFKyI2_P6Q"><img src="you.jpg"  width="40px" height="40px"></a>

</div>



<form method="POST">
<div class="inner">
<h1>CONTACT FORM</h1>
<label>FIRST NAME</label><br>
<input type="text" name="first" placeholder="FIRST NAME" required><br>

<label>LAST NAME</label><br>
<input type="text" name="last" placeholder="INPUT LAST NAME" required><br>
<label>YOUR EMAIL</label><br>
<input type="email" name="mail"  placeholder="INPUT EMAIL" required><br>

<label>YOUR MESSAGE</label><br>
<textarea style="width: 750px; max-width:100%" name="what" required></textarea><br>
<label>WANT TO BE A CLIENT?</label><br>
YES <input type="radio" name="check" value="yes">  NOT YET<input type="radio" name="check" value="no"><br>

<input type="submit" value="submit" name="submit">


</div>
</form>

<?php

if(isset($_POST['submit'])) {
	 $first  = mysqli_real_escape_string ($conn, strip_tags ($_POST['first']));
	 $last  = mysqli_real_escape_string ($conn, strip_tags ($_POST['last']));
	 $mail  = mysqli_real_escape_string ($conn, strip_tags ($_POST['mail']));
	 $what  = mysqli_real_escape_string ($conn, strip_tags ($_POST['what']));
	 $check  = mysqli_real_escape_string ($conn, strip_tags ($_POST['check']));
	
	
	 $link  = "INSERT INTO FORM (FIRSTNAME, LASTNAME, EMAIL, MESSAGE, CLIENT)
	  VALUES ('$first', '$last', '$mail', '$what', '$check')";
	  
	  if(mysqli_query($conn,$link)){
		 
		 echo "Form submitted successfully";
     }
	 else {
		 echo "Not Submitted";
	 }
}
?>

<hr/>
<div class="why">
<div class="layout-4">
	<div class="adv-overlay">
		<div class="ast-container">
			<div class="ast-row">
				
<div class="why">
<h1 style="color: violet; font-size: 45px; text-align: center"> WHY CHOOSE US</h1><p>
<h1 style="text-align:center"><img src="shake.png"><BR>
TRUST</h1><p>
<h1 style="text-align:center"><img src="people.png"><br>
CO-OPERATION</h1><p>
<h1 style="text-align:center"><img src="love.png"><br>
LOVE</h1>


</div>
		</div>				</div>
		
		
</div>
</div>
<footer
		
<div class="footer-adv footer-adv-layout-4">
	<div class="footer-adv-overlay">
		<div class="ast-container">
			<div class="ast-row">
				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 footer-adv-widget footer-adv-widget-1" >
					
					<div id="text-5" class="widget widget_text"><h2 class="widget-title">OUR AIMS</h2>		
					<div class="textwidget" style="color: white">J Prince Group has gotten a very high target<br>
and we worked towards achieving it. <br>
Our dream and aim is to become the most<br>
trusted company when it comes to design of<br>
anything among those that we offer for services.<br>
By doing this we will be able to satisfy our<br>
customers and give them the best of offers and<br>
designs.We want to be there for you day and<br>
night to satisfy your needs on any kind of design.<br>

</div>
		</div>				</div>
		
		
		<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 footer-adv-widget footer-adv-widget-4" >
					<div id="text-3" class="widget widget_text"><h2 class="widget-title">WHAT WE DO</h2>			
					<div class="textwidget"><p>J Prince Group has a lot of jobs which</p>
<P>are mostly online and internet jobs. We offer</P>
<P>different kind sof jobs you can be in need of </P>
<P>and we have different specialists for every job we do.</P>

</div>
		</div>				</div>
	
				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 footer-adv-widget footer-adv-widget-3" >
					<div id="text-7" class="widget widget_text"><h2 class="widget-title">GET IN TOUCH </h2>
					<div class="textwidget"><p>J Prince Group can be located at Lagos state Nigeria.</p>
<P>Off Ojo Alaba Int'l Market, Shibiri Ajangbadi,</P>
<P>AT No. 23, Rufai Arolohun street, off Baale street, Shibiri last bus-stop.</p>
<P>Or get in touch with us on our whatsapp Number <span style="color: red">+234 815 967 1291</span></p>

</div>
		</div>				</div>
		
		<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 footer-adv-widget footer-adv-widget-3" >
					<div id="text-7" class="widget widget_text"><h2 class="widget-title">OUR SITES </h2>
					<div class="textwidget"><p>J PRINCE WEB DESIGNS</p>
<P>J PRINCE LOGO DESIGN</P>
<P>J PRINCE GRAPHICS DESIGN</p>
<P>J PRINCE WEB HOSTING</p>

</div>
		</div>				</div>
				
			</div><!-- .ast-row -->
		</div><!-- .ast-container -->
	</div><!-- .footer-adv-overlay-->
</div><!-- .ast-theme-footer .footer-adv-layout-4 -->


			
		</footer><!-- #colophon -->
		
</body>
<address>
<p style="color:violet">i</p>
<span style="vertical-align: center; font-size: 20px">Copyright &copy 2020 Jprincedesigns.com | Powered by Jprincedesigns</span>
<p style="color:violet">i</p>
<p style="color:violet">i</p>
</address>
</html>