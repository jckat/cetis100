<div class="container-fluid">
<p>Mis Usuarios:</p>
		<h1>Welcome to CodeIgniter!</h1>

		<a href="<?php echo base_url() ?>index.php/users/getUsers">Despliega usuarios</a><br/>

		<p><b>Insertar Alumno</b></p>

	   

		<div class="row">

			<form id="form" action="<?php echo base_url() ?>index.php/alumno/alumnos/addAlumno" method="POST">

			<!-- Primera parte del formato -->

			<!-- Primera fila -->
			<div class="span8"></div>
   			<div class="span4"><p>Matricula:</p><input name="matr" id="matr" type="text"></div>

   			<!-- Segunda fila -->	
   			<div class="span8"></div>
   			<div class="span4"><p>Folio Beca:</p><input name="foli" id="foli" type="text"></div>
   			
   			<!-- Tercera fila -->
   			<div class="span4"><p>Nombre:</p><input name="nomb" id="nomb" type="text"></div>
   			<div class="span4"><p>Apellido Paterno:</p><input name="apat" id="apat" type="text"></div>
   			<div class="span4"><p>Apellido Materno:</p><input name="amat" id="amat" type="text"></div>

   			<!-- Cuarta fila -->
   			<div class="span12"><p>CURP:</p><input name="curp" id="curp" type="text"></div>

   			<!-- Quinta fila -->
   			<div class="span4"><p>Fecha Nacimiento:</p><input name="fnac" id="fnac" type="text"></div>
   			<div class="span8"><p>Lugar Nacimiento:</p><input name="lnac" id="lnac" type="text"></div>

   			<!-- Sexta fila -->
   			<div class="span8"><p>Direccion:</p><input name="dire" id="dire" type="text"></div>
   			<div class="span4"><p>Codigo Postal:</p><input name="cpos" id="cpos" type="text"></div>

   			<!-- Septima fila -->
   			<div class="span4"><p>Celular:</p><input name="celu" id="celu" type="text"></div>
   			<div class="span4"><p>Telefono:</p><input name="tele" id="tele" type="text"></div>
   			<div class="span4"><p>Estado Civil:</p><input name="edoc" id="edoc" type="text"></div>

   			<!-- Octava fila -->
   			<div class="span4"><p>Discapacidad:</p><input name="disc" id="disc" type="text"></div>
   			<div class="span4"><p>Seguro Escolar:</p><input name="sesc" id="sesc" type="text"></div>
   			<div class="span4"></div>

   			<!-- Novena fila -->
   			<div class="span4"><p>Nombre del Padre o Tutor:</p><input name="tuto" id="tuto" type="text"></div>

 		</div>

 		<!-- Segunda parte del formato -->

		<table>
		 
		 <tr>
		  <td><p>Requisitos:</p></td>
		  <td><p>Si:</p></td>
		  <td><p>No:</p></td>
		 </tr>	

		 <tr>
		  <td><p>Acta de Nacimiento</p></td>
		  <td><input name="acta" id="acta" value="si" type="checkbox"></td>
		  <td><input name="acta" id="acta" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>CURP</p></td>
		  <td><input name="cupr" id="cupr" value="si" type="checkbox"></td>
		  <td><input name="cupr" id="cupr" value="no" type="checkbox"></td>
		 <tr> 

		 <tr>
		  <td><p>Credencial IFE</p></td>
		  <td><input name="cife" id="cife" value="si" type="checkbox"></td>
		  <td><input name="cife" id="cife" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Credencial de Discapacidad</p></td>
		  <td><input name="cdis" id="cdis" value="si" type="checkbox"></td>
		  <td><input name="cdis" id="cdis" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Certificado de Secundaria</p></td>
		  <td><input name="csec" id="csec" value="si" type="checkbox"></td>
		  <td><input name="csec" id="csec" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Certificado Medico</p></td>
		  <td><input name="cmed" id="cmed" value="si" type="checkbox"></td>
		  <td><input name="cmed" id="cmed" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>3 Fotografias tamaño infantil</p></td>
		  <td><input name="foto" id="foto" value="si" type="checkbox"></td>
		  <td><input name="foto" id="foto" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Comprobante de domicilio</p></td>
		  <td><input name="cdom" id="cdom" value="si" type="checkbox"></td>
		  <td><input name="cdom" id="cdom" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Playera $150.00</p></td>
		  <td><input name="play" id="play" value="si" type="checkbox"></td>
		  <td><input name="play" id="play" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Seguro escolar $33.00</p></td>
		  <td><input name="escs" id="escs" value="si" type="checkbox"></td>
		  <td><input name="escs" id="escs" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><p>Credencial IFE de Padres</p></td>
		  <td><input name="pife" id="pife" value="si" type="checkbox"></td>
		  <td><input name="pife" id="pife" value="no" type="checkbox"></td>
		 <tr>

		 <tr>
		  <td><input type="submit" value="Guardar Usuario" id="guardar">
		  	<input type="reset" value="Cancelar" id="cancelar"></td> 
		 </tr>

		</table>

	   </form>
</div>