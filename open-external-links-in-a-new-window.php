<?php
/*
Plugin Name: Open external links in a new window
Plugin URI: http://wordpress.org/extend/plugins/open-external-links-in-a-new-window/
Description: Opens all external links in a new window. XHTML Strict compliant and search engine optimized (SEO).
Author: Kristian Risager Larsen
Version: 1.1.1
Author URI: http://kezze.dk
*/

add_action('wp_head', 'external_links_in_new_windows');

function external_links_in_new_windows()
{
  echo "\n\n<!-- External links open in a new window. Plugin by Kristian Risager Larsen, http://kezze.dk . Download it at http://wordpress.org/extend/plugins/open-external-links-in-a-new-window/ -->\n";

  $blogdomain = parse_url(get_option('home'));  
  echo "<script type=\"text/javascript\">//<![CDATA[";
  echo "
	function makeNewWindows() {
		if (!document.links) {
			document.links = document.getElementsByTagName('a');
		}

		for (var t=0; t<document.links.length; t++) {
			var all_links = document.links[t];
			if (all_links.href.search(/^http/) != -1) { // Catches both http and https
		  	  if (all_links.href.search('/".$blogdomain['host']."/') == -1 && document.links[t].hasAttribute('onClick') == false) {
		    	document.links[t].setAttribute('onClick', 'javascript:window.open(\\''+all_links.href+'\\'); return false;');
		    	document.links[t].removeAttribute('target');
		    }
		  }
		}
	}
	
	function addLoadEvent2(func)
	{	
		var oldonload = window.onload;
		if (typeof window.onload != 'function'){
			window.onload = func;
		} else {
			window.onload = function(){
				oldonload();
				func();
			}
		}
	}

	addLoadEvent2(makeNewWindows);
	";

  echo "//]]></script>\n\n";
}
?>
