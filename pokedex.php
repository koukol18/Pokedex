<?php
/* Načtení json soubory, převedení JSONu na PHP pole vyfiltrování špatných hodnot */
$json_file = file_get_contents("./pokemons.json");
$pokedex_array = json_decode($json_file, true)["results"];
$pokedex_array = array_filter($pokedex_array, function ($var) { 
                            return empty($var["evolution"]);
                        }
                    );
var_dump($pokedex_array);