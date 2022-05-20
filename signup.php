<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<form action="signup-check.php" method="post">
     	<h2>REGISTRARSE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <!--Nombre-->
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Nombre" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Nombre"><br>
          <?php }?>

          <!--Nombre de usuario-->
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="Nombre de Usuario" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="uname" placeholder="Nombre de Usuario"><br>
          <?php }?>


     	<!--Contraseña-->
     	<input type="password" name="password" placeholder="Contraseña"><br>

          <!--Confirmar contraseña-->
          <input type="password" name="re_password" placeholder="Confirmar Contraseña"><br>

     	<button type="submit">Registrarse</button>
          <a href="index.php" class="ca">¿Ya tienes una cuenta?</a>
     </form>
</body>
</html>