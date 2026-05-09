<script>
document.getElementById("wwwBar").innerHTML = window.location.pathname
function WWWBack(){ javascript:history.go(-1) }
function WWWForward(){ javascript:history.go(1) }

const wwwBAR = document.getElementById("wwwBar")

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