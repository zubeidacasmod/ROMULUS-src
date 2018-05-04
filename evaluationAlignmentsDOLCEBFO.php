<?php
session_start();
 
 
			if ($_POST['otherSuggestions'] == "")
			$v = "No comments/suggestions";
			
			else{
			$v = $_POST['otherSuggestions'];
			$v = str_replace(",",";",$v);
                     $v= str_replace(array("\r\n", "\r", "\n"), " newline ", $v);
			}
		
			
			$line = $_SESSION['participantName'].",".$_SESSION['participantEmail'].",".$_SESSION['participantWhichFOs'].",".$_SESSION['participantOtherFOs'].",".$_SESSION['participantFamLev'].",".$_POST['a1'].",".$_POST['a2'].",".$_POST['a3'].",".$_POST['a4'].",".$_POST['a5'].",".$_POST['a6'].",".$_POST['a7'].",".$_POST['a8'].",".$_POST['a9'].",".$_POST['a10'].",".$v;
			
			$line2= "\n";
			
			$handle = fopen("user-input/DOLCEBFOAlignmentsEval.csv", "a+");
			//fwrite($handle,$line2);
			fwrite($handle,$line);
			fwrite($handle,$line2);
			
			fclose($handle);

			
			

?>

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
			<li><a href="home.html">Home</a></li>
			
            <li><a href="browseOntologies.html">Browse Ontologies</a></li>
            <li>
				<a href="ontologyComparison.html">Ontology Comparison</a>
                 <ul class="sub-menu">
					<li><a href="ontologicalCommitments.html">Ontological Commitments</a></li>
					<li><a href="representationLanguages.html">Representation Languages</a></li>
                    <li><a href="softwareEngineeringProperties.html">Software Engineering properties</a></li>
                    <li><a href="subjectDomains.html">Subject Domains</a></li>
                    <li><a href="applications.html">Applications</a></li>
			  </ul>
                	</li>
            <li><a href="ontologyAxiomatisation.html">Ontology Axiomatisation and formalism</a>
              <ul class="sub-menu">
            <li><a href="DLView.html">Description logic view</a></li>
             <li><a href="NLView.html">Natural language view</a></li>
            </ul>
            
            </li>
            <li><a href="ontologyMediation.html">Ontology Mediation</a>
             <ul class="sub-menu">				<li><a href="ontologyAlignment.html">Alignment</a></li>
				<li><a href="ontologyAlignmentMetadata.html">Alignment Metadata</a></li>
					<li><a href="ontologyMapping.html">Mapping</a></li>
                    <li><a href="ontologyMerging.html">Merging</a></li>                                        <li><a href="ontologyMediationSearch.html">Search</a></li>
<li><a href="FOinterchange.html">Ontology Interchangeability Method</a></li>
<li><a href="ontologyInterchange.html">Ontology Interchangeability Tool</a></li>
			  </ul>
            </li>
            <li><a href="ontologyMetadata.html">Ontology Metadata</a>
<ul class="sub-menu">
<li><a href="ontologyMetadataSearch.html">Ontology Metadata Search</a></li>
</ul>
</li>
            <li><a href="downloads.html">Downloads</a>
           
            </li>
            <li><a href="ontologySelection.html">Ontology Selection</a></li>
<li><a href="communitySubmission.html">Community</a></li>
            
            <li class="current"><a href="evaluation.html">Evaluate ROMULUS</a>
            <ul class="sub-menu">
					<li><a href="evaluationPart1.html">Evaluate functional features</a></li>
					<li class = "current"><a href="evaluationPart2.html">Evaluate ontological alignments</a>
                    
                    <ul class = "sub-menu">
                    <li class = "current"><a href ="evaluationAlignmentsDOLCEBFO.html">DOLCE - BFO</a></li>
                    <li><a href ="evaluationAlignmentsGFODOLCE.html">GFO - DOLCE</a></li>
                    <li><a href ="evaluationAlignmentsBFOGFO.html">BFO - GFO</a></li>                    
                    </ul> <!-- Close d-b ul-->
                    
                    </li> <!-- Close eval onto alignm-->
			  </ul><!-- Close part l/2 ul-->
            
        </li> <!-- Close first evaluation li -->
        
		
  <li><a href="contact.html">Contact</a></li>
	  
      </ul>
	</nav> <!-- #main-navigation -->

<div id="content" role="main" class="span12">

	<article class="post hentry">

		<header class="entry-header">
			<h1 class="entry-title">
				<a href="#" title="Post Heading" rel="bookmark">Other Alignment sets</a>
			</h1>
		</header> <!-- .entry-header -->

		<div class="entry-content">
<p class="alert alert-success">Thank you for your feedback. If you would like to evaluate other alignment sets, click on the respective link below.</p>

<h3><a href= "evaluationAlignmentsGFODOLCE.html">2. Evaluate alignments between GFO and DOLCE</a></h3>


<h3><a href= "evaluationAlignmentsBFOGFO.html">3. Evaluate alignments between BFO and GFO</a></h3>

<h3><a href = "evaluationPart1.html">Evaluate functional features</a></h3>
		 
		</div> <!-- .entry-content -->

		<footer class="entry-meta">
			Posted on <time class="entry-date" datetime="2012-09-01" pubdate>September 01 2012</time>
			by <span class="author vcard"><a class="url fn n" href="#" title="View all posts by Author" rel="author">Zubeida Casmod Khan</a></span> <br>

 Edited on <time class="entry-date" datetime="2012-10-22" pubdate>October 22 2012</time>
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
