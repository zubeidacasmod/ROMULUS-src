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
				<a href="#" title="Post Heading" rel="bookmark">Metadata Search Results</a>
			</h1>



		</header> <!-- .entry-header -->

		<div class="entry-content">
			

<h4>Search results</h4>

<?php



mysql_connect("127.3.143.1:3306","admint2HhvWi","2iAB21BlvIii") or die (mysql_error());

mysql_select_db("romulus") or die ("no database");

 
$searchterm = $_POST['search'];

if( isset($_POST['metadata']) ) {

	
//echo $_POST['metadata'];


echo "Matches for the term : <b>".$searchterm."</b>.";


if ($_POST['metadata'] == "ontologyname"){

		echo "<table>";
		echo "<tr>
			<th>Ontology Name</th>
			<th>Ontology Acronym</th>
			<th>Link to metadata</th>
      		</tr>";

		$query = "select OntologyName, OntologyAcronym, Link FROM Ontology where OntologyName like '%".$searchterm."%' or OntologyAcronym like '%".$searchterm."%' ";
		$result = mysql_query($query) or die (mysql_error());

		$name = "";
		$acronym= "";
		$link ="";
	
		while( $row = mysql_fetch_array($result) ){
			$name= $row['OntologyName'];
			$acronym = $row['OntologyAcronym'];
			$link = $row['Link'];
			
			
			echo 
			"<tr>
				<td>".$name."</td>
				<td>".$acronym."</td>
				<td><a href = ".$link." > ".$link." </a></td>
			</tr>";
		
		}

		
		echo "</table>";
	}

else if ($_POST['metadata'] == "ontologylang"){

		echo "<table>";
		echo "<tr>
			<th>Language Name</th>
			<th>Ontology represented in the language (name)</th>
			<th>Ontology represented in the language (acronym)</th>
			<th>Link to metadata</th>
      		</tr>";

		$query = "SELECT OntologyName, OntologyAcronym, LanguageName, Link FROM Ontology where LanguageName in (SELECT LanguageName from Language WHERE LanguageName like '%".$searchterm."%' or LanguageAcronym like '%".$searchterm."%')";
		$result = mysql_query($query) or die (mysql_error());
		while( $row = mysql_fetch_array($result) ){


	
		
		
		$ontologyname = $row['OntologyName'];
		$ontologyacr = $row['OntologyAcronym'];
		$language = $row['LanguageName'];
		$link = $row['Link'];
		
		echo 
				"<tr>
					<td>".$language."</td>
					<td>".$ontologyname."</td>
					<td>".$ontologyacr."</td>
					<td><a href = ".$link." > ".$link." </a></td>
				</tr>";


		}

	echo "</table>";
	}


	else if ($_POST['metadata'] == "orgname"){
		
		echo "<table>";
		echo "<tr>
			<th>Organisation Name</th>
			<th>Organisation Acronym</th>
			<th>Organisation Homepage</th>
			<th>Ontology affiliated with organisation (name)</th>
			<th>Ontology affiliated with organisation (acronym)</th>
			<th>Link to metadata</th>
      		</tr>";

		$query = "SELECT OrganisationName, OrganisationAcronym, OrganisationHomePage from Organisation
		where OrganisationName like '%".$searchterm."%' or OrganisationAcronym like '%".$searchterm."%'";
		
		$result = mysql_query($query) or die (mysql_error());
		while( $row = mysql_fetch_array($result) ){
		$orgname = $row['OrganisationName'];
		$orgacr = $row['OrganisationAcronym'];
		$orghome = $row['OrganisationHomePage'];
		

		$query2 = "SELECT OntologyName, OntologyAcronym, Link from Ontology where OntologyID
		IN (SELECT OntologyID from OntologyPerson where PersonEmail IN (SELECT PersonEmail from OrganisationPerson
		WHERE OrganisationName = '$orgname' or OrganisationName = '$orgacr'))";
		$result2 = mysql_query($query2) or die (mysql_error());
		
		while( $row2 = mysql_fetch_array($result2) ){
		$ontoname = $row2['OntologyName'];
		$ontoacr= $row2['OntologyAcronym'];
		$link = $row2['Link'];

		
		echo "<tr>
			<td>".$orgname."</td>
			<td>".$orgacr."</td>
			<td>".$orghome."</td>
			<td>".$ontoname."</td>
			<td>".$ontoacr."</td>
			<td>".$link."</td>
      		</tr>";

		}//endq2while
		}//endq1while
		echo "</table>";



	

	}//end orgname

	else if ($_POST['metadata'] == "ontologydeveloper"){
		
		echo "<table>";
		echo "<tr>
			<th>Developer Name</th>
			<th>Developer Email</th>
			<th>Ontology developed by developer (name)</th>
			<th>Ontology developed by developer (acronym)</th>
			<th>Link to metadata</th>
      		</tr>";

		$query = "SELECT PersonName, PersonSurname, PersonEmail FROM Person where
		PersonName like '%".$searchterm."%' or PersonSurname like '%".$searchterm."%' ";
		
		$result = mysql_query($query) or die (mysql_error());
		while( $row = mysql_fetch_array($result) ){
		$name = $row['PersonName'];
		$surname = $row['PersonSurname'];
		$email = $row['PersonEmail'];
		

		$query2 = "SELECT OntologyName, OntologyAcronym, Link from Ontology where OntologyID
		IN (SELECT OntologyID from OntologyPerson where PersonEmail IN (SELECT PersonEmail 
		from OrganisationPerson WHERE PersonEmail = (SELECT PersonEmail from Person where
	        PersonName = '$name' or PersonSurname = '$name ')))";
		
		$result2 = mysql_query($query2) or die (mysql_error());
		
		while( $row2 = mysql_fetch_array($result2) ){
		$ontoname = $row2['OntologyName'];
		$ontoacr= $row2['OntologyAcronym'];
		$link = $row2['Link'];
		$person = $name." ".$surname;
		
		echo "<tr>
			<td>".$person."</td>
			<td>".$email."</td>
			<td>".$ontoname."</td>
			<td>".$ontoacr."</td>
			<td>".$link."</td>
      		</tr>";

		}//endq2while
		}//endq1while
		echo "</table>";



	

	}//end person
	

}

else{
	echo "Please go back and specify a type of metadata attribute to search for.";

		

}





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
