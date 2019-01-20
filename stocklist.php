<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='STOCK LIST' clonable='1'>
    <cms:editable name='name'  type='text' />
    <cms:editable name='link'  type='nicedit' />
    <cms:editable name='address' type='text' />
</cms: template>
<!DOCTYPE html>
<html>
<head>
<title>STOCK LIST</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/stocklistCSS.css" >
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
		<p>STOCK LIST</p>
	</div>
	<div class="nav">
		<li><a href="jelenaaleksic.php">JELENA ALEKSIC</a></li>
		<li><a href="moodboard.php">MOODBOARD</a></li>
		<li><a href="lookbook.php">LOOKBOOK</a></li>
		<li><a href="#">E-SHOP</a></li>
		<li><a class="active" href="stocklist.php">STOCK LIST</a></li>
		<li><a href="press.php">PRESS</a></li>
		<li><a href="contact.php">CONTACT</a></li>
	</div>

	
	<div class="box">
		<table>
			<tr>
				<th>Name</th>
				<th>Link</th>
				<th>Address</th>
			</tr>
		<cms:pages>	
			<tr>
				<td><cms:show name /></td>
				<td><a href="#"><cms:show link /></a></td>
				<td><cms:show address /></td>
			</tr>
		</cms:pages> 
	</table>
	<div>	
	
</body>
</html>
<?php COUCH::invoke(); ?>