CodePen Quick Link Embed WordPress Plugin
==============================

----------

**Version 1.0.0**

This plugin creates a WP embed handler for CodePen embeds using the wp embed register handler function. Embed code for pens on CodePen are generated automatically in posts when the individual pen url is pasted in the WordPress editor. The wp embed register handler function uses a regular expression to pull data from the url so I created an expression to grab the username and pen id slug hash from any individual CodePen pen link in order to register the wp embed handler. This is the very early version of this plugin. I will be building additional features and options to set default height, tab, and theme.

The WP embed handler uses the standard CodePen embed code with one exception. The name string that is included in standard embed code is not in the html output of this plugin becuase that data is not in the url. In this version of the plugin the link to the specific pen and the CodePen homepage link are contained in the no Javascript fallback text in the embed code but the name of the pen is not.  

How to Install
--------------
* Unzip the downloaded Zip File
* Upload the **codepen-quick-link-embed** directory from this repo to your WordPress plugins directory. EX: /wp-content/plugins/
* Activate the plugin in the Admin Panel
* Start pasting the urls for your favorite pens on CodePen into your posts.
