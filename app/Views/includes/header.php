<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url('public/src/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/src/css/style.css'); ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="<?php echo base_url('public/src/js/bootstrap.bundle.min.js'); ?>"></script>
</head>
    
<body>
  <!--header area start-->
  <header class="d-flex justify-content-end align-items-center">
    <?php if(!empty($users)){ ?>
      <div class="right-area">
        <!--<a href="">Help Center</a>
        <a href="">Our Support</a> -->
      </div>
    
    <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="<?php echo base_url("public/src/img/".$users['foto']."")?>" alt="user image" class="border border-white rounded-circle"> <?= $users['nombre'] . ' ' . $users['apellido']?> <i class="fas fa-chevron-circle-down"></i>
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="<?= site_url('/logout')?>"> <i class="fas fa-user"></i> Logout</a>
      </div>
    </div>
  <?php } else{?>
    <div class="dropdown">
      <a class="btn btn-primary " href="<?= site_url('/login')?>" style="padding-top: 11px;border-radius: 0px;padding-bottom: 6px;">
        <i class="fas fa-user"></i> Iniciar sesión
      </a>
    </div>
  <?php }?>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    <?php if ( (isset($users) and $users['tipo']== 0)  OR empty($users) ) {
        if ( (isset($users) and $users['tipo']== 0)  ) {
      ?>
      <section class="d-flex align-content-center align-items-center justify-content-center">
          <button href="" class="btn btn-primary" id="addBook"><i class="fas fa-plus"></i>Agregar libro</button>
      </section>
        <?php }?>
      <?php if ( !empty($users) ) {?>
      <section>
          <a class="<?= (uri_string() == 'nowReading')? 'active': ''?>" href="<?php echo site_url('/nowReading');?>"><i class="fas fa-book"></i>Leyendo</a>
          <a class="<?= (uri_string() == 'browse' OR uri_string() == '/')? 'active': ''?>" href="<?php echo site_url('/browse');?>"><i class="fas fa-globe-americas"></i>Navegador</a>
          <a class="<?= (uri_string() == 'cart/show')? 'active': ''?>" href="<?php echo site_url('/cart/show');?>"><i class="fas fa-shopping-cart"></i>Mi carrito</a>
          <a class="<?= (uri_string() == 'favourite')? 'active': ''?>" href="<?php echo site_url('/favourite');?>"><i class="fas fa-star"></i>Favoritos</a>
          <a class="<?= (uri_string() == 'wishList')? 'active': ''?>" href="<?php echo site_url('/wishList');?>"><i class="fas fa-list"></i>Lista de deseos</a>
          <a class="<?= (uri_string() == 'history')? 'active': ''?>" href="<?php echo site_url('/history');?>"><i class="fas fa-history"></i>Historial</a>
      </section>
      <?php }
      else {?>
        <section>
          <a class="<?= (uri_string() == 'browse' OR uri_string() == '/')? 'active': ''?>" href="<?php echo site_url('/browse');?>"><i class="fas fa-globe-americas"></i>Navegador</a>
          <a class="<?= (uri_string() == 'cart/show')? 'active': ''?>" href="<?php echo site_url('/cart/show');?>"><i class="fas fa-shopping-cart"></i>Mi carrito</a>
        </section>
      <?php 
      }
      ?>
      
    
      <section class="section2">
          <p class="d-flex align-items-center <?= (uri_string() == 'mostRead')? 'active': ''?>"><i class="fas fa-circle red"></i><a href="<?php echo site_url('/mostRead');?>">Titulos más leidos</a></p>
          <p class="d-flex align-items-center <?= (uri_string() == 'bestOfList')? 'active': ''?>"><i class="fas fa-circle yellow"></i><a href="<?php echo site_url('/bestOfList');?>">Mejores calificados</a></p>
          <p class="d-flex align-items-center <?= (uri_string() == 'novels')? 'active': ''?>"><i class="fas fa-circle blue"></i><a href="<?php echo site_url('/novels');?>">Novelas</a></p>
          <p class="d-flex align-items-center <?= (uri_string() == 'nonFiction')? 'active': ''?>"><i class="fas fa-circle purple"></i><a href="<?php echo site_url('/nonFiction');?>">No ficción</a></p>
      </section>
      <section>
          <!--<p><i class="far fa-clock"></i>You added <span>Title book</span> by 
          <span>Autor</span> to your <span>Section</span>
          </p>-->
      </section> 
    <?php }
    // Panel del administrador 
    else{?>
      <section>
        <a class="<?= (uri_string() == 'users')? 'active': ''?>" href="<?php echo site_url('/users');?>"><i class="fas fa-user "></i>Usuarios</a>
        <a class="<?= (uri_string() == 'books')? 'active': ''?>" href="<?php echo site_url('/books');?>"><i class="fas fa-book "></i>Libros</a>
      </section>
      <section>

      </section>
    <?php }?>
  </div>
  <!--sidebar end-->
  <div class="content">
      