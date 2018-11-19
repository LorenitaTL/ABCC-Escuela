<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABCC de Escuela</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include 'Vista/menu_inicio.php';?>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well">
	<center><h2>ABCC ESCUELA</h2></center>
	<div style="height:10px;"></div>
  <div class='col-xs-1'>
    <h3 class='text-right'>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_agregar"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
    </h3>
  </div>
	<table width="100%" class="table table-striped table-bordered table-hover">
		<thead>
      <th>Número de control</th>
      <th>Nombre</th>
      <th>Primer Apellido</th>
      <th>Segundo Apellido</th>
      <th>Edad</th>
      <th>Carrera</th>
      <th>Semestre</th>
      <th>Editar</th>
      <th>Eliminar</th>
		</thead>
		<tbody>
		<?php
			include('Scripts/Servidor/conexion.php');
      $host = "127.0.0.1"; //Local Host
      $usuario = "root"; //NO LO HAGA COMPA!!!
      $password = "";
      $bd = "bd_escuela";

      $enlace = conexion($host, $usuario, $password, $bd);
			$query=mysqli_query($enlace,"select * from alumnos");
			while($row=mysqli_fetch_array($query)){
        $datos=$row[0]."||".
             $row[1]."||".
             $row[2]."||".
             $row[3]."||".
             $row[4]."||".
             $row[5]."||".
             $row[6];

				?>
				<tr>
				<td><span id="num_control<?php echo $row['num_control']; ?>"><?php echo $row[0]; ?></span></td>
				<td><span id="nombre<?php echo $row['num_control']; ?>"><?php echo $row[1]; ?></span></td>
				<td><span id="primer_ap<?php echo $row['num_control']; ?>"><?php echo $row[2]; ?></span></td>
        <td><span id="segundo_ap<?php echo $row['num_control']; ?>"><?php echo $row[3]; ?></span></td>
				<td><span id="edad<?php echo $row['num_control']; ?>"><?php echo $row[4]; ?></span></td>
				<td><span id="carrera<?php echo $row['num_control']; ?>"><?php echo $row[5]; ?></span></td>
        <td><span id="semestre<?php echo $row['num_control']; ?>"><?php echo $row[6]; ?></span></td>
				<td><button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit_modal" onclick="agregaform('<?php echo $datos ?>')"></button></td>
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id']?>"  onclick="agregaNC('<?php echo $datos ?>')"><i class='glyphicon glyphicon-trash'></i> Eliminar</button></td>
				</tr>
				<?php
			}
		?>
		</tbody>
	</table>
	</div>

<?php include('Vista/modal_editar.php'); ?>
<?php include('Vista/modal_agregar.php'); ?>
<?php include('Vista/modal_eliminar.php'); ?>
<script src="Scripts/Servidor/funciones.js"></script>
</body>
</html>
