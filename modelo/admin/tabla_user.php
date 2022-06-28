<?php 
	include("./../../zcontro/conexion.php");
 ?>
 <div class="container">
 	<div class="card">
 		<div class="card-header">
		Consultar Administradores
		</div>
		<div class="card-body">
			<div class="card-header" >
				<table class="table table-bordered">
					<thead class="">
						<tr>
							<th scope="col">Rol</th>
							<th scope="col">Nombre de Usuario</th>
							<th scope="col">Correo</th>
							<th scope="col">Status</th>
							<th scope="col" >Editar usuario</th>
						</tr>
					</thead>
						<tbody>

						<?php
						$sql="SELECT*FROM usertable" ;
						$result=mysqli_query($con, $sql);

						while ($mostrar=mysqli_fetch_array($result)) {
						
						?>

					<tr>
						<td scope="row"><?php if($mostrar['rol']==1){
							echo 'Administrador';
						}else{
							echo 'Usuario comun';
						} ?></td>
						<td scope="row"><?php echo $mostrar['name'] ?></td>
						<td scope="row"><?php echo $mostrar['email'] ?></td>

						<td><?php echo $mostrar['status'] ?></td>

						

						<td>  
							<a href="editar/editarurs.php?id=<?php echo $mostrar['id'];  ?>" class="btn btn-success" >Editar </a>
							<a href="editar/eliminarusr.php?id=<?php echo $mostrar['id'];  ?>" class="btn btn-danger" >Eliminar </a>
						</td>

								


					</tr>
						</tbody>

						<?php
							}
						?>

				</table>
			</div>
		</div>
	</div>
</div>



