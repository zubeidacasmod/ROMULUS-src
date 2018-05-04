<!DOCTYPE html>
<!-- Consider specifying the language of your content by adding the `lang` attribute to <html> -->
<!--[if lt IE 7]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Put your title here! -->
	<title></title>

	<meta name="description" content="">

	 <!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">

	<link href="style.css" rel="stylesheet">

	<!-- Load Open Sans and Merriweather from Google Fonts
		For optimal performance, customize it to load the styles you need:
		http://goo.gl/QufgJ
	-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700|Merriweather:400,700,900" rel="stylesheet">

	<!-- All JavaScript at the bottom, except for Modernizr
		Modernizr enables HTML5 elements & feature detects; It includes Respond, a polyfill for min/max-width CSS3 Media Queries
		For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<script src="js/modernizr-2.6.1.min.js"></script>
</head>

<body>

	<!-- Prompt IE 6 and 7 users to install Chrome Frame:		chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 8]>
		<p class="chromeframe alert alert-warning">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
	<![endif]-->

	<header id="master-header" class="clearfix" role="banner">

		<hgroup>
			<h1 id="site-title"><a href="home.html" title="ROMULUS   Repository of Ontologies for MULtiple USes
">ROMULUS : Repository of Ontologies for MULtiple USes</a></h1>
			<h2 id="site-description"> A repository of foundational ontologies. </h2>
		</hgroup>

	</header> <!-- #master-header -->

<div id="main" class="row clearfix">

	<!-- Main navigation -->
	<nav class="main-navigation clearfix span12" role="navigation">
		<h3 class="assistive-text">Main menu</h3>
		<ul>
			<li><a href="../home.html">Home</a></li>
			
            <li><a href="../browseOntologies.html">Browse Ontologies</a></li>
            <li>
				<a href="../ontologyComparison.html">Ontology Comparison</a>
                 <ul class="sub-menu">
					<li><a href="../ontologicalCommitments.html">Ontological Commitments</a></li>
					<li><a href="../representationLanguages.html">Representation Languages</a></li>
                    <li><a href="../softwareEngineeringProperties.html">Software Engineering properties</a></li>
                    <li><a href="../subjectDomains.html">Subject Domains</a></li>
                    <li><a href="../applications.html">Applications</a></li>
			  </ul>
                	</li>
            
	<li><a href="../ontologyAxiomatisation.html">Ontology Verbalisation</a>
            <ul class="sub-menu">
            <li><a href="../DLView.html">Description logic view</a></li>
             <li><a href="../NLView.html">Natural language view</a></li>
            </ul>
            </li>
            
           
<li class = "current"><a href="../ontologyMediation.html">Ontology Mediation</a>
             <ul class="sub-menu">
				      <li><a href="../ontologyMediation.html">Alignment</a></li>			
<li><a href="../ontologyAlignmentMediation.html">Alignment Metadata</a></li>
				      <li><a href="../ontologyMapping.html">Mapping</a></li>
                                  <li><a href="../ontologyMerging.html">Merging</a></li>  
                                  <li class = "current"><a href="../ontologyMediationSearch.html">Search</a></li><li><a href="''../FOinterchange.html">Ontology Interchangeability Method</a></li>
<li><a href="../ontologyInterchange.html">Ontology Interchangeability Tool</a></li>
                                  <li><a href="../mappingIncon.html">Mapping Inconsistencies</a></li>			 
            </ul>
            </li>

            <li><a href="../ontologyMetadata.html">Ontology Metadata</a>
<ul class="sub-menu">
<li><a href="../ontologyMetadataSearch.html">Ontology Metadata Search</a></li>
</ul>
</li>
            <li><a href="../downloads.html">Downloads</a>
            
            </li>
            <li><a href="../ontologySelection.html">Ontology Selection</a></li>
<li><a href="../communitySubmission.html">Community</a></li>
       <li><a href="../evaluation.html">Evaluate ROMULUS</a>
       
        </li> <!-- Close first evaluation li -->
        
		
  <li><a href="../contact.html">Contact</a></li>
	  
      </ul>
	</nav> <!-- #main-navigation -->

<div id="content" role="main" class="span11">

	<article class="post hentry">

		<header class="entry-header">
			<h1 class="entry-title">
				<a href="#" title="Post Heading" rel="bookmark">Mediation Search Results</a>
			</h1>



		</header> <!-- .entry-header -->

		<div class="entry-content">
			

<h4>Search results</h4>

<?php



mysql_connect("","","") or die (mysql_error());

mysql_select_db("romulus") or die ("no database");

if( !(isset($_POST['mediationcheckboxontologyna']) || isset($_POST['mediationcheckboxontologyacr']) ||  isset($_POST['mediationcheckboxentityna'])
||  isset($_POST['mediationcheckboxentityuri']) ||  isset($_POST['entitytype'])
||  isset($_POST['entitytype2']) ||  isset($_POST['entitytype2']) ||  isset($_POST['relation']) ||  isset($_POST['mappable'])
||  isset($_POST['method']) ||  isset($_POST['mediationcheckboxtool']) ||  isset($_POST['mediationcheckboxperson']) )) {
echo 'No search data specified';
} //all empty fields

else{
echo "Advanced search results.";
$bool1 =true;
$bool2 =true;
$bool3 =true;
$bool4 =true;
$bool5 =true;
$bool6 =true;

$tool = $_POST['tool'];
$personname = $_POST['personname'];
$namesearch = $_POST['namesearch'];
$namesearch2 = $_POST['namesearch2'];
$acronymsearch = $_POST['acronymsearch'];
$acronymsearch2 = $_POST['acronymsearch2'];
$entitynamesearch = $_POST['entitynamesearch'];
$entitynamesearch2 = $_POST['entitynamesearch2'];
$entityurisearch = $_POST['entityurisearch'];
$entityurisearch2 = $_POST['entityurisearch2'];



	foreach($_POST['mediationcheckboxontologyna'] as $value)
	{
		
		if ($value == "ontologyname" && empty($namesearch)){
		echo "Missing: Ontology name 1 from checked box, please go back and uncheck box or include ontology name.<br>";
		$bool1 = false;
		}
		if ($value == "ontologyname2" && empty($namesearch2) ){
		echo "Missing: Ontology name 2 from checked box, please go back and uncheck box or include ontology name.<br>";
		$bool1 = false;
		}
	
		
	}

	foreach($_POST['mediationcheckboxontologyacr'] as $value)
	{
		
		if ($value == "ontologyacronym" && empty($acronymsearch)){
		echo "Missing: Acronym name 1 from checked box, please go back and uncheck box or include ontology acronym.<br>";
		$bool2 = false;
		}
		if ($value == "ontologyacronym2" && empty($acronymsearch2)){
		echo "Missing: Acronym name 2 from checked box, please go back and uncheck box or include ontology acronym.<br>";
		$bool2 = false;
		}
		

	}

	foreach($_POST['mediationcheckboxentityna'] as $value)
	{
		
		if ($value == "entityname" && empty($entitynamesearch)){
		echo "Missing: Entity name 1 from checked box, please go back and uncheck box or include entity name.<br>";
		$bool3 = false;
		}
		if ($value == "entityname2" && empty($entitynamesearch2)){
		echo "Missing: Entity name 2 from checked box, please go back and uncheck box or include entity name.<br>";
		$bool3 = false;
		}
	

	}

	foreach($_POST['mediationcheckboxentityuri'] as $value)
	{
		
		if ($value == "entityuri" && empty($entityurisearch)){
		echo "Missing: Entity URI 1 from checked box, please go back and uncheck box or include entity URI.<br>";
		$bool4 = false;
		}
		if ($value == "entityuri2" && empty($entityurisearch2)){
		echo "Missing: Entity URI 2 from checked box, please go back and uncheck box or include entity URI.<br>";
		$bool4 = false;
		}
		
	

	}

	foreach($_POST['mediationcheckboxtool'] as $value)
	{
		
		if ($value == "tool" && empty($tool)){
		echo "Missing: Tool name from checked box, please go back and uncheck box or include tool name.<br>";
		$bool5 = false;
		}

		
		
	

	}

	foreach($_POST['mediationcheckboxperson'] as $value)
	{
		
		if ($value == "person" && empty($personname)){
		echo "Missing: Person name from checked box, please go back and uncheck box or include person name.<br>";
		$bool6 = false;
		}
		
	

	}

//fields and textboxes are filled in together
if ($bool1 == true && $bool2 == true && $bool3==true && $bool4 ==true && $bool5 == true && $bool6==true){

//echo "<h4>Alignments between " .$ontoname[0]." and ".$ontoname[1]."</h4>";
//echo "<h5><a href = MediationMetadata/functionalparticipation-gfobasic-metadata.php> Metadata for alignments between " .$ontoname[0]." and ".$ontoname[1]." </a> </h5>";



echo "<table>";
echo "<tr>
	<th> </th>
	<th>Ontology 1</th>
	<th>Entity 1</th>
	<th>Relation</th>
	<th>Ontology 2</th>
	<th>Entity 2</th>
      </tr>";

$appendset1;
$appendset2;
$finalappendset;
$append1;
$append2;
$append3;
$append4;
$toprint;



if ( !(empty($_POST['mediationcheckboxontologyna'])) ) {
foreach($_POST['mediationcheckboxontologyna'] as $value){

	if($value == "ontologyname" && !(empty($namesearch)) ){
		$append1 = $append1." `OntologyName` like '%".$namesearch."%'";
		$toprint = $toprint."Ontology 1 Name :".$namesearch.", ";
		
	}

	if($value == "ontologyname2" && !(empty($namesearch2)) ){
		$append3 = $append3." `OntologyName` like '%".$namesearch2."%'";
		$toprint = $toprint."Ontology 2 Name :".$namesearch2.", ";
		
	}

}//end namefor

}//end if user specified ontoname



if( !(empty($_POST['mediationcheckboxontologyacr']))  ){


foreach($_POST['mediationcheckboxontologyacr'] as $value){
	if($value == "ontologyacronym" && !(empty($acronymsearch)) ){
		$append2 = $append2." `OntologyAcronym` like '%".$acronymsearch."%'";
		$toprint = $toprint."Ontology 1 Acronym :".$acronymsearch.", ";
	}

	if($value == "ontologyacronym2" && !(empty($acronymsearch2)) ){
		$append4 = $append4." `OntologyAcronym` like '%".$acronymsearch2."%'";
		$toprint = $toprint."Ontology 2 Acronym :".$acronymsearch2.", ";
	}
}//end acronymfor

}//end if user specified ontoacronym


$newentityarray =array();

if ( !(empty($_POST['mediationcheckboxentityna'])) ) {
	foreach($_POST['mediationcheckboxentityna'] as $value){


	if($value == "entityname" && !(empty($entitynamesearch)) ){
		
		$newentityarray [] = "`MediationID` IN (SELECT `MediationID` FROM `OntologyMediationEntity` WHERE
		`EntityURI` like '%".$entitynamesearch."%') AND";
		$toprint = $toprint."Entity 1 Name :".$entitynamesearch.", ";
		
	}

	if($value == "entityname2" && !(empty($entitynamesearch2)) ){
		
		$newentityarray[]  = "`MediationID` IN (SELECT `MediationID` FROM `OntologyMediationEntity` WHERE
		`EntityURI` like '%".$entitynamesearch2."%' ) AND";
		$toprint = $toprint."Entity 2 Name :".$entitynamesearch2.", ";
		
	}

}//end entitynamefor

}//end if user specified entity name

if ( !(empty($_POST['mediationcheckboxentityuri'])) ) {
	foreach($_POST['mediationcheckboxentityuri'] as $value){
		if($value == "entityuri2" && !(empty($entityurisearch2)) ){
			$newentityarray[] ="`MediationID` IN (SELECT `MediationID` FROM `OntologyMediationEntity` WHERE 
			`EntityURI` like '%".$entityurisearch2."%' ) AND";
			$toprint = $toprint."Entity 2 URI :".$entityurisearch2.", ";
		
		}	

		if ($value == "entityuri" && !(empty($entityurisearch)) ){
			$newentityarray[]  = "`MediationID` IN (SELECT `MediationID` FROM `OntologyMediationEntity` WHERE
			`EntityURI` like '%".$entityurisearch."%') AND";
			$toprint = $toprint."Entity 1 URI :".$entityurisearch.", ";
			
		}

	

}//end entityurifor

}//end if user specified entity uri


$entitytype = $_POST["entitytype"];
$entitytype2 = $_POST["entitytype2"];

if(!empty($entitytype)){
$newentityarray[] =  "`MediationID` IN (SELECT `MediationID` FROM `OntologyMediationEntity` WHERE `EntityURI` IN
(SELECT `EntityURI` from `Entity` WHERE `EntityType` = '$entitytype')) AND";
$toprint = $toprint."Entity 1 type: ".$_POST["entitytype"].", ";
}

if(!empty($entitytype2)){
$newentityarray[] =  "`MediationID` IN (SELECT `MediationID` FROM `OntologyMediationEntity` WHERE `EntityURI` IN
(SELECT `EntityURI` from `Entity` WHERE `EntityType` = '$entitytype2')) AND";
$toprint = $toprint."Entity 2 type: ".$_POST["entitytype2"]."., ";
}

$entityappend = implode('',$newentityarray);
$entityappend = substr($entityappend,0,-3);
//echo $entityappend;

$rel = $_POST['relation'];
$map = $_POST['mappable'];
//$incon = $_POST['incon'];
$method = $_POST['method'];
$newarray =array();




if(!empty($rel)){
$newarray[] =" `MediationRelation` = '$rel' AND";
$toprint = $toprint."Mediation relation: ".$rel.", ";
}

if(!empty($map)){
$newarray[] =" `MediationMappable` = '$map' AND";
$toprint = $toprint."Mediation mappable: ".$map.", ";
}

/*if(!empty($incon)){
$newarray[] =" `MediationMappable` = '$incon' AND";
$toprint = $toprint."Mediation inconsistencies: ".$incon.", ";
}*/

if(!empty($method)){
$newarray[] =" `MethodType` = '$method' AND";
$toprint = $toprint."Mediation method: ".$method.", ";
}

if( (!empty($tool)) && (!empty($_POST['mediationcheckboxtool'])) ){
$newarray[] =" `MediationID` IN (SELECT `MediationID` from `MediationTool`
where `ToolName` like '%".$tool."%') AND";
$toprint = $toprint."Mediation tool: ".$tool.", ";
}

if( (!empty($personname)) && (!empty($_POST['mediationcheckboxperson'])) ){
$newarray[] =" `PersonEmail` =  (SELECT `PersonEmail` from `Person`
where (`PersonName` like '%".$personname."%' OR `PersonSurname` like '%".$personname."%') ) AND";
$toprint = $toprint."Mediation creator: ".$personname.", ";
}


$mediationappend = implode('',$newarray);
$mediationappend = substr($mediationappend,0,-3);

$toprint = "<br>Parameters: ".substr($toprint,0,-2);
echo $toprint."<br>";

if( ! ( (empty($append1) || empty($append2) ) ) ){
$appendset1 = $append1." AND ".$append2;
}

else{
$appendset1 = $append1.$append2;
}

if( ! ((empty($append3) || empty($append4))) ){
$appendset2 = $append3." AND ".$append4;
}

else{
$appendset2 = $append3.$append4;
}


$finalappendset = $appendset1.$appendset2;








if( !empty($finalappendset)){

if (empty($appendset1)){
$query = "SELECT `MediationID`, `MediationRelation`, `MediationMappable` from `Mediation`
where `MediationID` IN (SELECT `MediationID` from `OntologyMediationEntity` WHERE
 `OntologyID` IN (SELECT `OntologyID` from `Ontology` where ".$appendset2."))";

if(!empty($newarray)){
$query = $query." AND ".$mediationappend;
}

if(!empty($newentityarray)){
$query = $query." AND ".$entityappend;

}



}

else if (empty($appendset2)){
$query = "SELECT `MediationID`, `MediationRelation`, `MediationMappable` from `Mediation`
where `MediationID` IN (SELECT `MediationID` from `OntologyMediationEntity` WHERE
 `OntologyID` IN (SELECT `OntologyID` from `Ontology` where ".$appendset1."))";

if(!empty($newarray)){
$query = $query." AND ".$mediationappend;
}


if(!empty($newentityarray)){
$query = $query." AND ".$entityappend;

}

}

else{
$query = "SELECT `MediationID`, `MediationRelation`, `MediationMappable` from `Mediation`
where `MediationID` IN (SELECT `MediationID` from `OntologyMediationEntity` WHERE
 `OntologyID` IN (SELECT `OntologyID` from `Ontology` where ".$appendset1.")) AND 
 `MediationID` IN (SELECT `MediationID` from `OntologyMediationEntity` WHERE`OntologyID` IN
 (SELECT `OntologyID` from `Ontology` where ".$appendset2."))";

if(!empty($newarray)){
$query = $query." AND ".$mediationappend;
}


if(!empty($newentityarray)){
$query = $query." AND ".$entityappend;

}

}
$finalappendset="";
$appendset1="";
$appendset2="";
$append1="";
$append2="";
$append3="";
$append4="";
}//end if user puts in ontology name/acronym
else{
$query = "SELECT `MediationID`, `MediationRelation`, `MediationMappable` from `Mediation`";

if(!empty($newarray)){
$query = $query." WHERE ".$mediationappend;
}


if(!empty($newentityarray)){
$query = $query." AND ".$entityappend;

}


}//end else no ontology name/acro


$queryappend="";
$mediationappend ="";
$newarray ="";
$newentityarray="";

//echo "Query 1: ".$query."<br>";
$result = mysql_query($query) or die ("Query 1 failed ".mysql_error());
$count = 1;
$num = (mysql_num_rows ($result));
while($row = mysql_fetch_array($result)){

$medid = $row['MediationID'];
$medrel = $row['MediationRelation'];
$medmappable = $row['MediationMappable'];


$tablerow = array();
$tablerow[0] = $medrel;
$somecount = 1;



$query2 = "SELECT `EntityURI`, `OntologyID` , `SubsumptionType` from `OntologyMediationEntity` where `MediationID` = '$medid' ";




//echo "Query 2: ".$query2."<br>";

$entitynamevar1="";
$entityurivar1="";
$entitytypevar1="";

$entitynamevar2="";
$entityurivar2="";
$entitytypevar2="";

$result2 = mysql_query($query2) or die ("Query 2 failed ".mysql_error());
while($row2 = mysql_fetch_array($result2)){
$oid = $row2['OntologyID'];
$subsum = $row2['SubsumptionType'];

$tablerow[$somecount] = $row2['EntityURI'];

if($subsum == 1){
$tablerow[$somecount] = $tablerow[$somecount].' (subclass)';
}

else if($subsum == 2){
$tablerow[$somecount] = $tablerow[$somecount].' (superclass)';
}
$somecount++;

$query3 = "SELECT `OntologyName`, `OntologyAcronym` from `Ontology` where `OntologyID` = '$oid' ";
$result3 = mysql_query($query3) or die (mysql_error());
while($row3 = mysql_fetch_array($result3)){
if($row3['OntologyAcronym']==''){
$name = $row3['OntologyName'];
}

else{
$name = $row3['OntologyAcronym'];
}

$tablerow[$somecount] = $name;
$somecount++;
}//end q3while


}//end q2 while


echo "<tr>
<td>".$count.".</td>
<td>".$tablerow[2]."</td>
<td>".$tablerow[1]."</td>
<td>".$tablerow[0]."</td>
<td>".$tablerow[4]."</td>
<td>".$tablerow[3]."</td>
</tr>";
$count++;

}//end q1


echo "</table>";
}//bools

}//end else if (not empty fields)


mysql_close("","","");

?>
		 


		</div> <!-- .entry-content -->

		<footer class="entry-meta">
			Posted on <time class="entry-date" datetime="2012-09-10" pubdate>September 10 2012</time>
			by <span class="author vcard"><a class="url fn n" href="#" title="View all posts by Author" rel="author">Zubeida Casmod Khan</a></span> <br>
            Edited on <time class="entry-date" datetime="2013-03-04" pubdate>March 04 2013</time>
			by <span class="author vcard"><a class="url fn n" href="#" title="View all posts by Author" rel="author">Zubeida Casmod Khan</a></span>


			
		</footer>

	</article> <!-- .post.hentry --><!-- .post.hentry -->

</div> <!-- #content -->

<!--<div id="sidebar" role="complementary" class="span4">

	<!-- Non-working search form -->
	<!--<form role="search" action="#" class="searchform">
		<label class="assistive-text" for="s">Search for:</label>
		<input type="search" name="s" id="s" results="10" placeholder="Search..." value="">
		<input type="submit" value="Search">
	</form> <!-- .searchform.widget -->
<!--
	 <aside class="widget">
		<h3 class="widget-title">Sidebar heading</h3>

		<ul>
			<li><a href="#">Li element</a></li>
			<li><a href="#">Li element</a></li>
			<li><a href="#">Li element</a></li>
			<li>Li element</li>
			<li><a href="#">Li element</a></li>
		</ul>
	</aside> <!-- .widget -->

	<!--<aside class="widget">
		<h3 class="widget-title">Widget</h3>

		<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
		<p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
	</aside> <!-- .widget -->

<!--</div> <!-- #sidebar -->
</div> <!-- #main -->

	<footer id="footer" role="contentinfo">
		<!-- You're free to remove the credit li nk to Jayj.dk in the footer, but please, please leave it there :) -->
		
	</footer> <!-- #footer -->


	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!-- Load custom scripts -->
	<script src="js/script.js"></script>
</body>
</html>
