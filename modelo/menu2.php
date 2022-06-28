<?php require "../zcontro/controlador.php" ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: ./../zcontro/user-otp.php');
        }
    }
}else{
  header('Location: ./../zcontro/login-user.php');
}
if ($fetch_info['rol']==1){
    header('Location: admin/panelctrl.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="./../assets/css/style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../css/principal.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:500|Roboto:300,400,700&display=swap" rel="stylesheet">

    <title>COMDIA2.0</title>

	</head>
<body>
	<header>
    <nav class="navbar navbar-light navbar-lg fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="./../modelo/indexu.php">ComDia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ComDia</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alimentos
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                <a class="dropdown-item disabled" href="#">TIPOS DE ALIMENTOS</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="verduras.php">Verduras</a>
                  
                    
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">CREA TU PROPIA DIETA</a> -->
               
              </li>
            </ul>
        </li>

       

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mejora tu salud
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                    <a class="dropdown-item" href="../vista/consejos.php">Recomendaciones</a>
                    <a class="dropdown-item" href="../vista/ejercicios.php">Ejercicios</a>
              </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Medicamentos
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
                    <a class="dropdown-item" href="medicamento_gestacional.php">Diabetes gestacional</a>
                    <a class="dropdown-item" href="medicamento_tipo_dos.php">Diabetes tipo 2</a>
              </li>
            </ul>
        </li>
        <br>
        <br>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SESIÓN
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li>
              <a class="dropdown-item disabled" href="#"><?php if($fetch_info['rol']== 1){
                echo ('Administrador');}
                else{echo ('Usuario');} ?></a>
              <a class="dropdown-item disabled" href="#"><?php echo $fetch_info['name'] ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./../zcontro/logout-user.php">Cerrar Sesion</a>
              </li>
            </ul>
        </li>
      </ul>
      </div>
    </div>
    
    <div id="ctn-icon-search">
        <i class="fas fa-search" id="icon-search"></i>
    </div>
    <div id="icon-menu">
        <i class="fas fa-bars"></i>
    </div>

  </div>
</header>

</nav>

    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
<¡-- cajon de busqueda -->
    <ul id="box-search">
        <li><a href="./../vista/consejos.php"><i class="fas fa-search"></i>Recomendaciones</a></li>
    </ul>
    
    <div id="cover-ctn-search"></div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./../assets/js/jquery.js"></script>
    <script src="./../assets/js/script.js"></script>
    <script src="./../assets/js/popper.min.js"></script>
    <script src="./../assets/js/bootstrap.min.js"></script>
	</body>
</html>