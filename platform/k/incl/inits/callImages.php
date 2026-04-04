<?php 

function img($img, $folder, $prefix, $alt = '',$class = '') {
    $path = "/" . $folder . "/" . $prefix . "_" . $img;
    $result = $GLOBALS['sonar'] . "/i/" . $path;
    if (is_file($result)) {
        $hasClass = $class ? " class='$class'" : "";
        $hasAlt = $alt ? " alt='$alt'" : "";

         echo "<img $hasClass src='" . i_root . "$path' $hasAlt>"; 
         } else {
            error_log("KDE! IMAGE file not found. " . $result);         
         }
}

?>