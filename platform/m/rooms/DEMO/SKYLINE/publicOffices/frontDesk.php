<?php
SKY__AUTH(
    /*MOD_SLUG*/     "WELCOME-AGENT",
    /*MOD_DISPLAY*/  "RHEA CEPCIAN", 
    
    /*DOM_SLUG*/     "publicOffices", 
    /*DOM_DISPLAY*/  "PUBLIC OFFICES",

    /*ROOM_SLUG*/    "frontDesk", 
    /*MOD_DISPLAY*/  "RECEPTION DESK",

    /*ROOM_FLAVOR*/  "skyline-standard"
);

openSky($GLOBALS[$SITE]['SYS_DISPLAY'] . " " . $GLOBALS[$SITE]['ROOM_DISPLAY']);

bigHeading("Welcome Home, Weary Traveler");
medHeading("You have arrived at the SKYLINE FRONT DESK.");

leaf("Thank you for becoming part of our SIGHT. We are THE-CU and this is SKYLINE on INTERA.
Now running in DEMO MODE, so you can explore our place and store your data as your explore.
Your data will not merge with mine! It is stored uniquely for this DEMO (POCKET)POCKET INTERNET.

<strong>SKYLINE</strong> is a reporting surface, meaning it is primarily used to REPORT information
into the deeper architecture beneath the POCKET INTERNET (the 'wires').

You may explore the REPORTING tools by journeying to <a href='" . b_root . '/' . $GLOBALS[$SITE]['URI'] . "?reportDepartment=front-desk'>THE REPORT DEPARTMENT</a>

Good luck!
-THE-CU-");

closeSky();
?>