<div class="container">
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Información <b>usuarios</b></h2>
            </div>
            <div class="col-sm-6">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo usuario</span></a>			
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Foto</th>
                <th>tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        
            <?php 
            foreach($users as $user){
                $id = 0;
                echo "<tr>";
                foreach($user as $key=>$value){
                    ($key == 'id')? $id = $value : '' ;
                    if ($key == 'foto') {
                        $foto =  base_url("public/src/img/".$value);
                        echo '<td > <img class="imgTable rounded-circle" src= "'.base_url($foto).'" alt="Sin imagen del usuario"></td>';
                    }
                    
                    else if ($key != 'deleted_at' or $key != 'password'){
                        if ($key == 'tipo'){
                            $tipo = ($value=='0')? "usuario": "administrador";
                            echo "<td>".$tipo."</td>";
                        }
                        else{
                            echo "<td>".$value."</td>";
                        }
                        
                    }
                }
                echo 
                '<td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="changeEdit(this)"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="change('.$id.')"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>';
                echo "</tr>";
            }
            ?>
            
            
        </tbody>
    </table>
    
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
                        <input type="hidden" name="uri" value ="users">					
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
                        <!--<div class="form-group">
                            <label>tipo</label>
                            <input type="text" class="form-control" name="tipo" required>
                        </div>-->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo de usuario</label>
                            <select class="form-control" id="" name="tipo">
                            <option value="0">Usuario</option>
                            <option value="1">Administrador</option>
                            </select>
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
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
                <form enctype="multipart/form-data" action="<?php echo site_url('/users/update'); ?>"  method="post">	
					<div class="modal-header">						
						<h4 class="modal-title">Modificar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					
                        <div class="modal-body">	
                            <input type="hidden" name="id" id="idEditUser">			
                            <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <!--<div class="form-group">
                                <label>tipo</label>
                                <input type="text" class="form-control" name="tipo" id="tipo" required>
                            </div>-->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo de usuario</label>
                                <select class="form-control" name="tipo"  id="tipo">
                                <option value="0">Usuario</option>
                                <option value="1">Administrador</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" >
                            </div>			
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Anular">
                            <input type="submit" class="btn btn-success" value="Actualizar">
                        </div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo site_url('/users/delete'); ?>"  method="post">
                    <input type="hidden" name="id" id="IdDeleteUser">
					<div class="modal-header">						
						<h4 class="modal-title">Eliminar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>¿Estás seguro de eliminar este registro?</p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Anular">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>        

    
	
