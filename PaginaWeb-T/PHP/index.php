<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION ['id'])) { ?>
    <?php
include "HeaderNS.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
</head>
<style>
	body {
background-image: url("../Imagenes/Fondo1.jpeg");
background-size: cover;
background-repeat: no-repeat;
}
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <div class="p-3 mb-2 bg-white text-dark">
    <form class="border shadow p-5 rounded" action="check-login.php" method="POST" style="width: 450px;">
            <h1 class="text-center p-3">Iniciar Sesion</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert-danger" roles="alert">
                <?=$_GET['error'] ?>
                </div>
            <?php } ?>  
                <div class="row">
                <form method="post">
                <div class="col-md-12">
                    <label>Correo electrónico:</label>
                    <input type="email" name="username" id="username" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-12">
                    <label>Contraseña:</label>
                    <input type="password" name="psswd" id="psswd" class='form-control' maxlength="100" required >
                </div>
            <div class="mb-1">
                    <label class="from-label">Selecciona tu tipo de Usuario </label>
            </div>
            <select class="form-select mb-3" name="roles" aria-label="Seleccion">
                <option selected value="Usuario">Usuario</option>
                <option value="Administrador">Administrador</option>
            </select>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            <a href="registro.php" >¿Todavía no tienes cuenta?</a></p>
        </form>
            </div>
        </div>
    </div>
</body>
<?php
    include "Footer.php";
    ?>
</html>
<?php } else{
    header("Location: home.php");
} ?>