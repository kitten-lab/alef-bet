
<?php foreach ($GLOBALS['GETS']['actor'] as $fn) {
    echo $fn();
} ?>
    <!DOCTYPE html>
    <html><head>
    <title><?= $GLOBALS[$SITE]['ROOM_DISPLAY'] ?></title>
    <!-- THE CALLING OF THE STYLESHEET PROCESSION -->
    <?php 
foreach ($GLOBALS['GETS']['dressing'] as $fn) {
    echo $fn();
} ?>
<?php getMy_Styles(); ?>
    </head>
    <body>
<!-- END OPENING PRAYERS -->

<div class="wwwExplorer_mainShell"></div>
<div class="wwwExplorer_windowTitleBar">x</div>
<div class="wwwExplorer_windowToolBar">
<div class="wwwExplorer_linkBar">
<div onclick="WWWBack()">
  < back</div>
<div onclick="WWWForward()">
  forward ></div>

<span id="wwwBar" class="linkSlug" contenteditable="true"></span>
<div id="GO" onclick="LetsGO()">GO!</div>
</div>

<div class="wwwExplorer_innerShell">



<?php if (!empty($navCall) && file_exists($navCall)) {
    include $navCall; } ?>

<main class="iox_coreContents">
<?php foreach ($GLOBALS['GETS']['set'] as $fn) {
    echo $fn();
} ?>
</main>
</div>


<?php if (!empty($pageScript) && file_exists($pageScript)) {
    include $pageScript; 
} ?>

<script>
document.getElementById("wwwBar").innerHTML = window.location.pathname


function WWWBack(){
  javascript:history.go(-1)
}

function WWWForward(){
  javascript:history.go(1)
}
const wwwBAR = document.getElementById("wwwBar")
console.log(wwwBAR.innerHTML);


    function LetsGO(){
    window.location.href = wwwBAR.innerHTML;
    }

wwwBAR.addEventListener('input', () => {

    localStorage.setItem('savedContent', wwwBAR.innerHTML);
    console.log(wwwBAR.innerHTML);

});


wwwBAR.addEventListener("keydown", function(event) {
  // Check if the key pressed was "Enter"
  if (event.key === "Enter") {
    event.preventDefault(); // Prevents default behavior like scrolling
    LetsGO();
  }
});

</script>
</body>
</html>