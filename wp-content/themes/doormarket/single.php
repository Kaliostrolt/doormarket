<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="content">
    <div class="container_12 single_page">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            echo "<h1 class='single_page'>".$post->post_title."</h1>";

            echo "<hr>";

            echo "<div>".the_content()."</div>";

            // End the loop.
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>
