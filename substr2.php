<?php
	$frase="Receita da Semana";
	$parte=substr($frase,0,7); //contagem das letras.
	//substr(texto, posição inicial, comprimento).
	//exiberá: Receita.
	echo $frase."<br/>";
	echo $parte;
?>