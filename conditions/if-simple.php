<?php
/*****************************************/
/********** Conditions Simples ***********/
/*****************************************/
//### Exemples ###//
echo "CONDITIONS SIMPLES <br><br><br>";

$animal = "Chat";
echo "1.Est-ce un chat : ";
if($animal == "Chat"){
  //condition vraie
	echo "Oui";
}else{
  //condition fausse
	echo "Non";
}
echo "<br><br>";
/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/
// Écrire la condition qui affiche "Non" quand $chat vaut "Chien" et affiche "Oui" quand $chat vaut "Chat" ###//
$animal = "Chien";
echo "2.Est-ce un chat : ";
if($animal != "chat"){
	echo "Non";
}else{
	echo "oui";
}
//mettre votre code ici
echo "<br><br>";

//----------------------------------------
// Écrire la condition qui affiche "Oui" quand $chat vaut true et affiche "Non" dans le cas contraire ###//
$chat = true;
echo "3.Est-ce un chat : ";
if($chat=true){
	echo "oui";
}else{
	echo "non";
}
//mettre votre code ici
echo "<br><br>";
?>
