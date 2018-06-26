<!DOCTYPE html>
<html>
<title>NordLab Slideshow v1</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />

<style type="text/css">
.wrapper {
  display: grid;
  grid-auto-rows: min(auto, 100px);
}
.frame {
    position: absolute; 
    z-index: -1; 
    margin: 0;
    border: 1px solid red;
    left: 0; 
    right: 0;
    top: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
}
.mySlides {
    position: absolute; 
    width: 100%;
    height: 100%;
    max-width: 1920px;
    max-height: 1080px;
    display: inline-block;
    margin: 0;
}
</style>
<body>

<?php
  // Default: define('ROOTDIR', '.');  // current directory
  define('ROOTDIR', 'All');
  // Default: define('IMAGETIME', 20000); // 20 seconds
  define('IMAGETIME', 20000);


  if(isset($_GET["dir"])){
    $imgpath = $_GET["dir"];
    $subdir = True;
  } else {
    $subdir = False;
  }

  echo '<div id="frame" >';
  echo '<div class="w3-content w3-section">';
  foreach (glob(ROOTDIR . '/*.{jpg,JPG,jpeg}', GLOB_BRACE) as $file) {
    echo '<img class="mySlides" src="' . $file . '?'.rand().'" >';
  }
  if ($subdir === True) {
    foreach (glob($imgpath.'/*.{jpg,JPG,jpeg}', GLOB_BRACE) as $file) {
      echo '<img class="mySlides" src="' . $file . '?'.rand().'" >';
    }
  }
  echo '</div>'; // w3-content w3-section
  echo '</div>'; // frame
?>

<script>
var myIndex = 0;
carousel(1);

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {
      location.reload(true);
    }
         
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, IMAGETIME); // Image change interval
}
</script>

</body>
</html>