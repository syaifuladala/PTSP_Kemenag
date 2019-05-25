<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>INPUT </h1>
    <?php echo form_open_multipart('Form_controller/do_upload');?>

    Foto copy Kartu Mahasiswa/ KTP (idenstitas)
    <input type="file" id="file-input" name="surat_izin_penelitian" class="form-control-file" required>

    <br>
    Foto copy Kartu Mahasiswa/ KTP (idenstitas)
    <input type="file" id="file-input" name="fc_identitas" class="form-control-file" >

    <br>
    <input type="submit" name="" value="Upload">

</form>

</body>
</html>