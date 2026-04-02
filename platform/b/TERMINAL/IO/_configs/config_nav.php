<?php /* 

==================== C O N F I G . f i l e  ==================== 
================================================================
----------------------------------------------------------------
~                terminal navigation config file              ~
----------------------------------------------------------------
Listen, you are going to need to TRUST THE [] colors. They 
don't lie. But sometimes, you will be confused by this nest.
That's okay. Each time it WILL GET EASIER.  -abl 
--------------------------------------------------------------*/
$nav = [ "navSec" => 
    /* SECTION GROUP -------------------------------- */
    [ "name" => "SYS.COMS", "items" => [

        /* ITEM SECTION -------------------------------- */
        [ "label" => "INVENTORY", "path" => "logPost.php",
        "subSec" => [

            /* SUB-ITEMS -------------------------------- */
            [ "label" => "MAKE POST", "path" => "logPost.php" ],
            [ "label" => "VIEW POSTS", "path" => "logList.php" ],
        ],],

        /* ITEM SECTION -------------------------------- */
        [ "label" => "CHARLIE-MAIL", "path" => "email-test.php",
        "subSec" => [

            /* SUB-ITEMS -------------------------------- */
            [ "label" => "EMAIL TEST", "path" => "email-test.php" ],
            [ "label" => "INBOX TEST", "path" => "inbox-test.php" ]
        ],],
    ],],

    /* SECTION GROUP -------------------------------- */
    [ "name" => "DOM.TOOLS", "items" => [
        [ "label" => "SELECTOR", "path" => "index.php" ],
        [ "label" => "SPLITTER", "path" => "index.php" ],
        [ "label" => "CATAGORIZER", "path" => "index.php" ],
        [ "label" => "SANTIZER", "path" => "index.php" ],
    ]]
]; 
?>