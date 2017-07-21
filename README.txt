=== CC-Syntax-Highlight ===
Contributors: ClearcodeHQ, PiotrPress
Tags: syntax highlight, source code, code, highlight.js, google-code-prettify, clipboard.js, Clearcode, PiotrPress
Requires at least: 4.6.1
Tested up to: 4.6.1
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

This plugin allows you very simply syntax highlight source code in your content using highlight.js or google-code-prettify libraries.

== Description ==

The CC-Syntax-Highlight plugin supports syntax highlighting of Posts, Pages, and any public Custom Post Types.
It uses [highlight.js](https://highlightjs.org/) or [google-code-prettify](https://github.com/google/code-prettify) libraries.
Additionally it can use the [clipboard.js](https://clipboardjs.com/) library to add a button that copies text to the clipboard.
It is delivered with support for shortcode (default [code] - you can change it on the settings page) which automatically converts all special characters to HTML entities.
This plugin is compatible with Multisite WordPress installations.

= How does it work? =

1. Go to the 'Settings > Syntax Highlight' page, select your preferred options and save them.
2. Simply add the source code to your post (or other selected public Custom Post Type) wrapped with:
`&lt;pre&gt;&lt;code&gt;Your source code&lt;/code&gt;&lt;/pre&gt;`
or if you would like to automatically convert all special characters to HTML entities, use shortcode wrapper instead (default [code] - you can change it on the settings page):
`&lt;pre&gt;[code]Your source code[/code]&lt;/pre&gt;`

_Plugin's js scripts and css styles files only load if the source code occurs on displaying page._

== Installation ==

= From your WordPress Dashboard =

1. Go to 'Plugins > Add New'
2. Search for 'CC-Syntax-Highlight'
3. Activate the plugin from the Plugin section on your WordPress Dashboard.

= From WordPress.org =

1. Download 'CC-Syntax-Highlight'.
2. Upload the 'cc-syntax-highlight' directory to your '/wp-content/plugins/' directory using your favorite method (ftp, sftp, scp, etc...)
3. Activate the plugin from the Plugin section in your WordPress Dashboard.

= Once Activated =

1. Visit the 'Settings > Syntax Highlight' page, select your preferred options and save them.

= Multisite =

The plugin can be activated and used for just about any use case.

* Activate at the site level to load the plugin on that site only.
* Activate at the network level for full integration with all sites in your network (this is the most common type of multisite installation).

== Screenshots ==

1. **CC-Syntax-Highlight Settings** - Visit the 'Settings > Syntax Highlight' page, select your preferred options and save them.

== Changelog ==

= 1.1.0 =
*Release date: 05.12.2016*

* Added support for "copy-to-clipboard" feature by using the clipboard.js library.

= 1.0.1 =
*Release date: 01.10.2016*

* Corrected readme.txt file.

= 1.0.0 =
*Release date: 27.09.2016*

* First stable version of the plugin.