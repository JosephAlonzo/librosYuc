<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
  <link rel="stylesheet" href="<?php echo base_url('public/src/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/src/css/style.css'); ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="container">
    <div class="card pt-3 pb-3 pl-4 pr-4 shadow-lg mt-3">
        <div class="cad-body mt-4">
            <h4 class="card-title font-weight-bold text-center m-auto">Iniciar sesion</h4>
            <form action="" method="post">
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 m-auto">
                <img src="<?php echo base_url("public/src/img/user.png")?>" class="img-fluid" width="200" alt="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label for="nombre">Email</label>
                    <input type="email" name="email" placeholder="correo@algo.com" class="form-control">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label for="contrasenia">Contraseña</label>
                    <input type="password" name="password" placeholder="#contraseña" class="form-control">
                </div>
                </div>
            </div>
            <?php if (isset($mensaje)) : { ?>
                <div class="row">
                    <div class="col-md-6 m-auto">
                    <h6 class="alert-danger">Usuario o contraseña incorrecta</h6>
                    </div>
                </div>
            <?php }
            endif; ?>
            <div class="row mb-4 mt-2">
                <div class="col-md-6 m-auto">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Iniciar session</button>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>