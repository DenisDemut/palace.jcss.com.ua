<?php
/**
 * @version   1.2 January 30, 2015
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined('ABSPATH') or die('Restricted access');

global $gantry;

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));
?>
<!doctype html>
<html xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
	<head>
		<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
		<meta name="viewport" content="width=960px">
		<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
		<meta name="viewport" content="width=1200px">
		<?php else : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php endif; ?>

		<?php
		$gantry->displayHead();

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

		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
		$gantry->addLess('error.less', 'error.css', 4, $lessVariables);

		// Scripts
		if ($gantry->browser->name == 'ie'){
			if ($gantry->browser->shortversion == 8){
				$gantry->addScript('html5shim.js');
				$gantry->addScript('placeholder-ie.js');
			}
			if ($gantry->browser->shortversion == 9){
				$gantry->addInlineScript("if (typeof RokMediaQueries !== 'undefined') window.addEvent('domready', function(){ RokMediaQueries._fireEvent(RokMediaQueries.getQuery()); });");
				$gantry->addScript('placeholder-ie.js');
			}
		}
		if ($gantry->get('layout-mode', 'responsive') == 'responsive') $gantry->addScript('rokmediaqueries.js');
		?>
	</head>
	<body id="rt-error-page" <?php echo $gantry->displayBodyTag(); ?>>
		<div id="rt-page-surround">
			<?php /** Begin Header Surround **/ ?>
			<header id="rt-header-surround">
				<div class="rt-container">
					<?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
					<div id="rt-header">
						<div class="rt-flex-container">
							<?php echo $gantry->displayModules('header','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Header **/ endif; ?>
				</div>
			</header>
			<?php /** End Header Surround **/ ?>

			<?php /** Begin Showcase Section **/ ?>
			<section id="rt-showcase-surround">
				<div class="rt-container">
					<?php /** Begin Showcase **/ ?>
					<div id="rt-showcase">
						<div class="rt-flex-container">
							<div class="rt-error-header">
								<div class="rt-error-code">404</div>
								<div class="rt-error-code-desc"><?php _re('Page not found'); ?></div>
							</div>
							<div class="rt-error-content">
								<div class="rt-error-title"><?php _re('Oh my gosh! You found it!!!'); ?></div>
								<div class="rt-error-message"><?php _re("Looks like the page you're trying to visit doesn't exist.<br />Please check the URL and try your luck again."); ?></div>
								<div class="rt-error-button"><a href="<?php echo home_url(); ?>" class="readon"><span><?php _re('Take Me Home'); ?></span></a></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Showcase **/ ?>
				</div>
			</section>
			<?php /** End Showcase Section **/ ?>

			<?php /** Begin Footer Section **/ ?>
			<footer id="rt-footer-surround">
				<div class="rt-container">
					<?php /** Begin Copyright **/ ?>
					<div id="rt-copyright">
						<div class="rt-flex-container">
							<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Copyright **/ ?>
				</div>
			</footer>
			<?php /** End Footer Surround **/ ?>
		</div>
		<?php $gantry->displayFooter(); ?>
	</body>
</html>
<?php
$gantry->finalize();
?>