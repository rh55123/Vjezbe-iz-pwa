
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="search">Unesite ime ili prezime koje tražite: </label>
        <input type="text" name="search">
        <button type="submit">
            Pretraži
        </button>
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost", "root", "", "users");
if(!$conn){
    die("Greška spajanja na bazu!");
}

if(isset($_POST['search']) && !empty($_POST['search'])){
    $search=$_POST['search'];
    $query="
        SELECT *
        FROM users
        WHERE name LIKE '%$search%'
        or lastname LIKE '%$search%'
    ";

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)){
        echo "<p>" . $row['name'] . "<br>";
        echo $row['lastname'] . "<p>";
    }

    mysqli_close($conn);
}

?>
