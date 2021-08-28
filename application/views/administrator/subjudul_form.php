<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Sub Judul Artikel</div>

<form method="post" action="<?php echo base_url('administrator/subjudul/input_aksi')?>">
    <div class="form-group">
        <label>SUB JUDUL ARTIKEL</label>
        <input type="text" name="subjudul" style="text-transform:uppercase" placeholder="Masukkan subjudul" class="form-control">
        <?php echo form_error('subjudul','<div class="text-danger small" ml-3>')?>
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