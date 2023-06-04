<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fitness Elementor
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <h1><?php esc_html_e('404 Error!', 'fitness-elementor'); ?></h1>
    <div class="crumb-box mt-3">
      <?php fitness_elementor_the_breadcrumb(); ?>
    </div>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center">
			<p><?php esc_html_e('The page you are looking for may have been moved, deleted, or possibly never existed.', 'fitness-elementor'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>