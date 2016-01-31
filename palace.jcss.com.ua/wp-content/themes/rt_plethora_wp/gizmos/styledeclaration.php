<?php
/**
 * @version   1.2 January 30, 2015
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined( 'GANTRY_VERSION' ) or die();

gantry_import( 'core.gantrygizmo' );

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryGizmoStyleDeclaration extends GantryGizmo {

	var $_name = 'styledeclaration';
	
	function isEnabled(){
		global $gantry;
		$menu_enabled = $this->get('enabled');

		if (1 == (int)$menu_enabled) return true;
		return false;
	}

	function query_parsed_init() {
		global $gantry;
		$browser = $gantry->browser;

		// Logo
		$css = $this->buildLogo();

		// Less Variables
		$lessVariables = array(
			'accent-color1'             => $gantry->get('accent-color1',            '#E35614'),
			'accent-color2'             => $gantry->get('accent-color2',            '#338DE0'),

			'pagesurround-background'   => $gantry->get('pagesurround-background',  '#F5F5F5'),

			'top-textcolor'             => $gantry->get('top-textcolor',            '#808080'),
			'top-background'            => $gantry->get('top-background',           '#1C1D1F'),

			'header-textcolor'          => $gantry->get('header-textcolor',         '#1C1D1F'),
			'header-background'         => $gantry->get('header-background',        '#FFFFFF'),

			'showcase-textcolor'        => $gantry->get('showcase-textcolor',       '#1C1D1F'),
			'showcase-background'       => $gantry->get('showcase-background',      '#FFFFFF'),

			'feature-textcolor'         => $gantry->get('feature-textcolor',        '#FFFFFF'),
			'feature-background'        => $gantry->get('feature-background',       '#1C1D1F'),

			'maintop-textcolor'         => $gantry->get('maintop-textcolor',        '#A8A8A8'),
			'maintop-background'        => $gantry->get('maintop-background',       '#FFFFFF'),

			'mainbody-overlay'          => $gantry->get('mainbody-overlay',         'light'),

			'extension-textcolor'       => $gantry->get('extension-textcolor',      '#FFFFFF'),
			'extension-background'      => $gantry->get('extension-background',     '#E35614'),

			'bottom-textcolor'          => $gantry->get('bottom-textcolor',         '#FFFFFF'),
			'bottom-background'         => $gantry->get('bottom-background',        '#1C1D1F'),

			'footer-textcolor'          => $gantry->get('footer-textcolor',         '#808080'),
			'footer-background'         => $gantry->get('footer-background',        '#1C1D1F')
		);

		// Section Background Images

		$gantry->addInlineStyle($css);   

		$gantry->addLess('global.less', 'master.css', 7, $lessVariables);

		$this->_disableRokBoxForiPhone();

		// Responsive Layout Styling
		if ($gantry->get('layout-mode')=="responsive") {
			$gantry->addLess('mediaqueries.less');
			$gantry->addLess('menu-dropdown-direction.less');
			$gantry->addLess('grid-flexbox-responsive.less');
		}

		// Fixed Layout Styling
		if ($gantry->get('layout-mode')=="960fixed")   $gantry->addLess('960fixed.less');
		if ($gantry->get('layout-mode')=="1200fixed")  $gantry->addLess('1200fixed.less');

		// RTL
		if ($gantry->get('rtl-enabled') && is_rtl()) $gantry->addLess('rtl.less', 'rtl.css', 8, $lessVariables);

		// Demo Styling
		if ($gantry->get('demo')) $gantry->addLess('demo.less', 'demo.css', 9, $lessVariables);

		// Chart Script
		if ($gantry->get('chart-enabled'))  {
			$gantry->addScript('chart.js');
			if ($gantry->browser->name != 'ie') {
				$gantry->addLess('canvas.less');
			}
		}

		// Add inline css from the Custom CSS field
		$gantry->addInlineStyle($gantry->get('customcss'));
	}

	function buildLogo(){
		global $gantry;

		if ($gantry->get('logo-type')!="custom") return "";

		$source = $width = $height = "";

		$logo = str_replace("&quot;", '"', str_replace("'", '"', $gantry->get('logo-custom-image')));
		$data = json_decode($logo);

		if (!$data){
			if (strlen($logo)) $source = $logo;
			else return "";
		} else {
			$source = $data->path;
		}

		if(!is_ssl()) {
			if(substr($source, 0, 5) == 'https') {
				$source = str_replace('https', 'http', $source);
			}
		} else {
			if(substr($source, 0, 5) != 'https') {
				$source = str_replace('http', 'https', $source);
			}
		}

		$baseUrl = trailingslashit(site_url());

		if (substr($baseUrl, 0, strlen($baseUrl)) == substr($source, 0, strlen($baseUrl))){
			$file = trailingslashit(ABSPATH) . substr($source, strlen($baseUrl));
		} else {
			$file = trailingslashit(ABSPATH) . $source;
		}

		if (isset($data->width) && isset($data->height)){
			$width = $data->width;
			$height = $data->height;
		} else {
			$size = @getimagesize($file);
			$width = $size[0];
			$height = $size[1];
		}

		$source = str_replace(' ', '%20', $source);

		$output = "";
		$output .= "#rt-logo {background: url(".$source.") 50% 0 no-repeat !important;}"."\n";
		$output .= "#rt-logo {width: ".$width."px;height: ".$height."px;}"."\n";

		$file = preg_replace('/\//i', DIRECTORY_SEPARATOR, $file);

		return (file_exists($file)) ? $output : '';
	}

	function _disableRokBoxForiPhone() {
		global $gantry;

		if ($gantry->browser->platform == 'iphone' || $gantry->browser->platform == 'android') {
			$gantry->addInlineScript("window.addEvent('domready', function() {\$\$('a[rel^=rokbox]').removeEvents('click');});");
		}
	}
}