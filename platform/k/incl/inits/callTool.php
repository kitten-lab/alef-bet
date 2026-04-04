<?php 
function getTool($tool, $function) {
    $result = $GLOBALS['sonar'] . $GLOBALS['ktool'] . $tool . '/' . $function . '.php';
    if (is_file($result)) {
        return $result;
    } else {
        error_log("KDE! Tool file not found. " . $result);
    }  
}
?>