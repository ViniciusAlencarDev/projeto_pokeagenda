<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Pokeagenda</title>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/funcao.js"></script>
</head>
<body>
<div id="boxPokedex">
	<div id="boxTelaPokemon">
		<b>Selecione um pokemon...<b>
	</div>
	<div id="boxListaPokemon">
		<?php
		include_once("classes/pokeagenda.php");
		use \funcaoPokeagenda\pokeagenda as minhaPokeagenda;
		$dados = new minhaPokeagenda();
		$pokemonMostrar = $dados->getPokemons();
		$quantidadePokemons = count($pokemonMostrar->results);
		for($i = 0; $i < $quantidadePokemons; $i++){
			$foto = $i + 1;
			$nome = $pokemonMostrar->results[$i]->name;
			$nome[0] = strtoupper($nome[0]);
			echo "<div id='".$pokemonMostrar->results[$i]->url."' class='cadaPokemon'><img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$foto.png'class='imgPokemon'><b>".$nome."</b><i></div>";
		}
		?>
	</div>
</div>
</body>
</html>
<!--Vinícius Alencar-->