<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Hari</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Program Nama Hari</h1>
        <form method="POST">
            <label for="dayNumber">Masukkan angka (1-5):</label>
            <input type="number" name="dayNumber" id="dayNumber" min="1" max="5" required>
            <button type="submit">Cek</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dayNumber = $_POST['dayNumber'];
            $dayName = "";

            switch ($dayNumber) {
                case 1:
                    $dayName = "Senin";
                    break;
                case 2:
                    $dayName = "Selasa";
                    break;
                case 3:
                    $dayName = "Rabu";
                    break;
                case 4:
                    $dayName = "Kamis";
                    break;
                case 5:
                    $dayName = "Jumat";
                    break;
                default:
                    $dayName = "Angka tidak valid";
                    break;
            }

            echo "<p>Hari ke-$dayNumber adalah <strong>$dayName</strong>.</p>";
        }
        ?>
    </div>
</body>

</html>