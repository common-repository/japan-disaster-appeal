<?php
/*
Plugin Name: Japan Disaster Appeal
Plugin URI: http://www.thatwebguyblog.com/post/japan_disaster_appeal_awareness_plugin_for_wordpress
Description: Adds a badge to the upper left of all pages prompting people to donate to the Japan disaster.
Author: Michael Ott
Version: 0.3
Author URI: http://thatwebguyblog.com
*/

// Create action and function for <head> output
add_action('wp_head', 'j_appeal');
function j_appeal() { 

$j_content_head = '
<link rel="stylesheet" href="' . get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/css/j_appeal.css" type="text/css" media="screen" />
'; 

  echo $j_content_head;
  print "\n";
  
}

// Create action and function for wpfooter output
add_action('wp_footer', 'j_foot');
function j_foot() { 

$content_footer = '
	
	<!--/ Start the Japan Disaster Appeal /-->
    <ul id="japan_appeal">
		<li>
			<ul>
				<li><img src="' . get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/01.jpg" id="j_banner" alt="Japan Disaster Appeal" width="70" height="70" /></li>
				<li><strong>Make a donation through:</strong></li>
				<li><a href="https://trans.worldvision.com.au/appeals/japandisaster/donate.aspx">World Vision</a></li>
				<li><a href="http://hands.org/donate/">All Hands Volunteers</a></li>
				<li><a href="https://www.redcross.org.au/Donations/RegularGiving/RegularGivingDonations.asp">Red Cross</a></li>
			</ul>
		</li>
    </ul>
	
	<!--/ I would usually do this with jQuery but opted not to just in case your sites does not have it /-->
	<script type="text/javascript">
	var images = new Array(\'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/01.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/02.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/03.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/04.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/05.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/06.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/07.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/08.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/09.jpg\', \'' 
							. get_option('home') . "/" . $siteurl . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/images/10.jpg\');
	var l = images.length;
	var random_no = Math.floor(l*Math.random());
	document.getElementById("j_banner").src = images[random_no];
	</script>
	<!--/ End the Japan Disaster Appeal /-->
'; 

  echo $content_footer;
  print "\n";
}
?>
