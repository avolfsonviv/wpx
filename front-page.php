<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage WPX_Theme
 * @since 0.1.0
 * @version 1.0
 */
the_post();
get_header(); ?>

<h1>Home</h1>

<?php the_content(); ?>

<?php get_footer(); ?>