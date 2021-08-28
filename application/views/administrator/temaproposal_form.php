<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Tema Proposal</div>

<form method="post" action="<?php echo base_url('administrator/temaproposal/input_aksi')?>">
    <div class="form-group">
        <label>KODE TEMA</label>
        <input type="text" name="kode_tema" style="text-transform:uppercase" placeholder="Masukkan Kode Tema Proposal" class="form-control">
        <?php echo form_error('kode_tema','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>TEMA PROPOSAL</label>
        <input type="text" name="tema_proposal"  placeholder="Masukkan Tema Proposal" class="form-control">
        <?php echo form_error('tema_proposal','<div class="text-danger small" ml-3>')?>
    </div>


    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>

</div>