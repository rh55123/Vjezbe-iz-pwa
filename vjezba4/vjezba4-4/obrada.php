
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='margin: 40px;'>
    <?php

    function prost($broj){
        if($broj<=1){
            return false;
        }
        for($i=2; $i<$broj; $i++){
            if($broj % $i ==0){
                return false;
            }
        }
        return true;
    }
    if(isset($_POST["submit"]) && isset($_POST["broj"])){
        $broj=$_POST["broj"];
        if($broj<100){
            if(prost($broj)){
                echo "<p>Broj $broj je prost.</p>";
            }else{
                echo "<p>Broj $broj nije prost.</p>";
            }
            echo "<p>Prosti brojevi manji od 100: ";
            for($i=2; $i <100; $i++){
                if(prost($i)){
                    echo "$i ";
                }
            }
            echo "</p>";
        }
        else{
            echo "brojevi moraju biti manji od 100;";
        }
        
    }
?>
<a href="vjezba4-4.php"><button>Povratak</button></a>
</body>
</html>

