<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 7</title>
</head>
<body style='margin: 40px'>
    <form action="" method="POST">
        <p>Računanje prosjeka i konačne ocjene</p>
        <label for="prvi">Unesi ocjenu 1. kolokvija: </label>
        <input type="number" name="prvi" id="prvi"><br><br>

        <label for="drugi">Unesi ocjenu 2. kolokvija: </label>
        <input type="number" name="drugi" id="drugi"><br><br>

        <button type="submit" name="prosjek">Prosjek</button><br><br>
    </form>
</body>
</html>


<?php
    if(isset($_POST["prvi"]) && isset($_POST["drugi"]) && isset($_POST["prosjek"])){
        $ocjene=array($_POST["prvi"], $_POST["drugi"]);
        $prosjek=($ocjene[0]+ $ocjene[1])/2;

        
        if(($ocjene[0]==1 || $ocjene[1]==1)&& $ocjene[1]<6 && $ocjene[1]<6){
            echo "Prosjek: $prosjek<br>";
            if($ocjene[0]==1){
                echo "Konačna ocjena je negativan(1), jer je ocjena prvog kolokvija negativna.";
            }else{
                echo "Konačna ocjena je negativan(1), jer je ocjena drugog kolokvija negativna.";
            }
        }
        elseif($ocjene[0]>1 && $ocjene[1]<6 && $ocjene[0]>1 && $ocjene[1]<6){
            echo "Prosjek: $prosjek<br>";
            switch(round($prosjek)){
                case 2:
                    echo "Konačna ocjena je dovoljan (2).";
                    break;
                case 3:
                    echo "Konačna ocjena je dobar (3).";
                    break;
                case 4:
                    echo "Konačna ocjena je vrlo dobar (4).";
                    break;
                case 5:
                    echo "Konačna ocjena je odličan (5).";
                    break;
            }
        }
        if($ocjene[0]>5 || $ocjene[1]>5 || $ocjene[0]<1 || $ocjene[1]<1){
            echo "Ocjene moraju biti između 1 i 5. Pokušajte ponovo!";
        }
    }
?>