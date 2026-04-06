<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $chestUID = 'cUID-' . strtoupper(bin2hex(random_bytes(7)));
  $ms = round(microtime(true) * 1000);
  $dir =  $GLOBALS['sonar'] . 'z/ven.registrar';

    if (!is_dir($dir)) { mkdir($dir, 0775, true); }   

  $file = $dir . '/registry.json';

  // Read existing data
  $json = file_get_contents($file);
  $vens = json_decode($json, true);
  $venID = $_POST['VEN1'] . '-' . $_POST['VEN2'];
  

  if (!$vens) {
    $vens = [];
  }


    if (!isset($vens[$venID])) {
        $vens[$venID] = [];
    } else { die("No!"); }

  // Create new post
  $vens[$venID] = [
            "ven.keyTYPE" => $_POST['keyType'],
            "ven.keyLABEL" => $_POST['keyLabel'],
            "ven.keyNOTES" => $_POST['registryNote'],
            "ven.scrubLABEL" => $_POST['scrubName'],
        "meta.DATA" => [
            "chest.UID" => $chestUID,
                "acting.SYSTEM" => $_POST['betSys'],
                "acting.CTRLS" => $_POST['betDom'],
                "acting.DOLLY" => $_POST['betMod'],
                "acting.VIEWPORT" => $_GET['pv'] ?? '__UNDISCLOSED__',
            "tps.REFS" => [
                    "tps.gaiaDATE" => date('M d, Y h:i:s A'), 
                    "tps.gaiaUNIX" => time(), 
                    "tps.cwEPC" => $_POST['cwEPC'],
                    "tps.cwCYC" => date('\T\e\mY.\V\e\tW'),
                    "tps.cwRND" => date('\E\dm.\E\tw.\E\nd'),
                    "tps.cwPIM" => date('\d\ig.\t\ai.\n\es.\s\a') . $ms
                    ],
                ],
  ];


  // Save it
  file_put_contents($file, json_encode($vens, JSON_PRETTY_PRINT));


// DON'T FORGET YOUR TPS REPORT
  $recordKeeper = $GLOBALS['sonar'] . 'z/trackerKeeper';
    if (!is_dir($recordKeeper)) { mkdir($recordKeeper, 0775, true); }
  
  $tpsReport = $recordKeeper . '/tpsReport_' . date('Y-m-d') . '_data.json';
  $json = file_get_contents($tpsReport);
  $tpss = json_decode($json, true);
  $hash = hash('sha256', $_SERVER['REMOTE_ADDR']);

  function kdeCHECK($hash) {
    if ($hash == "12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0") 
    { return "KDE CLEARED"; } 
    else 
    { return "KDE! KDE!"; }
  };

  $betSYS = $_POST['betSys'];
  $betDOM = $_POST['betDom'];
  $betMOD = $_POST['betMod'];
  $betACTION = "REGISTERED: VEN";
  $reportHEAD = "ven.registrar|actorAdd";
  $tpsUID = 'tUID-' . date('Ymd') . '.' . strtoupper(bin2hex(random_bytes(3)));

    if (!$tpss) {
        $tpss = [];
    }

    if (!isset($tpss[$betSYS])) {
        $tpss[$betSYS] = [];
    }


    if (isset($tpss[$betSYS][$betDOM][$betMOD][$tpsUID])) {
        die("Already exists in this Location.");
    }

    $tpss[$betSYS][$betDOM][$betMOD][$tpsUID] = [
        "chest.UID" => $chestUID,
        "chest.ACTION" => $betACTION,
        "ven.UID" => $_POST['VEN1'] . '-' . $_POST['VEN2'],
        "meta.DATA" => [
            "tps.gaiaDATE" => date('M d, Y h:i:s A'),
            "tps.gaiaUNIX" => time(),
            "acting.VIEWPORT" => $_GET['pv'] ?? '__UNDISCLOSED__',
            "acting.TOOL" => $reportHEAD,
            "kde.CHKR" => kdeCHECK($hash),
        ]
    ];

//$tpss = $tpss[$betLOC][$reportHEAD];
  file_put_contents($tpsReport, json_encode($tpss, JSON_PRETTY_PRINT));


}

