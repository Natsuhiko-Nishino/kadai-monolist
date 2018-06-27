<?php

//じゃんけん
do {
    $hand = array('1:Rock','2:Paper','3:Scissors');
    //print var_export($hand, true);
    

    $usr_hand = (int)fgets(STDIN);
    $com_hand = array_rand($hand);

    if ($usr_hand == $com_hand) {
        echo "draw！ again！";
        print(PHP_EOL);
    } else if($usr_hand == 1 && $com_hand == 3 || $usr_hand == 2 && $com_hand == 1 || $usr_hand == 3 && $com_hand == 2) {
        echo "You win！";
    } else if($usr_hand == 1 && $com_hand == 2 || $usr_hand == 2 && $com_hand == 3 || $usr_hand == 3 && $com_hand == 1) {
        echo "You lose！";
    }
} while($usr_hand == $com_hand);

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="review3.css">
        <title>review</title>
    </head>
    <body>
        <header>
            <h1>JANKEN BATTLE!!</h1>
        </header>
        <main>
            <div id="Hunaki">
                <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Superman_Clipart.svg/939px-Superman_Clipart.svg.png>
            <h1>HERO</h1>
            </div>
            <div id="Murota">
                <h1>vs.</h1>
            </div>
            <div id="Ayaka">
                <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/PEO-monster.svg/2000px-PEO-monster.svg.png>
            <h1>ENEMY</h1>
            </div>
        </main>
        <footer>
            <div id="Maria">
            <h3>Command Options:</h3>
            <form action="cgi-bin/abc.cgi" method="post">
<p>
<input type="radio" name="riyu" value="1" checked="checked">Rock
<input type="radio" name="riyu" value="2" checked="checked">Paper
<input type="radio" name="riyu" value="3" checked="checked">Scissors
</p>

<p>
<input type="submit" value="GO!!">
</p>
</form>
</div>
        </footer>
    </body>