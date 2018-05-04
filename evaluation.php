<?php
session_start();
/**
 * PHP contact form
 */

// If the form have been submitted and the spam check field is empty
//if ( isset( $_POST['email'] ) && empty( $_POST['s_check'] ) ) :

	/**
	 * Enter your email here
	 */
	//$email = 'zubzzz@hotmail.com';

	/**
	 * Language strings
	 */
	$strings = array(
		'default_subject' => 'Message on your website',
		'default_name'    => 'Anonymous',
		'error_message'   => '<strong>Error:</strong> %s cannot be left blank', // %s is the error name
		'capture_failure'   => 'Your details have not been captured. Re-enter them or proceed to the evaluation if you wish to stay anonymous',
		'capture_success'   => 'Thank you! Begin by clicking on a link below.',
		'email_error'     => 'There was a problem sending your email. Please try again'
	);

	/**
	 * Required fields
	 * We'll check and see if any of the required fields are empty.
	 */
	/*$required = array(
		//'name'    => 'Name',
		//'subject' => 'Subject',
		'email'   => 'Email',
		'message' => 'Message'
	);

	// Declare our $errors variable we will be using later to store any errors.
	$errors = array();
*/
	/**
	 * Get form values and sanitize them
	 */
	 
	 if(!($_POST['name']=="")){
	$name    = jayj_html5_sanitize_string( $_POST['name'] );
	$name  = str_replace(",",";",$name );
	 }
	
	else{
	$name = "Anonymous name";
	}
	
	if (!($_POST['email']=="")){
	$email    = jayj_html5_sanitize_string( $_POST['email']);
	$email  = str_replace(",",";",$email );
	}
	
	else{
	$email = "No email provided";
	}
	
	$which="";
	
	if (empty($_POST['whichFOs'])){
	$whichfos = "No foundational ontologies selected ";
	}
	
	
	else{
    $whichfos= $which.implode(" and ", $_POST['whichFOs']);
	}
	
	if (!($_POST['otherFOs']=="")){
	$otherfos = jayj_html5_sanitize_string( $_POST['otherFOs'] );
	$otherfos  = str_replace(",",";",$otherfos );
       $otherfos= str_replace(array("\r\n", "\r", "\n"), " newline ", $otherfos);
	}
	
	else{
	$otherfos = "No other foundational ontologies";
	}
	
	$familiaritylevel = jayj_html5_sanitize_string( $_POST['familiarityLevel'] );
	$familiaritylevel  = str_replace(",",";",$familiaritylevel );
	
		
 $_SESSION['participantName'] = $name;
 $_SESSION['participantEmail']= $email;
 $_SESSION['participantWhichFOs'] = $whichfos;
 $_SESSION['participantOtherFOs'] = $otherfos;
 $_SESSION['participantFamLev'] = $familiaritylevel;
 

 
function jayj_html5_sanitize_string( $string ) {
	return stripslashes( filter_var( $string, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES ) );
}
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
            <li class="current"><a href="evaluation.html">Evaluate ROMULUS</a></li> <!-- Close first evaluation li -->
        
		
  <li><a href="contact.html">Contact</a></li>
	  
      </ul>
            
	</nav> <!-- #main-navigation -->

<div id="content" role="main" class="span7">

	<article class="post hentry">

		<header class="entry-header">
			<h1 class="entry-title">
				<a href="#" title="Post Heading" rel="bookmark">Evaluating ROMULUS</a>
			</h1>
		</header> <!-- .entry-header -->

		<div class="entry-content">
        
	<p class="alert alert-success">Thank you. Please click on a link below to begin.</p>
    
One of the ways in which we evaluate the functionality of ROMULUS is with a web-based survey. Participants are encouraged to be honest, and answer as descriptively as possible. To assist with this part of the evaluation, click on the following link:<br><b><a href ="evaluationPart1.html">Part 1: Evaluating the functionality of ROMULUS's features</a></ul></b> <br><br>



Participants may evaluate the alignments that were created for the process of foundational ontology mediation. To assist with this part of the evaluation, click on the following link:<br><b><a href = "evaluationPart2.html">Part 2: Evaluating ontological alignments</a></ul></b>

<!--<li>Foundational ontology alignments are identified and available in the repository. Below is a complete list of alignments found in the repository.</li>
<ol>
<b>Alignment 1:</b>
<li>How well do you agree with this alignment?</li>
<input type="radio" name="alignment" value="completelyAgree">  Completely agree <br>
<input type="radio" name="alignment" value="partlyAgree"> Partly agree <br>
<input type="radio" name="alignment" value="disgree"> Disagree <br>
<input type="radio" name="alignment" value="dontKnow"> I don't know<br>
<li>If applicable, please motivate your choice.</li>
<textarea rows="2" cols="100">  </textarea>
</ol>

<li> Are there any missing alignments? Please provide them here.</li>
  <textarea rows="5" cols="100">  </textarea>


</ol>


</form>-->

		  
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
