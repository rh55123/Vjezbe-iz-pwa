<?php
$naslov = "PHP dokument — vježba 1d";
$autor = "Renee Horvat";
$opis = "Ova stranica nadograđuje vježbu 1c: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.";

// GET parametri
$tema = $_GET['tema'] ?? 'dark';
$slika = $_GET['slika'] ?? 'php';
$prikaziOpis = isset($_GET['opis']);

// slike
$putanjaSlike = "img/" . $slika . ".jpg";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $naslov; ?></title>

    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-light: #f1f5f9;
            --card: #ffffff;
            --text: #111827;
            --accent: #2563eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: <?php echo ($tema === 'light') ? 'var(--bg-light)' : 'var(--bg-dark)'; ?>;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        }

        .wrap {
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            text-align: center;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 2rem;
        }

        p {
            margin-bottom: 16px;
            line-height: 1.6;
        }

        img {
            max-width: 200px;
            margin: 20px 0;
        }

        form {
            margin-top: 20px;
        }

        select, label {
            display: block;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            color: var(--accent);
            background: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background: var(--accent);
            color: #fff;
        }
    </style>
</head>
<body>

<div class="wrap">
    <?php
    echo "<h1>$naslov</h1>";
    echo "<p>Autor: <strong>$autor</strong></p>";
    ?>

    <img src="<?php echo $putanjaSlike; ?>" alt="Slika">

    <?php
    if ($prikaziOpis) {
        echo "<p>$opis</p>";
    }
    ?>

    <form method="GET">
        <p><strong>Odaberi temu:</strong></p>
        <label>
            <input type="radio" name="tema" value="dark" <?php if ($tema === 'dark') echo 'checked'; ?>>
            Dark
        </label>
        <label>
            <input type="radio" name="tema" value="light" <?php if ($tema === 'light') echo 'checked'; ?>>
            Light
        </label>

        <p><strong>Odaberi sliku:</strong></p>
        <select name="slika">
            <option value="php" <?php if ($slika === 'php') echo 'selected'; ?>>PHP</option>
            <option value="server" <?php if ($slika === 'server') echo 'selected'; ?>>Server</option>
            <option value="code" <?php if ($slika === 'code') echo 'selected'; ?>>Code</option>
        </select>

        <label>
            <input type="checkbox" name="opis" <?php if ($prikaziOpis) echo 'checked'; ?>>
            Prikaži opis
        </label>

        <button type="submit" class="btn">Primijeni odabir</button>
    </form>

    <br>
    <a href="vjezba1c.php" class="btn">Natrag na vježba 1c</a>
</div>

</body>
</html>

<!-- vjezba1d.php -->