<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="main">

  <?php get_search_form(); ?>

  <section>
    <h1>Archives by Month:</h1>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </section>

  <section>
    <h1>Archives by Subject:</h1>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </section>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
