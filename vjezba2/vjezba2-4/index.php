<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 2-4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="a"><br><br>

        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="b"><br><br>

        <button type="submit" name="submit">Pošalji</button><br><br>
    </form>
    <?php
        if(isset($_POST["submit"]) && isset($_POST["a"]) && isset($_POST["b"])){
            $a=$_POST["a"];
            $b=$_POST["b"];
            $c=(3*$a - $b)/2;
            echo "c = (3*a-b)/2 = (3*$a-$b)/2 = $c";
        }
    ?>
</body>
</html>

