<?php namespace RazzRemoteInteractiveFloorPlanBrowser;

class EnqueueScripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_scripts()
    {
        if(!function_exists('get_field')) return;

        $property_id = get_field('razz-rifpb-property_id', 'option');

        if(!$property_id) return;

        wp_enqueue_script('razz-remote-interactive-floor-plan-browser', "http://apt.razzinteractive.com/{$property_id}?widget", ['jquery'], '1.0.0', true);
    }
}