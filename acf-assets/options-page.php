<?php namespace RazzRemoteInteractiveFloorPlanBrowser;

class OptionsPage
{
    public function __construct()
    {
        add_action('acf/init', [$this, 'acf_init']);
    }

    function acf_init()
    {
        $this->setupOptions();

        $this->setupFields();
    }

    protected function setupOptions()
    {
        acf_add_options_sub_page(array(
            'page_title' => 'Razz Interactive Floor Plan Browser',
            'menu_title' => 'Razz Interactive Floor Plan Browser',
            'parent' => 'options-general.php',
            'capability' => 'manage_options',
        ));
    }

    protected function setupFields()
    {
        acf_add_local_field_group(array(
            'key' => 'group_580fac118e858',
            'title' => 'Razz Interactive Floor Plan Browser Settings',
            'fields' => array(
                array(
                    'key' => 'field_580fac210515a',
                    'label' => 'Property ID',
                    'name' => 'razz-rifpb-property_id',
                    'type' => 'text',
                    'instructions' => 'Enter the Property ID provided by <a href="http://razzinteractive.com" target="_blank">Razz Interactive</a>. Leave blank to deactivate.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-razz-interactive-floor-plan-browser',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));
    }
}