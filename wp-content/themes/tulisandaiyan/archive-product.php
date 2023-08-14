<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>
<div class="container-fluid pt-20 my-5">
	<div class="row justify-content-between py-5 g-5">
		<div class="col-md-2 d-md-block d-none">
			<div class="pb-2 mb-3 border-bottom">
				<h2 class="h3 c-red fw-bold">
                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title h3 c-red fw-bold"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?></h2>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			</div>
			<div class="pb-2 mb-3 border-bottom">
			<h2 class="h5 pb-3 fw-bold">Category</h2>
			<?php
			/**
			 * Hook: woocommerce_sidebar.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			// do_action( 'woocommerce_sidebar' );
			
			//for each category, show all posts
			$terms = get_terms( array(
				'taxonomy' => 'product_cat',
				'orderby' => 'ID', // default: 'orderby' => 'name',
				'order' => 'DESC',
				'hide_empty' => false, // default: true
			) );

			if ( empty( $terms ) || is_wp_error( $terms ) ) {
				return;
			}

			echo '<ul class="ps-0">';

			foreach( $terms as $term ) {
				printf(
					'<li class="pb-3"><a href="%s" class="text-dark">%s</a> <span class="term-count">(%s)</span></li>',
					esc_url( get_term_link( $term ) ),
					esc_attr( $term->name ),
					$term->count
				);
			}

			echo '</ul>';
			?>
			</div>

<?php
echo do_shortcode('[woocommerce_product_filter_price]');
?>
		</div>
		<div class="col-md-10">
			<header class="woocommerce-products-header row align-items-center pb-3">
                
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title h3 fw-bold text-start d-md-none d-block"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>

				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 * 
				 * 
				 */
				// do_action( 'woocommerce_archive_description', 'woocommerce_catalog_ordering', 30 );
				do_action( 'woocommerce_archive_description' );
				
				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
				remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
				do_action( 'woocommerce_before_shop_loop' );

				?>
			</header>
			<?php
			if ( woocommerce_product_loop() ) {

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}

			// /**
			//  * Hook: woocommerce_after_main_content.
			//  *
			//  * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			//  */
			// do_action( 'woocommerce_after_main_content' );


			?>
		</div>
	</div>
</div>
<?php

get_footer( 'shop' );
