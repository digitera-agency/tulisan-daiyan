<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<div class='wrap'>

  <p id="msg"><?php _e('Updating flipbooks...', 'real3d-flipbook');?></p>
	
</div>
<?php 

//remove duplicates from array
$r3d_ids = get_option("real3dflipbooks_ids");
if($r3d_ids){
  $r3d_ids = array_values(array_unique($r3d_ids));
  update_option("real3dflipbooks_ids", $r3d_ids);  
}

wp_enqueue_script( "real3d-flipbook-activation"); 
$r3d_nonce = wp_create_nonce( "r3d_nonce");
wp_localize_script( 'real3d-flipbook-activation', 'r3d_nonce', array($r3d_nonce) );