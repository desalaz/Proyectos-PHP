<?PHP 
 
  function convierte_lista($texto){
	$lineas = explode ("-", $texto);
	$n_lineas = count ($lineas);
 
	echo ("<ul>");
		for ($i=0; $i<$n_lineas; $i++)
			echo ("<li>".ucwords ($lineas[$i])."</li>");
			
	echo ("</ul>");
  }
   
  $texto_entrada = "uno-dos-tres-cuatro-cinco-seis-siete-ocho-nueve-diez-once-doce";
  convierte_lista ($texto_entrada); 
?>