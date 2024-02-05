<?php
define("FILE_NAME", "Halaman Output");
$Tambah = $Kali = $Kurang = $Bagi = '';
if (isset($_POST['kirim'])) {
    $a = $_POST['nilaiA'];
    $b = $_POST['nilaiB'];

    if (is_numeric($a) && is_numeric($b)) {
        $Tambah = $a + $b;
        $Kali = $a * $b;
        $Kurang = $a - $b;
        $Bagi = ($b != 0) ? round($a / $b, 3) : 'Jangan dibagi 0';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="
    https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css
    " rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <title><?=FILE_NAME?></title>
</head>
<body>
<div class="container">
        <div class="tajuk">HASIL</div>
        <div class="form-output-container">
            <div class="form-output">
                <div class="form-output-kolom-kiri">
                    <label for="">a+b</label>
                    <div class="kolom-output">
                        <div><?=$Tambah?></div>
                    </div>
                </div>
                <div class="form-output-kolom-kanan">
                    <label for="">a-b</label>
                    <div class="kolom-output">
                        <div><?=$Kurang?></div>
                    </div>
                </div>
            </div>
            <div class="form-output">
                <div class="form-output-kolom-kiri">
                    <label for="">a*b</label>
                    <div class="kolom-output">
                        <div><?=$Kali?></div>
                    </div>
                </div>
                <div class="form-output-kolom-kanan">
                    <label for="">a/b</label>
                    <div class="kolom-output">
                        <div><?=$Bagi?></div>
                    </div>
                </div>
            </div>
            <button onclick="window.location.href = '../index.php';">INPUT LAGI</button>
        </div>
    </div>
</body>
</html>