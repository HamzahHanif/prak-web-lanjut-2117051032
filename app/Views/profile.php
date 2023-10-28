<?=$this->extend('layouts/app')?>

<?=$this->section('content')?>
<?php $id = 1; ?>
<center>
    <h1 class="pagetitle">
    <strong>Profile
    </h1>
</center>
    <center>
        <br>
        <img src="<?= $user['foto'] ?? base_url('/assets/img/cod.png') ?>" alt="Foto Profil" class="profile-img" width="100px">
        <br>
        <div class="profile-badge">
            <?= $user['nama'] ?>
        </div>
        <br>
        <div class="profile-badge">
            <?= $user['nama_kelas'] ?>
        </div>
        <br>
        <div class="profile-badge">
            <?= $user['npm'] ?>
        </div>
    </center>
    <?=$this->endSection()?>
