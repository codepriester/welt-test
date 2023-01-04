<?php
    $a = $_POST["a"];
    $b = $_POST["b"];

    if (!$a || !$b){
        $a=$_GET["a"];$b=$_GET["b"];
        //die();
    }
    
    $now = new DateTime();
    $a = new DateTime($a);
    $b = new DateTime($b);
    
    $aToNow = $a->diff($now)->format("%s");
    $aToB = $a->diff($b)->format("%s");

    //echo $aToNow . " --- " . $aToB;

    die();

    $master = file_get_contents("https://welt.personalstream.tv/v1/master.m3u8");
    //file_put_contents("master.m3u8", $master);
    
    if (!$master){
        echo "Fehler: Masterplaylist konnte nicht geladen werden.";
        die();
    }
    
    
    $len = strlen($master);

    $lines = explode(chr(0x0A), $master);
    for ($i = 0; $i < $len; $i++){
        if (strpos($lines[$i], "RESOLUTION=1920x1080")){
            $playlistUrl = $lines[$i+1];
            break;
        }
    }
    
    if (!$playlistUrl){
        echo "Fehler: HLS-Playlist konnte nicht geladen werden.";
        die();
    }
    
    $playlist = file_get_contents($playlistUrl);

    $len = strlen($playlist);
    $lines = explode(chr(0x0A), $playlist);
    for ($i = 0; $i < $len; $i++){
        if (strpos($lines[$i], 'https://') === 0){
            $hlsLink = $lines[$i];
            break;
        }
    }

    if (!$hlsLink){
        echo "Fehler: HLS-Playlist konnte nicht verarbeitet werden.";
        die();
    }

    if (!is_dir("video")){
        if (!mkdir("video")){
            echo "Fehler: Fehlende Dateiberechtigung #1";
            die();
        }
    }
    if (!is_dir("video/temp")){
        if (!mkdir("video/temp")){
            echo "Fehler: Fehlende Dateiberechtigung #2";
            die();
        }
    }
    




?>