
<?php

if(isset($_POST['Calculer'])){

$HT=$_POST['HT'];
$TVA=$_POST['TVA'];

$TTC= $HT + ($TVA/100)*$HT;

echo "La TVA est : $TVA % <br>";
echo "Le montant TTC est : $TTC";

}

?>