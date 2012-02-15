<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="main">
<section>
  <h1>Links:</h1>
  <ul>
    <?php wp_list_bookmarks(); ?>
  </ul>
</section>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
