<?php namespace RazzInteractiveFloorPlanBrowser;

/**
 * @wordpress-plugin
 * Plugin Name:       Razz Interactive Floor Plan Browser
 * Plugin URI:        http://razzinteractive.com
 * Description:       Add script to access the Razz Interactive Floor Plan Browser remotely.
 * Version:           1.0.0
 * Author:            Razz Interactive
 * Author URI:        http://razzinteractive.com
 */

require_once(dirname(__FILE__) . '/acf-assets/options-page.php');
require_once(dirname(__FILE__) . '/EnqueueScripts.php');

function activation_hook() {
    if(!class_exists('acf')) {
        throw new \Exception('Please install and activate "Admin Custom Fields" before activating this plugin.');
    }
}
register_activation_hook(__FILE__, 'RazzRemoteInteractiveFloorPlanBrowser\activation_hook');

//Setup Options Page
new OptionsPage();

//Enqueue Styles/Scripts
new EnqueueScripts();