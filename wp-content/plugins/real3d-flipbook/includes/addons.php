<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

<div class='wrap r3d_wrap'>

  <h3><?php _e('Add-ons', 'real3d-flipbook');?></h3>

  <div class="addons">

  	<div class="addons-block">

  		<h1><?php _e('Add more features to Real3D Flipbook', 'real3d-flipbook');?></h1>

  		<p><?php _e('Make Real3D Flipbook more powerful with add-ons', 'real3d-flipbook');?></p>

  		<div class="addons-banner-block-items">

  			<div class="addons-banner-block-item">

  				<div class="addons-banner-block-item-content">
  					
  					<h3><?php _e('Add-on Bundle', 'real3d-flipbook');?></h3>

  					<p>All 6 add-ons: <strong>Book Shelf, PDF Tools, Page Editor, WooCommerce, Elementor, WPBakery</strong> for only <strong>$39</strong> (regular price $105)</p>

  					<a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/real3d-flipbook-addons/32839910?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $39</a>

  				</div>
  				

  			</div>

        <div class="addons-banner-block-item">

          <div class="addons-banner-block-item-content">
            
            <h3>Page Editor Add-on</h3>

            <p>Add <strong>links, videos, sounds, Youtube, Vimeo</strong> and more to flipbook pages easily with visual editor</p>

            <?php
            if (!defined('R3D_PAGE_EDITOR_VERSION')) {
            ?>

            <a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/page-editor-for-real3d-flipbook/33669331?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $19</a>

            <?php
            }else{
            ?>

            <span class="button disabled button-primary button-large addons-button">Installed</a>

            <?php
            }
            ?>

          </div>
          

        </div>

  			<div class="addons-banner-block-item">

  				<div class="addons-banner-block-item-content">
  					
  					<h3>WooCommerce Add-on</h3>

  					<p>Display flipbook on WooCommece single product page</p>

  					<?php
  					if (!defined('R3D_WOO_VERSION')) {
  					?>

  					<a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/woocommerce-real3d-flipbook-addon/30740687?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $19</a>

  					<?php
  					}else{
  					?>

  					<span class="button disabled button-primary button-large addons-button">Installed</a>

  					<?php
  					}
  					?>

  				</div>
  				

  			</div>

  			<div class="addons-banner-block-item"">

  				<div class="addons-banner-block-item-content">
  					
  					<h3>PDF Tools</h3>

  					<p>Optimize PDF flipbooks for faster loading by converting PDF to images and JSON</p>

  					<?php
  					if (!defined('R3D_PDF_TOOLS_VERSION')) {
  					?>

  					<a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/pdf-tools-for-real3d-flipbook/25800032?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $19</a>

  					<?php
  					}else{
  					?>

  					<span class="button disabled button-primary button-large addons-button">Installed</a>

  					<?php
  					}
  					?>

  				</div>
  				

  			</div>

  			
  		</div>


  		<div class="addons-banner-block-items">
  			

  			<div class="addons-banner-block-item">

  				<div class="addons-banner-block-item-content">
  					
  					<h3>Elementor Add-on</h3>

  					<p>Use Real3D Flipbook with Elementor as an element</p>

  					<?php 
  					if(!class_exists("Elementor_Real3D_Flipbook")){
  					?>

  					<a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/real3d-flipbook-elementor-addon/23736972?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $16</a>

  					<?php
  					}else{
  					?>

  					<span class="button disabled button-primary button-large addons-button">Installed</a>

  					<?php
  					}
  					?>

  				</div>
  				

  			</div>

  			 <div class="addons-banner-block-item">

  				<div class="addons-banner-block-item-content">
  					
  					<h3>Book Shelf</h3>

  					<p>Create responsive book shelves with flipbooks</p>

  					<?php 
  					if(!class_exists("Bookshelf_Addon")){
  					?>

  					<a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/bookshelf-for-real3d-flipbook/22714933?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $16</a>

  					<?php
  					}else{
  					?>

  					<span class="button disabled button-primary button-large addons-button">Installed</a>

  					<?php
  					}
  					?>

  				</div>
  				
  			</div>

  			<div class="addons-banner-block-item">

  				<div class="addons-banner-block-item-content">
  					
  					<h3>WPBakery Add-on</h3>

  					<p>Use Real3D Flipbook with WPBakery page builder</p>

  					<?php 
  					if(!class_exists("Real3DFlipbook_VCAddon")){
  					?>

  					<a class="button button-primary button-large addons-button" href="https://codecanyon.net/item/real3d-flipbook-for-wpbakery-page-builder-formerly-visual-composer-addon/22001742?ref=creativeinteractivemedia&ref2=admin_addons" target="_blank">Buy Now $16</a>

  					<?php
  					}else{
  					?>

  					<span class="button disabled button-primary button-large addons-button">Installed</a>

  					<?php
  					}
  					?>

  				</div>
  				
  			</div>
  			


  		</div>

  	</div>

  </div>	

</div>

<?php 

wp_enqueue_style( 'real3d-flipbook-admin'); 