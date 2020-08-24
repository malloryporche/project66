<?php

if(!function_exists('depot_mikado_load_modules')) {
    /**
     * Loades all modules by going through all folders that are placed directly in modules folder
     * and loads load.php file in each. Hooks to depot_mikado_after_options_map action
     *
     * @see http://php.net/manual/en/function.glob.php
     */
    function depot_mikado_load_modules() {
        foreach(glob(MIKADO_FRAMEWORK_ROOT_DIR.'/modules/*/load.php') as $module_load) {
            include_once $module_load;
        }
    }

    add_action('depot_mikado_before_options_map', 'depot_mikado_load_modules');
}