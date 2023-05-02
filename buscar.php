   <?php
	// Conectar a la base de datos
	$servername = "bkcdrrzkdf1spjf9k1j9-mysql.services.clever-cloud.com:3306";
	$username = "uzos6fv4suprd9gt";
	$password = "Q68qNIIqQ9ObqwJpvSRv";
	$dbname = "bkcdrrzkdf1spjf9k1j9";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	    die("Conexión fallida: " . mysqli_connect_error());
	}

	// Obtener el término de búsqueda desde el formulario
	$termino = $_GET['termino'];

	// Realizar la búsqueda en la base de datos
	$sql = "SELECT * FROM db_comp WHERE Cod LIKE '$termino'";
	$resultado = mysqli_query($conn, $sql);

	// Mostrar los resultados de la búsqueda
	if (mysqli_num_rows($resultado) > 0) {
	    while($fila = mysqli_fetch_assoc($resultado)) {
	        echo "Cod: " . $fila["Cod"] . "<br>";
	        echo "SMILES_can: " . $fila["SMILES_can"] . "<br>";
	        echo "codSMILES: " . $fila["codSMILES"] . "<br><br>";
	    }
	} else {
	    echo "No se encontraron resultados.";
	}

	// Cerrar la conexión a la base de datos
	mysqli_close($conn);
	?>