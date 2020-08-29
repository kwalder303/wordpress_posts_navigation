=== Plugin Name ===
Requires at least: 3.0.1
Tested up to: 5.5
Stable tag: 4.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a customizable shortcode [wp_next_post] which can be placed anywhere in a single post.

Add text to you button like this:
.tof-next-post-button::before{
	content: "Next";
}

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload folder `wp-posts-nav` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add shortcode [wp_next_post] to your post pages.
4. Add this style block from WordPress navigation > Apperance > Customize > Additional CSS:
.tof-next-post-button::before{
	content: "Next";
}