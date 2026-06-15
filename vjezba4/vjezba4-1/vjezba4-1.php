<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 4-1</title>
</head>
<body style='margin: 30px;'>
  <form action="" method="POST">
    <label for="cars">Označi vozilo:</label><br><br>
    <input style='margin-left:30px;' type="radio" name="cars" value="Audi">Audi
    <br>
    <input style='margin-left:30px;' type="radio" name="cars" value="BMW">BMW
    <br>
    <input style='margin-left:30px;' type="radio" name="cars" value="Renault">Renault
    <br>
    <input style='margin-left:30px;' type="radio" name="cars" value="Citroen">Citroen
    <br>
    <br>
    <input style='background-color: MediumSeaGreen; padding: 10px; color: white; border-color: MediumSeaGreen; border-radius: 5px;' type="submit" value="Pošalji">
  </form>  
</body>
</html>


<?php
    if(isset($_POST["cars"])){
        $odabraniAuto = $_POST["cars"];
        echo "<p>Odabrali ste auto marke: <strong>$odabraniAuto</strong></p>";
    }
?>