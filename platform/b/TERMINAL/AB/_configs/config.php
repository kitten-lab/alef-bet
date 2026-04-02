<?php
$loversMark = "jk"; // UNUSED IMPERITIVE. Do not forget me.
require_once '../_configs/config.php'; // SYS config

$dom = "AB";  // locate domain within the primary module.....
$mod = $_GET['mod'] ?? "AB";
$pv = $_GET['pv'] ?? "CU";

$location = '';


$navCall = $traceback . 'a/' . $dom . '/asDom/nav.php';

// =========================================================== //

$blogBasic = [
    "addSectTitle" => "SUBJECT OF CONTRIBUTION",
    "placeholderTitle" => "$sys.$dom CONTRIBUTION CONTENTS",
    "placeholderBody" => "SUBMIT YOUR CONTRIBUTIONS",
    "addSectText" => "Your contribution will be dated and logged into source. 
    You may view your contribs, but only the  $sys.$dom can remove them.",
    "confirmMsg" => "Thank you. Contribution added to forrest.source.",
    "listSectTitle" => "Contribution Listings",
    "listSectText" => "Viewing all listings from $mod in $sys.$dom."
];


$nav = [
    "navSec" => [
        "name" => "SYS.COMS",
        "items" => [
            [ 
            "label" => "INVENTORY", 
            "path" => "blog.postList.php",
            "subSec" => [
                [ "label" => "MAKE POST", "path" => "blog.addPost.php" ],
                [ "label" => "VIEW POSTS", "path" => "blog.postList.php" ],
                ],
            ],
            [ 
            "label" => "CHARLIE-MAIL", 
            "path" => "blog.postList.php",
            "subSec" => [
                [ "label" => "EMAIL TEST", "path" => "email-test.php" ],
                [ "label" => "INBOX TEST", "path" => "inbox-test.php" ]
                ],
            ],
         ],
            
        ]
];

?>
