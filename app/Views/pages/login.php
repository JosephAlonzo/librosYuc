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
  <script src="<?php echo base_url('public/src/js/bootstrap.bundle.min.js'); ?>"></script>
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
            <div class="row">
                <div class="col-md-6 m-auto">
                    <p class="text-center">
                    <a href="#addEmployeeModal" data-toggle="modal">Crear cuenta</a>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>


    	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form enctype="multipart/form-data" action="<?= site_url('/users/add'); ?>" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                        <input type="hidden" name="tipo" value ="0">
                        <input type="hidden" name="uri" value ="login">					
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Anular">
						<input type="submit" class="btn btn-success" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>