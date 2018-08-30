=== UCF Map Points ===
Contributors: ucfwebcom
Requires at least: 4.9.7
Tested up to: 4.9.7
Stable tag: 0.0.0
Requires PHP: 5.4
License: GPLv3 or later
License URI: http://www.gnu.org/copyleft/gpl-3.0.html

Provides a custom post type for describing points of interest on a Google Map as well as providing description fields for marker info boxes.


== Description ==

Provides a custom post type for describing points of interest on a Google Map as well as providing description fields for marker info boxes.

== Installation Requirements ==
* [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)


== Documentation ==

Head over to the [UCF Map Points wiki](https://github.com/UCF/UCF-Map-Points/wiki) for detailed information about this plugin, installation instructions, and more.


== Changelog ==

= 1.0.0 =
* Initial release


== Upgrade Notice ==

n/a


== Development ==

Note that compiled, minified css and js files are included within the repo.  Changes to these files should be tracked via git (so that users installing the plugin using traditional installation methods will have a working plugin out-of-the-box.)

[Enabling debug mode](https://codex.wordpress.org/Debugging_in_WordPress) in your `wp-config.php` file is recommended during development to help catch warnings and bugs.

= Requirements =
* node
* gulp-cli

= Instructions =
1. Clone the UCF-Map-Points repo into your local development environment, within your WordPress installation's `plugins/` directory: `git clone https://github.com/UCF/UCF-Map-Points.git`
2. `cd` into the new UCF-Map-Points directory, and run `npm install` to install required packages for development into `node_modules/` within the repo
3. Optional: If you'd like to enable [BrowserSync](https://browsersync.io) for local development, or make other changes to this project's default gulp configuration, copy `gulp-config.template.json`, make any desired changes, and save as `gulp-config.json`.

    To enable BrowserSync, set `sync` to `true` and assign `syncTarget` the base URL of a site on your local WordPress instance that will use this plugin, such as `http://localhost/wordpress/my-site/`.  Your `syncTarget` value will vary depending on your local host setup.

    The full list of modifiable config values can be viewed in `gulpfile.js` (see `config` variable).
3. Run `gulp default` to process front-end assets.
4. If you haven't already done so, create a new WordPress site on your development environment to test this plugin against, and install and activate the required plugins noted above, under "Installation Requirements".
5. Activate this plugin on your development WordPress site.
6. Configure plugin settings from the WordPress admin under "UCF Map Points".
7. Run `gulp watch` to continuously watch changes to scss and js files. If you enabled BrowserSync in `gulp-config.json`, it will also reload your browser when plugin files change.

= Other Notes =
* This plugin's README.md file is automatically generated. Please only make modifications to the README.txt file, and make sure the `gulp readme` command has been run before committing README changes.  See the [contributing guidelines](https://github.com/UCF/UCF-Map-Points/blob/master/CONTRIBUTING.md) for more information.


== Contributing ==

Want to submit a bug report or feature request?  Check out our [contributing guidelines](https://github.com/UCF/UCF-Map-Points/blob/master/CONTRIBUTING.md) for more information.  We'd love to hear from you!
