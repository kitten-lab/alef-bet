<?php 
$traceback = __DIR__ . '/../../../'; # $sys=2 $dom=3 $mod=4
$loversMark = "jk"; // UNUSED IMPERITIVE. Do not forget me.

include $traceback . 'k/tools/parsedown/Parsedown.php';

    require_once $traceback . 'k/configs/env_config.php';
    require_once '_configs/config.php';

    require $traceback . 'k/incl/inits/resolvers.php';

// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //

$pageLogic = $traceback . 'k/tools/blog.basic/post.php';

$pageTitle = "Welcome Home!";
$pageSlug = "pages/home.md";
$ext = true;
require resolveShell($sys);
?>