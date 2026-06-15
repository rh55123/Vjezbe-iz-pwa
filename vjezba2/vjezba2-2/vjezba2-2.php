<?php
$naslov = "PHP dokument — vježba 1c";
$autor = "Renee Horvat";
$opis = "Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$linkInfo = "https://www.php.net";
$linkNatrag = "../vjezba2-1/vjezba2-1.php";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $opis; ?>">
    <title><?php echo $naslov; ?></title>

    <style>
        :root {
            --bg: #0f172a;
            --card: #ffffff;
            --text: #111827;
            --muted: #6b7280;
            --accent: #2563eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
        }

        .wrap {
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
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

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            color: var(--accent);
            margin-right: 10px;
        }

        .btn:hover {
            background: var(--accent);
            color: #fff;
        }

        .footer {
            margin-top: 24px;
            font-size: 0.9rem;
            color: var(--muted);
        }
    </style>
</head>
<body>

<div class="wrap">
    <?php
    echo "<h1>$naslov</h1>";
    echo "<p>Ovu stranicu izradila je <strong>$autor</strong></p>";
    echo "<p>$opis</p>";
    ?>

    <a href="<?php echo $linkInfo; ?>" target="_blank" class="btn">
        Saznaj više o PHP-u
    </a>

    <a href="<?php echo $linkNatrag; ?>" class="btn">
        Natrag na vježba 1b
    </a>

    <div class="footer">
        <?php echo "Godina: " . date('Y'); ?>
    </div>
</div>

</body>
</html>

<!-- vjezba1c.php -->