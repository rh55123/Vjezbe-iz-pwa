
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vježbe 4-3</title>
</head>
<body style='margin: 30px;'>
    <h1>Zadatak str_word_count</h1>
    <p>U zadatku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu str_word_count</p>
    <form action="" method="POST">
        <label for="niz"><strong>Ulazni niz:</strong></label><br>
        <input type="text" name="niz" id="niz"><br><br>
        <button type="submit" name="submit">Ispiši broj riječi</button>
    </form>
    <?php 
    if(isset($_POST["niz"]) && isset($_POST["submit"])){
            $boja="white";
            $niz = $_POST["niz"];
            $brRijeci=str_word_count($niz, 0, "čćžšđČĆŽŠĐ");
            echo "<p>ulazni niz: $niz. Sadrži $brRijeci riječi.</p>";
        }
?>
</body>
</html>