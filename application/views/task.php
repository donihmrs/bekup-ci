<html>
<head>
	<title>Task</title>
</head>
<body>
<?php
	foreach ($task as $row) {
		echo $row['task'].$row['date']."</br>";
	}
?>
<form method="POST" action="<?php echo base_url('task/simpan');?>">
<label> Task </label>
<input type="text" name="task" maxlength="35"></input></br>
<input type="submit" value="Submit"></input>
</form>
</body>
</html>
