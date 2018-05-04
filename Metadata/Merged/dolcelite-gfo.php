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
			<li><a href="../../home.html">Home</a></li>
			
            <li><a href="../../browseOntologies.html">Browse Ontologies</a></li>
            <li>
				<a href="../../ontologyComparison.html">Ontology Comparison</a>
                 <ul class="sub-menu">
					<li><a href="../../ontologicalCommitments.html">Ontological Commitments</a></li>
					<li><a href="../../representationLanguages.html">Representation Languages</a></li>
                    <li><a href="../../softwareEngineeringProperties.html">Software Engineering properties</a></li>
                    <li><a href="../../subjectDomains.html">Subject Domains</a></li>
                    <li><a href="../../applications.html">Applications</a></li>
			  </ul>
                	</li>
            
	<li><a href="../../ontologyAxiomatisation.html">Ontology Verbalisation</a>
            <ul class="sub-menu">
            <li><a href="../../DLView.html">Description logic view</a></li>
             <li><a href="../../NLView.html">Natural language view</a></li>
            </ul>
            </li>
            
            <li><a href="../../ontologyMediation.html">Ontology Mediation</a>
             <ul class="sub-menu">
				      <li><a href="../../ontologyAlignment.html">Alignment</a></li>
<li><a href="../../ontologyAlignmentMetadata.html">Alignment Metadata</a></li>
				      <li><a href="../../ontologyMapping.html">Mapping</a></li>
                                  <li><a href="../../ontologyMerging.html">Merging</a></li>                                          <li><a href="../../ontologyMediationSearch.html">Search</a></li><li><a href="../../FOinterchange.html">Ontology Interchangeability Method</a></li>
<li><a href="../../ontologyInterchange.html">Ontology Interchangeability Tool</a></li>

                                  <li><a href="../../mappingIncon.html">Mapping Inconsistencies</a></li>			 
            </ul>
            </li>             <li class="current"><a href="../../ontologyMetadata.html">Ontology Metadata</a>
<ul class="sub-menu">
<li><a href="../../ontologyMetadataSearch.html">Ontology Metadata Search</a></li>
</ul>
</li>
            <li><a href="../../downloads.html">Downloads</a>
            
            </li>
            <li><a href="../../ontologySelection.html">Ontology Selection</a></li>
<li><a href="../../communitySubmission.html">Community</a></li>
       <li><a href="../../evaluation.html">Evaluate ROMULUS</a>
       
        </li> <!-- Close first evaluation li -->
        
		
  <li><a href="../../contact.html">Contact</a></li>
	  
      </ul>
	</nav> <!-- #main-navigation -->
    
<div id="content" role="main" class="span11">

	<article class="post hentry">

		<header class="entry-header">
			<h1 class="entry-title">
				<a href="#" title="Post Heading" rel="bookmark">Metadata: DOLCE-Lite - GFO Merged </a>
			</h1>

			<a href="#" title="Post Heading"></a>
		</header> <!-- .entry-header -->

		<div class="entry-content">


		<style type="text/css">
#foComp
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#foComp td, #foComp th 
{
font-size:1em;
border:1px solid #f71570;
padding:3px 7px 2px 7px;
}
#foComp th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color: 	#000000;
color:#ffffff;
}
#foComp tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
</style>




<?php
mysql_connect("","","") or die (mysql_error());
//echo $yolo;
mysql_select_db("romulus") or die ("no database");
//echo "Connected to database romulus";

$query = "SELECT `OntologyID`, `OntologyName`, `OntologyAcronym`, `OntologyDescription`,
 `CreationDate`, `LatestModifiedDate`, `Version`, `URI` FROM `Ontology` WHERE `OntologyID` =25";
$result = mysql_query($query) or die ("Query1 failed");
//echo "ok";

$num = (mysql_num_rows ($result));
echo "<table>";
echo "<tr>
	<th>Entity</th>
	<th>Value</th>
      </tr>";

echo "<tr>
	<th colspan = 2 >Ontology details</th>
      </tr>";

while($row = mysql_fetch_array($result)){
 
  $ontologyID    = $row['OntologyID'];
  $ontologyName   = $row['OntologyName'];
  $ontologyAcronym  = $row['OntologyAcronym'];
  $ontologyDescription = $row['OntologyDescription'];
  $creationDate = $row['CreationDate'];
  $latestModifiedDate = $row['LatestModifiedDate'];
  $version = $row['Version'];
  $uri = $row['URI'];

  //$licence = $row['Licence'];
  //$languages = $row['Languages'];

  

echo 
"<tr>

	<td>Ontology ID</td>
	<td>".$ontologyID."</td>
</tr>";

echo 
"<tr>

	<td>Ontology Name</td>
	<td>".$ontologyName."</td>
</tr>";

echo 
"<tr>

	<td>Ontology Acronym</td>
	<td>".$ontologyAcronym."</td>
</tr>";

echo 
"<tr>

	<td>Ontology Description</td>
	<td>".$ontologyDescription."</td>
</tr>";

echo 
"<tr>

	<td>Creation Date</td>
	<td>".$creationDate."</td>
</tr>";

echo 
"<tr>

	<td>Latest Modified Date</td>
	<td>".$latestModifiedDate."</td>
</tr>";

echo 
"<tr>

	<td>Version</td>
	<td>".$version."</td>
</tr>";

echo 
"<tr>

	<td>URI</td>
	<td>".$uri."</td>
</tr>";



} // End our while loop

echo "<tr>
	<th colspan = 2 >Language</th>
      </tr>";

$query2 = "SELECT `LanguageName`, `LanguageAcronym`, `LanguageDescription` FROM `Language` WHERE `LanguageName` = (SELECT `LanguageName` from `Ontology` where `OntologyID` = 25)";
$result2 = mysql_query($query2) or die ("Query2 failed");

$num = (mysql_num_rows ($result2));
$ontologyLang = "";


while($row = mysql_fetch_array($result2)){
 
  $ontologyLang   = $row['LanguageName'];
  $langAcr =   $row['LanguageAcronym'];
  $langDesc = $row['LanguageDescription'];
}


echo 
"<tr>

	<td>Language name</td>
	<td>".$ontologyLang."</td>
</tr>";

echo 
"<tr>

	<td>Language acronym</td>
	<td>".$langAcr."</td>
</tr>";
echo 
"<tr>

	<td>Language description</td>
	<td>".$langDesc."</td>

</tr>";




echo "<tr>
	<th colspan = 2 >Ontology metrics</th>
      </tr>";

$query3 = "SELECT `DLExpressivity`, `NumberOfClasses`, `NumberOfIndividuals`, `NumberOfObjectProperties`,`NumberOfDataProperties`, `NumberOfAxioms`
 FROM `Metrics` WHERE `MetricsID` = (SELECT `MetricsID` from `Ontology` where `OntologyID` = 25)";
$result3 = mysql_query($query3) or die ("Query3 failed");

while($row3 = mysql_fetch_array($result3)){
 
  $dlexp   = $row3['DLExpressivity']; 
  $class   = $row3['NumberOfClasses'];
  $indi   = $row3['NumberOfIndividuals'];
  $oprop  = $row3['NumberOfObjectProperties'];
$dprop  = $row3['NumberOfDataProperties'];
  $axi = $row3['NumberOfAxioms'];

echo 

"<tr>

	<td>DL Expressivity</td>
	<td>".$dlexp."</td>
</tr>";

echo
"<tr>

	<td>Number Of Classes</td>
	<td>".$class."</td>
</tr>";

echo 
"<tr>

	<td>Number Of Individuals</td>
	<td>".$indi."</td>
</tr>";

echo 
"<tr>

	<td>Number Of Object Properties</td>
	<td>".$oprop."</td>
</tr>";

echo 
"<tr>

	<td>Number Of Data Properties</td>
	<td>".$dprop."</td>
</tr>";

echo 
"<tr>

	<td>NumberOfAxioms</td>
	<td>".$axi."</td>
</tr>";

}


echo "<tr>
	<th colspan = 2 >Ontology Licence</th>
      </tr>";

$query55 = "SELECT `LicenceName`, `LicenceDescription`, `LicenceHomePage` from `Licence` where `LicenceName`
 = (SELECT `LicenceName` from `Ontology` where `OntologyID` = 25)";
$result55 = mysql_query($query55) or die ("Query55 failed");

while($row55 = mysql_fetch_array($result55)){
 
  $licencename   = $row55['LicenceName']; 
  $licencedesc   = $row55['LicenceDescription'];
  $licencehome   = $row55['LicenceHomePage'];

echo 

"<tr>

	<td>Licence Name</td>
	<td>".$licencename."</td>
</tr>";

echo 
"<tr>

	<td>Licence Description</td>
	<td>".$licencedesc."</td>
</tr>";

echo 
"<tr>

	<td>LicenceHomePage</td>
	<td>".$licencehome."</td>
</tr>";



}


echo "<tr>
	<th colspan = 2 >Creator/contributor details</th>
      </tr>";



$query4 = "SELECT `PersonName`, `PersonSurname`, `PersonEmail` from `Person` where
`PersonEmail` IN (SELECT `PersonEmail` from `OntologyPerson` where `OntologyID` = 25)";
$result4 = mysql_query($query4) or die ("Query4 failed ".mysql_error());

while($row4 = mysql_fetch_array($result4)){

$creatorfullname   = $row4['PersonName']." ".$row4['PersonSurname'] ;
$creatoremail   = $row4['PersonEmail'];
$creator =$creator." , ".$creatorfullname." - ".$creatoremail;
$orgname = "";
echo 
"<tr>

	<td>Person Name</td>
	<td>".$creatorfullname."</td>
</tr>";


echo 
"<tr>

	<td>Person email</td>
	<td>".$creatoremail."</td>
</tr>";


$query5 = "SELECT `OrganisationName` from `Organisation` where `OrganisationName` 
IN (SELECT `OrganisationName` from `OrganisationPerson` where `PersonEmail` = '$creatoremail')";
$result5 = mysql_query($query5) or die ("Query5 failed ".mysql_error());


while($row5 = mysql_fetch_array($result5)){

$orgname = $row5['OrganisationName'].", ".$orgname;


}

$orgname = substr($orgname, 0, -2);
echo 
"<tr>

	<td>Organisation</td>
	<td>".$orgname."</td>
</tr>";

echo
"<tr>

	<td colspan =2></td>

</tr>";


}

echo "<tr>
	<th colspan = 2 >Organisation details</th>
      </tr>";



$query6 = "SELECT DISTINCT `OrganisationName` from `OrganisationPerson` where
`PersonEmail` IN (SELECT `PersonEmail` FROM `OntologyPerson` where `OntologyID` = 25)";
$result6 = mysql_query($query6) or die ("Query6 failed ".mysql_error());

while($row6 = mysql_fetch_array($result6)){

$org = $row6['OrganisationName'];

$query7 = "SELECT `OrganisationName`, `OrganisationAcronym`, `OrganisationHomePage` from `Organisation` where
`OrganisationName` = '$org'";
$result7 = mysql_query($query7) or die ("Query7 failed ".mysql_error());

while($row7 = mysql_fetch_array($result7)){
$orgname = $row7['OrganisationName'];
$orgacr = $row7['OrganisationAcronym'];
$orghomepage = $row7['OrganisationHomePage'];

echo 
"<tr>

	<td>Organisation Name</td>
	<td>".$orgname."</td>
</tr>";

echo 
"<tr>

	<td>Organisation Acronym</td>
	<td>".$orgacr."</td>
</tr>";

echo 
"<tr>

	<td>Organisation Homepage</td>
	<td>".$orghomepage."</td>
</tr>";

echo
"<tr>

	<td colspan =2></td>

</tr>";



}
}


$count = 0;
$query9 = "SELECT `ProjectID`, `ProjectName`, `ProjectAcronym`, `ProjectHomePage`, `ProjectDescription`, `ProjectDomain`,
`ProjectUsageApplication` from `Project` where `ProjectID` IN (SELECT `ProjectID`from `OntologyProject` where `OntologyID` = 25)";

$result9 = mysql_query($query9) or die ("Query9 failed ".mysql_error());


while($row9 = mysql_fetch_array($result9)){

$projid = $row9['ProjectID'];
$projname = $row9['ProjectName'];
$projacr = $row9['ProjectAcronym'];
$projhomepage = $row9['ProjectHomePage'];
$projdesc = $row9['ProjectDescription'];
$projdom = $row9['ProjectDomain'];
$projusage = $row9['ProjectUsageApplication'];


if($projid!=0){
if($count ==0){
echo
"<tr>

	<th colspan =2>Project details</th>

</tr>";
}

echo 
"<tr>

	<td>Project Name</td>
	<td>".$projname."</td>
</tr>";

echo 
"<tr>

	<td>Project Acronym</td>
	<td>".$projacr."</td>
</tr>";

echo 
"<tr>

	<td>Project Homepage</td>
	<td>".$projhomepage."</td>
</tr>";

echo 
"<tr>

	<td>Project Description</td>
	<td>".$projdesc."</td>
</tr>";


echo 
"<tr>

	<td>Project Domain</td>
	<td>".$projdom."</td>
</tr>";

echo 
"<tr>

	<td>Project Usage Application</td>
	<td>".$projusage."</td>
</tr>";
$count++;
}

}

echo 
"<tr>

	<th colspan =2>Mediation details</td>
</tr>";

$details='';
$medsetid=0;
$types='';
$medids='';
$query12 = "SELECT DISTINCT `PersonEmail` from `Mediation` where `MediationSetID`
in (SELECT `MediationSetID` FROM `MediationSet` where `OntologyID` = 25)";
$result12 = mysql_query($query12) or die ("Query 12 failed ".mysql_error());
while($row12 = mysql_fetch_array($result12)){


$cemail = $row12['PersonEmail'];

$query13 = "SELECT `PersonName`, `PersonSurname`, `PersonEmail` from `Person` where `PersonEmail`
= '$cemail' ";
$result13 = mysql_query($query13) or die ("Query 13 failed ".mysql_error());
while($row13 = mysql_fetch_array($result13)){
$details = $details.$row13['PersonName'].' '.$row13['PersonSurname'].': '.$row13['PersonEmail'].', ';
}


}
$details = substr($details, 0, -2);

echo 
"<tr>

	<td>Mediation creator/s</td>
	<td>".$details."</td>
</tr>";


$query10 = "SELECT `MediationSetID`, `MediationSetLevel` ,`MediationSetPercentage`, `MediationSetTypeName`
from `MediationSet` where `OntologyID` = 25";

$result10 = mysql_query($query10) or die ("Query 10 failed ".mysql_error());


while($row10 = mysql_fetch_array($result10)){

$medsetid = $row10['MediationSetID'];
$medsetlev = $row10['MediationSetLevel'];
$medsetperc = $row10['MediationSetPercentage'];
$medsettypename = $row10['MediationSetTypeName'];

echo 
"<tr>

	<td>Mediation Set Level</td>
	<td>".$medsetlev."</td>
</tr>";

echo 
"<tr>

	<td>Mediation Set Percentage</td>
	<td>".$medsetperc."%</td>
</tr>";

echo 
"<tr>

	<td>Mediation Set Type Name</td>
	<td>".$medsettypename."</td>
</tr>";

$query11 = "SELECT `MediationSetTypeDescription` from `MediationSetType` where 
`MediationSetTypeName` = '$medsettypename' ";

$result11 = mysql_query($query11) or die ("Query 11 failed ".mysql_error());
while($row11 = mysql_fetch_array($result11)){

$medsettypedesc = $row11['MediationSetTypeDescription'];

echo 
"<tr>

	<td>Mediation Set Type Description</td>
	<td>".$medsettypedesc."</td>
</tr>";

}


$query15 = "SELECT DISTINCT `MethodType` from `Mediation` where `MediationSetID` = '$medsetid'";
$result15 = mysql_query($query15) or die ("Query 15 failed ".mysql_error());
while($row15 = mysql_fetch_array($result15)){
$types=$types.$row15['MethodType'].', ';
}

$types = substr($types, 0, -2);

echo 
"<tr>

	<td>Mediation Set Method/s</td>
	<td>".$types."</td>
</tr>";


$count2 = 0;
$query16 = "SELECT DISTINCT `ToolName` from `MediationTool` where
`MediationID` in (SELECT `MediationID` from `Mediation` where `MediationSetID` = '$medsetid' )";
$result16 = mysql_query($query16) or die ("Query 16 failed ".mysql_error());

while($row16 = mysql_fetch_array($result16)){
$toolnameone = $row16['ToolName'];

$query17 = "SELECT `ToolName`, `ToolVersion`, `ToolHomePage`, `ToolMethod`, `ToolAlgorithm` from
`Tool` where `ToolName` =  '$toolnameone' ";
$result17 = mysql_query($query17) or die ("Query 17 failed ".mysql_error());

while($row17 = mysql_fetch_array($result17)){
$tooln = $row17['ToolName'];
$toolver = $row17['ToolVersion'];
$toolhome = $row17['ToolHomePage'];
$toolmeth = $row17['ToolMethod'];
$toolalgo = $row17['ToolAlgorithm'];
if($count2 == 0){
	
echo 
"<tr>
	<th colspan = 2>Mediation Tool/s</th>
</tr>";
}

echo 
"<tr>

	<td>Tool Name</td>
	<td>".$tooln."</td>
</tr>";

echo 
"<tr>

	<td>Tool Version</td>
	<td>".$toolver."</td>
</tr>";


echo 
"<tr>

	<td>Tool Home</td>
	<td>".$toolhome."</td>
</tr>";

echo 
"<tr>

	<td>Tool Method</td>
	<td>".$toolmeth."</td>
</tr>";

echo 
"<tr>

	<td>Tool Algorithm</td>
	<td>".$toolalgo."</td>
</tr>";

echo
"<tr>

	<td colspan = 2></td>
	
</tr>";
$count2++;
}

}

}

echo "</table>";


mysql_close("","","");

?>
		 
		</div> <!-- .entry-content -->

		<footer class="entry-meta">
			Posted on <time class="entry-date" datetime="2013-05-01" pubdate>May 01 2013</time>
			by <span class="author vcard"><a class="url fn n" href="#" title="View all posts by Author" rel="author">Zubeida Casmod Khan</a></span> <br>
           Edited on <time class="entry-date" datetime="2013-05-04" pubdate>May 04 2013</time>
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
