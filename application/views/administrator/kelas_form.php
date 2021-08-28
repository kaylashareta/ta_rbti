<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Kelas</div>

<form method="post" action="<?php echo base_url('administrator/kelas/input_aksi')?>">
    <div class="form-group">
        <label>NAMA KELAS</label>
        <input type="text" name="kelas" style="text-transform:uppercase" placeholder="Masukkan Nama Kelas" class="form-control">
        <?php echo form_error('kelas','<div class="text-danger small" ml-3>')?>
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