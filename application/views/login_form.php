<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN PAGE</title>
</head>
<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('login_controller/login'); ?>   

    <form method="POST" action="login" >
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username"><br><br>
        <label for="password">Password</label>
        <input type="text" name="password" placeholder="Password"><br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>