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
        <h1 class="text-center mb-4">Form Tambah Kelas</h1>
        <center>
        <form action="<?= base_url('/kelas/store')?>" method="POST" enctype="multipart/form-data">
         
            <div class="mb-3">
                <label for="kelas" class="form-label" >Kelas</label>
                
               
                <input type="text" class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>" 
                id="kelas" name="nama_kelas" style="width: 30%" value="<?= old('nama_kelas') ?>"><?= validation_show_error('nama_kelas'); ?>
          
            </div>
            </center>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="width: 10%">Submit</button>
            </div>
        </form>
    </div>
    <?=$this->endSection()?>

