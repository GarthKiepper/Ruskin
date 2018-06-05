<?php require_once('header.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link href="<?php echo r_build_url('witness_styles.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="icon"
	type="image/png"
	href="../images/ruskin_icon.png">
<title>Now Showcasing: "Calais" [poem] (MS IA g1)</title>
<script src="https://code.jquery.com/jquery-1.6.js"></script>
<script>
  window.BASE_URL = "<?php echo r_get_base(); ?>";
</script>
</head>
<body>
<div id="main">
  <div id="navbar-tab">
	<img id="toggle-navbar" src="<?php echo r_build_url('images/navbar/tab_ro.jpg'); ?>" alt="Show/Hide NavBar Button" title="Show/Hide the Navbar" width="20" height="10" />
  </div>
  <div id="navbar">
	<img id="first_button" src="<?php echo r_build_url('images/navbar/first.jpg'); ?>" alt="First Facsimile Button" title="Go to the First Facsimile" width="26" height="20" />
	<div id="navbar-navigation-1" class="navbar-navigation">
	<img id="previous-1" class="previous_button" src="<?php echo r_build_url('images/navbar/previous.jpg'); ?>" alt="Previous Facsmilie Button" title="Go to the Previous Facsimile" width="26" height="20"/>
  <div class="navbar-location" title="Select a Facsimile">f1</div>
  <img id="next-1" class="next_button" src="<?php echo r_build_url('images/navbar/next.jpg'); ?>" alt="Next Facsimile Button" title="Go to the Next Facsimile" width="26" height="20"/>
	</div>
<img id="last_button" src="<?php echo r_build_url('images/navbar/last.jpg'); ?>" alt="Last Facsimile Button" title="Go to the Last Facsimile" width="26" height="20" />
<img id="toggle-view" src="<?php echo r_build_url('images/navbar/facsimile-transcription_ro.jpg'); ?>" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" />
<img id="toggle-magnify" src="<?php echo r_build_url('images/navbar/magnify_ro.jpg'); ?>" alt="Magnification Button" title="Increase the Magnification of the Facsimile" width="26" height="20" />
<img id="toggle-enlarge" src="<?php echo r_build_url('images/navbar/enlarge_ro.jpg'); ?>" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" />
<img id="toggle-transcription" src="<?php echo r_build_url('images/navbar/text-composite.jpg'); ?>" alt="Transcription Button" title="Toggle Transcriptions" width="26" height="20" />
<img id="toggle-hand" src="<?php echo r_build_url('images/navbar/scribe_ro.jpg'); ?>" alt="Hands Button" title="Toggle Hands On/Off" width="26" height="20" />
<img id="toggle-info" src="<?php echo r_build_url('images/navbar/info.jpg'); ?>" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="float:right" />
<img id="toggle-info_ro" src="<?php echo r_build_url('images/navbar/info_ro.jpg'); ?>" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="display:none; float:right" />
	<div id="navbar-facsimile" title="Select a Facsimile">
    	<span class="navbar-facsimile-text">Facsimile:
            <br/>
            <br/><div id="navbar-facsimile-1" class="shortcut" style="color:#09C">f1</div>
            <br/>
			<br/>
            <br/>
        </span>
	</div>
    <div id="navbar-facs" style="display:none">
    	<img id="navbar-facs_preview" src="<?php echo " " or r_build_url('images/_previews_wynkyn/blank.jpg'); ?>" width="100%" />
    </div>
	<div id="navbar-magnify" title="Increase the Magnification of the Facsimile">
		<span class="navbar-magnify-text">Facsimile Magnification:
            <span id="vss-magnify" style="display:none">
            	<br/>
            	<br/><span id="x0" class="navbar-magnify-text">Default</span>
            </span>
            <br/>
            <br/><span id="x1" class="navbar-magnify-text" style="color:#09C">100%</span>
            <br/>
            <br/><span id="x2" class="navbar-magnify-text">200%</span>
            <br/>
            <br/><span id="x4" class="navbar-magnify-text">400%</span>
            <br/>
            <br/><span id="x8" class="navbar-magnify-text">800%</span>
            <br/>
            <br/>
		</span>
	</div>
    <div id="navbar-enlarge" title="Increase the Point Size of the Transcription">
		<span class="navbar-enlarge-text">Transcription Point Size:
            <br/>
            <br/><span id="12pt" class="navbar-enlarge-text" style="color:#09C">12pt</span>
            <br/>
            <br/><span id="16pt" class="navbar-enlarge-text">16pt</span>
            <br/>
            <br/><span id="20pt" class="navbar-enlarge-text">20pt</span>
            <br/>
            <br/><span id="24pt" class="navbar-enlarge-text">24pt</span>
            <br/>
            <br/>
        </span>
	</div>
<div id="navbar-hand" title="Toggle Hands On/Off">
		<span class="navbar-hand-text">
        	<span style="color:#FFF">Hands:</span>
            <br/>
            <br/><span id="toggle-X" class="navbar-hand-text" style="color:#CCC"><span style="background-color:#CCC">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;To Come</span>
            <br/>
            <br/>
        </span>
	</div>
  </div>
  <div id="navbar-info">
  		<span class="navbar-info-text">
            <div style="color:#999; font-size:48pt; font-weight:normal; left:106px; position:absolute; top:19px">2</div>
            <p class="heading_1">Showcase</p>
            <br/>
            <hr/>
            <span class="heading_1">Using</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Everything in Showcase starts with the Navbar, the svelte toolbar at the top of this browser window. From left to right, the controls in the Navbar perform the following functions (when active, these controls appear <span style="color:#09F">blue</span>):</p>
            <br/>
            <div style="text-align:center"><img src="<?php echo r_build_url('images/navbar/navbar.jpg'); ?>" alt="Image of the Navbar" width="600" height="44" /></div>
            <br/>
            <p><span class="heading_3">1&#x2012;Show/Hide the Navbar</span><br/>Clicking or tapping this control reduces the Navbar to a small tab in the top left corner of the browser window. Clicking or tapping this tab restores the Navbar.</p>
            <br/>
            <p><span class="heading_3">2&#x2012;Go to the First Facsimile</span><br/>Clicking or tapping this control takes the user to the first facimile of the witness.</p>
            <br/>
            <p><span class="heading_3">3&#x2012;Go to the Previous Facsimile</span><br/>Clicking or tapping this control takes the user one facimile backward in the witness.</p>
            <br/>
            <p><span class="heading_3">4&#x2012;Select a Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual facsmiles may be previewed and "jumped" to directly. The control also displays the ID of the current facsmile.</p>
            <br/>
            <p><span class="heading_3">5&#x2012;Go to the Next Facsimile</span><br/>Clicking or tapping this control takes the user one facsimile forward in the witness.</p>
            <br/>
            <p><span class="heading_3">6&#x2012;Go to the Last Facsimile</span><br/>Clicking or tapping this control takes the user to the last facsimile of the witness.</p>
            <br/>
            <p><span class="heading_3">7&#x2012;Toggle Views</span><br/>Clicking or tapping this control enables the following views: Facsimile-Transcription (default), Facsimile-only, and Transcription-only.</p>
            <br/>
            <p><span class="heading_3">8&#x2012;Increase the Magnification of the Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which the magnification level of the facsimile can be adjusted between 100% (default) and 800%.</p>
            <br/>
            <p><span class="heading_3">9&#x2012;Increase the Point Size of the Transcription</span><br/>Clicking or tapping this control opens a drop-down menu, from which the the font size of the transcription can be adjusted between 12 pt. (default) and 24 pt.</p>
            <br/>
			<p><span class="heading_3">10&#x2012;Toggle Transcriptions</span><br/>Clicking or tapping this control enables the transcription to be viewed as: Original Text, Revised Text, or Composite Text (default).</p>
			<br/>
            <p><span class="heading_3">10&#x2012;Toggle Hands On/Off</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual hands may be toggled on (default) or off.</p>
			<br/>
            <p><span class="heading_3">13&#x2012;Learn about Showcase</span><br/>Clicking or tapping this control shows or hides this window.</p>
            <br/>
            <hr/>
            <span class="heading_1">Copyright Notice</span> <span class="heading_2">&#x0026; Conditions of Use</span>
            <hr/>
            <p>This edition of Showcase was created exclusively for <i>The Early Ruskin Manuscripts, 1826&#x2013;1842</i>, a Digital Humanities project of Southeastern Louisiana University's Department of English. Showcase remains the intellectual property of and is &#x00A9; by its author, <a href="mailto:charles.borchers@selu.edu">Charles W. Borchers, IV</a>, and may not be modified or copied without his express permission. Your use of this software constitutes acknowledgement of this copyright and of the software's conditions of use.</p>
            <!--<p>All images from Cambridge University Library Sel.5.27, "Here begynneth a shorte treatyse of contemplacyon taught by our lorde Ihesu cryste / or taken out of the boke of Margerie kempe of lynn." are &#x00A9; Cambridge University Library.</p>-->
            <p>Andron Scriptor Web 3.1, the webfont developed for and used by Showcase, is a special edition of <a href="http://www.signographie.de/cms/front_content.php?idart=69&changelang=2" target="_blank">Andron&#x2122;</a>, financed by the Norwegian Research Council and the University of Bergen. <a href="http://www.mufi.info/fonts/#Andron" target="_blank">Andron Scriptor Web</a> exists to support scholarly editing in medieval philological studies and is provided free of charge by its creator and provider, Andreas St&#x00F6;tzner and the <a href="http://www.mufi.info" target="_blank">Medieval Unicode Font Initiative (MUFI)</a>. Both must be credited in any work which utilizes the font. Any alteration of the font, including, but not limited to, any alteration of its content, glyphs, or name, is a violation of international copyright law. If enhancements or improvements to the font are desired, these should be forwarded to MUFI for consideration in future releases of the font. Andron&#x2122; is a trademark of Andreas St&#x00F6;tzner; its design is &#x00A9; by Andreas St&#x00F6;tzner all rights reserved.</p>
		</span>
	</div>
  <div id="content">