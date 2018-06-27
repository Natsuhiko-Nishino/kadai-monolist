<?php
    var_dump($_POST);
    $result = $_POST['vote'];
    print $result;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="count.css">
        <title>"MVP iiiiiiiiiiiiiis!!!"</title>
    </head>
    <body>
        <header><h1>"MVP iiiiiiiiiiiiiis!!!"</h1></header>
        <main>
            <h2>choose the good person </h2>
            <h4>※you can vote one person at one time</h4>
               <form action = "count.php" method = "post">
<input type="radio" name="vote" value="1">Gino
<?php
for($i=0, $i++;
echo $result1->$i
<input type="radio" name="vote" value="2">Michele
<input type="radio" name="vote" value="3">Saki
<input type="radio" name="vote" value="4">Reiko
<input type="radio" name="vote" value="5">Yossy
<input type="radio" name="vote" value="6">July
<p>
   
<input type="submit" value="vote">
</form>
</p>
</main>
    </body>
    </html>