<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP & HTML</title>
</head>
<body>
  <h1>Liste des élèves</h1>
  <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
  <?php
        //students
  $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
  ?>
  <ul>
   <?php 
   foreach ($students as $key => $value) {
     echo $value."\n";
   }
       //display the students here ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <?php 
       $days = ["1"," 2", "3", "4", "5", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"];
       $month = ["1", "2", "3", "4", "5", "7", "8", "9", "10", "11", "12"];
       $years = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', "99" ];
       ?>
       <label for="day">Day</label>
       <select  name="day">
         <?php  
         foreach ($days as $day) {
          echo '<option value="'.$day.'">'.$day.'</option>';
        }
       //list of day 
        ?>
      </select>
      <label for="month">Month</label>
      <select  name="month">
        <?php 
      //list of month 
        foreach ($month as $mois) {
          echo '<option value="'.$mois.'">'.$mois.'</option>';
        }
        ?>      
      </select>
      <label for="year">Year</label>
      <select  name="year">
        <?php 
      //list of year 
        foreach ($years as $year) {
          echo '<option value="'.$year.'">'.$year.'</option>';
        }
        ?>       
      </select>
    </form>
    <hr>
    <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php  
    if($_GET ["sexe"] === "fille"){
     echo "<p>Je suis une fille</p>"; 
   };
   ?>
   <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
   <?php 
   if($_GET ["sexe"] === "garcon"){
    echo "<p>Je suis un garçon</p>";
  }
  ?>
  <!-- Instruction : Afficher ce bloc dans les autres cas -->
  <?php 
  if (!isset($_GET['sexe']) || (empty($_GET['sexe'])) || ($_GET['sexe']!== 'fille') && ($_GET['sexe'] !== 'garcon')){
   echo '<p>Je suis indéfini</p>';
 };
 ?>
</body>
</html>
