<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='MOODBOARD' clonable='1' gallery='1'>
	<cms:editable
      name="gg_image"
      label="Image"
      desc="Upload your main image here"
      width="500"
      show_preview='1'
      preview_height='200'
      type="image"
	/>
	
	<cms:editable
      name="gg_thumb"
      assoc_field="gg_image"
      label="Image Thumbnail"
      desc="Thumbnail of image above"
      enforce_max='1'
      type="thumbnail"
   />
	
</cms:template>
<!DOCTYPE html>
<html>
<head>
<title>MOODBOARD</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link rel="stylesheet" href="css/moodboardCSS.css" >
<link rel="stylesheet" href="css/lightbox.css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type"text/javascript" src="js/jquery.js"></script>
<script type"text/javascript" src="js/lightbox-plus-jquery.js"></script>
<link href="css/anotherbrick.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/anotherbrick.js"></script>
<script src="js/do.js"></script>
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
		<p>MOODBOARD</p>
	</div>
	<div class="nav">
		<li><a href="jelenaaleksic.php">JELENA ALEKSIC</a></li>
		<li><a class="active" href="moodboard.php">MOODBOARD</a></li>
		<li><a href="lookbook.php">LOOKBOOK</a></li>
		<li><a href="#">E-SHOP</a></li>
		<li><a href="stocklist.php">STOCK LIST</a></li>
		<li><a href="press.php">PRESS</a></li>
		<li><a href="contact.php">CONTACT</a></li>
	</div>
	
		
	<div class="main">
		<div class="the-wall">
		
		<cms:pages masterpage="moodboard.php" include_subfolders='0' >
		<div class="another-brick">
		<a href="<cms:show gg_image />" data-lightbox="another-brick">
		<img src="<cms:show gg_thumb/>" />
		</a>
		</div>
		</cms:pages>
	
	
	</div>
</body>
</html>
<?php COUCH::invoke(); ?>