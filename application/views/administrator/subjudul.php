<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> DAFTAR SUB JUDUL
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <?php echo anchor('administrator/subjudul/input','<button class="btn btn-sm btn-primary mb-3"> 
    <i class="fas fa-plus fa-sm"></i> Tambah Sub Judul </button> ')?>


    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>SUB JUDUL ARTIKEL</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($subjudul as $sub) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
           <td><?php echo $sub->subjudul?></td>
            <td width="20px"><?php echo anchor('administrator/subjudul/update/'.$sub->id_subjudul,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-edit"></i></div>') ?></td>
             <td width="20px"><?php echo anchor('administrator/subjudul/delete/'.$sub->id_subjudul,'<div class="btn btn=sm btn-danger">
             <i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

</div>