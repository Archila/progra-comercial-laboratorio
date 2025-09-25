
<?php
session_start();
if(isset($_POST["password"])) {
    if ($_POST['password'] != 'admin123') {
        $_SESSION['error'] = "La contraseña es incorrecta";    
        
    } else {
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
        exit();
    }    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">

                <form method="post" action="login.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <?php
                        if(isset($_SESSION['error'])){
                            echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>';
                            unset($_SESSION['error']);
                        }
                    ?>

                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>