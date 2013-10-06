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
$query = sprintf("SELECT id, Titre, GroupeDeCaseId FROM CaseAchetable");
$query2 = sprintf("SELECT id, CouleurHTML FROM GroupeDeCase");
$resultCouleur = mysql_query($query2);
$result = mysql_query($query);

if (!$result) 
{
    $message  = 'Requête invalide : ' . mysql_error() . "\n";
   $message .= 'Requête complète : ' . $query;
    die($message);
}


//Creation des tableaux contenant les id, titre et groupeDeCaseId des cases achetables
if (is_resource($result))
{	
	$i = 0;
    while ($row = mysql_fetch_assoc($result)) 
	{
		foreach ($row as $key => $value)
		{
		}	
		$id = $row['id'];
		$listeId[$i] = $id;
		//echo $id;
		$titre = $row['Titre'];
		$listeTitre[$i] = $titre;
		//echo $titre;
		$CaseId = $row['GroupeDeCaseId'];
		$listeCaseId[$i] = $CaseId;
		$i = $i+1;
   }
}

//Creation des tableaux contenant le id et les couleurHTML des case achetables
if (is_resource($resultCouleur))
{	
	$i = 0;
    while ($row = mysql_fetch_assoc($resultCouleur)) 
	{
		foreach ($row as $key => $value)
		{
		}	
		$id = $row['id'];
		$listeIdC[$i] = $id;
		//echo $id;
		$couleur = $row['CouleurHTML'];
		$listeCouleur[$i] = $couleur;
		//echo $titre;
		$i = $i+1;
   }
}

//Creation du tableau HTML
   ?>
   <table class="table" border="1">
	<tr class="tr">
	<td class="coin"></td>
   <?php
   //Boucle de creation de la ligne du haut
   for($x=1; $x<10;$x++)
		{
		//echo $listeId[$x];
		if (in_array($x, $listeId)) 
		{	
			$key = array_search($x, $listeId);
			if($x==5)
			{
				?>
				<td class="up"></td>
				<?php
			}
			else
			{
				?>
				<td class="up"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" >
				<rect x="0" y="75" width="75" height="30" style="fill:
				<?php
				$c = $listeCaseId[$key];
				$affichage = $listeCouleur[$c-1];
				echo $affichage;
				?>
				"/>
				<text x="0" y="40" fill="red" font-size="12px" >
				<?php
				//echo $c;
				//echo $key;
				//echo $affichage;
				echo $listeTitre[$key];
				
				?>
				</text></svg></td>
				<?php
			}
		}
	
		else
		{
			?>
			<td class="up"></td>
			<?php
		}
	}




?>
<td class="coin"></td>
</tr>

<?php
//Boucle de creation des ligne 2 a 9
		$caseG = 39;
		$caseD = 11;
   for($x=0; $x<9;$x++)
		{
		//echo $listeId[$x];
		$caseG = $caseG-$x;
		$caseD = $caseD+$x;
		?>
		<tr>
		<?php
		if (in_array($caseG, $listeId)) 
		{
			$key = array_search($caseG, $listeId);
			if($caseG==35)
			{
				?>
				<td class="sideG"></td>
				<?php
			}
			
			else
			{
				?>
				<td class="sideG"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" >
				<rect x="69" y="0" width="30" height="75" style="fill:
				<?php
				$c = $listeCaseId[$key];
				$affichage = $listeCouleur[$c-1];
				echo $affichage;
				?>
				"/>
				<text x="0" y="-40" fill="red" font-size="12px" transform="rotate(90 0,0)" >
				<?php
				//echo $c;
				//echo $key;
				//echo $affichage;
				echo $listeTitre[$key];
				?>
				</text></svg></td>
				<?php
			}
		}
		else
		{
			?>
			<td class="sideG"></td>
			<?php
		}
		?>
		<td class="vide" colspan="9" rowspan"1"></td>
		<?php
		
		if (in_array($caseD, $listeId)) 
		{
			$key = array_search($caseD, $listeId);
			if($caseD==15)
			{
				?>
				<td class="sideD"></td>
				<?php
			}
			else if($caseD ==12)
			{
				?>
				<td class="sideD"></td>
				<?php
			}
			else
			{
				?>
				<td class="sideD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 75" >
				<rect x="1" y="0" width="30" height="75" style="fill:
				<?php
				$c = $listeCaseId[$key];
				$affichage = $listeCouleur[$c-1];
				echo $affichage;
				?>
				"/>
				<text x="-75" y="60" fill="red" font-size="12px" transform="rotate(-90 0,0)" >
				<?php
				echo $c;
				echo $key;
				echo $affichage;
				//echo $listeTitre[$key];
				?>
				</text></svg></td>
				<?php
			}
		}
		else
		{
			?>
			<td class="sideD"></td>
			<?php
		}
		?>
		</tr>
		<?php
		$caseG = 39;
		$caseD = 11;
	}
	


?>

	<tr class="tr">
	<td class="coin"></td>
   <?php
   //boucle de creation de la ligne du bas
   for($x=29; $x>=21;$x--)
		{
		//echo $listeId[$x];
		if (in_array($x, $listeId)) 
		{
		$key = array_search($x, $listeId);
			if($x==25)
			{
				?>
				<td class="down"></td>
				<?php
			}
			else if($x==28)
			{
				?>
				<td class="down"></td>
				<?php
			}
			else
			{
				?>
				<td class="down"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 75 100" >
				<rect x="0" y="0" width="75" height="30" style="fill:
				<?php
				$c = $listeCaseId[$key];
				$affichage = $listeCouleur[$c-1];
				echo $affichage;
				?>
				"/>
				<text x="0" y="60" fill="red" font-size="12px" >
				<?php
				//echo $c;
				//echo $key;
				//echo $affichage;
				echo $listeTitre[$key];
				?>
				</text></svg></td>
				<?php
			}
		}
	
		else
		{
			?>
			<td class="down"></td>
			<?php
		}
	}

mysql_free_result($result);


?>
</tr>





</table>
 
</body>
</html>
