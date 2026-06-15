<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 6</title>
</head>
<body style='margin: 30px;'>
    <p>Kalkulator (Switch naredba)</p>
    <form action="" method="POST">
        <label for="prvi"><strong>Upiši prvi broj*</strong></label>
        <input type="number" id="prvi" name="prvi"><br><br>

        <label for="drugi"><strong>Upiši drugi broj*</strong></label>
        <input type="number" id="drugi" name="drugi"><br><br>

        <p>Rezultat:</p>
        <button type="submit" name="plus" style='padding: 10px; color: black; background-color: light-grey;'>+</button>
        <button type="submit" name="minus" style='padding: 10px; color: black; background-color: light-grey;'>-</button>
        <button type="submit" name="puta" style='padding: 10px; color: black; background-color: light-grey;'>*</button>
        <button type="submit" name="kroz" style='padding: 10px; color: black; background-color: light-grey;'>/</button>
        <br><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["prvi"]) && isset($_POST["drugi"]) && (isset($_POST["plus"]) || isset($_POST["minus"]) || isset($_POST["puta"]) || isset($_POST["kroz"]))){
        $operacija="plus";
        $prvi=$_POST["prvi"];
        $drugi=$_POST["drugi"];

        switch($operacija){
            case isset($_POST["plus"]): 
                echo "$prvi + $drugi = " . $prvi+$drugi;
                break;
            case isset($_POST["minus"]):
                echo "$prvi - $drugi = " . $prvi-$drugi;
                break;
            case isset($_POST["puta"]):
                echo "$prvi * $drugi = " . $prvi*$drugi;
                break;
            case isset($_POST["kroz"]):
                echo "$prvi / $drugi = " . $prvi/$drugi;
                break;
            default:
                echo "$prvi + $drugi = " . $prvi+$drugi;
        }
    }
?>