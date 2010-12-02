=== Open external links in a new window ===
Contributors: kezze, Zap
Donate link: https://www.paypal.com/xclick/business=paypal%40kezze.dk&item_name=Donation&no_note=1&tax=0&currency_code=EUR
Tags: links, external links, target blank, target new, window.open, new window, blank window, new tab, blank tab, tabs, SEO, xhtml strict, javascript
Requires at least: 2.0
Tested up to: 3.0
Stable tag: 1.0.1

Opens all external links in a new window. XHTML Strict compliant and search engine optimized (SEO).

== Description ==
Opens all external links (starting with `http://` or `https://`) in a separate browser window.
The plugin produces XHTML Strict compliant code and is also search engine optimized (SEO).

This is done using the `javascript:window.open()`-function.

Most other plugins perform a hack by altering the `target` parameter (i.e. `<a href="http://somewhere.example" target="_blank">`). That method is not XHTML Strict compliant.
This plugin handles the links client-side, which lets search engines follow the links properly. Also, if a browser does not support JavaScript, the plugin is simply inactive, and does not result in any errors. 

Based on the source of [Zap_NewWindow](http://www.zappelfillip.de/2005-12-05/zap_newwindow/ "Another Wordpress plugin") by [Tom K&ouml;hler](http://www.zappelfillip.de/ "His website is mostly in German"). Thanks a lot!

== Installation ==
1. Copy the plugin to /wp-content/plugins/
1. Activate this plugin.

== Changelog ==

= 1.0.1 =
Fixed: Removes target attribute from links instead of setting the attribute to null. (Thanks to [crashnet](http://wordpress.org/support/topic/plugin-open-external-links-in-a-new-window-target-attribute-left-empty?replies=2))

= 1.0 =
Fixed: Credits to Tom K&ouml;hler (Charset)
Fixed: Links

= 0.9 =
Initial release

== Upgrade Notice ==

= 1.0.1 =
Minor bugfix.

= 1.0 =
Ready for production.

= 0.9 =
Initial release