<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- favicon -->
<link rel="icon" type="image/png" href="./img/icons/icon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="./img/icons/icon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="./img/icons/icon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="./img/icons/icon-128x128.png" sizes="128x128" /> 
	
	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
<style>body {
  background: #F3F3F3;
  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAMAAADXEh96AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF8/Pz+vr6pk6ljwAAABlJREFUeNpiYGBgYGRkxEoyQNgMEBGAAAMAAaQAE1fV18sAAAAASUVORK5CYII=');
  background-repeat: repeat;
}
.uk-button-text::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 100%;
  border-bottom: 2px solid #1E87F0
}
.uk-overlay-primary {
  background: rgba(13, 128, 242, 0.806);
}
.dustcard-pad-remove img {
 padding: -40px !important
}
pre {
  white-space: pre-wrap; /* css-3 */
  white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
  white-space: -pre-wrap; /* Opera 4-6 */
  white-space: -o-pre-wrap; /* Opera 7 */
  word-wrap: break-word; /* Internet Explorer 5.5+ */
}</style> 
<!-- HTML Meta Tags -->
<title>PHP Folder Gallery</title>
<meta name="description" content="How to make photo gallery from image folder. Just drop your pictures in the folder, UIkit front-end, UIkit Lightbox Included">

  </head>

<body>
	<!--HEADER-->
        <header class="uk-box-shadow-small uk-container-expand uk-background-muted">
            <div class="uk-container uk-container-large">
                <nav class="uk-navbar-center" id="navbar" data-uk-navbar>
                    <div class="uk-navbar-center">

                         <a class="uk-navbar-item uk-logo uk-text-primary " href="./" ><img class="uk-margin-small-right" src="img/logo.svg" alt="logo">  PHP FOLDER GALLERY</a>
                    </div>                    
                </nav>
            </div>
        </header>
        <!--/HEADER-->
	
	<!-- HERO -->
                <div class="uk-height-large uk-cover-container ">
                    <img src="./img/gallery.jpg" alt="Alt img" data-uk-cover>
                    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center">
                        <div data-uk-scrollspy="cls: uk-animation-slide-bottom-small">
                            <span style="letter-spacing: 0.2em; font-size: 0.725rem">PHP FOLDER GALLERY</span>
                            <h1 class="uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent">How to make photo gallery from image folder</h1>
                            <p>NO DATABASE</p>
                           </div>
                    </div>

                </div>
        <!-- HERO -->
	<div style="max-width: 1200px" class="uk-container uk-margin-large-top uk-margin-large-bottom"><!-- start container -->
		<article>
					
			<sction>
				<header><h1 class="uk-text-center uk-text-primary uk-text-light">Gallery</h1></header>
				 <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l uk-grid-medium" uk-grid="masonry: true"  uk-lightbox="animation: slide">     
<?php
   $galleryDir = 'gallery/';
   foreach(glob("$galleryDir{*.jpg,*.gif,*.png,*.tif,*.jpeg}", GLOB_BRACE) as $photo)
   {echo "<a  href=\"$photo\">\n" ;echo "<img style=\"padding:7px\" class=\"uk-card uk-card-default uk-card-hover uk-card-body\" src=\"$photo\">"; echo "</a>";}?> 
				    
          </div>			
			</sction>
			<hr class="uk-divider-icon uk-margin-large-top uk-margin-large-bottom">					
		
		</article>
		
		
	</div><!-- end container -->

  <!--FOOTER-->
        <footer class="uk-section uk-section-small uk-section-primary">
            <div class="uk-container">
                <p class="uk-text-small uk-text-center">Copyright 2021 - Created by <a href="https://webshelf.eu/en/php-folder-gallery/" title="PHP folder gallery by Web Shelf. Free script">WebShelf</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a></p>
            </div>
        </footer>
        <!--/FOOTER-->
	
</body>

</html>
