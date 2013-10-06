<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
	<meta charset="utf-8" />
</head>
<body class="">

<?php
//require_once('dataMapper/database.php');
$dsn = 'mysql:host=localhost:3306;dbname=monopolyOriginalComplet';
$username = 'root';
$password = '';
$db;
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
									PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$db=mysql_connect("localhost:3306", "root", "");
//function __construct() {
      // self::$db = Database::getDB();
		//    }
	
	//
//function selectStmt() {
 //       return $this->selectStmt;
  //  }
//__construct();
//selectStmt();
//findTerrain();
	
	
//function findTerrain(){
        // crée les parties associées à un coordonnateur a partir de la db
        
        /*
         * input
        *     $idCoordonnateur: l'id du coordonnateur
        * output
        *     un array contenant les parties associées au coordonnateur.
        *     un array vide si aucune partie n'est associée au coordonnateur
        *
        */
        //LISTEPARTIE 1.3.1.1.1 extrait la liste des parties pour un coordonnateur. 
       // $queryTxt = 'SELECT id, Titre FROM CaseAchetable';
       // $query = self::$db->prepare($queryTxt);
       // $query->bindValue(':coordonnateur', $idCoordonnateur);
      //  $query->setFetchMode(PDO::FETCH_ASSOC);
       // $query->execute();
        
        //$listeItems = array();
        
       // foreach($query as $row) {
        //    $unItem = $this->createObject($row);
       //     if ($unItem <> null) {
       //         $listeItems[] = $unItem;
          //  }
      //  }
       // return $listeItems;
   // }
mysql_select_db("monopolyOriginalComplet", $db);
$query = sprintf("SELECT Titre FROM CaseAchetable");
$result = mysql_query($query);

if (!$result) {
    $message  = 'Requête invalide : ' . mysql_error() . "\n";
   $message .= 'Requête complète : ' . $query;
    die($message);
}

if (is_resource($result))
    while ($row = mysql_fetch_assoc($result)) {
          print_r($row);
   }

mysql_free_result($result);


?>
<table class="table" border="1">

<tr class="tr">
<td class="coin"></td>
<td class="up"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="75" width="75" height="30" /><text x="0" y="40" fill="red" font-size="12px" >a</text></svg></td>
<td class="up">3</td>
<td class="up"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="75" width="75" height="30" /><text x="0" y="40" fill="red" font-size="12px" >b</text></svg></td>
<td class="up">5</td>
<td class="up">6</td>
<td class="up"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="75" width="75" height="30" /><text x="0" y="40" fill="red" font-size="12px" >c</text></svg></td>
<td class="up">8</td>
<td class="up"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="75" width="75" height="30" /><text x="0" y="40" fill="red" font-size="12px" >d</text></svg></td>
<td class="up"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="75" width="75" height="30" /><text x="0" y="40" fill="red" font-size="12px" >e</text></svg></td>
<td class="coin">12</td>
</tr>

<tr>
<td class="sideG"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="69" y="0" width="30" height="75" /><text x="0" y="-40" fill="red" font-size="12px" transform="rotate(90 0,0)" >u</text></svg></td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="1" y="0" width="30" height="75" /><text x="-75" y="60" fill="red" font-size="12px" transform="rotate(-90 0,0)" >f</text></svg></td>
</tr>

<tr>
<td class="sideG">1</td>
<td class="vide" colspan="9 rowspan"1"></td>
<td class="sideD">12</td>
</tr>
<tr>
<td class="sideG"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="69" y="0" width="30" height="75" /><text x="0" y="-40" fill="red" font-size="12px" transform="rotate(90 0,0)" >t</text></svg></td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="1" y="0" width="30" height="75" /><text x="-75" y="60" fill="red" font-size="12px" transform="rotate(-90 0,0)" >g</text></svg></td>
</tr>
<tr>
<td class="sideG">1</td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="1" y="0" width="30" height="75" /></svg></td>
</tr>
<tr>
<td class="sideG">1</td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD">12</td>
</tr>
<tr>
<td class="sideG"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="69" y="0" width="30" height="75" /><text x="0" y="-40" fill="red" font-size="12px" transform="rotate(90 0,0)" >s</text></svg></td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="1" y="0" width="30" height="75" /><text x="-75" y="60" fill="red" font-size="12px" transform="rotate(-90 0,0)" >h</text></svg></td>
</tr>
<tr>
<td class="sideG">1</td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD">12</td>
</tr>
<tr>
<td class="sideG"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="69" y="0" width="30" height="75" /><text x="0" y="-40" fill="red" font-size="12px" transform="rotate(90 0,0)" >r</text></svg></td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="1" y="0" width="30" height="75" /><text x="-75" y="60" fill="red" font-size="12px" transform="rotate(-90 0,0)" >i</text></svg></td>
</tr>
<tr>
<td class="sideG"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="69" y="0" width="30" height="75" /><text x="0" y="-40" fill="red" font-size="12px" transform="rotate(90 0,0)" >q</text></svg></td>
<td class="vide" colspan="9" rowspan"1"></td>
<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" ><rect x="1" y="0" width="30" height="75" /><text x="-75" y="60" fill="red" font-size="12px" transform="rotate(-90 0,0)" >j</text></svg></td>
</tr>

<tr>
<td class="coin">1</td>
<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="0" width="75" height="30" /><text x="0" y="60" fill="red" font-size="12px" >p</text></svg></td>
<td class="down">3</td>
<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="0" width="75" height="30" /><text x="0" y="60" fill="red" font-size="12px" >o</text></svg></td>
<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="0" width="75" height="30" /><text x="0" y="60" fill="red" font-size="12px" >n</text></svg></td>
<td class="down">6</td>
<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="0" width="75" height="30" /><text x="0" y="60" fill="red" font-size="12px" >m</text></svg></td>
<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="0" width="75" height="30" /><text x="0" y="60" fill="red" font-size="12px" >l</text></svg></td>
<td class="down">9</td>
<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" ><rect x="0" y="0" width="75" height="30" /><text x="0" y="60" fill="red" font-size="12px" >k</text></svg></td>
<td class="coin">12</td>
</tr>



</table>
 
</body>
</html>
