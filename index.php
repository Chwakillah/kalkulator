<?php
define("FILE_NAME", "Halaman Input")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="
    https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css
    " rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <title><?=FILE_NAME?></title>
</head>
<body>
    <div class="container">
        <div class="tajuk">INPUT</div>
        <form action="layout/hitung.php" method="$_POST">
            <div class="nilaiA">
                <label for="">Nilai a:</label>
                <input type="text" name="nilaiA">
            </div>
            <div class="nilaiB">
                <label for="">Nilai b:</label>
                <input type="text" name="nilaiB">
            </div>
            <button type="submit" name="kirim">HITUNG</button>
        </form>
    </div>
</body>
</html>