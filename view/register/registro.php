<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../../assets/img/icono.png">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Registro</title>
</head>
<body>

    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Registro Usuario</h1>
                    </div>
                    <div class="card-body justify-content-center">
                    <form action="../../controller/registro-usuario.php" method="POST" class="needs-validation" novalidate>
                        <div class="row justify-content-center">
                            
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="primerNombre" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Primer Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="segundoNombre" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Segundo Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="primerApellido" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Primer Apellido</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="segundoApellido" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Segundo Apellido</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="email" name="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Correo Electrónico</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="password" name="contrasena" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Cotraseña</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-outline-success">Registrarse</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="../../assets/js/validacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>