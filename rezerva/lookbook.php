<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='LOOKBOOK' clonable='1' dynamic_folders='1' gallery='1'>

<cms:editable 
      name='gg_image' 
      label='Image' 
      desc='Upload your main image here'
      width='1000'
      height='1000'
      show_preview='1'
      preview_height='300'
      type='image'
   />
   
   <cms:editable 
      name='gg_thumb' 
      label='Image Thumbnail' 
      desc='Thumbnail of the main image above'
      width='515'
      height='315'
      enforce_max='1'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  

   <cms:editable 
      name='my_thumb_2' 
      label='Image Thumbnail 2' 
      desc='Second thumbnail of the main image above'
      width='100'
      height='100'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  
   
   <cms:editable 
      name='my_desc' 
      label='Description' 
      height='60'
      type='textarea'
   />

</cms:template>
<!DOCTYPE html>
<html>
<head>
<title>LOOKBOOK</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link rel="stylesheet" href="css/lookbookCSS1.css" >
<link rel="stylesheet" href="css/lightbox.css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type"text/javascript" src="js/jquery.js"></script>
<script type"text/javascript" src="js/lightbox-plus-jquery.js"></script>
<link href="css/anotherbrickLookbook.css" rel="stylesheet" type="text/css">
<link href="css/stylesLookbook.css" rel="stylesheet" type="text/css">
<script src="js/gridify.js"></script>
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
		<p>LOOKBOOK</p>
	</div>
	<div class="nav">
		<li><a href="jelenaaleksic.php">JELENA ALEKSIC</a></li>
		<li><a href="moodboard.php">MOODBOARD</a></li>
		<li><a class="active" href="lookbook.php">LOOKBOOK</a></li>
		<li><a href="#">E-SHOP</a></li>
		<li><a href="stocklist.php">STOCK LIST</a></li>
		<li><a href="press.php">PRESS</a></li>
		<li><a href="contact.php">CONTACT</a></li>
	</div>
	


		
		<cms:if k_is_page || k_is_folder>
		<div class="collectionName">	
				<h1 class="title1"><cms:show k_folder_title/></h1>	
		</div>
		<div class="collectionDesc">	
				<h1 class="title1">COLLECTION DESCRIPTION</h1>
				<p class="desc"><cms:show k_folder_desc/></p>
		</div>
		
		</cms:if>  
		<div class="gallery_wrapper">
		
			<cms:folders childof=k_folder_name orderby='weight' depth='1'>
			  <cms:set my_folder_image="" />
               <cms:if k_folder_image>
                  <cms:set my_folder_image=k_folder_image />
			   </cms:if>
			
                
					<li class="gallery_folders">
						<a href="<cms:show k_folder_link />">
							<img src="<cms:show my_folder_image />"/>
							<div class="title"><p><cms:show k_folder_title /></p></div>
						</a>
					</li>
            </cms:folders> 
        </div>
		
      
      <!-- gallery images-->
      <div id="container" class="cols">
         <cms:pages folder=k_folder_name include_subfolders='0'>
            <div class="image">
				<a href="<cms:show gg_image />" data-lightbox="image">
                  <img src="<cms:show gg_image />" />
				</a>
            </div>
            
            <cms:if k_paginated_bottom ><!-- pagination --> 
               <div style="clear:both"><cms:paginator /></div>   
            </cms:if>
            
         </cms:pages>
      </div>
	 </div>

</body>
</html>
<?php COUCH::invoke(); ?>
