<?php

// the sightsman prepares keys and directs to rooms:

function keyMaker() {
    $SITE = $GLOBALS['SITE'];
  if (empty($_GET)) {

    global $ENV;
      if ($ENV === "ROSEWOOD8"){ $localSLUG = "b/"; }
      else { $localSLUG = ""; }

    $prettyURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (strpos($prettyURI, $localSLUG) !== false) {    
      $parseForROSEWOOD = str_replace($localSLUG, '', $prettyURI);
      $parsed = trim($parseForROSEWOOD);
    }

    if (strpos($prettyURI, $GLOBALS[$SITE]['URI']) !== false) {    
      $parseForPUBLIC = str_replace($GLOBALS[$SITE]['URI'] . "/", '', $parsed);
      $reparsed = trim($parseForPUBLIC);
    }

    $uriFRAGS = explode('/', $reparsed);
    
    global $room;
      $room = $uriFRAGS[1];
      $key = $uriFRAGS[2];

    global $fetch;
      $fetch = $uriFRAGS[3] ?? null;

        $_GET[$room] = $key;
  }
}



function lockAndKey(){  
    $SITE = $GLOBALS['SITE'];

    $foundKey = false;
    $foundRoom = false;
    if (empty($_GET)) {
            notARoom();
            require resolveShell($GLOBALS[$SITE]['SYS_SLUG']);
            exit;
        }
    foreach ($_GET as $room => $key) {
        $doors = $GLOBALS[$SITE]['tDOM'] ?? [];
        
        foreach ($doors as $door){
            if ($room == $door['DOM']) {
                $foundRoom = true;
                $path = $GLOBALS['ROUTE']['M']['URI'] . '/' . $door['DOM'] .'/' . $key . '.php';
                if (empty($key)) {
                    aRoomWithNoKey();
                    require resolveShell($GLOBALS[$SITE]['SYS_SLUG']);
                    exit;
                }
                    if (file_exists($path)) {
                        $foundKey = true;
                        require $path;
                        break;
                    } 
                    break;
            } 
        }
    }
        if (!$foundRoom) { notARoom(); }
        if (!$foundKey && $foundRoom) { noKeyFound(); }
        if (!$foundKey && !$foundRoom) { noKeyFound(); }

    require resolveShell($GLOBALS[$SITE]['SYS_SLUG']);
}

function interraLocation(){
    // retired, remove from known usage locations
}
