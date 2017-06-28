<?php
namespace funcaoPokeagenda;
class pokeagenda{
	private $pokemons;

	public static function getPokemons(){
		$base = "http://pokeapi.co/api/v2/pokemon";
		if($data = file_get_contents($base)){
			$pokemons = json_decode($data);
			return $pokemons;
		}
	}
}