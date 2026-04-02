<?php 
$traceback = __DIR__ . '/../../../'; # $sys=2 $dom=3 $mod=4
$traceback2 = __DIR__ . '/../../'; # $sys=2 $dom=3 $mod=4
require_once $traceback . 'k/configs/env_config.php';

require_once '_configs/config.php';
require $traceback . 'k/incl/inits/resolvers.php';

// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //


$pageTitle = "$mod.Post.List";
$pageSlug = $traceback . 'k/tools/blog.basic/pageViewList.php';
$pageLogic = $traceback . 'k/tools/blog.basic/actorViewList.php';

require resolveShell($sys);
?>