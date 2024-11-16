<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genap atau Ganjil</title>
    <link rel="stylesheet" href="if-else.css">
</head>

<body>
    <div class="container">
        <h1>Program Cek Genap atau Ganjil</h1>
        <form method="POST">
            <label for="number">Masukkan angka:</label>
            <input type="number" name="number" id="number" required>
            <button type="submit">Cek</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['number'];

            if ($number % 2 == 0) {
                echo "<p>Angka <strong>$number</strong> adalah genap.</p>";
            } else {
                echo "<p>Angka <strong>$number</strong> adalah ganjil.</p>";
            }
        }
        ?>
    </div>
</body>

</html>