<?php
$naslov = "PHP dokument";
$autor = "Renee Horvat";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
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

        .footer {
            font-size: 0.9rem;
            color: var(--muted);
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            color: var(--accent);
        }

        .btn:hover {
            background: var(--accent);
            color: #fff;
        }

        .btn:focus-visible {
            outline: 3px solid var(--accent);
        }

        .btn:active {
            opacity: 0.8;
        }

        a:not(.btn) {
            color: inherit;
            text-decoration: none;
        }

        a:not(.btn):hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="wrap">
    <?php
    echo "<h1>$naslov</h1>";
    echo "<p>Ovu stranicu izradila je <strong>$autor</strong>.</p>";
    echo "<p>PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu.</p>";
    ?>

    <a href="https://www.index.hr" target="_blank" class="btn">
        Saznaj više o PHP-u
    </a>

    <p class="footer">Vježba 2-1</p>
</div>

</body>
</html>

<!-- vjezba1b.php -->