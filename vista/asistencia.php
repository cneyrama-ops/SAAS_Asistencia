<?php require('./layout/topbar.php'); ?>
<?php require('./layout/sidebar.php'); ?>

<?php
require('../modelo/conexion.php');
?>

<style>

    #tabla_asistencia thead th{
        background-color: #343a40 !important;
        color: white !important;
        text-align: center;
        vertical-align: middle;
    }

    #tabla_asistencia tbody td{
        color: #212529 !important;
        background-color: white !important;
        vertical-align: middle;
    }

    #tabla_asistencia tbody tr:hover{
        background-color: #f1f1f1 !important;
    }

    .badge{
        font-size: 13px;
    }

</style>

<div class="page-content">

    <div class="container-fluid">

        <!-- TITULO -->
        <div class="row mb-4">
            <div class="col-md-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body d-flex justify-content-between align-items-center">

                        <div>
                            <h3 class="mb-1">
                                <i class="fas fa-user-check text-primary"></i>
                                Control de Asistencias
                            </h3>
                        </div>

                        <?php
                        $total = $conexion->query("SELECT COUNT(*) total FROM asistencia");
                        $cantidad = $total->fetch_assoc();
                        ?>

                        <span class="badge bg-primary p-3">
                            Total: <?php echo $cantidad['total']; ?>
                        </span>

                    </div>

                </div>

            </div>
        </div>


        <!-- TABLA -->
        <div class="row">

            <div class="col-md-12">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <table id="tabla_asistencia" class="table table-hover table-bordered align-middle">

                            <thead class="table-dark">

                                <tr>
                                    <th>ID</th>
                                    <th>Empleado</th>
                                    <th>DNI</th>
                                    <th>Cargo</th>
                                    <th>Entrada</th>
                                    <th>Salida</th>
                                    <th>Estado</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                $sql = "
                                    SELECT 
                                        a.id_asistencia,
                                        e.nombre,
                                        e.apellido,
                                        e.dni,
                                        c.nombre AS cargo,
                                        a.entrada,
                                        a.salida

                                    FROM asistencia a

                                    INNER JOIN empleado e
                                    ON a.id_empleado = e.id_empleado

                                    INNER JOIN cargo c
                                    ON e.cargo = c.id_cargo

                                    ORDER BY a.id_asistencia DESC
                                ";

                                $resultado = $conexion->query($sql);

                                while($fila = $resultado->fetch_assoc()){

                                    $estado = "";
                                    $color = "";

                                    if($fila['entrada'] <= '08:00:00'){
                                        $estado = "Puntual";
                                        $color = "success";
                                    }else{
                                        $estado = "Tardanza";
                                        $color = "danger";
                                    }

                                ?>

                                <tr>

                                    <td>
                                        <?php echo $fila['id_asistencia']; ?>
                                    </td>

                                    <td>
                                        <strong>
                                            <?php
                                            echo $fila['nombre'].' '.$fila['apellido'];
                                            ?>
                                        </strong>
                                    </td>

                                    <td>
                                        <?php echo $fila['dni']; ?>
                                    </td>

                                    <td>
                                        <?php echo $fila['cargo']; ?>
                                    </td>

                                    <td>
                                        <?php echo $fila['entrada']; ?>
                                    </td>

                                    <td>
                                        <?php echo $fila['salida']; ?>
                                    </td>

                                    <td>
                                        <span class="badge bg-<?php echo $color; ?>">
                                            <?php echo $estado; ?>
                                        </span>
                                    </td>

                                </tr>

                                <?php
                                }
                                ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php require('./layout/footer.php'); ?>