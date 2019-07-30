<?php

$nome = "Glaucia";

function teste() {

	  global $nome;
	  echo $nome;
}

function teste2() {

   $nome = "João";
   echo $nome, "Agora no texte 2";

}

teste();

teste2();

?>