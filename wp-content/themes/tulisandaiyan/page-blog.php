<?php 

/**

 * Template Name: News
 *

 */

get_header();?>
<section>
    <div class="py-5 content">
        <div class="container">
            <h1><?php the_title();?></h1>
            <?php the_content();?>
        </div>
    </div>
</section>

<?php get_footer();?>
