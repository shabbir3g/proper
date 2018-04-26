<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Nuts Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'nuts-options',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Nuts Options <small>by Mostafiz Shabbir</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'Header-Options',
  'title'       => 'Header Options',
  'icon'        => 'fa fa-shield',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'logo-upload',
      'type'    => 'upload',
      'title'   => 'Logo Uploader',
	  'settings'      => array(
	   'button_title' => 'Upload a Logo',
	   'frame_title'  => 'Select an Logo',
	   'insert_title' => 'Use this Logo',
	  ),
	  
    ),
	
	array(
      'id'      => 'favicon-upload',
      'type'    => 'upload',
      'title'   => 'Favicon Uploader',
	  'settings'      => array(
	   'button_title' => 'Upload a Favicon',
	   'frame_title'  => 'Select an Favicon',
	   'insert_title' => 'Use this Favicon',
	  ),
	  
    ),
    // end: a field

    

  ), // end: fields
);


$options[]      = array(
  'name'        => 'Ganeral-Options',
  'title'       => 'Ganeral Options',
  'icon'        => 'fa fa-check-circle',

  // begin: fields
  'fields'      => array(
	array(
	  'id'      => 'mobile-number', // another unique id
	  'type'    => 'text',
	  'title'   => 'Mobile Number',
	  'desc'    => 'Add your Header Mobile Number',
	),
	  
    // end: a field
  ), // end: fields
);

$options[]      = array(
  'name'        => 'HomePage-Slider',
  'title'       => 'HomePage Slider',
  'icon'        => 'fa fa-bars',

  // begin: fields
  'fields'      => array(
	array(
	  'id'      => 'gallery-slider', // another unique id
	  'type'    => 'gallery',
	  'title'   => 'HomePage Slider',
	  'add_title'   => 'Add Slide',
	  'edit_title'  => 'Edit Slider',
	  'clear_title' => 'Remove Slide',
	),
	  
    // end: a field
  ), // end: fields
);



$options[]      = array(
  'name'        => 'Social-URL',
  'title'       => 'social optionsx',
  'icon'        => 'fa fa-repeat',

  // begin: fields
  'fields'      => array(
	array(
	  'id'      => 'facebook-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Facebook URL',
	),
	array(
	  'id'      => 'twitter-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Twitter URL',
	),
	array(
	  'id'      => 'linkedin-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Linkedin URL',
	),
	array(
	  'id'      => 'google-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Google-plus URL',
	),
	array(
	  'id'      => 'skype-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Skype URL',
	),
	
	array(
	  'id'      => 'youtube-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Youtube URL',
	),
	
	array(
	  'id'      => 'instagram-url', // another unique id
	  'type'    => 'text',
	  'title'   => 'Instagram URL',
	),
	  
  ), // end: fields
);

$options[]      = array(
  'name'        => 'footer-Options',
  'title'       => 'Footer Options',
  'icon'        => 'fa fa-code-fork',

  // begin: fields
  'fields'      => array(
	array(
	  'id'      => 'copy-right', // another unique id
	  'type'    => 'text',
	  'title'   => 'Copy Right Text',
	  'desc'    => 'Add your Copy Right Text',
	),
	  
    // end: a field
  ), // end: fields
);


// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'customcss',
  'title'    => 'Custom CSS',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
		  'id'            => 'custom-css-add',
		  'type'          => 'textarea',
		  'title'         => 'Custom CSS',
		  'attributes'    => array(
			'rows'        => 20,
		  ),
		),

  )
);

CSFramework::instance( $settings, $options );
