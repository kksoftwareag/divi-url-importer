<?php
/*
Plugin Name: Url Importer
Plugin URI:  https://github.com/kksoftwareag/divi-url-importer
Description: Render the source code of specified urls directly into your divi page
Version:     1.0.0
Author:      Tim Gebauer, K&K Software AG
Author URI:  https://github.com/TimGe21
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: urlimp-url-importer
Domain Path: /languages

Url Importer is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Url Importer is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Url Importer. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'urlimp_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function urlimp_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/UrlImporter.php';
}
add_action( 'divi_extensions_init', 'urlimp_initialize_extension' );
endif;
