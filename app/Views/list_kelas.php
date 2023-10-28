<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>
<?php $id = 1; ?>

    <center>
    <h1 class="pagetitle">
    <strong>List Kelas
    </h1>
    </center>
    
    <div class="row">
        
    </div>
    <div class="mask d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col">
                <a href="<?= base_url('kelas/create')?>" class="btn btn-primary">Tambah Kelas</a>
            </div>
            <br>
            <br>
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kelas as $kelas){
                            ?>
                            <tr>
                                <td><?php echo $id++ ?></td>
                                <td><?= $kelas['nama_kelas']?></td>
                                <td>
                                    
                                        <a href="<?= base_url('kelas/' . $kelas['id'].'/edit')?>"class="btn btn-warning">Edit</a>
                                    
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </td>
                                <form action="<?=base_url('kelas/'.$kelas['id'])?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?=csrf_field()?>
                                </form>
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
