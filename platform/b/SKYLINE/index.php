<?php 
require_once '_configs/clrRoutes.php';
require_once '_configs/asSelf_config.php';
openSky("This is the Title of Your Page!");

bigHeading("Welcome to SKYLINE On INTERA.");

leaf("Thank you for entering our sight. We see you. 
$BR We feel you. We know you.
$BR wait");

medHeading("Consider submitting a vision report.
We see what you see. Let us know.");

getTool('plog.basic', 'List');
getTool('plog.basic', 'Add');


closeSky();

require resolveShell($sys);
?>