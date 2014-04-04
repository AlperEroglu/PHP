<?php

	
if (isset($_GET['naam'])) {
	echo 'Hallo !' . $_GET['naam'] . ' U heeft dit ingevult:' . '<br />';
	
echo $_GET['achternaam'] . '<br />';

echo $_GET['geslacht'] . '<br />';

echo $_GET['telefoon'] . '<br />';

echo $_GET['woonplaats'] . '<br />';
}


if (empty($_GET['naam']) || empty( $_GET['achternaam']) || empty ($_GET['geslacht']) || empty ($_GET['telefoon']) || empty ($_GET ['woonplaats'])) {
echo "Vul alles in!";


echo"

<fieldset>
<legend>Formulier</legend>
<table>
<form action='formulier.php' method='get'>
<tr>
	<td>voornaam :</td>
	<td><input name='naam' type='text'></td>
</tr>
<tr>
<td>
	Achternaam :</td><td><input name='achternaam' type='text'></td>
</tr><tr>
<td>
	geslacht :</td><td><input name='geslacht' type='text'>
</td>
</tr><tr>
<td>
	Telefoonnummer :</td><td><input name='telefoon' type='text'>
</td>
</tr><tr>
<td>
Woonplaats :</td><td><input name='woonplaats' type='text'></td>
</td>
</tr>
<tr>
<td>
	<input type='submit' value='verzenden'>
</td>
</tr>
</table>
</fieldset>
";
}
?>