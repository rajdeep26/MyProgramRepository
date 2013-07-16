<?php
	 // if (empty($_POST['programtitle'])) {
  //                     echo "Hi";
  //     }
	if(!empty($_POST)) 
	{
		include 'mysql.php';
		if(mysql_safe_query('INSERT INTO programs (program_title,program_language,program,date) VALUES (%s,%s,%s,%s)', $_POST['programtitle'], $_POST['programlanguage'],$_POST['program'],time()))
			redirect('ShowPrograms.php');
		else
			echo mysql_error();
	}
	else
	{
		echo "empty";
	}

	mysql_close($dbhandle);
?>