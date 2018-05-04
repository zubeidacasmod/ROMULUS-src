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

if( !(isset($_POST['mediation']))) {
echo 'No search data specified';
} //all empty fields

else if( isset($_POST['mediation']) ){
$searchterm = $_POST['search'];

if ($searchterm == ''){
echo 'Please specify search term.';
}

else{
if ($_POST['mediation'] == "align"){
echo 'Alignment results for the term '.$searchterm.'. <br><br>';
echo "<table>";
echo "<tr>
	<th> </th>
	<th>Ontology 1</th>
	<th>Entity 1</th>
	<th>Relation</th>
	<th>Ontology 2</th>
	<th>Entity 2</th>
      </tr>";


$query = "SELECT MediationID, SubsumptionType from OntologyMediationEntity where EntityURI like '%".$searchterm."%' ";
$result = mysql_query($query) or die (mysql_error());
$numcount = 1;
while($row = mysql_fetch_array($result)){
$somearray = array();
$count = 1;
$mid = $row['MediationID'];
$stype = $row['SubsumptionType'];

if($stype == 0){
$somearray[0] = "Equivalence";
}

else{
$somearray[0] = "Subsumption";
}

$query2 = "SELECT `EntityURI`, `OntologyID` from `OntologyMediationEntity` where `MediationID` = '$mid' ";
$result2 = mysql_query($query2) or die (mysql_error());
$count = 1;
while($row2 = mysql_fetch_array($result2)){
$somearray[$count] = $row2['EntityURI'];
$count++;
$ontoid = $row2['OntologyID'];

$query3 = "SELECT `OntologyName`, `OntologyAcronym` from `Ontology` where `OntologyID` = '$ontoid'";
$result3 = mysql_query($query3) or die (mysql_error());
while($row3 = mysql_fetch_array($result3)){
if($row3['OntologyAcronym']==''){
$name = $row3['OntologyName'];
}

else{
$name = $row3['OntologyAcronym'];
}

$somearray[$count] = $name;
$count++;
}//end q3while

}//end q2 while

echo "<tr>
	<td>$numcount </th>
	<td>$somearray[2]</td>
	<td>$somearray[1]</td>
	<td>$somearray[0]</td>
	<td>$somearray[4]</td>
	<td>$somearray[3]</td>
      </tr>";
$numcount++;
}//end q1 while


echo "</table>";
}//end if align

else if ($_POST['mediation'] == "map"){
echo 'Mapping results for the term '.$searchterm.'. <br><br>';
echo "<table>";
echo "<tr>
	<th> </th>
	<th>Ontology 1</th>
	<th>Entity 1</th>
	<th>Relation</th>
	<th>Ontology 2</th>
	<th>Entity 2</th>
      </tr>";


$query = "SELECT MediationID, SubsumptionType from OntologyMediationEntity where EntityURI like '%".$searchterm."%' 
and MediationID IN (SELECT MediationID from Mediation where MediationMappable = 'Yes')";

$result = mysql_query($query) or die (mysql_error());
$numcount = 1;
while($row = mysql_fetch_array($result)){
$somearray = array();
$count = 1;
$mid = $row['MediationID'];
$stype = $row['SubsumptionType'];

if($stype == 0){
$somearray[0] = "Equivalence";
}

else{
$somearray[0] = "Subsumption";
}

$query2 = "SELECT `EntityURI`, `OntologyID` from `OntologyMediationEntity` where `MediationID` = '$mid' ";
$result2 = mysql_query($query2) or die (mysql_error());
$count = 1;
while($row2 = mysql_fetch_array($result2)){
$somearray[$count] = $row2['EntityURI'];
$count++;
$ontoid = $row2['OntologyID'];

$query3 = "SELECT `OntologyName`, `OntologyAcronym` from `Ontology` where `OntologyID` = '$ontoid'";
$result3 = mysql_query($query3) or die (mysql_error());
while($row3 = mysql_fetch_array($result3)){
if($row3['OntologyAcronym']==''){
$name = $row3['OntologyName'];
}

else{
$name = $row3['OntologyAcronym'];
}

$somearray[$count] = $name;
$count++;
}//end q3while

}//end q2 while

echo "<tr>
	<td>$numcount </th>
	<td>$somearray[2]</td>
	<td>$somearray[1]</td>
	<td>$somearray[0]</td>
	<td>$somearray[4]</td>
	<td>$somearray[3]</td>
      </tr>";
$numcount++;
}//end q1 while


echo "</table>";

}// end else if map

else if ($_POST['mediation'] == "incon"){

echo 'Inconsistency results for the term '.$searchterm.'. <br><br>';
echo "<table>";
echo "<tr>
	<th> </th>
	<th>Ontology 1</th>
	<th>Entity 1</th>
	<th>Relation</th>
	<th>Inconsistency </th>
	<th>Ontology 2</th>
	<th>Entity 2</th>
      </tr>";


$query = "SELECT MediationID, SubsumptionType from OntologyMediationEntity where EntityURI like '%".$searchterm."%' 
and MediationID IN (SELECT MediationID from Mediation where MediationMappable = 'No')";

$result = mysql_query($query) or die (mysql_error());
$numcount = 1;
while($row = mysql_fetch_array($result)){
$somearray = array();
$count = 2;
$mid = $row['MediationID'];
$stype = $row['SubsumptionType'];

if($stype == 0){
$somearray[0] = "Equivalence";
}

else{
$somearray[0] = "Subsumption";
}

$queryincon= "SELECT `MediationInconsistency` from `Mediation` where `MediationID` = '$mid'";
$resultincon = mysql_query($queryincon) or die (mysql_error());
while($rowincon = mysql_fetch_array($resultincon)){
$somearray[1] = $rowincon['MediationInconsistency'];
}//end queryinconwhile

$query2 = "SELECT `EntityURI`, `OntologyID` from `OntologyMediationEntity` where `MediationID` = '$mid' ";
$result2 = mysql_query($query2) or die (mysql_error());
$count = 2;
while($row2 = mysql_fetch_array($result2)){
$somearray[$count] = $row2['EntityURI'];
$count++;
$ontoid = $row2['OntologyID'];

$query3 = "SELECT `OntologyName`, `OntologyAcronym` from `Ontology` where `OntologyID` = '$ontoid'";
$result3 = mysql_query($query3) or die (mysql_error());
while($row3 = mysql_fetch_array($result3)){
if($row3['OntologyAcronym']==''){
$name = $row3['OntologyName'];
}

else{
$name = $row3['OntologyAcronym'];
}

$somearray[$count] = $name;
$count++;
}//end q3while

}//end q2 while

echo "<tr>
	<td>$numcount </th>
	<td>$somearray[3]</td>
	<td>$somearray[2]</td>
	<td>$somearray[0]</td>
	<td>$somearray[1]</td>
	<td>$somearray[5]</td>
	<td>$somearray[4]</td>
      </tr>";
$numcount++;
}//end q1 while


echo "</table>";

}// end else if incon

//from advanced search
else if(!(isset($_POST['mediation']))){
echo "Advanced search results";
}

}//search term specified else
}//end else if (not empty fields)


//$searchterm = $_POST['search'];

/*if( isset($_POST['mediation']) ) {

	//echo $_POST['mediation'];
	if ($_POST['mediation'] == "map"){

		$map = 1;
		$query = "select * from Alignment where Mappable = $map AND (EntityA like '%".$searchterm."%' or EntityB like '%".$searchterm."%' or OntologyIDA IN (SELECT OntologyID FROM OntologyDetailsMetadata WHERE OntologyAcronym like '%".$searchterm."%' or OntologyName like '%".$searchterm."%' )) ";
		
	}

	else if ($_POST['mediation'] == "incon"){
		$map = 0;
		$query = "select * from Alignment where Mappable = $map AND (EntityA like '%".$searchterm."%' or EntityB like '%".$searchterm."%' or OntologyIDA IN (SELECT OntologyID FROM OntologyDetailsMetadata WHERE OntologyAcronym like '%".$searchterm."%' or OntologyName like '%".$searchterm."%' )) ";
	}

	else{
		$query = "select * from Alignment where EntityA like '%".$searchterm."%' or EntityB like '%".$searchterm."%' or OntologyIDA IN (SELECT OntologyID FROM OntologyDetailsMetadata WHERE OntologyAcronym like '%".$searchterm."%' or OntologyName like '%".$searchterm."%' ) ";
	}

}

else{
		$query = "select * from Alignment where EntityA like '%".$searchterm."%' or EntityB like '%".$searchterm."%' or OntologyIDA IN (SELECT OntologyID FROM OntologyDetailsMetadata WHERE OntologyAcronym like '%".$searchterm."%' or OntologyName like '%".$searchterm."%' ) ";
	}
  




$result = mysql_query($query) or die (mysql_error());


echo "Matches for the term : ".$searchterm.".";


echo "<table>";
echo "<tr>
	<th>Entity</th>
	<th>Relation</th>
	<th>Entity</th>
	<th>Link to table</th>

      </tr>";

while($row = mysql_fetch_array($result)){
 
  $entitya    = $row['EntityA'];
  $relation   = $row['Relation'];
  $entityb    = $row['EntityB'];
  $url	      = $row['ResultURL'];

echo 
"<tr>

	<td>".$entitya."  </td>
	<td>".$relation."</td>
	<td>".$entityb."</td>
	<td><a href = ".$url.">".$url."</a></td>

</tr>";
 

} // End our while loop*/


echo "</table>";





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
