<?php
/**
 * ACF Builder
 */
require locate_template('./vendor/autoload.php', false, false);

include 'acf/flexible.php';

include 'acf/custom-options.php';

include 'acf/hero.php';

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}