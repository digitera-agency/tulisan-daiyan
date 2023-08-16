<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$globals_settings = get_option("real3dflipbook_global");

if(!$globals_settings)
	r3dfb_setDefaults();	

function r3dfb_setDefaults(){

	$defaults = r3dfb_getDefaults();

	delete_option("real3dflipbook_global");
	add_option("real3dflipbook_global", $defaults);

}

function r3dfb_admin_notice(){

}




add_action( 'wp_ajax_r3d_preview', 'r3dfb_preview_callback' );
add_action( 'wp_ajax_nopriv_r3d_preview', 'r3dfb_preview_callback' );

function r3dfb_preview_callback() {

	$previewOptions = ($_POST);

  $defaults = r3dfb_getDefaults();

	$globals = get_option("real3dflipbook_global");

  $globals = array_merge($defaults, $globals);

	echo json_encode(array_merge($globals, $previewOptions));

	wp_die(); // this is required to terminate immediately and return a proper response

}

add_action( 'wp_ajax_r3d_save', 'r3dfb_save_callback' );
add_action( 'wp_ajax_nopriv_r3d_save', 'r3dfb_save_callback' );


function r3d_sanitize_array($arr)
{
   // foreach ($arr as $key => $val) {

   //    if(is_array($val))
   //      $arr[$key] = r3d_sanitize_array($val);
   //    else
   //      $arr[$key] = sanitize_text_field($val);
   //      $arr[$key] = wp_kses_post($val);

   // }

   return $arr;
}


function r3dfb_save_callback() {

  check_ajax_referer( 'saving-real3d-flipbook', 'security' );
  
  $current_id = $page_id = '';

  unset($_POST['security']);
  unset($_POST['action']);

  // trace($_POST);

  error_log(print_r($_POST, true));

  $data = r3d_sanitize_array($_POST);

  // trace($data);

  if (isset($data['id']) ) {
    $current_id = intval($data['id']);
  }

  $reak3dflipbooks_converted = get_option("reak3dflipbooks_converted");

  if(!$reak3dflipbooks_converted){

    $flipbooks = get_option("flipbooks");
    if(!$flipbooks){
      $flipbooks = array();
    }

    add_option('reak3dflipbooks_converted', true);
    $real3dflipbooks_ids = array();
    //trace('converting flipbooks...');
    foreach ($flipbooks as $b) {
      $id = $b['id'];
      //trace($id);
      delete_option('real3dflipbook_'.(string)$id);
      add_option('real3dflipbook_'.(string)$id, $b);
      array_push($real3dflipbooks_ids,(string)$id);
    }
    // trace($real3dflipbooks_ids);
  }else{
    // trace($real3dflipbooks_ids);
    $real3dflipbooks_ids = get_option('real3dflipbooks_ids');
    if(!$real3dflipbooks_ids){
      $real3dflipbooks_ids = array();
    }
    $flipbooks = array();
    foreach ($real3dflipbooks_ids as $id) {
      // trace($id);
      $book = get_option('real3dflipbook_'.$id);
      if($book){

        $flipbooks[$id] = $book;
        // array_push($flipbooks,$book);

        
      }else{
        //remove id from array
        $real3dflipbooks_ids = array_diff($real3dflipbooks_ids, array($id));
      }
    }
  }
  
  update_option('real3dflipbooks_ids', $real3dflipbooks_ids);

  if (!isset($data['pages']) ) {
    $data['pages'] = array();
  }

  if (!isset($data['tableOfContent']) ) {
    $data['tableOfContent'] = array();
  }
  
  if($flipbooks[(string)$current_id]){
    update_option('real3dflipbook_'.(string)$current_id, $data);
  } else{
    add_option('real3dflipbook_'.(string)$current_id, $data);
    array_push($real3dflipbooks_ids,$current_id);
    update_option('real3dflipbooks_ids',$real3dflipbooks_ids);
  }

  echo json_encode(get_option("real3dflipbooks_ids"));

  wp_die(); // this is required to terminate immediately and return a proper response
}


add_action( 'wp_ajax_r3d_save_general', 'r3d_save_general_callback' );
add_action( 'wp_ajax_nopriv_r3d_save_general', 'r3d_save_general_callback' );

function r3d_save_general_callback() {

  check_ajax_referer( 'r3d_nonce', 'security' );

  unset($_POST['security']);
  unset($_POST['action']);
  $data = r3d_sanitize_array($_POST);

  update_option('real3dflipbook_global', $data);

  if($data["manageFlipbooks"] == "Administrator")
    update_option("real3dflipbook_capability", "activate_plugins");
  else if($data["manageFlipbooks"] == "Editor")
    update_option("real3dflipbook_capability", "publish_pages");
  else
    update_option("real3dflipbook_capability", "publish_posts");

  wp_die(); 

} 

add_action( 'wp_ajax_r3d_reset_general', 'r3d_reset_general_callback' );
add_action( 'wp_ajax_nopriv_r3d_reset_general', 'r3d_reset_general_callback' );

function r3d_reset_general_callback() {

  check_ajax_referer( 'r3d_nonce', 'security' );

  r3dfb_setDefaults();

  wp_die(); // this is required to terminate immediately and return a proper response

}


add_action( 'wp_ajax_r3d_save_page', 'r3dfb_save_page_callback' );
add_action( 'wp_ajax_nopriv_r3d_save_page', 'r3dfb_save_page_callback' );

function r3dfb_save_page_callback() {

	check_ajax_referer( 'saving-real3d-flipbook', 'security' );

	$id = intval($_POST['id']);
	$book = get_option('real3dflipbook_'.$id);
	$bookName = $book['name'];
	$upload_dir = wp_upload_dir();
	$booksFolder = $upload_dir['basedir'] . '/real3d-flipbook/';
	$bookFolder = $booksFolder . 'flipbook_' . $id . '/';
	$file = $bookFolder.$_POST['page'].".jpg";
	$data = $_POST['dataurl'];
	$uri = substr($data,strpos($data, ",") + 1);

	if (!file_exists($booksFolder)) {
		mkdir($booksFolder, 0777, true);
	}

	if (!file_exists($bookFolder)) {
		mkdir($bookFolder, 0777, true);
	}

	if(!file_put_contents($file, base64_decode($uri))){
		echo " failed writing image ".$file;
	}else{
		echo(($upload_dir['baseurl'] . '/real3d-flipbook/flipbook_' .$id . '/'.$_POST['page'].'.jpg'));
	}

	wp_die();

}



add_action( 'wp_ajax_r3d_save_page_json', 'r3dfb_save_page_json_callback' );
add_action( 'wp_ajax_nopriv_r3d_save_page_json', 'r3dfb_save_page_json_callback' );

function r3dfb_save_page_json_callback() {

  check_ajax_referer( 'saving-real3d-flipbook', 'security' );

  $id = intval($_POST['id']);
  $book = get_option('real3dflipbook_'.$id);
  $bookName = $book['name'];
  $upload_dir = wp_upload_dir();
  $booksFolder = $upload_dir['basedir'] . '/real3d-flipbook/';
  $bookFolder = $booksFolder . 'flipbook_' . $id . '/';
  $file = $bookFolder.$_POST['page'].".json";
  $data = stripslashes($_POST['dataurl']);
  // $uri = substr($data,strpos($data, ",") + 1);

  if (!file_exists($booksFolder)) {
    mkdir($booksFolder, 0777, true);
  }

  if (!file_exists($bookFolder)) {
    mkdir($bookFolder, 0777, true);
  }

  if(!file_put_contents($file, $data)){
    echo " failed writing image ".$file;
  }else{
    echo(($upload_dir['baseurl'] . '/real3d-flipbook/flipbook_' .$id . '/'.$_POST['page'].'.json'));
  }

  wp_die();

}



function real3d_flipbook_add_new(){
	$_GET['action'] = "add_new";
	real3d_flipbook_admin();
}
