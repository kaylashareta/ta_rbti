<div class="col-xl-12 col-md-6 mb-4">
    <div class="card shadow mb-6">
    <div class="card-header py-3">
 
                <h4 class="m-0 font-weight-bold text-primary">BAB 5 - BUSINESS PLAN</h4>
                    </div>
                    <div class="card-body">

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>JUDUL PROPOSAL</th>
            <th>AKSI</th>
        </tr>

        <?php 
        $no = 1; 
        foreach ($admplan as $apl) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $apl->nim_plan?></td>
            <td><?php echo $apl->judul_proposal?></td>
            <td width="20px"><?php echo anchor('administrator/plan/detail/'.$apl->id_proposal,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-eye"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

</div>
        </div>