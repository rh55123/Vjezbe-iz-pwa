<?php 
$boja="black";
$text ="Pošalji";
$poruka=" ";
if(isset($_POST["submit"]) && isset($_POST["num"])){
        $num=$_POST["num"];
        $imagined=rand(1,9);
        if($num == $imagined){
            $boja="green";
            $text="Pogodak, probaj ponovo!";
        }
        else{
            $boja="red";
            $text="Krivo, probaj ponovo!";
        }
        $poruka= "Zamišljen broj je $imagined";
    }
?>


<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 5</title>
</head>
<body style='margin: 30px;'>
    <p>Igra (pogodi broj)</p>
    <form action="" method="POST">
        <label for=""><strong>Upiši jedan broj od 1 do 9</strong></label>
        <input type="number" name="num" id="num"><br><br>

        <button type="submit" name="submit" style='color: white; background: <?php echo "$boja" ?>; border-radius: 4px; border: <?php echo "$boja" ?>; padding: 5px;'><?php echo "$text" ?></button><br><br>
    </form>
    <?php echo "$poruka"; ?>
</body>
</html>
