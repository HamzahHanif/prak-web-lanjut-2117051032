<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Halaman Profil</title>
</head>
<body>
    <center>
    <br>
    <img src="https://raw.githubusercontent.com/HamzahHanif/foto/main/AB_2117051032_HamzahHanif_SWAFOTO.jpeg" alt="Foto Profil" style="width: 100px;border-radius :50% "><br>

    <div class="badge bg-light text-dark" style="width:5rem">
        <?= $nama?>
    </div>
    <br>

    <div class="badge bg-light text-dark" style="width:5rem">
        <?= $kelas?>
    </div>
    <br>

    <div class="badge bg-light text-dark" style="width:5rem">
        <?= $npm?>
    </div>
    <br>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </center>
</body>
</html>
