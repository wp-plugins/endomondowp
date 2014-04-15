=== EndomondoWP ===
Contributors: Odyno
Tags: Endomondo, Sport, Tracker, embedding, GPS, Fitness, Wellness
Donate link: http://www.staniscia.net/donate
Requires at least: 3.4.2
Tested up to: 3.8.2
Stable tag: 0.0.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed Endomondo workouts on Wordpress Blog

== Description ==

[Endomondo](http://www.endomondo.com/) is a sports community based on free real-time GPS tracking of running, cycling, etc.  Bring your mobile on the track and get a complete training log. You can show your workout on Wordpress with  [Endomondo WP]( http://www.staniscia.net/endomondowp/ ).
Download the plugin from WordPress Site, install it and add EndomondoWP on page/post
It’s easy, add the shortcode *[ endomondowp user=“XXXX” ]* and swap *“XXXX”* with your Endomondo ID. You can find your id on URL of your endomondo profile [http://www.endomondo.com/profile/XXXX]()

[youtube https://www.youtube.com/watch?v=kv5JaaccCk8]

= DEMO and INFO =
You can find more [info](http://www.staniscia.net/endomondowp) and [demo of plugin](http://www.staniscia.net/workout)  on plugin homesite.


= It's opened to extensions =
You can use it on your plugin or into "Page Template" (see [Page Templates « WordPress Codex ](http://codex.wordpress.org/Page_Templates) ) with the function do_endomondowp(...) or with 4 custom actions!!

= Configure it =

If you want to control the view, you can add these attributes on shortcode

* user: The endomondo User ID 
* type: The type of view (default is 'last-workout')
* id: unique id of element (default is random number)
* width: the width of page (default is 680)
* height: the height of page (default is 600)


= For designers =
If you want to customize the style of view, you can add css and use the hook!!

= For developer =

You can use the EndomondoWP on your plugin! Otherwise you can use it on your current theme. In according to Codex, you can modify the current theme with ["Child Themes « WordPress Codex"](http://codex.wordpress.org/Child_Themes),
with a new ["Page Templates « WordPress Codex"](http://codex.wordpress.org/Page_Templates) or simply modify directly the php file of theme. In any of this case you can add a invocation of function *do_endomondowp(...)* and you will have same action of shortcode.
Also the parameters of function are the same of shortcode.
Otherwise on your plugin or on your *function.php* you can add one hook to one of 4 action and you can run your custom code.
The allowed action are show below and every action have the same parameter of *do_endomondowp(...)* function:

* pre_ewp_show action. It's called before *do_endomondowp(...)* function
* post_ewp_show action. It's called after *do_endomondowp(...)* function
* pre_ewp_shortcode action. It's called before invocation of all shortcode [endomondowp ...]
* post_ewp_shortcode action. It's called after invocation of all shortcode [endomondowp ...]



== Installation ==
EndomondoWP can be installed using integrated WordPress plugin installer or manually.

= Integrated WordPress plugin installer method =

* Go to Plugins > Add New.
* Under Search, type in ’EndomondoWP’.
* Click Install Now to install the WordPress Plugin.
* A popup window will ask you to confirm your wish to install the Plugin.
* If this is the first time you've installed a WordPress Plugin, enter the FTP login credential information. If you've installed a Plugin before, it will still have the login information.
* Click Proceed to continue with the installation. The resulting installation screen will list the installation as successful or note any problems during the install.
* If successful, click Activate Plugin to activate it, or Return to Plugin Installer for further actions.

= Manual method =

* Upload ’EndomondoWp ’ folder from EndomondoWp.zip file downloaded from EndomondoWp WordPress plugin directory page to the ’/wp-content/plugins/’ directory.
* Activate ’EndomondoWp’ plugin through the ’Plugins’ menu in WordPress.


== Screenshots ==
1. Screenshot with all views
2. Screenshot Shortcode *type="last-workout"*
3. Screenshot Shortcode *type="workout-list"*
4. Screenshot Shortcode *type="event"*
5. Screenshot Shortcode *type="team"*




== Credits ==


Copyright 2012  Alessandro Staniscia  (email : alessandro@staniscia.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA


== Changelog ==

= ToDo =
* I18n

= 0.0.2 =
* Add view event
* Add view team
* Add view challenge
* Admin Changed with more info
* Bugfix and removed broken link

= 0.0.1 =
* Review Baseline

= 0.0.0 =
* Baseline to Release

 == Upgrade Notice ==
None.
