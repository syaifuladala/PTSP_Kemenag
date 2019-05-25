<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('Form_controller/do_upload');?>

<input type="file" name="surat_izin_penelitian" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>