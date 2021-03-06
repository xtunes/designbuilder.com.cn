=== WP-Members ===
Contributors: cbutlerjr
Donate link: http://butlerblog.com/wp-members/
Tags: authentication, captcha, community, content, login, password, register, registration, restriction, security, user, users, membership, access, block, permissions, members
Requires at least: 3.1
Tested up to: 3.2.1
Stable tag: 2.6.5

WP-Members&trade; is a free membership management system for WordPress&reg; that restricts content to registered users.

== Description ==

WP-Members&trade; is a plugin to make your WordPress&reg; blog a membership driven site.  Perfect for newsletters, private blogs, premium content sites, and more!  The plugin restricts selected WP content to be viewable by registered site members.  Unlike other registration plugins and WordPress&reg; itself, it puts the registration process inline with your content (and thus your branded theme) instead of the native WP login page.  WP-Members&trade; works "out-of-the-box" with no modifications to your theme, but it is fully scalable for those that want to customize the look and feel, or want to restrict only some content.  It is a great tool for sites offering premium content to subscribers, and is adaptable to a variety of applications.

= Features: =

* Can block posts, pages, both, or none by default
* Can override the default block setting at the individual post/page level
* Login/Registration inline with content rather than the WP login page
* User registration and member information management integrated into your theme
* Sidebar login widget
* Create custom registration fields
* Can set which fields display and which are required
* Notify admin of new user registrations
* Hold new registrations for admin approval
* Turn registration off completely (for admins that want to control registration in some other way)
* Show excerpt on pages/posts for better SEO
* Optional CAPTCHA for registration

By default, WordPress&reg; allows all content to be "open" and viewable by anyone and allows the site owner to restrict specific content if desired by setting a password for the post.  WP-Members&trade; operates with the reverse assumption.  It restricts all content by default but allows the site owner to "unblock" content as desired.  WP-Members&trade; also offers the ability to change the default plugin settings.  For those that simply want to utilize the member management features and possibly restrict some content, the default setting can easily be toggled to block or unblock pages and/or posts by default.  No matter what the default setting, individual posts or pages can be set to be blocked or unblocked at the article level, overriding the default setting.

The plugin adds provides additional custom fields to the registration process to include name, address, phone, and email.  All of the registration process is inline with your theme and content rather than using the WordPress&reg; login page.  This offers you a premium content site with a professional and branded look and feel.  It also provides an opportunity for the user to register without leaving the page to do so - less clicks = more conversions.

There are also some special pages available.  There is a Members Area where registered members can edit their information and change/reset their password.  Although a registration form is included in place of blocked content, there is a registration page available for those that need a specific URL for registrations (such as email marketing or banner ads).  NEW in 2.5, you can now also establish a specific login page as well.


== Installation ==

WP-Members&trade; is designed to run "out-of-the-box" with no modifications to your WP installation necessary.  Please follow the installation instructions below.  We have found that most of the support issues that arise are a result of improper installation or simply not following directions.  

= Basic Install: =

We recommend following the instructions in the [Quick Start Guide](http://butlerblog.com/wp-members/wp-members-quick-start-guide/).  There is also a [Users Guide available](http://butlerblog.com/wp-members/) that covers all of the plugin's features in more depth.

1. Upload the `/wp-members/` directory and its contents to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress&reg;

You are ready to begin using WP-Members&trade;.  Now follow the instructions titled "Locking down your site" below.

(Upgrading from 2.1 or earlier: If you are running a previous version "out-of-the-box," you should be able to upgrade without any problems.  If you did any customization to which registration fields are used and/or required, you can simply set this in the new admin panel to match your current usage.  However, if you have made changes to the code to customize the fields beyond this, i.e. field names or types, you will need to make some changes to the install script to customize the registration fields accordingly.  Also, if you made code changes to the inline registration and login forms, you should download and compare the new code to your customizations before upgrading.)

= Locking down your site: =

* To begin restricting posts, you will need to be using the `<!--more-->` link.  Content above to the "more" split will display on summary pages (home, archive, category) but the user will be required to login to view the entire post. 
* To begin restricting pages, change the plugin default setting for pages to be blocked. The `<!--more-->` link is not necessary in the blocking of pages, but must be used if you have the "show excerpts" setting turned on.
* To protect comments, we recommend setting "Users must be registered and logged in to comment" under Settings > Discussion
* Also on the page Settings > General, we recommend making sure "Anyone can register" is unchecked.  Although not required, this will prevent WP's native registration from colliding with WP-Members&trade;, especially if you are using any of the WP-Members&trade; additional registration fields.
* Under Settings > Reading, we recommend that "For each article in a feed, show" is set to "Summary."  WordPress&reg; installs with full feed settings by default. If you don't change this, your feeds will show full content.


= Additional Settings and Information = 

A full Users Guide is available at the [plugin's homepage](http://butlerblog.com/wp-members).  The guide outlines the installation process, and also documents how to use all of the settings.

* If you want to display the user's login status, and the following function call to your template: `<?php wpmem_login_status(); ?>`
* To add the login box to the sidebar (if desired) you can just drag the WP-Members&trade; widget to your sidebar. If your theme has no widget support, call the function `<?php wpmem_inc_sidebar(); ?>`.
* If you want to have your users be able to edit their login information, add a new page (not a post) and in the body of this page, place the shortcode [wp-members page="members-area"] where you want WP-Members&trade; to display its content.  This page will allow registered members to edit their information or change their password, and will display the registration form for new members.  This page also handles forgotten password reset for users who are not logged in.  (If you are using the default permalinks, i.e. http://yoursite.com/?p=123, then you must be certain this page title is "Members Area". Check Settings > Permalinks to see your settings.)
* If you would like to have a page to direct users for registrations, you can set up a registration page. (A registration page is not required as the the default settings for the plugin offer user registration in place of restricted content.)  Similar to the "members area" page setup, create a new page (not a post) and in the body of the page, put the shortcode [wp-members page="register"] (Just like the members area, if you are using default permalinks, you must title this page "Register".)
* There is also a shortcode to create an optional login page.  Use [wp-members page="login"] for this.	
* CAPTCHA for the registration process is available via reCAPTCHA.  If you use reCAPTCHA, you will need a [valid API key](http://www.google.com/recaptcha).  The CAPTCHA form will not display if you have not entered a valid API key in the WP-Members&trade; settings. (Note: the settings tab for reCAPTCHA will only show if you've turned this option on in the settings tab.)
* There is a Terms of Service checkbox available for the registration process.  This is turned on by default in new installations.  If you don't need it, you can turn it off.  If you use the TOS checkbox, there is a place for you to insert your Terms of Service in the WP-Members&trade; Dialogs and Error Messages.  This text is used to generate a link for the user to read the TOS in a popup.  The TOS content can be HTML; in fact, it is recommended for sizeable TOS documents that you use `<h1>`, `<h2>`, `<p>`, etc.
* In order to display a "forgot password" and "register" link in the login form (and sidebar widget), specify the location of the members area and register pages in the plugin options.



== Frequently Asked Questions ==

The FAQs are maintained at http://butlerblog.com/wp-members/wp-members-faqs/


== Other Notes ==

= Statement regarding the name WP-Members&trade; =

WP-Members&trade; is a trademark of butlerblog.com.

There are a number of commercial vendors offering products called WP-Members&trade; or a derivative thereof.  These products are neither free, nor open source.  The original plugin hosted here has been publicly available since 2006 and in no way associated with any of these vendors.  Tagging your support request in the wordpress.org forums attaches it to this plugin.  If you are seeking support for one of these commercial products, you should seek support from the vendor.  If you paid for it, or you got it from a site other than http://wordpress.org/extend/plugins/wp-members or http://butlerblog.com/ , then it isn't WP-Members&trade;.

An [official statement is available here](http://butlerblog.com/regarding-wp-members).


== Upgrade Notice ==

= 2.6.5 =
A fix release correcting reCAPTCHA issues with IE. See plugin page for more details.

== Screenshots ==

Rather than bloat your plugin download with screenshots, we will be offering screenshots and videos at the plugin's homepage: http://butlerblog.com/wp-members


== Changelog ==

= 2.6.5 =

* Rewrite of the reCAPTCHA script to address IE compatibility issues.
* Expansion of the wptexturize fix in 2.6.4, now wraps all of the login and registration forms.
* Fix for the user profile edit so that the admin can see his own additional fields
* Fix so users can edit additional fields through the user profile page.
* WPMEM_REGURL no longer sent to wpmem_chk_qstr as it is a direct URL.

= 2.6.4 =
Bug fix release with the following changes:

* Fixes the activate user bug, rolling back from wp_update_user to $wpdb->update.
* Added back wpmem_generatePassword (although this is no longer used, a lot of users are still using this in the comments template.
* Added an override in the login form for the wptexturize function so as to remove the <br> tag that WP puts into the generated form.

= 2.6.3 =
This is primarily a code improvement release

* Localized "Clear Form" and "Submit" buttons for translation
* Updated reCAPTCHA noscript (for loading when the browser has js turned off)
* Fixed front-end error messages that did not have stripslashes
* Updated bulk user management to paginate users when displaying all users
* Introduced dropdown support (must be added programmatically at this time)
* Cleaned up unused globals from the registration forms
* Updated the location of the pluggable function file to be outside the plugin folder

= 2.6.2 =
This is a bug fix release with some additional improvements.

Bug fixes

* Fixed checkbox that is set to be checked by default remains checked in the update user settings front end even if the user unchecked it.
* Fixed legacy form password reset bug

Improvements

* Registration fields that are not selected to be displayed on the front end will still display on the admin side and be exported. This provides fields that can be used by the admin only for additional user information.
* Checkbox field can be edited in the Manage Fields panel to be checked by default or not.
* Keep the active tab active when editing various plugin settings.

= 2.6.1 =
Bug fix release

* Corrected the settings link in the WP installed plugins panel.
* Fixed the view menu links for the bulk user management.
* Fixed ignore warning messages on the WP-Members settings.
* Fixed bulk activate users so already activated users would not be inadvertently reactivated.
* Deactivated auto-excerpt function (was not to be activated in 2.6 production version).

= 2.6.0 =
This version is a feature release that also includes some rebuilt functions and other code improvements.

New Features:

* Front-end now uses enqueue_style to load CSS, so advanced users can directly load their own styles for the plugin without using the plugin settings.
* Improved use of shortcodes.  Old-style HTML comment shortcodes will continue to work in certain instances, but will no longer be supported in future versions.  Upgrade to the new shortcodes.  Major rewrite of the way WP-Members handles the_content() so that it will return a value rather than echo it.  Working to better integrate with other shortcodes so they are propery parsed.  New WP-Members shortcodes will added in future versions.
* Registration fields can now be customized via the admin panel.  This includes adding new fields and deleting non-native fields, and also changing the field order.

Code Improvements

* eliminated unused globals
* updated certain functions to use more up-to-date native WP functions.
* core now checks to see if the action variable 'a' is set before requesting it.
* wpmem_securify now scans for 'more' tag so that it will not truncate if the work "more" exists in the excerpt.
* updated email validation/error message to registration process to use is_email().

= 2.5.4 =
This is a bug fix release. 2.5.3 introduced a bug where the random password sent to a new user was invalid. While the fix is simple, the nature of the bug related to the functionality of the plugin dictates a full update so that users unaware of the bug will be notified via their WP admin panel.

= 2.5.3 =
This is primarily a bug fix release.

Bug fixes:

* Fixed reCAPTCHA from trying to validate on the User Edit page even though reCAPTCHA is not used on this page.
* Added validation to change password page to not allow double empty fields.
* Added additional username validation to prevent invalid (non-alphanumeric) characters in the username.
* Fixed comments reply link which did not allow a registered user to reply on an unblocked page/post.

Other changes:

* Rebuild of registration function
* Review of comments process
* Added stripslashes to front-end user registration validation

= 2.5.2 =
This is predominately a release of fixes and improvements:

* Fixed the admin menus so that the user menu isn't open by default.
* Fixed the "ignore warning messages" that was broken in 2.5.1.
* Corrected the CAPTCHA to not show up on members settings update.
* Plugin checks to see if the reCAPTCHA library is already loaded to be compatible with other reCAPTCHA plugins.
* Fixed activate user function for bulk activation - checks to see if the user is already activated and if so, skips that user so we don't accidentally activate users that are already activated in bulk mode, thus resetting their passwords.
* Updated login process to use wp_signon (wp_login is deprecated).
* Updated sidebar widget include a new css class #wp-members .err for login error message
* Updated sidebar widget to use the appropriate `<li>` tag into the sidebar area.  This should only be a factor for users that customized css. In this case, you'll need to update your stylesheet for ID #wpmem_login_side to #wp-members.
* Updated the sidebar login to better direct the user upon successful login (previously working fine on individual posts and pages, but not on categories).
* *Strictly Experimental* - Introducing pluggable functions - laying the ground work, won't be official yet, so some functions may be deprecated and/or modified.

= 2.5.1 =
Exanding on the features added in 2.5.0, this release adds setting for the register page, new tableless forms, and custom CSS

New Features

* Changed the "turn off registration" feature to allow for a registration page
* Specify registration page location (so we can have a register link in the login form)
* New tableless forms, can still toggle legacy forms
* Specify custom CSS for tableless forms

Fixes and Code Improvements

* Removed focus call in the reCAPTCHA that put the cursor focus immediately on the CAPTCHA
* Updated to wp_enqueue_script & _style for admin css and ajax.
* Fixed some typos.
* Fixed some security issues.

= 2.5.0 =
WP-Members&trade; 2.5 is essentially a pre-3.0 release and extention of the 2.4 release, which was only released as a public beta. In addition to the list below, see the list of features, improvements, and fixes for 2.4.0.

New Features

* added shortcode support for login only page
* added support for checkboxes in the registration fields
* added setting for members area/settings page url (so we can have "forgot password" link anywhere)
* added a "change your password" link in the email if members area/settings page url is set

Bug Fixes

* corrected a bug introduced in the 2.3.x widget update that caused the widget to be undraggable in certain instances

= 2.4.0 =
This was never a full production release, but was released as a public beta.  The production completion of this project was 2.5

New Features

* added reCAPTCHA support for registration
* added Terms of Service (TOS) checkbox and popup
* added shortcode support for members area and register pages
* added custom user management panel for bulk user edits
* added user list export
* localization support (beginning)
* contextual help in admin panels (beginning)

Code Improvements

* updated the registration process so that unused fields are not put into the user_meta table
* updated emails for moderated registration to send user the url they signed up on
* capture user's IP address at registration
* sets logged in admin as activated (prevents admin from accidentally being locked out)
* added toggle to force clean install of settings
* improvements to uninstall process

Bug Fixes

* added stripslashes to dialogs (accommodates the use of apostrophes/quotation marks)
* fixed sidebar login for non-widget use (bug from 2.3.x)

= 2.3.2 =
Bug Fix Release

* fixed login failed message for sidebar widget
* fixed login failed message for members area page
* fixed email to include user_url field properly
* changed cell alignment for 'textarea' field type in reg form

= 2.3.1 =
Code Improvements

* updated deprecated call get_usermeta to get_user_meta, update_usermeta to update_user_meta
* completed update of deprecated call get_settings changed to get_option
* removed deprecated functions wpmem_register() and wpmem_update(), both of these are now handled by wpmem_registration
* $redirect_to in wpmem_login changed to $_POST
* fixed password reset link issue
* changed wp-members-admin.php to load for 'edit_users' capabilities, down from 'manage_options'. 
* changes to admin form posts for use with WP Multisite (still need additional testing with Multisite for full compatibility)

New Features

* added direct link to edit user in notify admin email
* added optional registration page

= 2.3.0 =
Adds a number of features put off from the 2.2 release

* option to notify admin of new user registrations
* option to hold new registrations for admin approval
* option to turn registration off (for admins that want to control registrations in some other way)
* option to show excerpt on pages/posts
* updated widget calls to wp_register_sidebar_ (register_sidebar_ is deprecated)
* updated certain API calls known to be deprecated
* broke out email related functions to separate file; only loads when needed
* broke out core and dialog functions to separate files

= 2.2.2 =
This release is all code-side cleanup to make the plugin more efficient:

* Rewrote _securify function to remove redundancies
* Merged Login, Password Change, and Password Reset forms into _login_form
* Added uninstall/delete process to empty settings from database on plugin deletion
* Broke out install and admin scripts to separate file only loaded when needed
* Continued improvement of admin functions

= 2.2.1 =
* Change password bug fix
* Merged registration and user update functions to eliminate redundancy
* Added nonce security to the options admin

= 2.2.0 =
The #1 request with the plugin is to simply be able to change the required fields.  I have greatly simplified the process so it can be managed from within the WP admin panel.  Additionally, I added the ability to determine what fields will show in the registration form (both native WP fields, and additional WP-Members&trade; fields).  Also, the error/dialog messages can now be managed from with the admin panel as well.

* Added new customization features and an admin panel
* Can set fields that will display
* Can set fields to be required
* Can manage error/dialog messages from admin

= 2.1.2 =
* Added fix to set new registrations as the default role

= 2.1.1 =
* Udates for the 2.1.0 release that were not completed.
* updated variables for some function calls.
* eliminated unnecessary $table_prefix globals.
* updated some queries to better utilize the $wpdb class.
* custom fields admin is now managed as an array (cuts the lines of code by 75%, and makes way for user defined custom fields).