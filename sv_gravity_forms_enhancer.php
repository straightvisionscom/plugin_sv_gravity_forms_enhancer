<?php
	/*
	Plugin Name: SV Gravity Forms Enhancer
	Description: Improves Gravity Forms in various ways.
	Version: 1.3.10
	Plugin URI: https://straightvisions.com/
	Author: straightvisions GmbH
	Author URI: https://straightvisions.com
	Text Domain: sv_gravity_forms_enhancer
	Domain Path: /languages
	License: GPL3
	License URI: https://www.gnu.org/licenses/gpl-3.0.html
	Domain Path: /languages
	*/

	namespace sv_gravity_forms_enhancer;

	$min_php = '7.0.0';
	$name = 'SV Gravity Forms Enhancer';

	if(version_compare( phpversion(), $min_php, '>=' )) {
		class init extends \sv_core\core{
			const version							= 1310;
			const version_core_match				= 3127;

			/**
			 * @desc			Basic setup & information
			 * @return	void
			 * @author			Matthias Bathke
			 * @since			1.0
			 */
			public function __construct(){
				if(!$this->setup( __NAMESPACE__, __FILE__ )){
					return false;
				}
				$this->set_section_title('SV Gravity Forms Enhancer');
				$this->set_section_desc('Improves Gravity Forms in various ways');
				$this->set_section_privacy('<p>
					'.$this->get_section_title().' does not collect or share any data from clients or visitors, but integrates into Gravity Forms plugin - that is a form plugin which natural purpose is to aggregate data.<br />
					'.$this->get_section_title().' does not extend the original behavior of Gravity Forms plugin, so there is no additional userdata retrieved through '.$this->get_section_title().'.
				</p>');
			}
		}

		$GLOBALS[__NAMESPACE__]			= new init();
	}else{
		require_once('lib/core/php_version.php');
		add_action('init', function(){
			\deactivate_plugins(plugin_basename( __FILE__ ) );
		});
	}