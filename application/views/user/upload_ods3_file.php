<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $file.$error;?>
	<?php echo form_open_multipart('Form_controller/do_upload_ods3?id_pengajuan='.$id.'.jpg&&id_fix='.$id);?>
		Surat Izin Penelitian
		<input type="file" id="file-input" name="surat_izin_penelitian" class="form-control-file" required>
		<br>

		Foto copy Kartu Mahasiswa/ KTP (idenstitas)
		<input type="file" id="file-input" name="fc_identitas" class="form-control-file" required>
		
		<br>

		<input type="submit" name="" value="Upload">
	</form>
</body>
</html>