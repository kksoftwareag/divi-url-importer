<?php

class URLIMP_HelloWorld extends ET_Builder_Module {

	public $slug       = 'urlimp_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://github.com/kksoftwareag/divi-url-importer',
		'author'     => 'Tim Gebauer, K&K Software AG',
		'author_uri' => 'https://github.com/TimGe21',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'urlimp-url-importer' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'urlimp-url-importer' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'urlimp-url-importer' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new URLIMP_HelloWorld;
