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
<li class = "current"><a href="../../ontologyAlignmentMetadata.html">Alignment Metadata</a></li>
				      <li><a href="../../ontologyMapping.html">Mapping</a></li>
                                  <li><a href="../../ontologyMerging.html">Merging</a></li>                                             <li><a href="../../ontologyMediationSearch.html">Search</a></li><li><a href="../../FOinterchange.html">Ontology Interchangeability Method</a></li>
<li><a href="../../ontologyInterchange.html">Ontology Interchangeability Tool</a></li>

                                  <li><a href="../../mappingIncon.html">Mapping Inconsistencies</a></li>			 
            </ul>
            </li>

            <li><a href="../../ontologyMetadata.html">Ontology Metadata</a>
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
				<a href="#" title="Post Heading" rel="bookmark">Ontology Alignment</a>
			</h1>



		</header> <!-- .entry-header -->

		<div class="entry-content">
			





<?php
mysql_connect("127.3.143.1:3306","admint2HhvWi","2iAB21BlvIii") or die (mysql_error());
echo $yolo;
mysql_select_db("romulus") or die ("no database");
$medsetid =2;

$ontoname[] = array();
$newquery = "SELECT  `OntologyID`,`OntologyName`, `OntologyAcronym` from `Ontology` where `OntologyID` in 
(SELECT DISTINCT `OntologyID` from `OntologyMediationEntity` where `MediationID` in
(SELECT `MediationID` from `Mediation` where `MediationSetID`= '$medsetid'))";

$newresult = mysql_query($newquery) or die ("Query new failed ".mysql_error());
$counter = 0;
while($newrow = mysql_fetch_array($newresult)){
$name = $newrow['OntologyName'];
$ontologyid[$counter]= $newrow['OntologyID'];

if ($newrow['OntologyAcronym']==null){
$ontoname[$counter]= $newrow['OntologyName'];
}

else{
$ontoname[$counter]= $newrow['OntologyAcronym'];

}
$counter++;

}

echo "<h4>Metadata for alignments between ".$ontoname[0]." and ".$ontoname[1]."</h4>";
echo "<table>";
echo "<tr>
	<th></th>
	<th>Entity URI</th>
	<th>Relation</th>
	<th>Entity URI</th>
	<th>Mappable</th>
	<th>Mediation Inconsistency</th>
	<th>Mediation Date</th>
	<th>Mediation Method</th>
	<th>Mediation Tool</th>
	<th>Creator</th>
	</tr>";


$query = "SELECT `MediationID`, `MediationRelation`, `MediationMappable`, `MediationInconsistency`,
`MediationDate`, `MethodType`, `PersonEmail` from `Mediation` where `MediationSetID` = '$medsetid' ";

$result = mysql_query($query) or die ("Query 1 failed ".mysql_error());
$count = 1;
$num = (mysql_num_rows ($result));
while($row = mysql_fetch_array($result)){

$medid = $row['MediationID'];
$medrel = $row['MediationRelation'];
$medmappable = $row['MediationMappable'];
$medincon = $row['MediationInconsistency'];
$meddate = $row['MediationDate'];
$medmethod = $row['MethodType'];
$medemail = $row['PersonEmail'];

$tablerow = array();
$tablerow[1] = $medrel;
$tablerow[3] = $medmappable;
$tablerow[4] = $medincon;
$tablerow[5] = $meddate;
$tablerow[6] = $medmethod;


$query2 = "SELECT `EntityURI`, `OntologyID` , `SubsumptionType` from `OntologyMediationEntity` where `MediationID` = '$medid' ";
$result2 = mysql_query($query2) or die ("Query 2 failed ".mysql_error());
while($row2 = mysql_fetch_array($result2)){
$oid = $row2['OntologyID'];
$subsum = $row2['SubsumptionType'];

if ($oid == $ontologyid[0]){
$tablerow[0] = $row2['EntityURI'];
//$pos = strpos($tablerow[0],'#');
//$tablerow[0] = substr($tablerow[0], $pos+1);

if($subsum == 1){
$tablerow[0] = $tablerow[0].' (subclass)';
}

else if($subsum == 2){
$tablerow[0] = $tablerow[0].' (superclass)';

}


}

else if ($oid == $ontologyid[1]) {
$tablerow[2] = $row2['EntityURI'];
//$pos = strpos($tablerow[2],'#');
//$tablerow[2] = substr($tablerow[2], $pos+1);

if($subsum == 1){
$tablerow[2] = $tablerow[2].' (subclass)';
}

else if($subsum == 2){
$tablerow[2] = $tablerow[2].' (superclass)';


}
}

$query3 = "SELECT DISTINCT `ToolName`, `ToolVersion` from `MediationTool` where `MediationID` = '$medid'";
$result3 = mysql_query($query3) or die ("Query 3 failed ".mysql_error());
$tool='';
while($row3 = mysql_fetch_array($result3)){
$tool = $row3['ToolName'].' v'.$row3['ToolVersion'].', '.$tool;
}

$tablerow[7] = substr($tool,0,-2);

$query4 = "SELECT DISTINCT `PersonName`, `PersonSurname`, `PersonEmail` from `Person` where `PersonEmail` IN
(SELECT `PersonEmail` from `Mediation` where `MediationID` = '$medid')";

$result4 = mysql_query($query4) or die ("Query 4 failed ".mysql_error());
$person='';
while($row4 = mysql_fetch_array($result4)){
$person = $row4['PersonName'].' '.$row4['PersonSurname'].': '.$row4['PersonEmail'].', '.$person;
}
$tablerow[8] = substr($person,0,-2);
}//endresult2while

if($tablerow[4]==''){
$tablerow[4] ='-';
}

if($tablerow[7]==''){
$tablerow[7] ='-';
}
//wordwrap($tablerow[0], 12, "\n", true)


echo "<tr>
<td><font size= 1.5>".$count.".</td>
<td><font size= 1.5>".$tablerow[0]."</td>
<td><font size= 1.5>".$tablerow[1]."</td>
<td><font size= 1.5>".$tablerow[2]."</td>
<td><font size= 1.5>".$tablerow[3]."</td>
<td><font size= 1.5>".$tablerow[4]."</td>
<td><font size= 1.5>".$tablerow[5]."</td>
<td><font size= 1.5>".$tablerow[6]."</td>
<td><font size= 1.5>".$tablerow[7]."</td>
<td><font size= 1.5>".$tablerow[8]."</td>
</tr>";
$count++;
}



echo "</table>";

mysql_close("127.3.143.1:3306","admint2HhvWi","2iAB21BlvIii");

?>
		 
		</div> <!-- .entry-content -->

		<footer class="entry-meta">
			Posted on <time class="entry-date" datetime="2012-09-10" pubdate>September 10 2012</time>
			by <span class="author vcard"><a class="url fn n" href="#" title="View all posts by Author" rel="author">Zubeida Casmod Khan</a></span> <br>
            Edited on <time class="entry-date" datetime="2012-11-14" pubdate>November 14 2012</time>
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
