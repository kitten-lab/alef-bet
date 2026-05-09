
<?php

function SKY__AUTH(
    $MOD_SLUG, 
    $MOD_DISPLAY, 
    $DOM_SLUG, 
    $DOM_DISPLAY, 
    $ROOM_SLUG, 
    $ROOM_DISPLAY,
    $ROOM_FLAVOR
    ) {
        $SITE = $GLOBALS['SITE'];
        $SURFACE = $GLOBALS[$SITE];

        $GLOBALS[$SITE]['MOD_SLUG'] = $MOD_SLUG;
        $GLOBALS[$SITE]['MOD_DISPLAY'] = $MOD_DISPLAY;
        $GLOBALS[$SITE]['DOM_SLUG'] = $DOM_SLUG;
        $GLOBALS[$SITE]['DOM_DISPLAY'] = $DOM_DISPLAY;
        $GLOBALS[$SITE]['ROOM_SLUG'] = $ROOM_SLUG;
        $GLOBALS[$SITE]['ROOM_DISPLAY'] = $ROOM_DISPLAY;
        $GLOBALS[$SITE]['ROOM_FLAVOR'] = $ROOM_FLAVOR;
}

function SKY__ROUTE(
    $TO__SYS, 
    $TO__DOM, 
    $TO__MOD, 
    $TO__ROOM
    ){
        $GLOBALS['TO']['SYS_SLUG'] = $TO__SYS;
        $GLOBALS['TO']['DOM_SLUG'] = $TO__DOM;
        $GLOBALS['TO']['MOD_SLUG'] = $TO__MOD;
        $GLOBALS['TO']['ROOM_SLUG'] = $TO__ROOM;
}

// ROUTER FUNCTIONS

function SKY_JUNCTION($letter){
  global $ENV; 
    $localJUNCTION = 'http://localhost:9808'; //localhost
    $globalJUNCTION = 'imported.to'; //live serving centers
  
  if ($ENV === "ROSEWOOD8") {

    define($letter . '_root', $localJUNCTION . "/" . $letter);
    define(strtoupper($letter) . '_ROUTE', $localJUNCTION . "/" . $letter);

  } else {

    define($letter . '_root', 'https://$letter.$globalJUNCTION');
    define(strtoupper($letter) . '_ROUTE', 'https://$letter.$globalJUNCTION');

  }
}

function ROUTE(
  $LETTER, 
  $SHADOW_PROD_TOGGLE
  ){
    return $GLOBALS['SONAR'] . $SHADOW_PROD_TOGGLE . $LETTER . '/'; 
}

//  simple router without shadow_prod
function ROUTE_LETTER($LETTER){
  return $GLOBALS['SONAR'] . $LETTER . '/'; 
}
    
function SKY_AUTO_FAILURE(){
  skylite(openSky("You are LOST"));
  skylite(medHeading("There is a room but no key. You can't see any of them."));
  skylite(leaf("Are you forgetting something?"));
}


function getSkyAUTH($SYSTEM_PATH) {
  $SITE = $GLOBALS['SITE'];
  
  if (!is_dir($SYSTEM_PATH)) {
    SKY_AUTO_FAILURE();
  require resolveShell($GLOBALS['SKYLINE']['SYS_SLUG']);
  exit;
  } 
}


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
      $fetch = $uriFRAGS[3];

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


function getFIG($TOOL, $FUNCTION){
    $SITE = $GLOBALS['SITE'];
    $THEME = $GLOBALS[$SITE]["ROOM_FLAVOR"];
    return $GLOBALS['TOOL']['SIGFIG'][$THEME][$FUNCTION]; 
}


// projectIMG for loading images in SKYLITE //
function getDecor(
  /* required */  string $Type, string $Projection, 
  /* optional */  ?string $shell = null, ?string $class = null, ?string $alt = null
){
  // hydrate:
  global $SONAR;
  global $SITE;

// handle Image Decorations
  if ($Type == "I"){
  // projection pathway:      
    $SKY_Validate = $SONAR . "m/decor/" . $SITE . "/" . $Projection;

    if(is_file($SKY_Validate)) {
      $hasClass = $class ? " class='$class'" : "";
      $hasAltText = $alt ? " class='$alt'" : "";
      if ($shell == "wires") {
        echo "<img src='" . M_ROUTE . "/decor/$SITE/$Projection' $hasClass $hasAlt>";
      } else {
        skylite("<img src='" . M_ROUTE . "/decor/$SITE/$Projection' $hasClass $hasAlt>");
      }
    
    } else {
    
      error_log("KDE! Image $Projection not found in $SKY_Validate");
      if ($shell == "wires") {
        echo "<span class='MissingProjection'></span>";
      } else {
        skylite("<span class='MissingProjection'></span>");
      }
    }
  }
}




// OLDER IMAGE LOADERS - PHASING OUT //
    function getImg($img, $alt = '',$class = '') {
        $SITE = $GLOBALS['SITE'];

        $path = "/" . $GLOBALS[$SITE]['SYS_SLUG'] . '/' . $GLOBALS[$SITE]['DOM_SLUG'] . "/" . $img;
        $result = $GLOBALS['SONAR'] . "/i/" . $path;
        if (is_file($result)) {
            $hasClass = $class ? " class='$class'" : "";
            $hasAlt = $alt ? " alt='$alt'" : "";
            
            skylite("<img $hasClass src='" . i_root . "$path' $hasAlt>"); 

            } else {
                error_log("KDE! IMAGE file not found. " . $result);         
            }
    }

    function img($img, $folder, $prefix, $alt = '',$class = '') {
        $path = "/" . $folder . "/" . $prefix . "_" . $img;
        $result = $GLOBALS['SONAR'] . "/i/" . $path;
        if (is_file($result)) {
            $hasClass = $class ? " class='$class'" : "";
            $hasAlt = $alt ? " alt='$alt'" : "";

            echo "<img $hasClass src='" . i_root . "$path' $hasAlt>"; 
            } else {
                error_log("KDE! IMAGE file not found. " . $result);         
            }
    }

function getA_Style($css, $folder, $function) {
    $path = "/" . $folder . "/" . $function . "/" . $css . ".css";
    $full = $GLOBALS['SONAR'] . "a" . $path;
    if (is_file($full)) {
         echo '<link rel="stylesheet"  type="text/css" href="' . a_root . $path . '">';
         } else {
            error_log("PATH NOT FOUND" . $path);

         }
}


function invokeStyle($css, $function) {
    $path = "/" . $folder . "/" . $css . ".css";
    $full = $GLOBALS['SONAR'] . "a" . $path;
    if (is_file($full)) {
         echo '<link rel="stylesheet"  type="text/css" href="' . a_root . $path . '">';
         } else {
            error_log("PATH NOT FOUND" . $path);

         }
}


function getTool($tool, $function) {
    
    $GLOBALS['GETS']['set'][] = function() use ($tool, $function) { 
        $file = $GLOBALS['SONAR'] . "k/tools/" . $tool . "/page" . $function . ".php";
        if (is_file($file)) {
        loadTool($tool, "page", $function);
        }
    };
    $GLOBALS['GETS']['actor'][] = function() use ($tool, $function) {
        $file = $GLOBALS['SONAR'] . "k/tools/" . $tool . "/actor" . $function . ".php";
        if (is_file($file)) {
        loadTool($tool, "actor", $function);
        }
    };
    $GLOBALS['GETS']['scripts'][] = function() use ($tool, $function) {
        $file = $GLOBALS['SONAR'] . "k/tools/" . $tool . "/script" . $function . ".php";
        if (is_file($file)) {
        loadTool($tool, "script", $function);
        }
    };
    $GLOBALS['GETS']['dressing'][] = function() use ($tool) {
        loadTool_Style($tool);
    };
}


function loadTool($tool, $type, $function) {
    $result = $GLOBALS['SONAR'] . $GLOBALS['ktool'] . $tool . '/' . $type . $function . '.php';
    if (is_file($result)) {
        include $result;
    } else {
        error_log("KDE! Tool file not found. " . $result);
    }  
}

function loadTool_Style($tool) {
    $path = "/tools/" . $tool . '/' . $tool . ".css";
    $full = $GLOBALS['SONAR'] . "k" . $path;
    if (is_file($full)) {
         echo '<link rel="stylesheet" type="text/css" href="' . k_root . $path . '">';
         } else {
            error_log("PATH NOT FOUND");

         }
}



?>