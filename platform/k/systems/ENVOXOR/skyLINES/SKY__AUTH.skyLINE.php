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
        $GLOBALS['ROOM_FLAVOR'] = $ROOM_FLAVOR;
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
