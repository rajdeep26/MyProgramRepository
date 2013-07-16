<?php
	include 'mysql.php';
	mysql_safe_query('DELETE FROM programs WHERE id=%s LIMIT 1', $_GET['id']);
	mysql_close($dbhandle);
	redirect('ShowPrograms.php');
?>