<div class="col-xl-12 col-md-6 mb-4">
<div class="card shadow mb-6">
    <div class="card-header py-3">
 
                <h4 class="m-0 font-weight-bold text-primary">Daftar Kelas</h4>
                    </div>
                    <div class="card-body">
                    <?php echo $this->session->flashdata('pesan')?>

            <?php echo anchor('administrator/kelas/input','<button class="btn btn-sm btn-primary mb-3"> 
            <i class="fas fa-plus fa-sm"></i> Tambah Kelas </button> ')?>


            <table class="table table-bordered table-stripped table-hover">
                <tr>
                    <th>NO</th>
                    <th>NAMA KELAS</th>
                    <th colspan="2">AKSI</th>
                </tr>

                <?php 
                $no = 1;
                foreach ($kelas as $kel) : ?>
                <tr>
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $kel->kelas?></td>
                    <td width="20px"><?php echo anchor('administrator/kelas/update/'.$kel->id_kelas,'<div class="btn btn=sm btn-primary">
                    <i class="fa fa-edit"></i></div>') ?></td>
                    <td width="20px"><?php echo anchor('administrator/kelas/delete/'.$kel->id_kelas,'<div class="btn btn=sm btn-danger">
                    <i class="fa fa-trash"></i></div>')?></td>
                </tr>
                <?php endforeach; ?>

              </div>
        </div>
    </div>
</div>
                </div>