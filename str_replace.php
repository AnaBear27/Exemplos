<?php
	$frase="Receita da Semana";
	$novo_texto=str_replace("da Semana","do Mês", $frase);
	//exiberá: Receita do Mês.
	echo $frase."<br/>";
	echo $novo_texto;
?>