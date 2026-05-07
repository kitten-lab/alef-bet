<?php
SKY__AUTH(
    /*MOD_SLUG*/     "DRL-SDK",
    /*MOD_DISPLAY*/  "dani-leve", 
    
    /*DOM_SLUG*/     "root", 
    /*DOM_DISPLAY*/  "terminal.root",

    /*ROOM_SLUG*/    "access", 
    /*ROOM_DISPLAY*/  "limited access",

    /*ROOM_FLAVOR*/  "skyline-standard"
);
openSky("limited access");


bigHeading("Welcome to home terminal.root! You are now on SKYLINE On INTERA.");
getTool("keyMAKER2","MakeKey");

closeSky();
?>