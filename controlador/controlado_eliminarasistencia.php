<?php
if (!empty($_GET['id'])) {
    # Obtener el ID de la asistencia a eliminar
    $id=$_GET['id'];
    echo $id;
    $sql=$conexion->query(" delete from asistencia WHERE id_asistencia=$id");
    if ($sql==true) {?>
    <script>
        $(function notificacion(){
            new PNotify({
                title: 'CORRECTO',
                text: 'La asistencia ha sido eliminada correctamente.',
                type: 'success',
                styling: 'bootstrap3'
            });
        });
    </script>
   <?php } else { ?>
    <script>
        $(function notificacion(){
            new PNotify({
                title: 'ERROR',
                text: 'No se pudo eliminar la asistencia.',
                type: 'error al eliminar',
                styling: 'bootstrap3'
            });
        });
    </script>
   <?php        
    } ?>
    <script>
        setTimeout(() => {
            window.history.replaceState(null, null, window.location.pathname);
        }, 0);
    </script>
   <?php
   }


?>