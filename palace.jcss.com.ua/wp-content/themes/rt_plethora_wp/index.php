<?php
/**
 * @version   1.2 January 30, 2015
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined( 'ABSPATH' ) or die( 'Restricted access' );

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
<?php /* Head */
	$gantry->displayHead();
?>
<?php /* Force IE to Use the Most Recent Version */ if ($gantry->browser->name == 'ie') : ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php endif; ?>

<?php
	$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
	if ($gantry->browser->name == 'ie'){
		if ($gantry->browser->shortversion == 8){
			$gantry->addScript('html5shim.js');
			$gantry->addScript('canvas-unsupported.js');
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
<body <?php echo $gantry->displayBodyTag(); ?>>
	<div id="rt-page-surround">
		<?php /** Begin Header Surround **/ if ($gantry->countModules('top') or $gantry->countModules('header') or $gantry->countModules('drawer')) : ?>
		<header id="rt-header-surround">
			<div class="rt-container">
				<?php /** Begin Top **/ if ($gantry->countModules('top')) : ?>
				<div id="rt-top">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('top','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Top **/ endif; ?>
				<?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
				<div id="rt-header">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('header','standard','standard'); ?>
						<!--  Custom header text -->
						<h6 class="manual-phone">call us: 1 (800) 959-1008</h6>
						<span class="logo-text">Lorem ipsum dolor</span>
						<!--  End custom header text -->
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Header **/ endif; ?>
				<?php /** Begin Drawer **/ if ($gantry->countModules('drawer')) : ?>
				<div id="rt-drawer">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('drawer','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Drawer **/ endif; ?>
			</div>
		</header>
		<?php /** End Header Surround **/ endif; ?>

		<?php /** Begin Showcase Section **/ if ($gantry->countModules('breadcrumb') or $gantry->countModules('showcase') or $gantry->countModules('feature')) : ?>
		<section id="rt-showcase-surround">
			<div class="rt-container">
				<?php /** Begin Breadcrumbs **/ if ($gantry->countModules('breadcrumb')) : ?>
				<div id="rt-breadcrumbs">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('breadcrumb','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Breadcrumbs **/ endif; ?>
				<?php /** Begin Showcase **/ if ($gantry->countModules('showcase')) : ?>
				<div id="rt-showcase">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('showcase','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Showcase **/ endif; ?>
				<?php /** Begin Feature **/ if ($gantry->countModules('feature')) : ?>
				<div id="rt-feature">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('feature','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Feature **/ endif; ?>
			</div>
		</section>
		<?php /** End Showcase Section **/ endif; ?>

		<?php /** Begin FullWidthTop **/ if ($gantry->countModules('fullwidthtop')) : ?>
		<div id="rt-fullwidthtop">
			<?php echo $gantry->displayModules('fullwidthtop','basic','standard'); ?>
			<div class="clear"></div>
		</div>
		<?php /** End FullWidthTop **/ endif; ?>

		<?php /** Begin Main Section **/ ?>
		<section id="rt-mainbody-surround">
			<div class="rt-container">
				<?php /** Begin Utility **/ if ($gantry->countModules('utility')) : ?>
				<div id="rt-utility">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('utility','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Utility **/ endif; ?>
				<?php /** Begin Expanded Top **/ if ($gantry->countModules('expandedtop')) : ?>
				<div id="rt-expandedtop">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('expandedtop','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Expanded Top **/ endif; ?>
				<?php /** Begin Main Top **/ if ($gantry->countModules('maintop')) : ?>
				<div id="rt-maintop">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('maintop','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Main Top **/ endif; ?>

				<!--Custom section Read more-->
					<section class="info-section">
					  <article>
						<h3 style="text-align: center;">What makes Custom Glass so remarkable?</h3>
						<p><strong>Custom glass</strong> is a quite remarkable product that most of us take for granted because it is such an integral part of our lives. You heat sand, you get glass. Sounds simple, yet apart from a cataclysmic  event or a stray bolt of lightening this is not something ordinary individuals ever encounter.<br>We come across it daily in windows, windshields, spectacles, decorative elements, buildings, hi-tech applications, and so forth. This unique material has several properties or characteristics, which make it an ideal choice for a wide range of unique products increasingly being used in variety of fields.</p>
						
							<h4 style="text-align: center;">Characteristics of custom glass</h4>
							<ul class="info-block">
								<li><p><img style="float:right; height:335px; margin: -50px 38px 20px 20px; width:301px" src="http://palace.jcss.com.ua/wp-content/uploads/2016/01/Art-Glass-PGA249_PGA302y.jpg" alt="info_image"></p></li>
								<li><p>Glass is what is known as anon-crystalline or amorphous solid because there is no long-range order in terms of the molecule’s positioning.</p></li>
								<li><p>When heated, it undergoes a transition from solid or hard, back to liquid or molten. More significantly, transition does not affect the material’s structure much. In other words, material can be worked, altered, even reworked in order to produce new compounds.</p></li>
								<li><p>Many people are familiar with the fact that colours, pigments or other elements can be introduced into molten substance and lead to creation and proliferation of beautiful <strong>custom stained glass</strong>, beautiful vases, coloured dinnerware and other objects that are both visually pleasing and functional.</p></li>
							</ul>
						
						
							<h4 style="text-align: center;">Why this material is so unique and valuable?</h4>
							<ul class="info-block">
								<li><p>Several qualities of this everyday material can be altered, which again means it is a versatile and exciting substance.
								<img style="float:left; height:258px; margin: 20px 38px 20px 20px; width:434px" src="http://palace.jcss.com.ua/wp-content/uploads/2015/12/Art-Glass-PGC108_PGC533.jpg" alt="info_image"></p></li>
								<li><p>Reference has already been made to the fact that colour can be used for either functional or aesthetic reasons.</p></li>
								<li><p>It is a very hard substance and <strong>custom tempered glass</strong> can be produced that is abrasion resistant. It will also meet the safety standards for glass applications and make your installations more professional.</p></li>
								<li><p>Some glass can be made resistant to bases and acids or heat and temperature.</p></li>
								<li><p>Glass has a refractive index and dispersion properties that also lend themselves to optical and fibre optic technologies. That allows different light diffusion options on glass products.</p></li>
								<li><p>Thermal properties can be altered in terms of expansion rates, melt temperatures, and overall stability.</p></li>
							</ul>
						
						
							<img style="float:right; height:368px; margin: 6px 38px 20px 20px; width:252px" src="http://palace.jcss.com.ua/wp-content/uploads/Glass-Shower-Door-PGA104.jpg" alt="image info">
							<p><strong>Custom glass</strong> is now beingSustom glass shower door with blue water drop and green leaf-PGA104 widely used in various home decor projects, buildings, and even high-tech applications. Most people add elements of glass to their homes by displaying beautiful vases, ornamental figurines, decorative bowls, and installing <strong>custom glass tabletops</strong>, custom glass shower doors, windows, partitions, backsplashes and much more. Although this material has already been utilized in electronics, automotive, medical and communications fields (to name just a few), new and exciting applications are being discovered all the time. It’s exciting to think where things will be in next decades.<br><br>With every new invention of glass technology, the use of remarkable sand substance goes to another level. A glassmaker needs to work with the wonderful qualities of material to create a new product, so the end result has all the required properties to allow the installation perform its desired function and have durability. This creative work is challenging but immensely rewarding for those involved. All of us as end users are the beneficiaries of the such results.<br><br><strong>Our company has wide range of capabilities to assist our customers with projects that require any kind of custom glass products.</strong></p>
					  </article>	
					</section>
				<!--End Custom section Read more-->

				<?php /** Begin Main Body **/ ?>
				<?php echo $gantry->displayMainbody('mainbody','sidebar','standard','standard','standard','standard','standard'); ?>
				<?php /** End Main Body **/ ?>
				<?php /** Begin Main Bottom **/ if ($gantry->countModules('mainbottom')) : ?>
				<div id="rt-mainbottom">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('mainbottom','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Main Bottom **/ endif; ?>
				<?php /** Begin Expanded Bottom **/ if ($gantry->countModules('expandedbottom')) : ?>
				<div id="rt-expandedbottom">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('expandedbottom','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Expanded Bottom **/ endif; ?>
				<?php /** Begin Extension **/ if ($gantry->countModules('extension')) : ?>
				<div id="rt-extension">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('extension','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Extension **/ endif; ?>
			</div>
		</section>
		<?php /** End Main Section **/ ?>

		<?php /** Begin FullWidthBottom **/ if ($gantry->countModules('fullwidthbottom')) : ?>
		<div id="rt-fullwidthbottom">
			<?php echo $gantry->displayModules('fullwidthbottom','basic','standard'); ?>
			<div class="clear"></div>
		</div>
		<?php /** End FullWidthBottom **/ endif; ?>

		<?php /** Begin Footer Section **/ if ($gantry->countModules('bottom') or $gantry->countModules('footer') or $gantry->countModules('copyright')) : ?>
		<footer id="rt-footer-surround">
			<div class="rt-container">
				<?php /** Begin Bottom **/ if ($gantry->countModules('bottom')) : ?>
				<div id="rt-bottom">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('bottom','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Bottom **/ endif; ?>
				<?php /** Begin Footer **/ if ($gantry->countModules('footer')) : ?>
				<div id="rt-footer">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('footer','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Footer **/ endif; ?>
				<?php /** Begin Copyright **/ if ($gantry->countModules('copyright')) : ?>
				<div id="rt-copyright">
					<div class="rt-flex-container">
						<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Copyright **/ endif; ?>
			</div>
		</footer>
		<?php /** End Footer Surround **/ endif; ?>

		<?php /** Begin Debug **/ if ($gantry->countModules('debug')) : ?>
		<div id="rt-debug">
			<div class="rt-flex-container">
				<?php echo $gantry->displayModules('debug','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Debug **/ endif; ?>

		<?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
		<?php echo $gantry->displayModules('analytics','basic','basic'); ?>
		<?php /** End Analytics **/ endif; ?>

		<?php /** Popup Login and Popup Module **/ ?>
		<?php echo $gantry->displayModules('login','login','popup'); ?>
		<?php echo $gantry->displayModules('popup','popup','popup'); ?>
		<?php /** End Popup Login and Popup Module **/ ?>
	</div>
	<?php $gantry->displayFooter(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://palace.jcss.com.ua/wp-content/themes/rt_plethora_wp/js/readmore.js"></script>
<script src="http://palace.jcss.com.ua/wp-content/themes/rt_plethora_wp/js/main.js"></script>


</body>
</html>
<?php
$gantry->finalize();
?>