<?php
include '../layout/header.php';
include '../../model/conexion.php';
?>
<?php
$sentencia = $con->query("SELECT * FROM docentes");
$docentes = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container text-center">
    <h1>LISTA DOCENTES</h1>
    <div class="row justify-items-center mb-3">
        <div class="col-md-2 offset-10">
            <a href="registro-docente.php" class="btn btn-success"><b><i class="fa-solid fa-plus"></i> Agregar</b></a>
        </div>
    </div>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table table-dark">
            <?php
            foreach ($docentes as $docente) {
            ?>
                <tr>
                    <td><?php echo $docente->id_docente ?></td>
                    <td><?php echo $docente->primer_nombre ?> <?php echo $docente->segundo_nombre ?></td>
                    <td><?php echo $docente->primer_apellido ?> <?php echo $docente->segundo_apellido ?></td>
                    <td><?php echo $docente->edad ?></td>
                    <td>
                        <a href="actualizacion-docente.php?id=<?php echo $docente->id_docente; ?>" type="button" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen"></i></a>
                        <a onclick="eliminarDocente(<?php echo $docente->id_docente ?>)" type="button" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    function eliminarDocente(idDocente) {
        Swal.fire({
            title: '¿Estás seguro de eliminar al docente?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                var url = "../../controller/docentes/eliminar-docente.php?id="+idDocente;
                $.ajax({
                    type: 'POST',
                    url: url,
                    async: true,
                    success: function (r){

                    }
                });
                Swal.fire(
                    'Docente eliminado!',
                    'Registre un nuevo docente',
                    'success'
                ).then((result2)=>{
                    if (result2.isConfirmed) {
                        parent.location.href = 'docentes.php'
                    }
                });
            }
        })
    }
</script>

<?php
include '../layout/footer.php';
?>