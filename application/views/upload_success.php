<html>
<head>
<title>Upload Form</title>
</head>
<body>
<h4> Welcome      <?php echo $this->session->users['username']?>  !</h4><br><br>
<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor(base_url("index.php/upload_controller/"), 'Upload Another File!'); ?></p>

</body>
</html>