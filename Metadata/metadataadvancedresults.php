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
            
           
<li><a href="../ontologyMediation.html">Ontology Mediation</a>
             <ul class="sub-menu">
				      <li><a href="../ontologyAlignment.html">Alignment</a></li>
				      <li><a href="../ontologyMapping.html">Mapping</a></li>
                                  <li><a href="../ontologyMerging.html">Merging</a></li>                                             <li><a href="../ontologyMediationSearch.html">Search</a></li>
                                  <li><a href="../FOinterchange.html">Ontology Interchangeability Method</a></li>
<li><a href="../ontologyInterchange.html">Ontology Interchangeability Tool</a></li>
                                  <li><a href="../mappingIncon.html">Mapping Inconsistencies</a></li>			 
            </ul>
            </li>

            <li class="current"><a href="../ontologyMetadata.html">Ontology Metadata</a>
		<ul class="sub-menu">
		<li class="current"><a href="../ontologyMetadataSearch.html">Ontology Metadata Search</a></li>
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
				<a href="#" title="Post Heading" rel="bookmark">Advanced Metadata Search Results</a>
			</h1>



		</header> <!-- .entry-header -->

		<div class="entry-content">
			

<h4>Search results</h4>

<?php
mysql_connect("","","") or die (mysql_error());
mysql_select_db("") or die ("no database");

if ( empty($_POST['ontologynamesearch']) && empty($_POST['ontologyacronymsearch']) && empty($_POST['languagenamesearch']) && empty($_POST['languageacronymsearch'])
&& empty($_POST['organisationnamesearch']) && empty($_POST['ontologyacronymsearch']) && empty($_POST['personnamesearch'])
&& empty($_POST['personemailsearch']) && empty($_POST['originalontologynamesearch'])
&& empty($_POST['moduletype']) && empty($_POST['modulesubtype']) && empty($_POST['modulecorrectness']) && empty($_POST['modulecompleteness'])
&& empty($_POST['operatorset1']) && empty($_POST['coveragesizesearch']) && empty($_POST['operatorset2']) && empty($_POST['classsizesearch'])
&& empty($_POST['operatorset3']) && empty($_POST['propertysizesearch']) && empty($_POST['modulemethod']) 
&& empty($_POST['modularitytoolnamesearch'])  && empty($_POST['mediationpersonnamesearch'])
&& empty($_POST['medlevel']) && empty($_POST['medmethod']) && empty($_POST['mediationtoolnamesearch'])
&& empty($_POST['operatorset4']) && empty($_POST['mediationsizesearch'])
){ 
echo "No search data specified.";
} 

else{
	
echo "Advanced search results.<br>Parameters: ";
  
$ontologynamesearch=$_POST['ontologynamesearch'];
$ontologyacronymsearch=$_POST['ontologyacronymsearch'];  
$languagenamesearch=$_POST['languagenamesearch'];  
$languageacronymsearch=$_POST['languageacronymsearch'];
$organisationnamesearch=$_POST['organisationnamesearch'];  
$organisationacronymsearch=$_POST['organisationacronymsearch'];  
$personnamesearch=$_POST['personnamesearch'];
$personemailsearch=$_POST['personemailsearch']; 
$originalontologynamesearch=$_POST['originalontologynamesearch'];
$moduletype=$_POST['moduletype'];  
$modulesubtype=$_POST['modulesubtype'];  
$modulecorrectness=$_POST['modulecorrectness'];  
$modulecompleteness=$_POST['modulecompleteness'];
$operatorset1=$_POST['operatorset1'];  
$coveragesizesearch=$_POST['coveragesizesearch']; 
$operatorset2=$_POST['operatorset2']; 
$classsizesearch=$_POST['classsizesearch'];
$operatorset3=$_POST['operatorset3'];  
$propertysizesearch=$_POST['propertysizesearch'];  
$modulemethod=$_POST['modulemethod'];  
$modularitytoolnamesearch=$_POST['modularitytoolnamesearch'];   
 
$mediationpersonnamesearch=$_POST['mediationpersonnamesearch'];
$medlevel=$_POST['medlevel'];  
$medmethod=$_POST['medmethod'];  
$mediationtoolnamesearch=$_POST['mediationtoolnamesearch'];
$operatorset4=$_POST['operatorset4'];  
$mediationsizesearch=$_POST['mediationsizesearch'];

//prevent sql injection
$ontologynamesearch=mysql_real_escape_string($ontologynamesearch);
$ontologyacronymsearch=mysql_real_escape_string($ontologyacronymsearch);  
$languagenamesearch=mysql_real_escape_string($languagenamesearch);  
$languageacronymsearch=mysql_real_escape_string($languageacronymsearch);
$organisationnamesearch=mysql_real_escape_string($organisationnamesearch);  
$organisationacronymsearch=mysql_real_escape_string($organisationacronymsearch);  
$personnamesearch=mysql_real_escape_string($personnamesearch);
$personemailsearch=mysql_real_escape_string($personemailsearch); 
$originalontologynamesearch=mysql_real_escape_string($originalontologynamesearch);
$modularitytoolnamesearch=mysql_real_escape_string($modularitytoolnamesearch);   
$mediationpersonnamesearch=mysql_real_escape_string($mediationpersonnamesearch);  
$mediationtoolnamesearch=mysql_real_escape_string($mediationtoolnamesearch);  


$somebool=true;

if ( (!is_numeric($coveragesizesearch)) && (!empty($coveragesizesearch)) ) {
echo "Please enter a numeric value for module coverage size";
$somebool=false;
}

if ( (!is_numeric($classsizesearch)) && (!empty($classsizesearch)) ) {
echo "Please enter a numeric value for module class size";
$somebool=false;
}

if ( (!is_numeric($propertysizesearch)) && (!empty($propertysizesearch)) ) {
echo "Please enter a numeric value for module property size";
$somebool=false;
}

if ($somebool==true){
$ontologyarray =array();
$toprint;
$basequery = "SELECT `OntologyID`, `OntologyName`, `OntologyAcronym`, `Link` from `Ontology` WHERE ";

echo "<table>";
	echo"<tr>
 		<th>Ontology ID</th>
 		<th>Ontology Name</th>
 		<th>Ontology Acronym</th>
		<th>Link to Metadata</th>
     	     <tr>";

if(!empty($ontologynamesearch)){
$ontologyarray[] = " `OntologyName` like '%".$ontologynamesearch."%' AND";
$toprint =$toprint."Ontology name: ".$ontologynamesearch.", ";
}

if(!empty($ontologyacronymsearch)){
$ontologyarray[] = " `OntologyAcronym` like '%".$ontologyacronymsearch."%' AND";
$toprint =$toprint."Ontology acronym: ".$ontologyacronymsearch.", ";
}

if(!empty($languagenamesearch)){
$ontologyarray[] = " `LanguageName` IN (SELECT `LanguageName` from `Language`
where `LanguageName` like '%".$languagenamesearch."%' ) AND";
$toprint =$toprint."Ontology language name: ".$languagenamesearch.", ";
}

if(!empty($languageacronymsearch)){

$ontologyarray[] = " `LanguageName` IN (SELECT `LanguageName` from `Language`
where `LanguageAcronym` like '%".$languageacronymsearch."%' ) AND";
$toprint =$toprint."Ontology language acronym: ".$languageacronymsearch.", ";
}

if(!empty($organisationnamesearch)){
$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` from `OntologyPerson` where 
`PersonEmail` IN (SELECT `PersonEmail` from `OrganisationPerson` 	
WHERE `OrganisationName` LIKE '%".$organisationnamesearch."%')) AND";
$toprint =$toprint."Ontology organisation name: ".$organisationnamesearch.", ";
}

if(!empty($organisationacronymsearch)){

$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` from `OntologyPerson` where 
`PersonEmail` IN (SELECT `PersonEmail` from `OrganisationPerson` WHERE 
`OrganisationName`  = (SELECT `OrganisationName` from `Organisation` WHERE 
`OrganisationAcronym`  LIKE '%".$organisationacronymsearch."%'))) AND";
$toprint =$toprint."Ontology organisation acronym: ".$organisationacronymsearch.", ";
}

if(!empty($personnamesearch)){
$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` from `OntologyPerson` where 
`PersonEmail` IN (SELECT `PersonEmail` from `Person` WHERE ( `PersonName` 
LIKE '%".$personnamesearch."%' OR `PersonSurname` LIKE '%".$personnamesearch."%') )) AND";
$toprint =$toprint."Ontology developer name: ".$personnamesearch.", ";
}

if(!empty($personemailsearch)){

$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` from `OntologyPerson` where 
`PersonEmail` IN (SELECT `PersonEmail` from `Person` WHERE `PersonEmail` 
LIKE '%".$personemailsearch."%')) AND";
$toprint =$toprint."Ontology developer email: ".$personemailsearch.", ";
}

if(!empty($originalontologynamesearch)){
$ontologyarray[] = "`OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE `OriginalOntologyID` IN 
(SELECT `OntologyID` FROM `Ontology` where (`OntologyName` LIKE '%".$originalontologynamesearch."%' OR 
`OntologyAcronym` LIKE '%".$originalontologynamesearch."%' ) ) ) AND";
$toprint =$toprint."Original ontology of module: ".$originalontologynamesearch.", ";
}

if( (!empty($moduletype)) && ($moduletype == "More/lessdetailed") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleType`  = 'More/less detailed') AND";
$toprint =$toprint."Module type: More/less detailed, ";
}

if( (!empty($moduletype)) && ($moduletype == "More/lessexpressive") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleType`  = 'More/less expressive') AND";
$toprint =$toprint."Module type: More/less expressive, ";
}

if( (!empty($moduletype)) && ($moduletype == "Reusablecomponent") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleType`  = 'Reusable component') AND";
$toprint =$toprint."Module type: Reusable component, ";
}



if( (!empty($modulesubtype)) && ($modulesubtype == "Rich/lightmodules") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`Modulesubtype`  = 'Rich/light modules') AND";
$toprint =$toprint."Module subtype: Rich/light modules, ";
}

if( (!empty($modulesubtype)) && ($modulesubtype == "High-levelabstraction") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`Modulesubtype`  = 'High-level abstraction') AND";
$toprint =$toprint."Module subtype: High-level abstraction, ";
}

if( (!empty($modulesubtype)) && ($modulesubtype == "OWLprofile") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`Modulesubtype`  = 'OWL profile') AND";
$toprint =$toprint."Module subtype: OWL profile, ";
}

if( (!empty($modulesubtype)) && ($modulesubtype == "domainindependent") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`Modulesubtype`  = 'Domain-independent') AND";
$toprint =$toprint."Module subtype: Domain-independent, ";
}

if( (!empty($modulesubtype)) && ($modulesubtype == "branch") ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`Modulesubtype`  = 'Branch') AND";
$toprint =$toprint."Module subtype: Branch, ";
}

if( !empty($modulecorrectness) ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleCorrectness`  = '$modulecorrectness') AND";
$toprint =$toprint."Module correctness: ".$modulecorrectness.", ";
}

if( !empty($modulecompleteness) ){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleCompleteness`  = '$modulecompleteness') AND";
$toprint =$toprint."Module completeness: ".$modulecompleteness.", ";
}

if( (!empty($operatorset1)) && (!empty($coveragesizesearch)) ){

if($operatorset1 == "Lessthan")
$operation = "<";

else if($operatorset1 == "Equals")
$operation = "=";

else
$operation = ">";

$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleCoverage`  $operation '$coveragesizesearch') AND";
$toprint = $toprint. "Module coverage: ".$operation." ".$coveragesizesearch." of original ontology, ";
}

if( (!empty($operatorset2)) && (!empty($classsizesearch)) ){

if($operatorset2 == "Lessthan")
$operation = "<";

else if($operatorset2 == "Equals")
$operation = "=";

else
$operation = ">";

$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModuleClassSize`  $operation '$classsizesearch') AND";
$toprint = $toprint. "Module class size: ".$operation." ".$classsizesearch." of original ontology, ";
}

if( (!empty($operatorset3)) && (!empty($propertysizesearch)) ){
if($operatorset3 == "Lessthan")
$operation = "<";

else if($operatorset3 == "Equals")
$operation = "=";

else
$operation = ">";

$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ModulePropertySize`  $operation '$propertysizesearch') AND";
$toprint = $toprint. "Module property size: ".$operation." ".$propertysizesearch." of original ontology, ";
}

if(!empty($modulemethod)){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`MethodType`  = '$modulemethod') AND";
$toprint = $toprint. "Modularity method: ".$modulemethod.", ";
}

if(!empty($modularitytoolnamesearch)){
$ontologyarray[] = " `OntologyID` IN (SELECT `ModuleID` FROM `Module` WHERE 
`ToolName`  LIKE '%".$modularitytoolnamesearch."%') AND";
$toprint = $toprint. "Modularity tool: ".$modularitytoolnamesearch.", ";

}

if (!empty($mediationpersonnamesearch)){
$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` FROM `MediationSet`
 WHERE `MediationSetID` IN (SELECT `MediationSetID` FROM `Mediation` WHERE `PersonEmail` IN
(SELECT `PersonEmail` FROM `Person` WHERE (`PersonName` LIKE '%".$mediationpersonnamesearch."%' 
OR `PersonSurname` LIKE '%".$mediationpersonnamesearch."%') ))) AND";
$toprint = $toprint. "Mediation creator name: ".$mediationpersonnamesearch.", ";
}

if (!empty($medlevel)){
$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` FROM `MediationSet`
 WHERE  `MediationSetLevel` = '$medlevel' ) AND";
$toprint = $toprint. "Mediation level: ".$medlevel.", ";
}

if (!empty($medmethod)){
$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` FROM `MediationSet`
 WHERE `MediationSetID` IN (SELECT `MediationSetID` FROM `Mediation` WHERE `MethodType` = '$medmethod')) AND";
$toprint = $toprint. "Mediation method: ".$medmethod.", ";
}

if (!empty($mediationtoolnamesearch)){
$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` FROM `MediationSet`
 WHERE `MediationSetID` IN (SELECT `MediationSetID` FROM `Mediation` WHERE `MediationID` IN
(SELECT `MediationID` from `MediationTool` where `ToolName` like '%".$mediationtoolnamesearch."%' ))) AND";
$toprint = $toprint. "Mediation tool name: ".$mediationtoolnamesearch.", ";
}

if( (!empty($operatorset4)) && (!empty($mediationsizesearch)) ){

if($operatorset4 == "Lessthan")
$operation = "<";

else if($operatorset4 == "Equals")
$operation = "=";

else
$operation = ">";

$ontologyarray[] = " `OntologyID` IN (SELECT `OntologyID` FROM `MediationSet`
 Where `MediationSetPercentage` $operation '$mediationsizesearch' ) AND";
$toprint = $toprint. "Mediated percentage: ".$operation." ".$mediationsizesearch." of original ontologies, ";
}

$toprint = substr($toprint,0,-2);
echo $toprint."<br>";
$querytoappend = implode('',$ontologyarray);
$querytoappend = substr($querytoappend,0,-3);
$finalquery = $basequery." ".$querytoappend;
//echo "<br><br>".$finalquery."<br><br>";
$result = mysql_query($finalquery) or die (mysql_error());

while( $row = mysql_fetch_array($result) ){
	$id =$row ['OntologyID'];
	$name = $row ['OntologyName'];
	$acronym = $row ['OntologyAcronym'];
	$link =$row ['Link'];

	echo"<tr>
 		<td>".$id."</td>
 		<td>".$name."</td>
 		<td>".$acronym."</td>
		<td>".$link."</td>
     	<tr>";
}

echo "</table>";
}//else class/prop/coverage are numeric vals

} //end not empty fields


mysql_close("","","");

?>	 

		 


		</div> <!-- .entry-content -->

		<footer class="entry-meta">
			Posted on <time class="entry-date" datetime="2012-09-10" pubdate>September 10 2012</time>
			by <span class="author vcard"><a class="url fn n" href="#" title="View all posts by Author" rel="author">Zubeida Casmod Khan</a></span> <br>
            Edited on <time class="entry-date" datetime="2014-03-06" pubdate> March 06 2014</time>
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
