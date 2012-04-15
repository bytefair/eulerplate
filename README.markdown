# Eulerplate, a WordPress theme based on HTML5 Boilerplate

Eulerplate is a set of updates and improvements to zencoder’s HTML5 Boilerplate Theme that can be found on Wordpress.org. It is a theme meant for people who are learning web design and development and want something clean and easy to start from. Alternately, it's great for people who are making simple, static sites that don't need the advanced blogging features of WordPress and/or control freaks who like to style every last tag by hand.

This theme is built on the [HTML5 Boilerplate](http://html5boilerplate.com/) by Paul Irish and Divya Manian. The sole purpose of this theme is to save developers the time it takes to apply the HTML5 Boilerplate to WordPress. The "HTML5 Boilerplate" name is used with permission from Paul Irish.

## Getting Started

1. Add the eulerplate folder to your wp-content/themes folder.
2. Activate the theme. WP-Admin > Appearance > Themes
3. Add some of the "Root Files" to the root directory of your website (explained below).
4. Uncomment any sections from the PHP files that you want.
5. Add any necessary functions to eulerplate/functions.php.
6. Style away, knowing that you're building on a super solid base with HTML5 awesomeness.

## Why Develop from the HTML5 Boilerplate Folder?

Rather than create a more traditional WordPress theme, I stuck to [zencoder](https://github.com/zencoder/)'s setup of having Boilerplate in a separate directory. There are two major reasons for this.

One, I want to decouple work on the theme from Boilerplate. I might want to add new features and functionality to the base theme and don't want to risk changing anything related to Boilerplate itself. If I leave Boilerplate in a separate directory, it makes it easier to upgrade when a new version comes out.

Two, when I'm styling a page, I usually dump a test post to HTML and then style it locally rather than developing the theme on the server. It is simpler to do this by simply dropping a dump of the generated HTML code for the views I want to style right into the Boilerplate directory of the local copy of my theme. I think this is a good workflow and would like to keep it.

## Submitting Patches and "Why Didn't You Do X Like Y"

Probably because this is a LEARNING tool. I did a few things that aren't optimum for WordPress zealots like calling scripts with enqueue_script() right from the spot they are called from in Boilerplate. Normally, you'd want to call these from functions.php and make a custom loader function. This is fine if you know a lot about WP, but if you don't you have little idea what's happening. I wanted for the most part to keep the files flat and most of the functionality easy to understand. This is not to mean there are not oversights, so if you notice something not done the "WordPress way," please send me a patch or issue on Github. I'll try to fix oversights and at the least I will strongly consider the philosophy behind your changes.

If you have a patch you'd like to submit, please fork the project, make your patches in a new branch and send me a pull request. If it's appropriate, I will add it. I do not have development branches for Eulerplate because the project is so simple. I will merge it right into master.

## Root Files

These files can be found in the html5-boilerplate folder in the theme (eulerplate/html5-boilerplate). Some of the files listed here should be (carefully) moved to the root of your site (same level as the wp-content directory). Read on for specific instructions.

### 404 Page
If you use permalinks (WP-Admin > Settings > Permalinks), then WordPress handles any 404s with the 404.php included in the theme. If you don't use permalinks, then add the 404.html file to the root of your site.

### .htaccess
**Do not copy to the root of your site.** This may overwrite the WordPress htaccess, and break Wordpress. Instead, copy and paste the contents of this file to the .htaccess already at the root of your site, after the existing content. It would be good to make a comment where the Boilerplate content begins, like "# Begin HTML5 Boilerplate". Read htaccess file for more info on what it does.

**This file, being a dotfile, is frequently invisible to your OS**, but you should be able to see it from your FTP client or the command line with `ls -a`. You can also rename it to htaccess without the dot if you’d like it to always be visible.

### crossdomain.xml
If you don't know what this is, you probably don't need it.
www.adobe.com/devnet/flashplayer/articles/cross_domain_policy.html

### robots.txt
Tells all search engines that they can read and index all pages. This is handled by WordPress so you shouldn't need to move this to the root.

## Root Images

These aren't included with the HTML5 Boilerplate, but links to them are, so these were created so that you don't return a 404 when the browser requests them. Better to include these or make your own, than not include any. The can be found in the images folder of the theme (eulerplate/images).

### favicon.ico
The favicon is the icon shown to the left of the URL at the top of your browser window.

### apple-touch-icon.png
On iPhones and iPads you can book mark a web page and have it show up on the home screen as an icon. The apple-touch-icon.png becomes this icon if used. Rounded corners and glossy finish are added by the device.

## Upgrading Eulerplate

You should be able to drop-in a new version of HTML5 Boilerplate when it's upgraded with a few minor edits. The upgrade process is simple, but important. First, you should rename the old eulerplate/html5-boilerplate/style.css to keep from overwriting it. You need to copy the Wordpress required styles out of the old stylesheet and paste them above the author styles in the new Boilerplate styles.css. You should be able to then drop in your user styles in the author section.

Next, if the jQuery or Modernizr libraries have been updated, you need to update the links for Modernizr in eulerplate/header.php and the links in eulerplate/footer.php for jQuery and your included scripting.

## Eulerplate Changes

__v0.1__ - Updated HTML5 boilerplate code to v3 and updated links in theme. Altered the heading levels on zencoder's theme to match the modern HTML5 outline model.

__v0.2__ - Updated all headers and footers to new Boilerplate way of doing things

__v3.0__ - First official release. Lots of bugfixes. Upped major version number to coincide with the HTML5 Boilerplate release number.

__v3.1__ - Bugfixes and documentation

__v3.2__ - Updated Boilerplate to 3.0.2 and removed WordPress CSS from stylesheet

__v3.3__ - Removed Steve's custom versioning function and moved the scripts and styles to the wp_enqueue functions

__v3.4__ - php_language_attributes() replaces the default English language setting in header.php - thanks @ebiansyah1402