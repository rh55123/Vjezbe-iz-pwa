<?php
$conn = mysqli_connect("localhost", "root", "", "vjezba");

if (!$conn) {
    die("Greška pri spajanju na bazu: " . mysqli_connect_error());
}

$countries_query = "SELECT country_code, country_name FROM countries ORDER BY country_name";
$countries_result = mysqli_query($conn, $countries_query);

$query = "
    SELECT 
        users.id,
        users.name,
        users.lastname,
        users.email,
        users.username,
        countries.country_name,
        countries.country_code
    FROM users
    LEFT JOIN countries ON users.country_code = countries.country_code
    ORDER BY users.id
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 18 - Uređivanje korisnika</title>
    
</head>
<body>
    <h1>Uređivanje korisnika</h1>
    
    <?php if (isset($_GET['success'])): ?>
        <div class="success">Korisnik je uspješno ažuriran!</div>
    <?php endif; ?>
    
    <?php if (isset($_GET['deleted'])): ?>
        <div class="success">Korisnik je uspješno obrisan!</div>
    <?php endif; ?>
    
    <?php if (isset($_GET['error'])): ?>
        <div class="error">Greška: <?php echo $_GET['error']; ?></div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Korisničko ime</th>
                <th>Država</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <form action="update.php" method="POST">
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" name="name" value="<?php echo $row['name']; ?>">
                        </td>
                        <td>
                            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
                        </td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td>
                            <select name="country_code">
                                <option value="">-- Bez države --</option>
                                <?php while ($country = mysqli_fetch_array($countries_result)): ?>
                                    <option value="<?php echo $country['country_code']; ?>" 
                                        <?php if ($country['country_code'] == $row['country_code']) echo 'selected'; ?>>
                                        <?php echo $country['country_name']; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="action" value="update" class="btn-edit">Spremi</button>
                            <button type="submit" name="action" value="delete" class="btn-delete" onclick="return confirm('Sigurno?')">Obriši</button>
                        </td>
                    </form>
                </tr>
                <?php 
                
                mysqli_data_seek($countries_result, 0);
                ?>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>