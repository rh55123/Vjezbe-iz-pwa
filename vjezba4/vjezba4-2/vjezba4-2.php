<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 4-2</title>
</head>
<body style='margin: 40px; display: grid; justify-content: center; align-items: center;'>
    <h1>Provjera rada dućana</h1>
    <?php 
        date_default_timezone_set("Europe/Zagreb");

        $trenutniSat= date("G");
        $trenutniDan=date("N");
        $danasnjiDatum=date("m-d");

        $praznici=array("01-01", "01-06", "05-01", "05-30", "06-22", "08-05", "08-15", "11-01", "11-18", "12-25", "12-26");

        function jeliDucanOtvoren($dan, $sat, $datum, $praznici){
            foreach($praznici as $dat){
                if($dat == $datum){
                    return "Dućan je zatvoren zbog praznika ili blagdana."; 
                }
            }
            if($dan ==7){
                return "Dućan je zatvoren jer je nedelja.";
            }
            elseif($dan==6){
                if($sat>=9 && $sat<=14){
                    return "Dućan je otvoren.";
                }else{
                    return "Dućan je zatvoren.";
                }
            }else{
                if($sat>=8 && $sat<=20){
                    return "Dućan je otvoren.";
                }else{
                    return "Dućan je zatvoren.";
                }
            }
        }

        
        echo "datum: $danasnjiDatum, vrijeme: $trenutniSat";
        echo "<br>";
        echo "<p>" . jeliDucanOtvoren($trenutniDan, $trenutniSat, $danasnjiDatum, $praznici) . "</p>";
    ?>
</body>
</html>

