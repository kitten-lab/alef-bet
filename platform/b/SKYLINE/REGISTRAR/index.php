<?php 

$traceback = __DIR__ . '/../../../'; # $sys=2 $dom=3 $mod=4
include $traceback . 'k/incl/inits/nameSelf.php';
require_once $traceback . 'k/configs/env_config.php';

require_once '_configs/config.php';
require $traceback . 'k/incl/inits/resolvers.php';


// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //

$pageTitle = "THE SKYLINE REPORT DEPARTMENT";

$pageLogic = $traceback . 'k/tools/blog.basic/actorAddPost.php';
$pageSlug = $traceback . 'k/tools/blog.basic/pageAddPost.php';

require resolveShell($sys);
?>