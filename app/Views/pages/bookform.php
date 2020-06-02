<div class="container">
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2><b>Libros</b></h2>
            </div>
            <div class="col-sm-6">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo libro</span></a>			
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>Calificación</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        
            <?php 
            foreach($books as $book){
                $id = 0;
                echo "<tr>";
                foreach($book as $key=>$value){
                    ($key == 'id')? $id = $value : '' ;
                    if ($key == 'foto') {
                        $foto =  base_url("public/src/img/".$value);
                        echo '<td > <img class="imgTable " src= "'.base_url($foto).'" alt="Sin imagen del libro"></td>';
                    }
                    else if($key == 'descripcion'){
                        echo '<td ><textarea class="form-control textarea" rows="3" readonly>'.$value.'</textarea> </td>';
                    }
                    else if ($key != 'deleted_at' or $key != 'added_at'){
                        echo "<td>".$value."</td>";
                    }
                }
                echo 
                '<td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="changeEditB(this)"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="changeB('.$id.')"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
				<form enctype="multipart/form-data" action="<?= site_url('/books/add'); ?>" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar libro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Autor</label>
                            <input type="text" class="form-control" name="autor" required>
                        </div>
                        <div class="form-group">
                            <label>Genero</label>
                            <input type="text" class="form-control" name="genero" required>
                        </div>
                        <div class="form-group">
                            <label>Calificacion</label>
                            <input type="number" class="form-control" name="rate" min="0" max="5" step="0.5" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripción</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                        </div>        
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" class="form-control" name="precio" required>
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
                <form enctype="multipart/form-data" action="<?php echo site_url('/books/update'); ?>"  method="post">	
					<div class="modal-header">						
						<h4 class="modal-title">Modificar libro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					
                        <div class="modal-body">	
                            <input type="hidden" name="id" id="idEditBook">			
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" required id="nombreB">
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" class="form-control" name="autor" required id="autorB">
                            </div>
                            <div class="form-group">
                                <label>Genero</label>
                                <input type="text" class="form-control" name="genero" required id="generoB">
                            </div>
                            <div class="form-group">
                                <label>Calificacion</label>
                                <input type="number" class="form-control" name="rate" min="0" max="5" step="0.5" required id="rateB">
                            </div>
                            <div class="form-group">
                                <label for="descripcionB">Descripción</label>
                                <textarea class="form-control"  rows="3" name="descripcion" id="descripcionB"></textarea>
                            </div>        
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control" name="precio" id="precioB" required>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto" id="fotoB">
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
				<form action="<?php echo site_url('/books/delete'); ?>"  method="post">
                    <input type="hidden" name="id" id="IdDeleteBook">
					<div class="modal-header">						
						<h4 class="modal-title">Eliminar libro</h4>
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

    
	
