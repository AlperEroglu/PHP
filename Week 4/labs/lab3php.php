<!DOCTYPE html>
<html lang="nl">
<head>
<title>Mijn php-script</title>
</head>
<body>
<h3> Gegevens verwerken</h3>
<?php
if (isset($_POST['naam']))
	{
		if ($_POST["taal"]=="N")
		{
		echo " Goedendag " . $_POST["naam"];
		}		
		if ($_POST["taal"]=="E")
		{
		echo " Good morning " . $_POST["naam"];
		}		
		if ($_POST["taal"]=="S")
		{
		echo " Buenos dias " . $_POST["naam"];
		}
		else
		{
		 echo "naam of taal niet aangevinkt/getypt";
		}
	}	
?>
</body>
</html>