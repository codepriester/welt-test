<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.5, user-scalable=no">
    <title>WELT Downloader</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="res/welt.ico">
    <script src="welt.js"></script>
</head>
<body>
    <?php
        session_start();
        /*if (!isset($_SESSION["usr"])){
            die();
        }*/


    ?>
        <div class='headline'>
            <a id='testtext'>Die kleine Bitch hier soll mal miesen Blowie geben amk!</a>
            <img src='res/welt-downloader-03-nobg.svg' alt="WELT Downloader">
        </div>

        <div class='content'>
            <div class='layer' id='layer1'>
                <label for="aTime">Startzeit</label>    
                <input id="aTime" type='time' value="11:11"><br>
                <label for="bTime">Endzeit</label>
                <input id="bTime" type='time' value="12:12"><br>
                <button id="dnl" onclick=download()>Speichern</button>
            </div>    
        </div>

        <div class='guide'>
            <img src='res/lena-links-1.png'>
        </div>
        

</body>

</html>

