=== Plugin Name ===
Contributors: halgatewood
Donate link: http://example.com/
Tags: widgets, sidebar
Requires at least: 3
Tested up to: 3.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Widgetable allows you to specify exactly which widgets you want on a per page/post basis.

== Description ==

It creates a custom post type of Widget and adds a meta box with some select boxes to the edit page. 
A setting in ‘Settings -> Widgetable’ allows you to specify how many select boxes to show.

Still needs to be developed:
1. One catch is that you can only select the custom widgets and not both custom and built-in WordPress widgets.
2. Dynamically add select boxes with a plus sign on the edit page.

Want to join the development contact me @halgatewood.



== Installation ==

1. Add plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php get_widgetables(); ?>` in your templates
1. Go to `Settings->Widgetable` and choose how many widget spots you want to show
1. Create a few widgets in the 'Widgets' area of your admin navigation
1. Go to a page or post and select which widgets to show


== Frequently Asked Questions ==

= How do I change the number of widget spots? =

Go to Settings->Widgetable and choose how many widget spots you want to show


== Screenshots ==

1. Meta box on the post and pages edit page.

== Changelog ==

= 1.0 =
* Initial load of the plugin.
