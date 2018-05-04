<?php
$yolo = "Conected to database.";

mysql_connect("127.3.143.1:3306","admint2HhvWi","2iAB21BlvIii") or die (mysql_error());
echo $yolo;

mysql_select_db("romulus") or die ("no database");
echo "Connected to database romulus";

$fo = $_POST['selectedfo'];
$foreasons = $_POST['selectedforeasons'];
$conflicting = $_POST[conflicting];
$conflictingreasons = $_POST['conflictingreasons'];
$subjdomid = $_POST[subjdom];
$saved =  $_POST[saved];
$inputvals =  $_POST['inputsentence'];
$len = strlen($intvals);
$inputvals = substr($inputvals,0,len-1);

//$conflicting = 0;
//$subjdomid = 9;
//$saved= 0;



$query = "INSERT INTO OntoselectResult (SelectedFO, ReasonsSelectedFO,ConflictingFeatures,ReasonsConflictingFeatures, SubjectDomainID, Usersaved) VALUES ('{$fo}','{$foreasons}',$conflicting,'{$conflictingreasons}',$subjdomid,$saved) ";

$result = mysql_query($query) or die (mysql_error());
//echo "woo";

/*
$inputarray = explode("*", $inputvals);

//echo $inputarray[1];
foreach ($inputarray as $value){
//echo $value;
}

$thisresult ="";
$query3 = "SELECT ResultID FROM OntoselectResult WHERE (SelectedFO = '".$fo."' AND ReasonsSelectedFO = '".$foreasons."' AND ConflictingFeatures = '".$conflicting."' AND ReasonsConflictingFeatures = '".$conflictingreasons."' AND SubjectDomainID = '".$subjdomid."' AND Usersaved = '".$saved."')";
$result3 = mysql_query($query3) or die (mysql_error());
//echo "woo2";

while($row3 = mysql_fetch_array($result3)){
$thisresult = $row3['ResultID']."";
//echo "woo3";
}

foreach ($inputarray as $value){
$otherarray = explode ("-", $value);


	$catid = $otherarray[0];
	$qid = $otherarray[1];
	$aid = $otherarray[2];
	
	$catid = (int) $catid;
	$qid = (int) $qid;
	$aid = (int) $aid;

	$query2 = "SELECT ResultIDs FROM OntoselectAnswer WHERE CategoryID = '".$catid."' AND QuestionID = '".$qid."' AND AnswerID = '".$aid."'";
	$result2 = mysql_query($query2) or die (mysql_error());
	//echo "mm";
	

		while($row2 = mysql_fetch_array($result2)){
			$resultid = $row2['ResultIDs'];

			if ($resultid == "0"){
			$resultid2 = $thisresult;
			}

			else{
			$resultid2 = $thisresult.";".$resultid;
			}
		}	

}

foreach ($inputarray as $value){
//echo "watashiwa";
$otherarray = explode ("-", $value);

	$catid = $otherarray[0];
	$qid = $otherarray[1];
	$aid = $otherarray[2];

	$catid = (int) $catid;
	$qid = (int) $qid;
	$aid = (int) $aid;

	$query5 = "Update OntoselectAnswer SET ResultIDs = '".$resultid2."' WHERE CategoryID = '".$catid."' AND QuestionID = '".$qid."' AND AnswerID = '".$aid."' ";
	$result5 = mysql_query($query5) or die (mysql_error());
	//echo "woo5";
}
*/

mysql_close("127.3.143.1:3306","admint2HhvWi","2iAB21BlvIii");

?>