<?php 

$FIG = getFIG("postBASIC", "MakePost"); 
global $DEMO;
$user = 'd.SELF:' . $DEMO['USER'];
$assistant = 'd.AGENT:' . $DEMO['ASSISTANT'];

?>


<form method="POST" action="">
<span class="">
    <label for="POST__TIMBER_TOPIC"><?= $FIG['Topic']; ?></label><br>
    <input 
    rows="1" cols="60"
    name="POST__TIMBER_TOPIC" 
    placeholder="<?= $FIG['Topic_plhldr']; ?>" 
    required>
    <br>
</span>



    <span class="">
        <label for="POST__TIMBER_LEAF"><?= $FIG['Content']; ?></label><br>
        <textarea 
        rows="10" cols="60"
        name="POST__TIMBER_LEAF" 
        placeholder="<?= $FIG['Content_plhldr']; ?>" 
        required></textarea>
    </span>


    <label for="POST__TAGS"><?= $FIG['Tags']; ?></label><br>
    <textarea 
    rows="5" cols="30"
    name="POST__TAGS" id="tag-input" placeholder="type your thread..." /></textarea>


<span class="">
    <label for="POST__EVENT_UNIX"><?= $FIG['UNIX']; ?></label><br>
    <input 
        name="POST__EVENT_UNIX" 
        placeholder="<?= $FIG['UNIX_plhldr']; ?>"
        type="number">
</span>



<label for="agent"><?= $FIG['Agent']; ?></label><br>
  <div class="agentRow">
    <label><input type="radio" id="MRA" name="agent" value="<?= $user; ?>"><?= $user; ?></label>
    <label><input type="radio" id="ADM" name="agent" value="<?= $assistant; ?>"><?= $assistant; ?></label>
  </div>

<hr>

  <input type="hidden" name="POST__TZ" id="tz-input">

  <button type="submit">
    <?= $FIG['Submit_Button'] ?? 'Submit'; ?>
  </button> 
  <button type="reset">Reset Form</button>

  <span>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $FIG['Confirmation_Msg'];
    } 
    ?>

    </span>
    </form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<?php 
$scripts = (string)$GLOBALS['INTERA']['SYSTEM'];
include $scripts . 'NIM/DEMOgetTAGGED.php';
include $scripts . 'NIM/DEMOlocalSTORE.php';
?>
