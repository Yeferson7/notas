<?php
	include("db.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM tasks WHERE id = $id";
		$result = mysqli_query($conn, $query);
		if(!$result){
			die("Consulta fallida");
		}
		$_SESSION['message'] = 'Tarea eliminada exitosamente';
		$_SESSION['message_type'] = 'danger';
		header("Location: index.php");
	}

?>