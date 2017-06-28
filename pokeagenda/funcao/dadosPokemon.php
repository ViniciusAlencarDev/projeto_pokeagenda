<?php
$url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_STRING);
if($data = file_get_contents($url)){
	$pokemon = json_decode($data);
	$nome = $pokemon->forms[0]->name;
	$nome[0] = strtoupper($nome[0]);
	echo "<img src='".$pokemon->sprites->front_default."' id='fotoTelaPokemon' title='".$nome."'><br>";
	echo "<hr>";
	echo "<b>Tipo:</b><br><br>";
	echo $pokemon->types[0]->type->name;
	echo "<hr>";
	echo "<b>Habilidades:</b><br><br>";
	$quantidadeAnbility = count($pokemon->abilities);
	for($i = 0; $i < $quantidadeAnbility; $i++){
		echo $pokemon->abilities[$i]->ability->name."<br>";
	}
	echo "<hr>";
	$movesCount = count($pokemon->moves);
	echo "<b>Movimentos:</b><br><br>";
	for($i = 0; $i < $movesCount; $i++){
		echo $pokemon->moves[$i]->move->name."<br>";
	}
	echo "<hr>";
}
?>