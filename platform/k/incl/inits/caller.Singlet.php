<?php 
function callSinglet($text) {
 if (!empty($text) && file_exists($text)) {
    require_once $text; 
 }
}