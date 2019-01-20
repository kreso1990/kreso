<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='JELENA ALEKSIC' clonable='1'>
	<cms:editable name='main_content' type='richtext'/>
</cms: template>
<!DOCTYPE html>
<html>
<head>
<title>JELENA ALEKSIC</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/jelenaaleksicCSS.css" >
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
		<p>JELENA ALEKSIC</p>
	</div>
	<div class="nav">
		<li ><a class="active" href="jelenaaleksic.php">JELENA ALEKSIC</a></li>
		<li><a href="moodboard.php">MOODBOARD</a></li>
		<li><a href="lookbook.php">LOOKBOOK</a></li>
		<li><a href="#">E-SHOP</a></li>
		<li><a href="stocklist.php">STOCK LIST</a></li>
		<li><a href="press.php">PRESS</a></li>
		<li><a href="contact.php">CONTACT</a></li>
	</div>
	

	<div class="box">
		<div class="name"><h1>ABOUT ME</h1>
		<div class="social-mobile">
			<li><a href="https://www.pinterest.com/jabyjelenaaleks/"><i class="fa fa-pinterest-p"></i></a></li>
			<li><a href="https://www.twitter.com/JjelenaAaleksic"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://jjelenaaaleksic.tumblr.com"><i class="fa fa-tumblr"></i></a></li>
			<li><a href="https://www.facebook.com/jabyjelenaaleksic/"><i class="fa fa-facebook-f"></i></a></li>
			<li><a href="https://www.instagram.com/ja_by_jelena_aleksic/"><i class="fa fa-instagram"></i></a></li>
		</div>
		</div>
		<div class="social">
			<li><a href="https://www.instagram.com/ja_by_jelena_aleksic/"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.facebook.com/jabyjelenaaleksic/"><i class="fa fa-facebook-f"></i></a></li>
			<li><a href="https://jjelenaaaleksic.tumblr.com"><i class="fa fa-tumblr"></i></a></li>
			<li><a href="https://www.twitter.com/JjelenaAaleksic"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.pinterest.com/jabyjelenaaleks/"><i class="fa fa-pinterest-p"></i></a></li>
		</div>
		<div class="text">
		<cms:pages>
		
			<p><cms:show main_content/> </p>

		</cms:pages>
		</div>
	</div>

</body>
</html>
<?php COUCH::invoke(); ?>