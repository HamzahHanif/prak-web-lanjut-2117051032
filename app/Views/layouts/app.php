<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
   

</head>
<body>
<nav class="header">
  <div class="navbar-brand">
    <a class="logo">
      
      <span>Hamzah Hanif</span>
    </a>
  </div>
  <ul class="header-nav nav-list">
    <li><a href="<?= base_url('user')?>"class="nav-link">Data Mahasiswa</a></li>
    <li><a href="<?= base_url('kelas')?>"class="nav-link">Data Kelas</a></li>
  </ul>
</nav>

<footer class="footer">
  <div class="container">
    <div class="row">
        <center>
      <div class="col-md-6">
        <p>&copy; <?= date('Y') ?> Hamzah Hanif. All rights reserved.</p>
      </div>
      </center>
    </div>
  </div>
</footer>



    <?= $this->renderSection('content')?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>