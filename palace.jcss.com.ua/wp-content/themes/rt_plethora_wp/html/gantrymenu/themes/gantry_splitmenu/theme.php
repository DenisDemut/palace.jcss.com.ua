<?php
/**
 * @version   1.2 January 30, 2015
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
 
class GantrySplitMenuTheme extends AbstractRokMenuTheme {

	protected $defaults = array(
		'dropdown_enable_js' => 1,
		'dropdown_opacity' => 1,
		'dropdown_effect' => 'slidefade',
		'dropdown_hidedelay' => 500,
		'dropdown_menu_animation' => 'Quad.easeOut',
		'dropdown_menu_duration' => 400,
		'dropdown_centeredOffset' => 0,
		'dropdown_tweakInitial_x' => -3,
		'dropdown_tweakInitial_y' => -0,
		'dropdown_tweakSubsequent_x' => 0,
		'dropdown_tweakSubsequent_y' => 1,
		'dropdown_tweak-width' => 0,
		'dropdown_tweak-height' => 0,
		'dropdown_enable_current_id' => 0,
		'class_sfx' => '',
		'dropdown_responsive-menu' => 'panel'
	);

	public function getFormatter( $args ) {
		require_once( dirname( __FILE__ ) . '/formatter.php' );
		return new GantrySplitMenuFormatter( $args );
	}

	public function getLayout( $args ){
		require_once( dirname( __FILE__ ) . '/layout.php' );
		return new GantrySplitMenuLayout( $args );
	}
}
