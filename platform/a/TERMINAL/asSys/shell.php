
<?php 
 if (!empty($pageLogic) && file_exists($pageLogic)) {
    include $pageLogic; 
}

?>
    <!DOCTYPE html>
    <html><head>
    <title><?= $pageTitle ?></title>
    <!-- THE CALLING OF THE STYLESHEET PROCESSION -->
    <?php
        // Echo the HTML link tag to include the external CSS file
        echo '<link rel="stylesheet" type="text/css" href="' . k_root . '/incl/fonts.css?v1">';
        echo '<link rel="stylesheet" type="text/css" href="' . a_root . '/' . $sys . '/asSys/style.css?v1">';
        echo '<link rel="stylesheet" type="text/css" href="' . a_root . '/' . $dom . '/asDom/style.css">';
    ?>
    <style>
    </style>
    </head>
    <body>
<!-- END OPENING PRAYERS -->

<div class="monitor-container">
<div class="monitor-interior">
<div class="screen-content">
<div class="iox_coreContainer">

<?php if (!empty($navCall) && file_exists($navCall)) {
    include $navCall; } ?>

<main class="iox_coreContents">
<div class="broken_header">
<h1 class="pageTitle"><?= $pageTitle ?></h1>
</div>
<?php 
    if (!empty($pageSlug) && file_exists($pageSlug)) {
        if ($ext !== true) {
            include $pageSlug;
    }else {
    $markdown = file_get_contents($pageSlug);
    $Parsedown = new Parsedown();
    echo $Parsedown->text($markdown); 
    }
    } 
    ?>



</main>
</div></div></div>

<!-- END NOW THE 'BODY OF THE DIVINE PAGE' -->
</div>
<div class="computer_scene">
  <div class="computer_cube">
    <div class="computer_face front"></div>
    <div class="computer_face top">O</div>
    <div class="computer_face pole">X</div>
    <div class="computer_face pole2">O</div>
  </div>
</div>

<?php if (!empty($pageScript) && file_exists($pageScript)) {
    include $pageScript; 
} ?>
</body>
</html>
<!-- AMEN -->