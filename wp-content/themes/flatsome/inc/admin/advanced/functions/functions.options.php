<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		$of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");

	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');
		$of_pages['0'] = 'Select a page:';
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_title; }

// Set the Options Array
global $of_options;
$of_options = array();

$url =  ADMIN_DIR . 'assets/images/';


$of_options[] = array( 	"name" 		=> "Global Scripts",
						"type" 		=> "heading",
);


$of_options[] = array( 	"name" 		=> "Header Scripts",
						"desc" 		=> "Add custom scripts inside HEAD tag. You need to have SCRIPT tag around the scripts.",
						"id" 		=> "html_scripts_header",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Footer Scripts",
						"desc" 		=> "Here is the place to paste your Google Analytics code or any other JS code you might want to add to be loaded in the footer of your website.",
						"id" 		=> "html_scripts_footer",
						"std" 		=> "",
						"type" 		=> "textarea"
);


$of_options[] = array( 	"name" 		=> "Custom CSS",
						"type" 		=> "heading"
);


$of_options[] = array( 	"name" 		=> "All screens",
						"desc" 		=> "Add custom CSS here",
						"id" 		=> "html_custom_css",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Tablets and down",
						"desc" 		=> "Add custom CSS here for tablets and mobile",
						"id" 		=> "html_custom_css_tablet",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Mobile only",
						"desc" 		=> "Add custom CSS here for mobile view",
						"id" 		=> "html_custom_css_mobile",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Optimization",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "Lazy Load Banner and Section backgrounds",
						"id" 		=> "lazy_load_backgrounds",
						"desc"      => "Enable lazy loading of banner and section backgrounds.",
						"std" 		=> 1,
						"type" 		=> "checkbox"
);

$of_options[] = array( 	"name" 		=> "Lazy Load Images",
						"id" 		=> "lazy_load_images",
						"desc"      => "Enable lazy loading for images. <strong>Use with caution! Disable if you have plugin compability problems.</strong>",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);


$of_options[] = array( 	"name" 		=> "Google APIs",
						"type" 		=> "heading",
);


$of_options[] = array( 	
	"name" 		=> "Google Maps API",
	"desc" 		=> "Enter Google Maps API key here to enable Maps. You can generate one here: <a href='https://developers.google.com/maps/documentation/javascript/'>Google Maps API</a>",
	"id" 		=> "google_map_api",
	"std"       => "",
	"type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Maintenance Mode",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "Maintenance Mode",
						"id" 		=> "maintenance_mode",
						"desc"      => "Enable Maintenance Mode for all users except admins.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);


$of_options[] = array( 
				"name"  => "Custom Maintenance Page",
				"id" => "maintenance_mode_page",
				"desc" =>  "Set a custom page as maintenance page. Only this page will be visible for visitors.",
				"std" 		=> 0,
				"type" 		=> "select",
				"options" => $of_pages
);


$of_options[] = array( 	"name" 		=> "Maintenance Mode Text",
						"desc" 		=> "The text that will be visible to your customers when accessing maintenance screen.",
						"id" 		=> "maintenance_mode_text",
						"std"       => "Please check back soon..",
						"type" 		=> "text"
);


$of_options[] = array( 	"name" 		=> "Custom Fonts",
						"type" 		=> "heading",
);

// Custom font
$of_options[] = array( 	
		"name" 		=> "Upload Custom Font",
		"desc" 		=> "Upload Custom Font file here. (.ttf, .otf). You can select this font by selecting 'Custom font' in the settings above, or by CSS: h1 {font-family: customFont} ",
		"id" 		=> "custom_font",
		"std" 		=> "",
	    "mod"       => "font",
		"type" 		=> "media"
);



$of_options[] = array( 	"name" 		=> "Catalog Mode",
						"type" 		=> "heading",
);


$of_options[] = array( 	"name" 		=> "Enable catalog mode",
						"id" 		=> "catalog_mode",
						"desc"      => "Enable catalog mode. This will disable Add To Cart buttons / Checkout and Shopping cart.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);



$of_options[] = array( 	"name" 		=> "Disable prices",
						"id" 		=> "catalog_mode_prices",
						"desc"      => "Select to disable prices on category pages and product page.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);


$of_options[] = array( 	"name" => "Cart / Account replacement (header)",
				"id" 		=> "catalog_mode_header",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "Enter content you want to display instad of Account / Cart. Shortcodes are allowed. For search box enter <b>[search]</b>. For social icons enter: <b>[follow twitter='http://' facebook='http://' email='post@email.com' pinterest='http://']</b>"
);

$of_options[] = array( 	"name" => "Add to cart replacement - Product page",
				"id" 		=> "catalog_mode_product",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "Enter contact information or enquery form shortcode here."
);

$of_options[] = array( 	"name" => "Add to cart replacement - Product Quick View",
				"id" 		=> "catalog_mode_lightbox",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "Enter text that will show in product quick view"
);

				
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup and Import",
						"type" 		=> "heading",
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
);


				
}//End function: of_options()
}//End chack if function exists: of_options()
?>
