<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $badword = $_GET['badword'];
    $placeholder = str_repeat("*", strlen($badword));
    $text = "Movin' too fast, life is movin' in slow-mo
    I'm a god, better ask if you don't know
    Homie, better put your pride aside (Aside)
    I'm a Benz and you're more like a Volvo
    Your best stuff looks like my worst, synapses fire and burst
    Got the whole crew with me, 'bout to deal damage
    You know we ain't average (Oh yeah)
    I ain't gonna say this again
    But this is my time, better look in my eyes
    I'm a genius in disguise, wear my heart on my sleeve
    And you forced to oblige to a king in his prime (Yeah, yeah)
    Everybody get in line, sit back, watch the stars align
    I finesse like my life on the line
    Was a diamond in the rough and now I shine (Woo)";
    ?>
    <?= str_replace($badword, $placeholder, $text) ?>
    </br></br>
    <?= "Questo testo è lungo " . strlen($text) . " Caratteri."; ?>
    <?php 
    if(isset($_GET["badword"])){
        echo 'La parola "' . $badword . '" compare ' . substr_count($text, $badword) . " volte.";
    }
    ?>
</body>
</html>