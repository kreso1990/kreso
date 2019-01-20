<!DOCTYPE html>
<html>
<head>
<title>CONTACT</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link rel="stylesheet" href="css/contactCSS.css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".menu").click(function(){
			$(".nav").slideToggle(400);
			})
		})
</script>

</head>
<body>
	<div class="nav-logo">
		<a href="home.html"><img src="images/LOOGO.png"></a>
	</div>
	<div class="mobile-nav">
		<img class="menu" src="images/fabar.png"></img>
		<p>CONTACT</p>
	</div>
	<div class="nav">
		<li><a href="jelenaaleksic.php">JELENA ALEKSIC</a></li>
		<li><a href="moodboard.php">MOODBOARD</a></li>
		<li><a href="lookbook.php">LOOKBOOK</a></li>
		<li><a href="#">E-SHOP</a></li>
		<li><a href="stocklist.php">STOCK LIST</a></li>
		<li><a href="press.php">PRESS</a></li>
		<li><a class="active" href="contact.php">CONTACT</a></li>
	</div>
	<!-- End Navigation Menu -->
	<div class="box-wrapper">
		<h1>CONTACT ME</h1>
		<div class="box">
			<form id="contact-form" method="post" action="php/mailPHP.php">
			<input type="text" name="Name" id="Name"  placeholder="Your Name" required>
			<br>
			<input type="email" name="Email" id="Email"  placeholder="Your Email" required>
			<br>
			<textarea name="Message" id="Message"  placeholder="Message" row="4" required></textarea>
			<br>
			<button type="submit" value="Submit">SEND MAIL</button>
		</form>		
		</div>
		<div class="contact">
			<div class="email">
			<h1>EMAIL</h1>
			<p>jabyjelenaaleksic@gmail.com</p>
			</div>
			<div class="social">
			<h1>FOLLOW ME</h1>
			<ul>
			<li><a href="https://www.instagram.com/ja_by_jelena_aleksic/"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.facebook.com/jabyjelenaaleksic/"><i class="fa fa-facebook-f"></i></a></li>
			<li><a href="https://jjelenaaaleksic.tumblr.com"><i class="fa fa-tumblr"></i></a></li>
			<li><a href="https://www.twitter.com/JjelenaAaleksic"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.pinterest.com/jabyjelenaaleks/"><i class="fa fa-pinterest-p"></i></a></li>
			</ul>
		</div>
	</div>
	</div>	
			
	
</body>
</html>