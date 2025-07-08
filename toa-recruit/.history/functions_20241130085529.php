<?php

function enqueue_custom_scripts()
{
  wp_enqueue_script('jquery-script', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array(), null, true);
  wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js?' . time(), array(), null, true);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/styles/style.css?' . time(), array(), null);
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css?' . time(), array(), null);
}
