<?=$this->extend('layouts/app')?>

<?=$this->section('content')?>
<?php $id = 1; ?>
<center>
    <h1 class="pagetitle">
    <strong>List User
    </h1>
</center>




<div class="mask d-flex">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col">
            <a href="<?= base_url('user/create')?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <br>
        <br>
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>NPM</th>

                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user){
                        ?>
                        <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?= $user['nama']?></td>
                            <td><?= $user['npm']?></td>
                            <td><?= $user['nama_kelas']?></td>
                            <td>
                                <a href="<?= base_url('user/' . $user['id'])?>" class="btn btn-primary">Detail</a>
                                <a href="<?= base_url('user/' . $user['id'].'/edit')?>" class="btn btn-warning">Edit</a>
                                <form action="<?=base_url('user/'.$user['id'])?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?=csrf_field()?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>
