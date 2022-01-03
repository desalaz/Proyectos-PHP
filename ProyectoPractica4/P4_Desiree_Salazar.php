<?php 

 function Burbuja (&$vector){

	 $tam = count($vector);

for ($i = 1; $i < $tam; $i++) {

for ($j = $tam - 1; $j >= $i; $j--){

	if ($vector[$j] > $vector [$j - 1]) {

		$aux = $vector [$j - 1];

		$vector[$j - 1] = $vector [$j];

		$vector[$j] = $aux;

			}	
		}

	}

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>P4_Desiree_Salazar</title>
</head>
<body>
	<h2> Punto 1 - Ordenar array </h2>

<?php

function mostrarNombre($empresa1){
		$resultado= "";
		foreach ($empresa1 as $nombre) {
		$resultado .= $nombre . "<br><br>";
}
	return $resultado;

}


$empresa1 = array("Ana", "Marcos","Zacarias","Beatriz", "Carlos", "Amancio", "Isabel", "Yolanda",);

	echo "Contenido inicial del array empresa 1: <br>";
	echo mostrarNombre ($empresa1);

	 /*for ($i= 0; $i < count($empresa1); $i++) {
	 	echo  "<br>" . $empresa1[$i] . "<br>";
	 }*/

echo "<hr/>";

	Burbuja($empresa1);
	echo "<br>";
	echo "Contenido ordenado por el método A, método de la burbuja: <br>";
	echo mostrarNombre ($empresa1);


/*for ($i= 0; $i < count($empresa1); $i++) {
	echo "<br>" . $empresa1[$i] . "<br>" ;
}*/
	
echo "<hr/>";
function mostrarNombre2($empresa2){
		$resultado= "";
		foreach ($empresa2 as $nombre) {
		$resultado .= $nombre . "<br><br>";
}
	return $resultado;

}

$empresa2 = array("Andrea", "Carlos","Antonio","Jose", "Maria", "Francisco", "Begoña", "Manuel","Laura", "Andrés", "Diana",);

echo "Contenido inicial del array empresa 2: <br>";
	echo mostrarNombre2($empresa2);

	/*for ($i=0; $i < count($empresa2); $i++){
		echo "<br>" . $empresa2[$i] . "<br>";
	}*/

echo "<hr/>";

//$empresa2 = array("Andrea", "Carlos","Antonio","Jose", "Maria", "Francisco", "Begoña", "Manuel","Laura", "Andrés", "Diana",);

rsort($empresa2);
echo "Contenido ordenado por el método B: <br>"; 
echo mostrarNombre2 ($empresa2);

/*for ($i= 0; $i < count($empresa2); $i++ ){
echo "<br>" . $empresa2[$i] . "<br>";

}*/



echo "<h2> Punto 2 - Tabla de Conversion </h2>";

$euro_do = ('1.09');
$euro_fr = ('1.06');
$euro_ye = ('117.17');
$euro_li = ('0.89'); 

//Colores para filas de tablas
$color1='#CCEEFF';
$color2='#CCCCCC';
		
//Definicion tabla y su cabecera
echo("<table width='500'>");
echo ("<tr bgcolor= '#FFEECC'>");
echo ("<th> Euros </th>");
echo ("<th >Dolaes </th>");
echo ("<th> Francos </th>");
echo ("<th> Yenes </th>");
echo ("<th> Libras </th>");
echo ("</tr>");

//Definicion de cada fila de la tabla
for ($i=1; $i<=10; $i++){

	if ($i % 2 == 0){

		echo ("<tr bgcolor= $color1 . $i>");

	} else {

		echo ("<tr bgcolor= $color2 . $i>");
	}

//echo ("<tr align='center' bgcolor= ${"color" . $i}>");


echo ("<td> $i </td>");
echo ("<td>" .$euro_do * $i. "</td>");
echo ("<td>" .$euro_fr * $i. "</td>");
echo ("<td>" .$euro_ye * $i. "</td>");
echo ("<td>" .$euro_li * $i. "</td>");
echo ("</tr>");
}
echo ("</table>");

?>


<h2> Punto 3 - Conversor de monedas </h2>

<form action="" method="POST">

	<label for= "euro" >Cantidad en Euros:</label>
	<input type="number" name= "euro">

	Convertir a:
	<select name= "moneda">
		<option value= "dolares" SELECTED>Dólares USA
		<option value= "francos" >Francos suizos
		<option value= "yenes" >Yenes japoneses
		<option value= "libras">Libras esterlinas
	 </select><br><br>

	 <input type = "submit" value = "Convertir"> <br>

 </form>

</body>
</html>

<?php 

	if (empty($_POST['euro']))
		echo "<h4> Debe introducir una cantidad </h4>";


	if (!empty($_POST['euro']) && !empty($_POST['moneda'])) {

		$euros= $_POST['euro'];
		$monedas= $_POST['moneda'];

	if ($monedas == "dolares"){
		$dol = ($euros * 1.09);
		echo "<h4> $euros euro(s) equivale(n) a: $dol dólares </h4>";
}

	if ($monedas == "francos"){
	$fran = ($euros * 1.06);
	echo "<h4> $euros euro(s) equivale(n) a: $fran francos </h4>";

}

	if ($monedas == "yenes"){
		$yen = ($euros * 117.17);
		echo "<h4> $euros euro(s) equivale(n) a: $yen yenes </h4>";

}

	if ($monedas == "libras"){
		$lib = ($euros * 0.89);
		echo "<h4> $euros euro(s) equivale(n) a: $lib libras </h4>";

}
		
			
	} 
	

	echo "<h2> Punto 4 - Tipo fichero </h2>"; 


 	function Calcula_extension ($fichero) {

	$fichero_nuevo= stristr($fichero, '.');
		return $fichero_nuevo;

 }

 $fichero_nuevo= "prueba.pdf";
 
  Calcula_extension ($fichero_nuevo);



function tipo_fichero ($fichero_nuevo){

$extension_arreglo = stristr($fichero_nuevo, '.');
	//echo $extension_arreglo;

$extension_m = strtoupper($extension_arreglo,);
	//echo $extension_m;
	
 $extension= ltrim($extension_m, '.');
	
switch ($extension){

			case "PDF":
 			 $tipo = "Documento Adobe PDF";
 				break;

 			case "TXT":
 			 $tipo = "Documento de texto";
  				break;

  			case "HTML":
			 $tipo= "Documento HTML";
				break;

			case "HTM":
			 $tipo= "Documento HTM";
				break;

			case "PPT":
			 $tipo = "Presentacion Microsoft Powerpoint";
				break;

			case "DOC":
			 $tipo = "Documento Microsoft Word";
				break;

			case "GIF":
			 $tipo= "Imagen GIF";
				break;

			case "JPG":
			 $tipo = "Imagen JPG";
				break;

			case "ZIP":
			$tipo = "Archivo comprimido ZIP";
				break;
	
 			default:
 			$tipo = " Archivo " . $extension ;

 	}

 	return "El fichero: " . $fichero_nuevo . " es de tipo: " . $tipo . "<br>";


} 

  echo tipo_fichero ($fichero_nuevo);


echo "<h2> Punto 5 - Contenido en lista no numerada </h2> ";

function convierte_lista ($texto){
	$lineas = explode("-", $texto);
	$n_lineas = count ($lineas);

echo("<ul>");
	for ($i=0; $i<$n_lineas; $i++)
		echo ("<li>" .ucwords($lineas[$i]). "</li>");

echo "</ul>";
}
	

$texto_entrada = "uno-dos-tres-cuatro-cinco-seis-siete-ocho-nueve-diez";


 Convierte_lista ($texto_entrada);


?>
