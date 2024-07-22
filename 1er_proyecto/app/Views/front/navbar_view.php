<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>



<!-- inicio de Barra de Navegacion -->
<nav class="navbar navbar-expand-lg bg-body-black">
  <div class="container-fluid">
  <div class="navbar-header">
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal_ultimo')?>">
          <!-- logo/marca de la empresa-->
         <img src="<?php echo base_url ('assets/img/logo.jpg')?>" alt= "marca" width="
          75" height="30" class="img-fluid"/>
        </a>
    </div> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->perfil_id == 1): ?>
           <div classe="btn btn-secondary active btnUser btn-sm">
              <a href="">ADMIN:  <?php echo session('nombre'); ?> </a>
            </div>
    <a class="navbar-brand" href="#"></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href='quienes_somos'>Quiénes somos</a>
         </li>
          <li class="nav-item">
            <a class="nav-link" href='acercade'>Acerca de</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href='registro'>Registrarse</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href='login'>Inicio</a>
         </li>   
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
            aria-disabled="true">Cerrar Sesión</a>
         </li>       
      </ul>
</div>

<?php elseif(session()->perfil_id == 2):  ?>
  <div class= "btn btn-info active btnUser btn-sm">
    <a href="">CLIENTE:   <?php echo session('nombre'); ?></a>
</div>
<!-- Navbar para clientes que puede comprar-->
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href='quienes_somos'>Quiénes somos</a>
     </li> 
     <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
        aria-disabled="true">Cerrar Sesión</a>
     </li>       
  </ul>
</div>

<?php else:?>
<!-- NAVBAR PARA CLIENTES no logueados-->
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <li class="nav-item">
             <a class="nav-link" href='quienes_somos'>Quiénes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='acercade'>Acerca de</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href='registro'>Registrarse</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href='login'>Inicio</a>
         </li> 
       </li>   
               
      </ul>
</div>



      <li class="nav-item dropdown">
          <button class="btn btn-outline-warning" data-bs-toggle="dropdown" aria-expanded="false">
         Vista
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Luz</a></li>
              <li><a class="dropdown-item" href="#">Oscuro</a></li>
            <li><a class="dropdown-item" href="#">Auto</a></li>
          </ul>
         </li>
        </ul>
        </div>  
     </form>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    <?php endif;?>
    </div>
  </div>
</nav>
<!-- fin Barra de Navegacion -->