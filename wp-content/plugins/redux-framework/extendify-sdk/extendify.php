<?php
 if (!defined('ABSPATH')) { exit; } if (!class_exists('ExtendifySdk') && !class_exists('Extendify')) : final class Extendify { public static $loaded = false; public function __invoke() { if (!apply_filters('extendify_load_library', true) || !apply_filters('extendifysdk_load_library', true)) { return; } if (version_compare(PHP_VERSION, '5.6', '<') || version_compare($GLOBALS['wp_version'], '5.5', '<')) { return; } if (!self::$loaded) { self::$loaded = true; require dirname(__FILE__) . '/bootstrap.php'; if (!defined('EXTENDIFY_BASE_URL')) { define('EXTENDIFY_BASE_URL', plugin_dir_url(__FILE__)); } } } } $extendify = new Extendify(); $extendify(); endif; 