	<h1>Welcome to CodeIgniter!</h1>

		<p>Hola <?php echo $nombre; ?></p>
		<p>Twitter <?php echo $twitter; ?></p>

		<a href="<?php echo base_url() ?>index.php/users/getUsers">Despliega usuarios</a><br/>

		<p><b>Insertar Usuario</b></p>
		<form id="form" action="<?php echo base_url() ?>index.php/users/addUser" method="POST">

			<p>Nombre: <input name="name" id="name" type="text"></p>
			<p>Apellido: <input name="lastName" id="lastName" type="text"></p>
			<p>Twitter: <input name="twitter" id="twitter" type="text"></p>
			<p>Sitio Web: <input name="sitioweb" id="sitioweb" typw="text"></p>

			<input type="submit" value="Guardar Usuario" id="save">