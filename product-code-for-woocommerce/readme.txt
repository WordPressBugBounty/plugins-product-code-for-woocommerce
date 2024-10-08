=== Product Code for WooCommerce ===

Contributors: Artiosmedia, steveneray, repon.wp
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=E7LS2JGFPLTH2
Tags: product code, product number, bin number, warehouse tracking, order number
Requires at least: 4.6
Tested up to: 6.6.1
Version: 1.4.7
Stable tag: 1.4.7
Requires PHP: 7.4.33
License: GPLv3 or later license and included
URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin will allow a user to add up to two additional internal product identifiers in addition to the GTIN, EAN, SKU or UPC to the order process.

== Description ==

This is a user-friendly plugin that many website designers, developers, and business owners look for when they require an additional product code field. It is often used for an inventory control number, internal stock number, or bin location. The plugin allows you to add a product identifier to each or some variable or single items in Woocommerce. The custom field value can be passed through during order fulfillment, referenced from each item ordered. The field value can be viewed user side if desired or turned off if not.

A unique product code is often added in addition to the GTIN, EAN, SKU, and UPC throughout the order process. However, all current plugins that might address this need entail complex setups and functions which result in extra memory usage, system conflicts, and frequent updates. This plugin eliminates all those hurdles by providing a simple solution without excessive options.

Simply install, enter your product codes within each product post (variation or single), and publish. Nothing more to it than that! If you don't want customers to be able to see the unique product code, the user-side display can be turned off in setup. The field label can be easily changed in setup too, to read ISBN for example or Bin Number, Stock Number, EAN, or JAN. Any value can be created and entered as a single new field.

The added fields are compliant with mappable data import and export schemes. This same compliance allows the fields to be included in a Google Merchant product feed using custom mapping. It also provides support for Schema.org/Product with an option to choose the property name (GTIN, EAN, UPC, ISBN) to set inside the structured data.

You can also search product codes using the WordPress default search from the user side as well as from the administrator Woocommerce product list page on the backend. It is compatible to search product codes using the popular <a href="https://wordpress.org/plugins/relevanssi/" target="_blank">Relevanssi</a>, <a href="https://searchwp.com/" target="_blank">SearchWP</a> and, <a href="https://ajaxsearchpro.com/" target="_blank">Ajax Search Pro</a>.

The plugin's languages include English, Spanish, French, German, and Russian.

As of <strong>version 1.3.1</strong>, the Product Code primary field is now displayed by default in the WooCommerce product panel, switchable to off from the top tab dropdown if desired. If your second Product Code field is activated from settings, it will appear to the right of the Product panel. Additionally, the Product Code primary field now appears in the WooCommerce Quick Edit panel. Turn on the second Product Code and it will display after the primary field in the Quick Edit panel. Make sure you clear your caches (website and browser) if you are updating from the previous plugin.

As of <strong>version 1.4.1</strong>, an administrator can choose to hide the default and secondary product code from the user-side product posts while the other display injections still work (checkout, cart, and receipts).

== Installation ==

1. Upload the plugin files to the '/wp-content/plugins/plugin-name' directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Enter the Product Code under the SKU from either Variable or Simple products.

== Technical Details for Release 1.4.7 ==

Load time: 0.294 s; Memory usage: 3.63 MiB
PHP up to tested version: 8.3.11
MySQL up to tested version: 8.0.39
MariaDB up to tested version: 11.5.2
cURL up to tested version: 8.9.1, OpenSSL/3.3.1
PHP 7.4, 8.0, 8.1, 8.2, and 8.3 compliant.

== Using in Multisite Installation ==

1. Extract the zip file contents in the wp-content/mu-plugins/ directory of your WordPress installation. (This is not created by default. You must create it in the wp-content folder.) The 'mu' does not stand for multi-user like it did for WPMU, it stands for 'must-use' as any code placed in that folder will run without needing to be activated.
2. Access the Plugins settings panel named 'Product Code for WooCommerce' under options.
3. Enter the Product Code under the SKU from either Variable or Simple products.

== Configuration with Relevanssi plugin ==

1. Open up Indexing tab from Settings->Relevanssi page.
2. From the Post Type select "Product" and "Product Variation".
3. From the Custom fields dropdown select "Some" and add custom fields "_product_code" and "_product_code_second" and save.
4. Move to Searching tab and unselect checkbox "Respect exclude_from_search" and save.
5. Access Indexing tab, click button "Build the Index" and save.

== Configuration with SearchWP plugin ==

1. SearchWP requires the SearchWP WooCommerce Integration addon.
2. Open up Settings Tab from Settings->SearchWP page.
3. Add post type "Product" if not added by clicking "Add Post Type".
4. Click "Add Attributes", select "Custom Fields" and add "_product_code" and "_product_code_second" fields from the dropdown box. Move slider to right on both toward "Max".
5. Lastly click "Save Engines" and then click "Rebuild Index".

== Configuration with Ajax Search Pro plugin ==

1. Open up "Ajax Search Pro" settings page via admin menu.
2. Create/Edit the search instance.
3. Add "Products[product]" and "Variation[product_variation]" from the post types list.
4. Add "_product_code" and "_product_code_second" fields from the custom fields list and save.
5. If you have selected "Index table engine" for the search engine then index it again.

== Frequently Asked Questions ==

= Is this plugin frequently updated to Wordpress compliance? =
Yes, attention is given on a staged installation with many other plugins via debug mode.

= Is the plugin as simple to use as it looks? =
Yes. No other plugin exists that adds an additional custom product code so simply.

= Has there ever any compatibility issues? =
Point of Sale for WooCommerce 0.426 has been known to result in conflicts, but it cannot be replicated on a clean WooCommerce install with conflicting plugins present.

= Can the custom Product Code field be fed to Google Merchant? =
We can't possibly assure compatibility with every feed manager, but the properly built ones find the field correctly. We suggest using YITH Google Product Feed for WooCommerce Premium. The custom field appears as 'Product Id [id]' right on top of the custom field selections.

= How do I export the Product Code field from WooCommerce? =
We use WP All Export Pro by Soflyy which works great, but so does the free Advanced Order Export For WooCommerce By AlgolPlus.

- Click "Export Orders" under WooCommerce.
- Click to open "Set up fields to export"
- On the right click "Products"
- The field "[P] Product Id" is listed as the field to export from this plugin.

= Can I rename the Product Code field to another title? =
Previously, the function.php required a snippet addition to do so. As of version 1.0.6, in the settings panel you will find an option to edit the field title with a limit of 18 characters including spaces. Whatever title is entered will change on the user side and admin side and throughout the order process.

= Is there short code that allows inserting product code? =
The shortcode to show the Product code is `[pcfw_display_product_code]` you can use these attributes:

• `id` the product id
• `pc_label` the product code label that will be displayed before the code. By default is "Product Code:", but this can be changed inside the settings panel.
• `pcs_label` the product code second label that will be displayed before the code. By default is "Product Code Second:", but this can be changed inside the settings panel.
• `wrapper` you can wrap the label and product code in div or span. By default is 'div' for the shop page and 'span' on the other pages.
• `wrapper_code` the container of product code. By default is a 'span'.
• `class` the class of wrapper container. By default is 'pcfw_code'.
• `class_wrapper` the class of wrapper code container. By default is 'pcfw_code_wrapper'.

Note: For variable product you need to pass variation product id.

= Is the code in the plugin proven stable? =

Please click the following link to check the current stability of this plugin:
<a href="https://plugintests.com/plugins/product-code-for-woocommerce/latest" rel="nofollow ugc">https://plugintests.com/plugins/product-code-for-woocommerce/latest</a>

== Screenshots ==

1. The Product Code as found in a Simple Product
2. The Product Code as found in a Variable Product
3. The Product Code appears under the SKU on the user side
4. The Product Code appears below the description in the shopping cart
5. The Product Code appears below the SKU and Variation ID on the order page
6. The plugin's limited selection function settings panel
7. Product panel display and options along with Quick Edits presence

== Upgrade Notice ==

None to report as of the release version

== Changelog ==

1.4.7 09/01/24
- Minor edits to language files
- Assure compliance with WordPress 6.6.1
- Assure compliance with WooCommerce 9.2.3

1.4.6 04/06/24
- Minor updates and edits
- Assure compliance with WordPress 6.5
- Assure compliance with WooCommerce 8.7.0

1.4.5 11/30/23
- Fixed Cross Site Scripting (XSS) vulnerability
- Add whitelist check for the wrapper tag

1.4.4 11/23/23
- Fixed index problem on the backend
- Assure compliance with WordPress 6.4.1
- Assure compliance with WooCommerce 8.3.1

1.4.3 10/17/23
- Make product code column sortable
– Add German translation
- Assure compliance with WooCommerce 8.2.1

1.4.2 10/13/23
- Adjust code field for diverse and longer entries
- Assure compliance with WordPress 6.3.2
- Assure compliance with WooCommerce 8.2.0

1.4.1 09/14/23
- Added an option for hiding product code on user-side
- Numerious settings composition changes
- Numerious text edits and tooltip changes
- Update all language files
- Assure compliance with WordPress 6.3.1
- Assure compliance with WooCommerce 8.1.0

1.4.0 08/11/23
- Added compatibility with WooCommerce HPOS
- Assure compliance with WordPress 6.3.0
- Assure compliance with WooCommerce 8.0.0

1.3.6 07/05/23
- Fixed single product page code conflict

1.3.5 07/04/23
- Fixed import problem of Product Code 2
- Fixed print on save post
- Assure compliance with WordPress 6.2.2
- Assure compliance with WooCommerce 7.8.0

1.3.4 02/08/23
- Update language files and add Russian translation
- Assure compliance with WordPress 6.1.1
- Assure compliance with WooCommerce 7.3.0

1.3.3 05/23/22
- Text edits along with translations
- Assure compliance with WordPress 6.0
- Assure compliance with WooCommerce 6.5.1

1.3.2 02/23/22
- Fixed extra space for variable product product data in quick edit
- Enable editing product column title in settings panel.
- Assure compliance with WordPress 5.9.1
- Assure compliance with WooCommerce 6.2.1

1.3.1 02/11/22
- Added product code field to Woocommerce Quick Edit
- Added product code 2 column in admin products panel if enabled
- Added allowing the custom title to appear on Quick Edit
- Assure compliance with WooCommerce 6.2.0

1.3.0 01/22/22
- Fixed redundant Ajax call on document load
- Added product code column on admin products page
- Updates for WordPress 5.9
- Assure current stable PHP 8.1.1 use
- Assure compliance with WooCommerce 6.1.1

1.2.8 08/28/21
- Fixed an offset issue

1.2.7 08/27/21
- Fixed save_post bug filling error log
- Assure MySQL stable 8.0.26 use
- Assure current stable PHP 8.0.10 use

1.2.6 08/24/21
- Fixed search results for variable products
- Fixed bullets removed PHP and email conflict
- Updates for WordPress 5.8
- Assure compliance with WooCommerce 5.6.0

1.2.5 05/13/21
- Fixed css on order received page.
- Fixed a typo in enqueue script function
- Updates for WordPress 5.7.2
- Assure compliance with WooCommerce 5.3.0

1.2.4 12/31/20
- Fixed export of products with product code meta fields
- Added setting to apply structure data property for product code
- Added 'N/A' for the structured data if product code is not set for any product
- Added shortcode [pcfw_display_product_code] to display product code on single product and custom pages
- Remove useless Import/Export Settings option

1.2.3 12/13/20
- Fixed variation search for search plugins
- Fixed search of product using product code at backend with search plugins
- Fixed not displaying of product code for variation product
- Fixed displaying of warning banner with new installs
- Fixed database upgrade script to be run after version 1.1.0
- Fixed displaying product code at cart, checkout, and receipt
- Added support for Schema.org/Product with an option to choose the property name to set inside the structured data

1.2.2 10/21/20
- Recompile to solve fatal errors

1.2.1 10/20/20
- Reload export module due to error

1.2.0 10/17/20
- Add second product code option
- Add script to merged two product meta values into single
- Add switch to hide user side field when the value is empty
- Update language files to include new fields
- Update sample screens to show new fields
- Assure compliance with WooCommerce 4.6.0
- Add Import/Export Settings option 

1.1.0 05/15/20
- Fixed search error on administrator product list page
- Updates for WordPress 5.4.1
- Assure compliance with WooCommerce 4.1.0

1.0.9 04/26/20
- Add search module for Relevanssi search

1.0.8 04/02/20
- Add search compliance including third party plugins
- Add search module for SearchWP search
- Add search module for Ajax Search Pro search
- Updates for WordPress 5.4
- Assure compliance with WooCommerce 4.0.1

1.0.7 02/02/20
- Updates for WordPress 5.3.2
- Assure compliance with WooCommerce 3.9.2
- Fix missing Product Code label upon install

1.0.6 12/11/19
- Updates for WordPress 5.3
- Assure compliance with WooCommerce 3.8.1
- Remove composer.json dependencies
- Add submenu access to setup
- Add ability to edit the field title
- Overall composition and text edits
- Fix language POTS not loading

1.0.5 11/09/19
- Updates for WordPress 5.2.4
- Modifications for WooCommerce 3.8.0
- Support for WooCommerce Admin 0.21.0
- Tested Compatible with WPML
- Adjust for WooCommerce API REST
- Current version support updated

1.0.4 08/15/19
- Updates for WordPress 5.2.2
- Modifications for WooCommerce 3.7.0
- Current version support updated

1.0.3 05/05/19
- Updates for WordPress 5.2
- Assure compliance for WooCommerce 3.6.2
- Current version support updated

1.0.2 04/03/19
- Update to allow WordPress search of Product Code fields
- Assure compliance for WooCommerce 3.5.7
- Current version support updated

1.0.1 02/01/19
- Fix bug that caused code duplication in some variations
- Current version support updated

1.0.0 01/15/19
- Initial release