<?php
// CODE FROM https://stackoverflow.com/questions/8226958/simple-php-editor-of-text-files
// configuration
$url = 'Settings.php';
$fileOne   = 'C:\users\kbecker\Documents\Github\JavaASV\src\main\resources\properties\controllers.properties';
$fileTwo   = 'C:\users\kbecker\Documents\Github\JavaASV\src\main\resources\properties\serial.properties';
$fileThree = 'C:\users\kbecker\Documents\Github\JavaASV\src\main\resources\properties\asv.properties';

// read the textfiles
$textInOne = file_get_contents($fileOne);
$textInTwo = file_get_contents($fileTwo);
$textInThree = file_get_contents($fileThree);

?>



<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Settings</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Settings.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/Webblogo-RGBfullcolor.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Settings">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-sticky u-sticky-373a u-white u-header" id="sec-a44e"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="Home.php" data-page-id="231202133" class="u-image u-logo u-image-1" data-image-width="6289" data-image-height="1430" title="Home">
          <img src="images/Webblogo-RGBfullcolor.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Settings.php" style="padding: 10px 20px;">Settings</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Settings.php" style="padding: 10px 20px;">Settings</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h2 class="u-align-center u-subtitle u-text u-text-custom-color-1 u-text-1">Autonomous Surface Vessel </h2>
      </div><style class="u-sticky-style" data-style-id="373a">.u-sticky-fixed.u-sticky-373a:before, .u-body.u-sticky-fixed .u-sticky-373a:before {
border-color: #404040 !important; border-width: 2px !important; borders: top right bottom left !important
}</style></header>
    
    <section class="u-align-center u-clearfix u-section-1" id="sec-ea2d">
		
		</br>
		Controller.properties file:
		<!-- HTML form -->
		<form action="" method="post">
		<textarea name="textInOne"><?php echo htmlspecialchars($textInOne) ?></textarea>
		<input type="Submit" />
		<?php if (array_key_exists('textInOne',$_POST)){update_config1($fileOne); }?>
		</form>		
    </section>
    <section class="u-align-center u-clearfix u-section-1" id="sec-ea2d">	
    <section class="u-align-center u-clearfix u-section-1" id="sec-ea2d">
		
		</br>
		Serial.properties file:
		<!-- HTML form -->
		<form action="" method="post">
		<textarea name="textInTwo"><?php echo htmlspecialchars($textInTwo) ?></textarea>
		<input type="Submit" />
		<?php if (array_key_exists('textInTwo',$_POST)){update_config2($fileTwo); }?>
		</form>		
    </section>
    <section class="u-align-center u-clearfix u-section-1" id="sec-ea2d">
	
		</br>
		Asv.properties File:
		<!-- HTML form -->
		<form action="" method="post">
		<textarea name="textInThree"><?php echo htmlspecialchars($textInThree) ?></textarea>
		<input type="Submit" />
		<?php if (array_key_exists('textInThree',$_POST)){update_config3($fileThree);}?>
		</form>		
    </section>	
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5926"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Webb Institute 2022<br>
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>
    </section>
  </body>
</html>



<?php

function update_config1($fileOne){
    // save the text contents
    file_put_contents($fileOne, $_POST['textInOne']);
	$f = fopen($fileOne,'w+');
	fwrite($f, $_POST['textInOne']); 
	fclose($f);
	echo "<br><center>Submitted Changes to Controllers.properties. Re-submit to revert changes, otherwise click Settings to update text box.</center>";
}
function update_config2($fileTwo){
    // save the text contents
    file_put_contents($fileTwo, $_POST['textInTwo']);
	$f = fopen($fileTwo,'w+');
	fwrite($f, $_POST['textInTwo']); 
	fclose($f);
	echo "<br><center>Submitted Changes to Serial.properties. Re-submit to revert changes, otherwise click Settings to update text box.</center>";
}
function update_config3($fileThree){
    // save the text contents
    file_put_contents($fileThree, $_POST['textInThree']);
	$f = fopen($fileThree,'w+');
	fwrite($f, $_POST['textInThree']); 
	fclose($f);
	echo "<br><center>Submitted Changes to Asv.properties. Re-submit to revert changes, otherwise click Settings to update text box.</center>";
	
}



// read the textfiles
$textInOne = file_get_contents($fileOne);
$textInTwo = file_get_contents($fileTwo);
$textInThree = file_get_contents($fileThree);

?>


