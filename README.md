CodePen Quick Link Embed WordPress Plugin
==============================

----------

**Version 1.0.0**

This plugin creates a WP embed handler for CodePen embeds using the wp embed register handler function. Embedded pens from CodePen are generated automatically in posts when the individual pen url is pasted in the WordPress editor. The wp embed register handler function uses a regular expression to pull data from the url so I created an expression to grab the username and pen id slug hash from any individual CodePen pen link in order to register the wp embed handler. This is the very early version of this plugin. I will be building out additional features and options to set default height, default tab and theme.

How to Install
--------------
* Unzip the downloaded Zip File
* Upload the **codepen-quick-link-embed** directory from this repo to your WordPress plugins directory. EX: /wp-content/plugins/
* Activate the plugin in the Admin Panel
* Start pasting the url for your favorite pens on CodePen into your posts.
* The embed handler uses the standard CodePen embed code except the string that is the name of the pen included in standard embed code is not included becuase it is not included in the url. 
* 
