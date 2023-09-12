<?php
/*
Plugin Name: Markdown to HTML
Description: Automatically converts Markdown content into HTML markup.
Version: 1.0
Author: Nishant Shah
Author URI: https://shahnishant.com.np
*/

require_once('parsedown/Parsedown.php');

// Function to convert Markdown to HTML
function markdown_to_html($content) {
    if (class_exists('Parsedown')) {
        $parsedown = new Parsedown();
        $content = $parsedown->text($content);
    }
    return $content;
}

// Filter to convert Markdown in post content
add_filter('the_content', 'markdown_to_html');

// Filter to convert Markdown in widget text
add_filter('widget_text_content', 'markdown_to_html');

// Filter to convert Markdown in widget text_content
add_filter('widget_text_content_content', 'markdown_to_html');

// Filter to convert Markdown in comment text
add_filter('comment_text', 'markdown_to_html');

// Filter to convert Markdown in comment text for excerpt
add_filter('comment_excerpt', 'markdown_to_html');

// Filter to convert Markdown in comment text for RSS feed
add_filter('comment_text_rss', 'markdown_to_html');

?>
