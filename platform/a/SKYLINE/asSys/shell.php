<?php $GETS__SITE = $GLOBALS[$SITE]['GETS']; ?>
<?php foreach ($GLOBALS['GETS']['actor'] as $fn) 
    { echo $fn(); } 

$SITE = $GLOBALS['SITE'];
?>

<!-- .... DEAR INFINITE POTENTIAL, HOLY DOCTYPE... -->
<!DOCTYPE html>
<html><head>

<?php 
if ($GLOBALS['shadowENVO'] == true) {
        echo '<div>SHADOW MODE</div>';
}
foreach ($GLOBALS['GETS']['dressing'] as $fn) {
    echo $fn();
} ?>
<?php getMy_Styles(); ?>
<title><?= $GLOBALS['pageTitle'] ?></title>

</head>
<!-- END OPENING PRAYERS -->
<body>

<?php include 'header.php'; ?>
<main>

<div class="NAVIGATION">
<?php 
if (!empty($GETS__SITE['sideNav']) 
    && file_exists($GETS__SITE['sideNav'])) {
  require $GETS__SITE['sideNav']; 
  } 
?>
</div>
<div class="MAIN">

<?php foreach ($GLOBALS['GETS']['set'] as $fn) {
    echo $fn();
} ?>
</div>
</main>
<?php include 'footer.php'; ?>


 
<?php foreach ($GLOBALS['GETS']['scripts'] as $fn) {
    echo $fn();
} ?>

<script> 
  const FLAVOR = <?php echo json_encode($GLOBALS[$SITE]['ROOM_FLAVOR']); ?>;
  document.body.classList = FLAVOR;
</script>

</body>
</html>
<!-- AMEN -->