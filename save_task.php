<?php
include("db.php");
	if(isset($_POST['save_task'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$query = "INSERT INTO tasks(title, description) VALUE('$title', '$description')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			die("Query Fail, crack");

		}

		$_SESSION['message'] = 'Tarea guardada exitosamente';
		$_SESSION['message_type'] = 'success';

		header("Location: index.php");
	}
?>