<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Marinka
 */

  $post = $wp_query->post;

  if (in_category('blog') || in_category('israel') || in_category('world')) { //slug  категории
      include(TEMPLATEPATH.'/single-blog.php');
  }
//  elseif(in_category('world') && in_category('blog')){
//      include(TEMPLATEPATH.'/single-blog.php');
//  }
//  elseif(in_category('israel' && in_category('blog'))){
//      include(TEMPLATEPATH.'/single-blog.php');
//  }
  else {
      include(TEMPLATEPATH.'/single-default.php');
  }

?>
