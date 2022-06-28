<?php require_once "controlador.php"; ?>
<?php require ('../autentificacion.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Inicio de sesión</h2>
                    <p class="text-center">Para iniciar sesion introduce tu Email y contraseña.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="contraseña-olvidada.php">Olvidaste tu contraseña?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Iniciar">
                        
        <a href="<?php echo $client->createAuthUrl() ?>" >Iniciar sesión con Google</a>
                    </div>
                    <div class="link login-link text-center">Aun no eres miembro? <a href="registro-user">Registrate ahora</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>