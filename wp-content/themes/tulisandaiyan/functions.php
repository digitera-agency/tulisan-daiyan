<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}

add_theme_support( 'post-thumbnails' );



register_nav_menus(

	array(

		'primary'	=>'Primary Menu',

		'footer'	=>'Footer Menu',

	)

);



add_image_size( 'news-thumb', 500, 575, true );


//enable upload for webp image files.

function webp_upload_mimes($existing_mimes) {

    $existing_mimes['webp'] = 'image/webp';

    return $existing_mimes;

}

add_filter('mime_types', 'webp_upload_mimes');



//enable preview / thumbnail for webp image files.

function webp_is_displayable($result, $path) {

    if ($result === false) {

        $displayable_image_types = array( IMAGETYPE_WEBP );

        $info = @getimagesize( $path );



        if (empty($info)) {

            $result = false;

        } elseif (!in_array($info[2], $displayable_image_types)) {

            $result = false;

        } else {

            $result = true;

        }

    }



    return $result;

}

add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

include_once( get_stylesheet_directory() . '/template-part/wp-form-template.php' );