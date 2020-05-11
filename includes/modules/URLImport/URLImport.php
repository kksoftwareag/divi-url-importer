<?php

class URLIMP_URLImport extends ET_Builder_Module
{

    public $slug       = 'vuein_vuejs';
    public $vb_support = 'on';

    protected $module_credits = array(
        'module_uri' => '',
        'author'     => 'Tim Gebauer by K&K',
        'author_uri' => '',
    );
    public function init()
    {
        $this->name = esc_html__('URL Importer', 'urlimp-url-importer');
    }

    public function get_fields()
    {
        return array(
            'url'     => array(
                'label'           => esc_html__('Import URL', 'urlimp-url-importer'),
                'type'            => 'text',
                'option_category' => 'basic_option',
                'description'     => esc_html__('URL of the file to render', 'urlimp-url-importer'),
                'toggle_slug'     => 'main_content',
            ),
        );
    }

    public function render($unprocessed_props, $content = null, $render_slug)
    {
        $VueJSIndexFileToRender = file_get_contents($this->props['url']);
        return ($VueJSIndexFileToRender);
    }
}

new URLIMP_URLImport;
