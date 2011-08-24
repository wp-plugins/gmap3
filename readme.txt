=== Plugin Name ===
Contributors: Ramoonus
Donate link: http://www.ramoonus.nl
Tags: google maps, jquery, javascript, googlemaps, gmap, gmap3, maps
Requires at least: 3.0.0
Tested up to: 3.3.0
Stable tag: 4.0

A JQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)
== Description ==
A JQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)

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
= 4.0 =
* Updated the javascript to version 4.0

Javascript changelog:
* updated : clusters : options can now be defined (allow to change pane, ...)  
* updated : clustering function now adds 2 overlays : the image and the shadow - it allows to get the mouse events even if the pane is changed  
* new : add getDistance (use DistanceMatrixService)  
* new : add classes into default setting in order to allow to redefine the used classes into gmap3  
* new : add a repost on OVER_QUERY_LIMIT on address resolution

= 3.4 = 
* Initial version
* Based on gmap3 version 3.4