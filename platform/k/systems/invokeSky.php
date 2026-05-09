<?php 
$center = "alignCenter";
$left = "alignLeft";
$right = "alignRight";
$AND = "<br>";

include $sonar . 'k/systems/skyInvocations.php';



function skylite($result) {
    $GLOBALS['GETS']['set'][] = function() use ($result){
    echo $result;
    };
}

function openSky($title){
    $GLOBALS['pageTitle'] = $title;

}

function h1($text){
    $text = htmlspecialchars($text);
    skylite("<h1>$text</h1>");
}

function bigHeading($text){
    h1($text);

    }


function getMyID($thing) {
    
  $SITE = $GLOBALS['SITE'];
    $thing = strtoupper($thing);
    $YourThing = $GLOBALS[$SITE][$thing];

    return $YourThing;
}

function title($text,$id,$hscale){
    $text = htmlspecialchars($text);
    skylite("<h$hscale id='$id'>$text</h$hscale>");
    }

function hr(){
    skylite("<hr>");
    }
function medHeading($text){
    $text = htmlspecialchars($text);
    skylite("<h2>$text</h2>");
}

function colorize($color) {
    skylite("<span style='color: $color;'>");
}

function stop_colorize() {
    skylite("</span>");
}

function leaf($text) {
    skylite("<p>" . nl2br($text) . "</p>");
}

function wordsx($text, $c="") {
    skylite("<span style='$c'>$text</span>");
}

function section($instructions, $class) {
    $GLOBALS['SKY_STACK'][$class] = "on";
    skylite("<div class='$class' style='$instructions'>");
}

function close_section() {
    array_pop($GLOBALS['SKY_STACK']);
    skylite("</div>");
}

function closeSky() {
    if (!empty($GLOBALS['SKY_STACK'])) {
        $times = count($GLOBALS['SKY_STACK']);
    for ($i = 0; $i < $times; $i++) {
            skylite("1</div>");
    }
        error_log("KDE! KDE! Unclosed section detected\n" . print_r($GLOBALS['SKY_STACK'], true));
    };
}
