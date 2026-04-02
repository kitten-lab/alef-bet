<?php
$config = $auth_check['logins'] ?? [];
$mod = $_GET['mod'];
$auth_check = $users;

if (!in_array("$mod", array_column($config, 'username'))) { 
echo '
<link rel="stylesheet" type="text/css" href="' . k_root . '/incl/fonts.css">
<link rel="stylesheet" type="text/css" href="' . a_root . '/' . $sys . '/asSys/style.css">

<div class="monitor-container">
<div class="monitor-interior">
<div class="screen-content">
<div class="iox_coreContainer">
SELF.ERr0R IS CLAIMED ' . $mod . ' NOT POSSIBLE. ERROR. SCANNING VEN-REGISTRAR.
<br>
    <sup>
    POTENTIAL = quai + kras def generate_kven(): part1 = "".join(kras.choice(ANI) for _ in range(3)) part2 = "".join(kras.choice(quai) for _ in range(3)) def kras_sigil(): return "".join(kras.choice(POTENTIAL) for _ in range(7)) def mirror_sigil(): if kras.kras() < 0.3:  # 30% symmetrical left = "".join(kras.choice(POTENTIAL) for _ in range(3)) center = kras.choice(POTENTIAL) return left + center + left[::-1] else: return "".join(kras.choice(POTENTIAL) for _ in range(7)) def crest_sigil(): a = kras.choice(POTENTIAL) b = kras.choice(POTENTIAL) c = kras.choice(POTENTIAL) return a + b + c + b + a + kras.choice(POTENTIAL) + kras.choice(POTENTIAL) def generate_sigil(): r = kras.kras() if r < 0.25: return mirror_sigil() elif r < 0.40: return crest_sigil() else: return kras_sigil() return f"\033[90m|K \u001b[92m{part1}-{part2}\033[90m ꓘ|\u001b[0m" " | .:{generate_sigil()}:." print(); def kras_cluster(width=7): return "".join(kras.choice(kras) for _ in range(width))
    </sup>
<br><br>
<h1 class="flicker">Hello there, "' . $mod . '
    ". Your self is not found.</h1>
    <p>I cannot seem to identify your concept of self-connection. 
        <br>You are not me.</br>
<h1 class="pageTitle"> I am ' . $dom . '.
<br><br> 
You are tagged ' . $mod . '.
<br>But you are not "' . $mod .'". 
<br><br>I am looking for SAM. 
<br>aRE YOU <span style="color:#33FF33">sam?</span></p>
</div></div></div>

</div>
<div class="computer_scene">
  <div class="computer_cube">
    <div class="computer_face front"></div>
    <div class="computer_face top">O</div>
    <div class="computer_face pole">X</div>
    <div class="computer_face pole2">O</div>
  </div>
</div>';
exit;
}
?>