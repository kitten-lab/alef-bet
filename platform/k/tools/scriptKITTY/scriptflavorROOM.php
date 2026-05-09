
<script> 
  const FLAVOR = <?php echo json_encode($GLOBALS['ROOM_FLAVOR']); ?>;
  document.body.classList = FLAVOR;
</script>