<?php
/**
 * IDE Stubs for WordPress
 * 
 * This file is meant purely to satisfy IDE static analysis (like Intelephense) 
 * so it doesn't complain about "Call to unknown function" for standard WP functions.
 */

if (!function_exists('add_action')) {
    function add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
    }
    function register_rest_field($object_type, $attribute, $args = [])
    {
    }
    function register_post_meta($object_type, $meta_key, $args, $deprecated = null)
    {
    }

    /** @return mixed */
    function get_post_meta($post_id, $key = '', $single = false)
    {
        return '';
    }

    /** @return int|bool */
    function update_post_meta($post_id, $meta_key, $meta_value, $prev_value = '')
    {
        return true;
    }

    /** @return string */
    function sanitize_text_field($str)
    {
        return '';
    }

    /** @return bool */
    function current_user_can($capability, ...$args)
    {
        return true;
    }

    class WP_Error
    {
        public function __construct($code = '', $message = '', $data = '')
        {
        }
    }
}