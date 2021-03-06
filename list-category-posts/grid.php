<?php

// custom function to remove HTML tags and extract the content.
function chopHTMLtags($string) {
    $firsttagend = stripos($string, ">") + 1;
    $endtagstart = stripos($string, "<", 1);

    return substr($string, $firsttagend, $endtagstart-$firsttagend);
}

function giveHREF($string) {
    $start = stripos($string, "href=\"") + 6;
    $end = stripos($string, "\"", $start);

    return substr($string, $start, $end - $start);
}

function giveSRC($string) {
    $start = stripos($string, "src=\"") + 5;
    $end = stripos($string, "\"", $start);

    return substr($string, $start, $end - $start);
}

function giveIMG($string) {
    $imgloc = stripos($string, "<img");
    $imgend = stripso($string, ">", $imgloc+1);

    return substr($string, $imgloc, $imgend - $imgloc);
}

$DEFAULT_THUMBNAIL_SRC = "http://bexcellent.org.uk/wp-content/uploads/2014/03/title1.jpg";

/*
Plugin Name: List Category Posts - Template "Default"
Plugin URI: http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/
Description: Template file for List Category Post Plugin for Wordpress which is used by plugin by argument template=value.php
Version: 0.9
Author: Radek Uldrych & Fernando Briano
Author URI: http://picandocodigo.net http://radoviny.net
*/

/* Copyright 2009  Radek Uldrych  (email : verex@centrum.cz), Fernando Briano (http://picandocodigo.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * The format for templates changed since version 0.17.
 * Since this code is included inside CatListDisplayer, $this refers to
 * the instance of CatListDisplayer that called this file.
 */

/* This is the string which will gather all the information.*/
$lcp_display_output = '';

// Show category link:
$lcp_display_output .= $this->get_category_link('strong');

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example: Changed to <div>
$lcp_display_output .= '<div class="container-fluid">';

/**
 * Posts loop.
 * The code here will be executed for every post in the category.
 * As you can see, the different options are being called from functions on the
 * $this variable which is a CatListDisplayer.
 *
 * The CatListDisplayer has a function for each field we want to show.
 * So you'll see get_excerpt, get_thumbnail, etc.
 * You can now pass an html tag as a parameter. This tag will sorround the info
 * you want to display. You can also assign a specific CSS class to each field.
 */
$count = 0;
foreach ($this->catlist->get_categories_posts() as $single){
  
  if ($count == 0) {
    $lcp_display_output .= '<div class="row">';
  }
  $lcp_display_output .= '<div class="col-md-3"><div class="thumbnail layout_box"><a href="'.giveHREF($this->get_post_title($single)).'">';

  //title
  $lcp_display_output .= '<p>'.chopHTMLtags($this->get_post_title($single)).'</p>';
  //Post Thumbnail
  $thumbnail_src = giveSRC(get_the_post_thumbnail($single->ID, array(200, 200)));
  if ($thumbnail_src == '') {
    $thumbnail_src = $DEFAULT_THUMBNAIL_SRC;
  }
  $lcp_display_output .= '<img src="'.$thumbnail_src.'">';

  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<p class="lcp_content">The content</p>
   */
  //$lcp_display_output .= $this->get_content($single, 'p', 'lcp_content');

  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<div class="lcp_excerpt">The content</div>

  $lcp_display_output .= $this->get_excerpt($single, 'div', 'lcp_excerpt');
*/
  
  $lcp_display_output .= '</a></div></div>';

  if ($count == 3) {
    $count = 0;
    $lcp_display_output .= '</div>'; // row
  } else {
    $count += 1;
  }
}

$lcp_display_output .= '</div>'; // ends div here

// If there's a "more link", show it:
$lcp_display_output .= $this->catlist->get_morelink();

//Pagination
$lcp_display_output .= $this->get_pagination();

$this->lcp_output = $lcp_display_output;
