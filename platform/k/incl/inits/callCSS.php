<?php 

function a_css($css, $folder, $function, $alt = '',$class = '') {
    $path = "/" . $folder . "/" . $function . "/" . $css;
    $full = $GLOBALS['sonar'] . "/a/" . $path;
    if (is_file($full)) {
         echo '<link rel="stylesheet" type="text/css" href="' . a_root . $path . '">';
         } else {
            echo "<div class='loadFail'>PATH NOT FOUND</div>";
            echo "$path";

         }
}

?>