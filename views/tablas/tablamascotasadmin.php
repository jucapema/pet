<div class="container tabla">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Mascotas </b></h2>
					</div>
					<div class="">
                        <div class="search-box">
							<div class="input-group">
								<input type="text" id="search" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-addon"><i class="fas fa-search"></i></span>
							</div>
                        </div>
                    </div>
					<div class="col-sm-6">

						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-minus-circle"></i> <span>Eliminar</span></a>
					</div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Nombre</th>
                        <th>Raza</th>
						<th>Edad</th>
                        <th>Tamaño</th>
                        <th>Fundación</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Lucas</td>
                        <td>criollo</td>
						<td>1</td>
                        <td>mediano</td>
                        <td>OnePets</td>
                        <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam.</p></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                        </td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Max</td>
                        <td>criollo</td>
						<td>2</td>
                        <td>mediano</td>
                        <td>OnePets</td>
                        <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam.</p></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"> </i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                        </td>
                    </tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar"> skiper</td>
                        <td>criollo</td>
						<td>2</td>
                        <td>grande</td>
                        <td>OnePets</td>
                        <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam.</p></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Firulais</td>
                        <td>criollo</td>
						<td>3</td>
                        <td>grande</td>
                        <td>OnePets</td>
                        <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam.</p></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" data-toggle="tooltip" title="Editar"> </i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                        </td>
                    </tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
                        <td><img src="img/user.jpg" class="avatar" alt="Avatar">Angora</td>
                        <td>criollo</td>
						<td>1</td>
                        <td>grande</td>
                        <td>OnePets</td>
                        <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam.</p></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class=" fas fa-edit" data-toggle="tooltip" title="Editar"> </i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i></a>

                        </td>
                    </tr>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Editar Información</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Raza</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Edad</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tamaño</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control" >
						</div>
						<div class="form-group">
							<label>Descripción</label>
							<input type="text" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Mascota</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>¿Seguro que quieres eliminar este registro?</p>
						<p class="text-warning"><small>Se enviara un email a la fundación para notificarla.</small></p>
						<div class="form-group">
							<label>Comentarios</label>
							<textarea placeholder="Escriba aqui la razón por la cual se eliminara la mascota"	class="form-control" maxlength="65525" required="required"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-primary" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>