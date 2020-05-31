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
</head>
    
<body>
  <!--header area start-->
  <header class="d-flex justify-content-end align-items-center">
    <?php if(!empty($users)){ ?>
      <div class="right-area">
        <a href="">Help Center</a>
        <a href="">Our Support</a>
        <<a href="" ><img src="<?php echo base_url("public/src/img/".$users['foto']."")?>" alt="user image" class="border border-white rounded-circle"> <?= $users['nombre'] . ' ' . $users['apellido']?> <i class="fas fa-chevron-circle-down"></i></a>     
      </div>
    <?php } ?>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
      <section>
          <a href="" class="btn btn-primary" id="addBook"><i class="fas fa-plus"></i> ADD A BOOK</a>
      </section>
      <section>
          <a href="<?php echo site_url('/nowReading');?>"><i class="fas fa-book"></i>Now Reading</a>
          <a href="<?php echo site_url('/browse');?>"><i class="fas fa-globe-americas"></i>Browse</a>
          <a href="<?php echo site_url('/cart');?>"><i class="fas fa-shopping-cart"></i>Buy Books</a>
          <a href="<?php echo site_url('/favourite');?>"><i class="fas fa-star"></i>Favourite Books</a>
          <a href="<?php echo site_url('/wishList');?>"><i class="fas fa-list"></i>Wishlist</a>
          <a href="<?php echo site_url('/history');?>"><i class="fas fa-history"></i>History</a>
      </section>
      <section class="section2">
          <p class="d-flex align-items-center"><i class="fas fa-circle red"></i><a href="<?php echo site_url('/mostRead');?>">Must Read Titles</a></p>
          <p class="d-flex align-items-center"><i class="fas fa-circle yellow"></i><a href="<?php echo site_url('/bestOfList');?>">Best Of List</a></p>
          <p class="d-flex align-items-center"><i class="fas fa-circle blue"></i><a href="<?php echo site_url('/novels');?>">Classic Novels</a></p>
          <p class="d-flex align-items-center"><i class="fas fa-circle purple"></i><a href="<?php echo site_url('/nonFiction');?>">Non fiction</a></p>
      </section>
      <section>
          <p><i class="far fa-clock"></i>You added <span>Title book</span> by 
          <span>Autor</span> to your <span>Section</span>
          </p>
      </section>  
  </div>
  <!--sidebar end-->
  <div class="content">
      