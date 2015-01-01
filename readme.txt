=== Plugin Name ===
Contributors: Ramoonus
Donate link: http://www.ramoonus.nl/donate/
Tags: google maps, jquery, javascript, googlemaps, gmap, gmap3, maps, adopt-me, google
Requires at least: 3.9
Tested up to: 4.1
Stable tag: 6.0.0

jQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)
== Description ==
jQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)

For more information visit http://gmap3.net/

Javascript by Jean-Baptiste DEMONTE.

== Installation ==
1. Upload `gmap3/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

Its recommended to flush the cache after upgrading.

== Frequently Asked Questions == 
None at this moment.

== Upgrade Notice == 
= 4.0 =
Updated the javascript to version 4.0

== Screenshots ==
Not relevant.

== Changelog ==
= 6.0.0 =
* Updated the Javascript library to version 6.0.0

= 4.1 =
* Updated the Javascript library to version 4.1
* Readme update
* Code optimalisation

= 4.0 =
* Updated the javascript to version 4.0
* updated : clusters : options can now be defined (allow to change pane, ...)  
* updated : clustering function now adds 2 overlays : the image and the shadow - it allows to get the mouse events even if the pane is changed  
* new : add getDistance (use DistanceMatrixService)  
* new : add classes into default setting in order to allow to redefine the used classes into gmap3  
* new : add a repost on OVER_QUERY_LIMIT on address resolution

= 3.4 = 
* Initial version
* Based on gmap3 version 3.4