<?php
    include '../layout/header.php';
    include '../../model/conexion.php';

    if($_REQUEST['id']){
        $sentencia = $con -> prepare("SELECT * FROM docentes WHERE id_docente=?;");
        $sentencia -> execute([$_REQUEST['id']]);
        $docente = $sentencia -> fetch(PDO::FETCH_OBJ);
    }

?>


<div class="container justify-content-center mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Actualización Docente</h1>
                </div>
                <div class="card-body justify-content-center">
                <form action="../../controller/docentes/actualizacion-docente.php" method="POST" class="needs-validation" novalidate>
                    <div class="row justify-content-center">
                        
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="hidden" value="<?php echo $docente->id_docente ?>" name="id_docente">
                                    <input type="text" value="<?php echo $docente->primer_nombre ?>" name="primerNombre" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Primer Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" value="<?php echo $docente->segundo_nombre ?>" name="segundoNombre" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Segundo Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" value="<?php echo $docente->primer_apellido ?>" name="primerApellido" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Primer Apellido</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" value="<?php echo $docente->segundo_apellido ?>" name="segundoApellido" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Segundo Apellido</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="number" value="<?php echo $docente->edad ?>" name="edad" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Edad</label>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-5">
                                    <button type="submit" class="btn btn-outline-success">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../layout/footer.php';
?>