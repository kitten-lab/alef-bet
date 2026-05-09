<?php 
require_once $GLOBALS['INTERA']['SYSTEM'] . 'wireWORDS.php'; // CHEST CRATING SYSTEM
require_once __DIR__ . '/-SIG-cuBOOK.php'; // ASSISTANT SETTINGS
$cuFIG = getFIG("cuBOOK", "GuestPOST"); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


<form method="POST" action="">
<div class="formContainer">
<?php wireINPUT("USER","ANY NAME",true); ?>
<?php wireTEXTAREA("MESSAGE","YOUR MESSAGE",true); ?>
</div>

  <input type="hidden" name="POST__TZ" id="tz-input">

  <button type="submit">
    <?= $cuFIG['Submit_Button'] ?? 'Submit'; ?>
  </button> 
  <button type="reset">Reset Form</button>

  <span>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $cuFIG['Confirmation_Msg'];
    } 
    ?>

    </span>
    </form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>
<?php 
$scripts = (string)$GLOBALS['INTERA']['SYSTEM'];
?>
