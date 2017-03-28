<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
  echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
  echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
  echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
  );

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
  for ($j = 0; $j < count($couleurs[$i]); ++$j) {
    echo $couleurs[$i][$j].'<br>';
  }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
  echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
  );
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
  echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
    'marque' => 'Citroen',
    'puissance' => 70,
    'prix' => 10000,
    ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
    'marque' => 'VW',
    'puissance' => 140,
    'prix' => 270000,
    ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
    'marque' => 'Lamborghini',
    'puissance' => 700,
    'prix' => 200000,
    ),
  );
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
  echo '<br>'.$gamme;
  foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.' : '.$valeur.'<br>';
  }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = ['Janvier', 'Fevrier', "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
for ($i = 0; $i < 12; $i++) {
  echo $mois[$i]."\n";
}
echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = 12; $i >= 0; $i--) {
  echo $mois[$i]."\n";
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
    ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
    ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
    ),
  );

echo '10.Les eleves du college : <br>';
foreach ($college as $classe => $eleves) {
  echo $classe."\n"."<br>";
  foreach ($eleves as $key => $value) {
    foreach ($value as $value) {
      echo $value;
    }
    echo "<br>";
  }
}
//ajoutez votre code ici
echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
    ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
    ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
    ),
  'Troisieme' => array(
    array('Nom'=> 'Peplux', 'Prenom' => 'Jean'),
    array('Nom'=> 'Chameau', 'Prenom' => 'Michel'),
    array('Nom'=> 'Gras', 'Prenom' => 'Dubide'),
    ),
  );
foreach ($college as $classe => $eleves) {
  echo $classe."\n"."<br>";
  foreach ($eleves as $key => $value) {
    foreach ($value as $value) {
      echo $value;
    }
    echo "<br>";
  }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
      ),
    ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
      ),
    ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
     'Tom Hanks', 'Gary Sinise',
     ),
    ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
     'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
     ),
    ),
  );

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach ($videotheque as $key => $film) {
  echo '<br><br>';
  foreach ($film as $key1 => $value) {
    if(!is_array($value)){
      echo $value."\n".'<br>';
    }
    foreach ($value as $value) {
      echo $value."\n".'<br>';
    }
  }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
      ),
    ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
      ),
    ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
     'Tom Hanks', 'Gary Sinise',
     ),
    ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
     'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
     ),
    ),
  array(
    'nom' =>  'Matrix',  
    'date' => 1999,    
    'realisateur' => 'Les Wachowski',   
    'acteurs' => array('Keanu Reeves','Laurence Fishburne','Carrie-Anne Moss','Hugo Weaving','Joe Pantoliano',
      'synopsis' => 'Thomas A. Anderson (Keanu Reeves), un jeune informaticien connu dans le monde du hacking sous le pseudonyme de Neo, est contacté via son ordinateur par ce qu’il pense être un groupe de hackers. Ils lui font découvrir que le monde dans lequel il vit n’est qu’un monde virtuel dans lequel les êtres humains sont gardés sous contrôle.
      Morpheus (Laurence Fishburne), le capitaine du Nebuchadnezzar, contacte Néo et pense que celui-ci est l’Élu qui peut libérer les êtres humains du joug des machines et prendre le contrôle de la matrice (selon ses croyances et ses convictions).',
      ),
    ),
  array(
    'nom' => 'Star Wars',  
    'date' =>  1999,
    'realisateur' => 'Georges Lucas', 
    'acteurs' => array('Harrisson Ford','Mark Hamill','Carrie Fisher',
      'synopsis' => "L'épisode IV débute lorsque le croiseur de Dark Vador capture le vaisseau de la princesse Leia qui détient les plans volés de l'Étoile Noire, l'arme absolue du puissant Empire galactique. La princesse dissimule les plans dans la mémoire du droïde R2-D2 qui s’éjecte sur la planète Tatooine en compagnie de son alter ego C-3PO. Les droïdes sont capturés par des ferrailleurs Jawas avant d'être finalement vendus à la ferme d'Owen Lars où vit Luke Skywalker, un jeune fermier qui rêve d'aventures. Ce dernier intercepte un message de la princesse Leia qui cherche de l'aide d'un certain Obi-Wan Kenobi. Ce dernier est un vieux Jedi qui vit en ermite sur Tatooine depuis la fin de la Guerre des clonesNote et l'avènement de l'Empire. Il révèle à Luke qu'il était ami avec son père avant que ce dernier ne soit « assassiné » par Dark Vador, un Jedi déchu perverti par le côté obscur de la Force. Avec l'aide d'Obi-Wan, du contrebandier Han Solo et de son copilote Chewbacca, Luke parvient à libérer la princesse Leia dans les couloirs de l'Étoile Noire et à apporter les plans dérobés à ses alliés. Ceux-ci parviennent à identifier le point faible de la station et lancent une offensive sur celle-ci. L'apogée du film est atteinte lors de la Bataille de Yavin qui se solde par la destruction de l'Étoile Noire et la victoire de l'Alliance rebelle, malgré de nombreuses pertes dont la mort de Kenobia .",
      ),
    ),
  array(
    'nom' =>  'Mission:Impossible',  
    'date' =>   1996,
    'realisateur' => 'Brian De Palmas', 
    'acteurs' => array('Tom Cruise','Emanuelle Béart','Jon Voight','Jean Reno',
      'synopsis' => "Jim Phelps et ses agents sont envoyés à Prague avec pour mission d'appréhender un espion ennemi lors d'une réception dans l'ambassade américaine. Cet homme, Alexander Golytsin, s'apprête à dérober une disquette contenant la liste secrète des agents infiltrés en Europe centrale. Seulement, les agents de l'IMF (Impossible Missions Force) ignorent que la CIA, persuadée que le commando est infiltré par une taupe, a envoyé une autre équipe. Presque tous les membres de l'équipe de Phelps sont tués, sa femme, Claire, les agents Jack Harmon, Sarah Davies et Hannah Williams. Jack meurt empalé dans une cage d'ascenseur et Jim est abattu sur le pont Charles et tombe dans la rivière Vltava, Claire et Hannah sont tuées dans l'explosion de leur voiture. Sarah, qui suivait Golytsin, tombe tout comme lui dans un piège et est mortellement blessée par un tueur qui la poignarde et dérobe la liste 'NOC'. L'un des survivants, Ethan Hunt, tente de s'échapper.", 
      ),
    ),
  );
foreach ($videotheque as $key => $film) {
  echo '<br><br>';
  foreach ($film as $key1 => $value) {
    if(!is_array($value)){
      echo $value."\n".'<br>';
    }
    foreach ($value as $value) {
      echo $value."\n".'<br>';
    }
  }
}
echo '<br><br>';
