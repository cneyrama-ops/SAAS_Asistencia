<?php
   session_start();
   //si la sesion del usuario y la clave estan vacias entonces,
   //entonces no se ha logueado, redireciona a la pagina de login
   if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
       header('location:login/login.php');
  }

?>

<style>
    ul li:nth-child(2) .activo{
        background: rgb(11, 150, 214) !important;
    }
</style>

<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <H4 class="text-center">REGISTRO DE USUARIOS</H4>

    <div class="row">
        <form action="">
          <div class ="fl-flex-label mb-4 px-2 col-12 col-md-6">
             <label for="nombre" class="text-gray">NOMBRE</label>
             <input type="text" placeholder="Nombre" class= "input input__text">
            <input type="text" placeholder="Nombre" class= "input input__text">
            
          </div>
        </form>

    </div>


</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>