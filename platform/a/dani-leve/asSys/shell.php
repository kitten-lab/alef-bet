<?php $GETS__SITE = $GLOBALS[$SITE]['GETS']; ?>
<?php foreach ($GLOBALS['GETS']['actor'] as $fn) 
    { echo $fn(); } 

$SITE = $GLOBALS['SITE'];
?>

<!-- .... DEAR INFINITE POTENTIAL, HOLY DOCTYPE... -->
<!DOCTYPE html>
<html><head>
<?php include 'header.php'; ?>

<?php 
foreach ($GLOBALS['GETS']['dressing'] as $fn) {
    echo $fn();
} ?>
<?php getMy_Styles(); ?>
<title><?= $GLOBALS['pageTitle'] ?></title>

</head>

<!-- END OPENING PRAYERS -->
<body class="theme-<?= $GLOBALS[$SITE]['ROOM_FLAVOR'] ?>">

<main>

<div class="MAIN">

<?php foreach ($GLOBALS['GETS']['set'] as $fn) {
    echo $fn();
} ?>
</div>
</main>
<?php include 'footer.php'; ?>

</body>
</html>
<!-- AMEN -->
<script>
if (window.location.pathname === '/dani-leve/' &&
    !window.location.search
) {
  window.location.replace("/dani-leve?portfolio=home");
  }
</script>