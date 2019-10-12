<html>
<head>
<title>Upload Form</title>
</head>
<body>



<?php echo form_open_multipart(base_url("index.php/upload_controller/do_upload")); ?>
<h4> Welcome      <?php echo $this->session->users['username']?>  !</h4><br><br>
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" /><br><br>

<a href="<?php echo base_url("index.php/login_controller/logout") ?>">Logout</a>

</form>

</body>
</html>