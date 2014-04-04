<?php



if (isset($_GET["naam"])) {
	echo "Hallo !" . $_GET["naam"] . " U heeft dit ingevult:" . "<br />";
}

echo $_GET["achternaam"] . "<br />";

echo $_GET["geslacht"] . "<br />";

echo $_GET["telefoon"] . "<br />";

echo $_GET["woonplaats"] . "<br />";




?>

<!--

if ($_GET["naam"]){
echo "Hallo!" . $_GET["naam"] . "<br />";
}

-->