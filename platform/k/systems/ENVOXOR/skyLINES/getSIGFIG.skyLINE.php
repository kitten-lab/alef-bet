<?php


function getFIG($TOOL, $FUNCTION){
    $THEME = $GLOBALS["ROOM_FLAVOR"];
    $texture = $GLOBALS['TOOL']['SIGFIG'][$THEME][$FUNCTION];
    return $texture;
}
