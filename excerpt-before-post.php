<?php
/*
Plugin Name: Excerpt as subtitle before the post
Plugin URI: http://www.perun.net
Description: If there is a manual excerpt of the article, it should be output before the actual content..
Version: 0.1
Author: Vladimir Simović
Author URI: http://www.perun.net
*/

function excerpt_before_content($content) {
    if (is_single() && has_excerpt()) {
        $subtitle = get_the_excerpt();
        $subtitle_first .= "<p class=\"excerpt\">" . $subtitle . "</p>\n";
        $subtitle_first .= $content;
        return $auszug_zuerst;
        } else {
            return $content;
        }
}
add_filter( 'the_content', 'excerpt_before_content' );
?>
