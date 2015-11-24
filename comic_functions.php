<?php
require_once('database.php');

try {
	global $db;
	//queries for just primary keys
	$results1 = $db->query('SELECT id FROM comics');
} catch(Exception $e) {
	echo $e->getMessage();
	die();
}

//stores primary key array
global $comic_id;
$comic_id = $results1->fetchAll(PDO::FETCH_ASSOC);

//saves total number of comics
global $total_comics;
$total_comics = count($comic_id);

//creates a bullet list in reverse order (so the most recent comics are on top)
function archiveList() {
	global $comic_id;
	$tempReverse = array_reverse($comic_id, true);
	foreach ($tempReverse as $value){
		echo '<li><a href="comics?id='.$value["id"].'">'.$value["id"].'</a></li>';
	}	
}

//pulls in url variable or defaults it to the last item if none found
//this gives the comic's ID and NOT the array location of each comic in
//the primary key array created above
	global $total_comics;
	global $idHolder;
	//if not set returns to most recent comic
	try {
		//gets url content and pulls only numbers out
		$idHolder = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
		//if url content is greater than the total number of comics or
		//less than 1 returns user to the last comic
		if ($idHolder > $total_comics || $idHolder < 1 || !isSet($idHolder)){
			$idHolder = $total_comics;
		}
	} catch(Exception $e){
		$idHolder = $total_comics;
	}

//queries the database for one row for a comic page and returns one
//array to be used to populate comic pages.
	global $comicData;
	try {
		global $db;
		$results2 = $db->query("SELECT * FROM comics WHERE id='".$idHolder."';");
	} catch(Exception $e) {
		echo $e->getMessage();
		die();
	}
	$comicData = $results2->fetchAll(PDO::FETCH_ASSOC);

//sets default comment if none available
if (is_null($comicData[0]["comments"])) {
	$comicData[0]["comments"] = "Nothing interesting to say today.";
}
$comicData[0]["comments"] = htmlentities($comicData[0]["comments"], ENT_IGNORE);

//checks to see if a variable = 1 and if it does not subtracts 1 from it
//(this is used to set the previous buttons)
function isFirst($checkVar){
	if ($checkVar == 1){
	return $checkVar;
	} else {
	$checkVar--;
	return $checkVar;
	}
}

//checks to see if a variable = total number of comics and if it does not adds 1 to it
//(this is used to set the next button)
function isLast($checkVar){
	global $total_comics;
	//checks to see if on the last page already
	//and if so just returns the same ID again for the next button
	if ($checkVar == $total_comics){
		return $checkVar;
	//if not advances the ID by one
	} else {
		$checkVar++;
			//checks new ID to make sure it does not exceed total comics
			//if it does, sets ID back to be the same as total comics
			if ($checkVar > $total_comics){
				$checkVar = $total_comics;
			}
		return $checkVar;
		}
	}

?>



