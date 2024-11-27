<?php
/**
 * Plugin Name: Writingor Solonick Plugin Fixer
 * Description: Fix Portfolio pagination URL.
 * Version: 1.0.0
 */

add_filter('register_post_type_args', 'update_portfolio_post_type', 20, 2);

function update_portfolio_post_type($args, $post_type) {
    if ($post_type === 'portfolio') {
        if (!$args['has_archive']) {
            $args['has_archive'] = true;
            flush_rewrite_rules();
        }
    }
    return $args;
}
