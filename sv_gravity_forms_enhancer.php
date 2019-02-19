<?php
	/*
	Plugin Name: SV Gravity Forms Enhancer
	Plugin URI: https://straightvisions.com/
	Description: Improves Gravity Forms in various ways.
	Version: 1.1.0
	Author: straightvisions GmbH
	Author URI: https://straightvisions.com
	Text Domain: sv_gravity_forms_enhancer
	License: GPL3
	License URI: https://www.gnu.org/licenses/gpl-3.0.html
	*/

	namespace sv_gravity_forms_enhancer;

	require_once('lib/core/core.php');

	class init extends \sv_core\core{
		const version							= 1100;
		const version_core_match				= 1010;
		
		/**
		 * @desc			Basic setup & information
		 * @return	void
		 * @author			Matthias Bathke
		 * @since			1.0
		 */
		public function __construct(){
			$this->setup(__NAMESPACE__,__FILE__);
			$this->set_section_title('SV Gravity Forms Enhancer');
			$this->set_section_desc('Improves Gravity Forms in various ways');
			$this->set_section_privacy('<p>
				'.$this->get_section_title().' does not collect or share any data from clients or visitors, but integrates into Gravity Forms plugin - that is a form plugin which natural purpose is to aggregate data.<br />
				'.$this->get_section_title().' does not extend the original behavior of Gravity Forms plugin, so there is no additional userdata retrieved through '.$this->get_section_title().'.
			</p>');
		}
	}

	$GLOBALS[__NAMESPACE__]			= new init();