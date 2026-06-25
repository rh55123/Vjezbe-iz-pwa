<?php
$conn = mysqli_connect("localhost", "root", "", "vjezba");

if (!$conn) {
    die("Greška pri spajanju na bazu: " . mysqli_connect_error());
}

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
    <title>Vježba 17</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h1>Korisnici i njihove države</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Korisničko ime</th>
                <th>Država</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td>
                        <?php if ($row['country_name']): ?>
                            <?php echo $row['country_name']; ?>
                        <?php else: ?>
                            <span class="no-country">Nema države</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>