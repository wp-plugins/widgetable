=== Plugin Name ===
Contributors: halgatewood
Donate link: http://halgatewood.com/widgetable/
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
1. Dynamically add select boxes with a plus sign on the edit page.

Want to join the development contact me @halgatewood.



== Installation ==

1. Add plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php get_widgetables(); ?>` in your templates
1. Go to `Settings->Widgetable` and choose how many widget spots you want to show
1. Create a few widgets in the 'Widgets' area of your admin navigation
1. Go to a page or post and select which widgets to show


== Frequently Asked Questions ==

= I don't see the widgets on my website, what gives? =

Make sure you have added `<?php get_widgetables(); ?>` in the sidebar (or wherever you want them to display).

It might be smart to add if `function_exists('get_widgetables')` around your call.

= How do I change the number of widget spots? =

Go to Settings -> Widgetable and choose how many widget spots you want to show

= How do I hide the widget title? =
When adding your widget you can set a custom field of 'hide_title' to true or 1

= How can I changed the widget template? =

This plugin is only two files. widgetable.php is all the logic and template.php is used when we loop the widgets. You can make changes in template.php. If you make changes it would be smart to save a copy of this file before updating.


== Screenshots ==

1. Meta box on the post and pages edit page.
2. Widgets are custom post type and use standard WordPress functionality
3. Add shortcodes to your widget content area for even more widget options. Here we grab certain testimonials based on type.
4. Widgets displayed on the frontend. Including a MailChimp newsletter form.

== Changelog ==

= 1.0 =
* Initial load of the plugin.

