<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project Incubator";
	$pageKeywords	= "Eclipse, Platform, JDT, PDE, Equinox, Incubator";
	$pageAuthor		= "Eclipse Project Incubator team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>About the Eclipse Project Incubator</h3>
			<p>The Eclipse Project Incubator subproject gives the community around the Eclipse Project 
			a forum and set of resources for innovation and investigation of new and alternative ideas.  The
			project is essentially an umbrella for the incubation work associated with the main Eclipse sub-projects.
			</p>
			<p>
The Incubator is broken down into components,
with a component for each of the other Eclipse Project subprojects that 
are doing incubation work. The mailing lists and newsgroups 
of the associated Eclipse Project subproject are used for discussion of
Incubator related issues. Commit rights are managed on a per subproject
basis. 
			</p>
	      <table width="100%" border="0">
	        <tr> 
	          <td width="20%" valign="top"><b>Name</b></td>
	          <td width="82%"><b>Description</b></td>
	        </tr>
	        <tr>
	          <td width="20%" valign="top"><a href="http://www.eclipse.org/equinox/incubator/">Equinox</a></td>
	          <td width="82%">Equinox Incubator component</td>
	        </tr>
	        <tr> 
	          <td width="20%" valign="top"><a href="http://www.eclipse.org/platform/incubator">Platform</a></td>
	          <td width="82%">Platform Incubator component</td>
	        </tr>
	        <tr> 
	          <td width="20%" valign="top"><a href="http://www.eclipse.org/pde/incubator/">PDE</a></td>
	          <td width="82%">PDE Incubator component</td>
	        </tr>
	      </table>
		</div>
		<div class="homeitem3col">
			<h3>Downloads</h3>
			<p>The downloads for the incubator are associated with the various components 
			and their workareas.  The <a href="downloads.php">master downloads page</a>
			 that links to the downloads page for each of the components and thus the downloads for their work areas.
			 </p>
		</div>
	</div>

<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center">
      <a href="/projects/what-is-incubation.php"><img 
        align="center" src="/images/egg-incubation.png" 
        border="0" alt="Incubation" /></a>
   </div>
 </div>
</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>