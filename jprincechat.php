<?php
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
      width: 400px;
	  
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
<a href="jprincechat.php" style="color: violet"> LIVE CHAT</a>
</h6>
</div>

<form method="POST">
<label>INPUT YOUR MESSAGE</label>
<textarea name="message"></textarea><br>
<input type="submit" name="submit" value="submit">

</form>

<?php

if(isset($_POST['submit'])) {
	 $message  = mysqli_real_escape_string ($conn, strip_tags ($_POST['message']));
	
	
	 $link  = "INSERT INTO JCHAT (MESSAGE)
	  VALUES ('$message')";
	  
	   if(mysqli_query($conn,$link)){
		 
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