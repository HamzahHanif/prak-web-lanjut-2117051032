<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
    <title>Create User</title>
</head> -->
<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>

    <div class="container">
        <h1 class="text-center mb-4"><strong>Form Edit Pengguna</h1>
        <center>
        <form action="<?= base_url('/user/'.$user['id'])?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">

            <?=csrf_field()?>
                <input type="hidden" name="_method" value="PUT">

                <!-- <label for="nama" class="form-label">Nama</label> -->
                <img src="<?=$user['foto']??'<default-foto>'?>"style="width: 500px">
                <br>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
        <br>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" 
                id="nama" name="nama" style="width: 30%" value="<?= $user['nama'] ?>"><?= validation_show_error('nama'); ?>
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" 
                id="npm" name="npm" style="width: 30%" value="<?= $user['npm'] ?>"><?= validation_show_error('npm'); ?>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label" >Kelas</label>
                <select class="form-select" name="kelas" id="kelas" style="width: 30%">
                    <?php
                    foreach ($kelas as $item){
                        ?>
                        <option value="<?=$item['id']?>"><?=$user['id_kelas']==$item['id']?'selected': ''?>
                            <?=$item['nama_kelas']?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            </center>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="width: 10%">Submit</button>
            </div>
        </form>
    </div>
    <?=$this->endSection()?>

