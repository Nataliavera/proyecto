<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <img src="/img/walkator-klMii3cR9iI-unsplash.jpg" alt="">
    <form action="login.php" method="POST">
        <h2>INICIAR SESION</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <input type="text" name="uname" placeholder="Nombre de Usuario"><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <button type="submit">Inicia Sesión</button>
        <a href="signup.php" class="ca">Crea una cuenta</a>
    </form>
</body>
</html>  