<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<style>
.not-front #page header {
	margin-top: -30px;
}
</style>


<div id="page">
  <header id="masthead" role="banner" style="background: white;">
    <div class="container_12">
      <div class="site-branding grid_4">

 <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      </div>
      <div class="grid_8" style="position: relative;">
        <nav id="navigation" class="main-navigation" role="navigation">
          <div id="main-menu">
            <?php 
              if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
              } else {
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              }
              print drupal_render($main_menu_tree);
            ?>

          </div>
        </nav>
          <a href="/pretraga" class="search_link" style="position: absolute; top: 40px; right: 10px; background: #F47321;
    color: #fff;
    padding: 5px 15px;
    border-radius: 5px;">Pretraži</a>
          <a href="/popuni_profil" class="fill_profile_link" style="position: absolute; top: 40px; right: 120px; background: #F47321;
    color: #fff;
    padding: 5px 15px;
    border-radius: 5px;">Popuni svoj profil</a>

      </div>
    </div>
  </header>


  <?php if ($is_front && theme_get_setting('slideshow_display','corporate_agency')): ?>
  <?php 
    $slide1_head = check_plain(theme_get_setting('slide1_head','corporate_agency'));   $slide1_desc = check_plain(theme_get_setting('slide1_desc','corporate_agency')); $slide1_url = check_plain(theme_get_setting('slide1_url','corporate_agency'));
    $slide2_head = check_plain(theme_get_setting('slide2_head','corporate_agency'));   $slide2_desc = check_plain(theme_get_setting('slide2_desc','corporate_agency')); $slide2_url = check_plain(theme_get_setting('slide2_url','corporate_agency'));
    $slide3_head = check_plain(theme_get_setting('slide3_head','corporate_agency'));   $slide3_desc = check_plain(theme_get_setting('slide3_desc','corporate_agency')); $slide3_url = check_plain(theme_get_setting('slide3_url','corporate_agency'));
  ?>
  <div class="home-slider">
    <div class="cycle-slideshow"
      data-cycle-caption-plugin='caption2' 
      data-cycle-slides="li" 
      data-cycle-fx='scrollHorz' 
      data-cycle-speed='700' 
      data-cycle-timeout='8000' 
      data-cycle-center-horz=true
      data-cycle-center-vert=true
      data-cycle-prev=".prev" 
      data-cycle-next=".next"   
      data-cycle-caption-template="<span class=stitle>{{ptitle}}</span><br><span class=stext>{{ptext}}</span> "      
      data-cycle-pause-on-hover="true" >
      <div class="cycle-caption custom"></div>
      <ul>

        <li <?php if($slide1_head): ?> data-cycle-ptitle="<?php print $slide1_head; ?>" <?php endif; ?>
            <?php if($slide1_desc): ?> data-cycle-ptext="<?php print $slide1_desc; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide1_url); ?>">
          <a class="frmore" href="<?php print url($slide1_url); ?>"> <img src="<?php print base_path() . drupal_get_path('theme', 'corporate_agency') . '/images/slide-image-1.jpg'; ?>"/> </a>
        </li>

        <li <?php if($slide2_head): ?> data-cycle-ptitle="<?php print $slide2_head; ?>" <?php endif; ?>
            <?php if($slide2_desc): ?> data-cycle-ptext="<?php print $slide2_desc; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide2_url); ?>">
          <a class="frmore" href="<?php print url($slide2_url); ?>"> <img src="<?php print base_path() . drupal_get_path('theme', 'corporate_agency') . '/images/slide-image-2.jpg'; ?>"/> </a>
        </li>

        <li <?php if($slide3_head): ?> data-cycle-ptitle="<?php print $slide3_head; ?>" <?php endif; ?>
            <?php if($slide3_desc): ?> data-cycle-ptext="<?php print $slide3_desc; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide3_url); ?>">
          <a class="frmore" href="<?php print url($slide3_url); ?>"> <img src="<?php print base_path() . drupal_get_path('theme', 'corporate_agency') . '/images/slide-image-3.jpg'; ?>"/> </a>
        </li>

      </ul>

      <div class="prev"></div>
      <div class="next"></div>

    </div>
  </div>
  <?php else: ?>
    <div class="headboz"></div>
  <?php endif; ?>

  <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last'] || $page['header']): ?>
    <div class="intro clearfix">
      <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']): ?>
        <?php $preface_col = ( 12 / ( (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_last'] ) ); ?>
        <div id="preface-area">
          <div class="container_12">
            <?php if($page['preface_first']): ?><div class="preface-block grid_<?php print $preface_col; ?>">
              <?php print render ($page['preface_first']); ?>
            </div><?php endif; ?>
            <?php if($page['preface_middle']): ?><div class="preface-block grid_<?php print $preface_col; ?>">
              <?php print render ($page['preface_middle']); ?>
            </div><?php endif; ?>
            <?php if($page['preface_last']): ?><div class="preface-block grid_<?php print $preface_col; ?>">
              <?php print render ($page['preface_last']); ?>
            </div><?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if($page['header']) : ?>
        <div id="header-block">
          <div class="container_12">
            <div class="grid_12">
              <?php print render($page['header']); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div id="main-content" class="container_12 clearfix">
    <?php if($page['sidebar_first']) { $primary_col = 8; } else { $primary_col = 12; } ?>
    <div id="primary" class="grid_<?php print $primary_col; ?>">
      <section id="content" role="main" class="clearfix">
        <?php if (theme_get_setting('breadcrumbs')): ?><?php if ($breadcrumb): ?><div id="breadcrumbs"><?php print $breadcrumb; ?></div><?php endif;?><?php endif; ?>
        <?php print $messages; ?>
        <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
        <div id="content-wrap">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </section>
    </div>
    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar" class="grid_4" role="complementary">
       <?php print render($page['sidebar_first']); ?>
      </aside> 
    <?php endif; ?>
  </div>

  <?php if($page['footer']) : ?>
    <div id="footer-block clearfix">
      <div class="container_12">
        <div class="grid_12">
          <?php print render($page['footer']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <?php $footer_col = ( 12 / ( (bool) $page['footer_first'] + (bool) $page['footer_second'] + (bool) $page['footer_third'] + (bool) $page['footer_fourth'] ) ); ?>
    <div id="bottom" class="clearfix">
      <div class="container_12">
        <?php if($page['footer_first']): ?><div class="footer-block grid_<?php print $footer_col; ?>">
          <?php print render ($page['footer_first']); ?>
        </div><?php endif; ?>
        <?php if($page['footer_second']): ?><div class="footer-block grid_<?php print $footer_col; ?>">
          <?php print render ($page['footer_second']); ?>
        </div><?php endif; ?>
        <?php if($page['footer_third']): ?><div class="footer-block grid_<?php print $footer_col; ?>">
          <?php print render ($page['footer_third']); ?>
        </div><?php endif; ?>
        <?php if($page['footer_fourth']): ?><div class="footer-block grid_<?php print $footer_col; ?>">
          <?php print render ($page['footer_fourth']); ?>
        </div><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

 <!-- <footer id="colophon" class="site-footer clearfix" role="contentinfo">
    <div class="container_12">
      <div class="fcred grid_12">
      </div>
    </div>
  </footer>-->

</div>




<!-- For social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#overlay {
	background: #23272b; 
	color: #fff;
	padding-top: 30px;
    padding-bottom: 20px;
    width: 100%;	
}	

p {
	font-family: sans-serif;
	font-size: 80%;
}

h2 {
	font-family: 'Arial';
}

.contact_info {
	display: flex;
	justify-content: space-around;
	flex-wrap: wrap;
}

.contact_info h2, .included_organisations h2 {
	/* Sve iskopirano sa civicatalyst-a */
	padding-bottom: 10px;
	color: #fff;
	font-family: 'Arial';
	font-weight: 1000;
	letter-spacing: 1px;
	font-style: normal;
	font-size: 20px;
	margin-top: 20px;
	margin-bottom: 10px;
}

#soc a:link{
	text-decoration: none;
}


.fa {
	background: black;
	color: #fff;

}

.included_organisations h2 {
	text-align: center;
	font-size: 1.7em;
	font-weight: 500;
}

.org_suport_container {
	display: flex;
	align-items: center;
	justify-content: space-around;
	flex-wrap: wrap;
}

.org_suport_container img {
	width: 160px;
	max-height: 100px;
}
#usaid {
	width: 225px;
}

.catalyst_balkans img {
	width: 240px;
}

.catalyst_balkans p {
	text-align: center;
}

#footer {
	/*background: #1F1D1C;*/
	background: #23272b; 
	color: #fff; 
	font-weight: 400; 
	text-align: center; 
	padding: 25px 10px 5px;
}

#disclaimer {
	font-style: italic;
}

#soc i{
	background: #23272b; 
}

#soc a {
	margin-right: 5px;
	margin-left: 3px;
}

.org_suport_container div {
	margin-left: -15px;	
}



#brit_embassy {
	margin-right: -40px;
	margin-left: 30px;
}

#usaid_div {
	margin-left: 30px;
}

</style>

<div id="overlay">
	
	


	<div class="included_organisations">
		
		<!-- Podrzali -->
		
		<div class="org_suport">
			<h2>Podržali</h2>
			<div class="org_suport_container">							
				<div id="usaid_div">
						<a href="https://www.usaid.gov/" target="_blank">
	 					<img id="usaid" src="https://civicatalyst.org/images/logo-usaid.png" class="img-responsive" alt="home img">
					</a>
				</div>
				<div id="brit_embassy">
					<a href="https://www.gov.uk/world/organisations/british-embassy-belgrade.sr" target="_blank">
						<img src="https://civicatalyst.org/images/britanska_ambasada.svg" class="img-responsive" alt="home img">
					</a>
				</div>
				<div id="ukaid">
					<a href="https://www.ukaiddirect.org/" target="_blank">
						<img src="https://civicatalyst.org/images/ukaid-seeklogo.svg" class="img-responsive" alt="home img">
					</a>
				</div>
				<div>
					<a href="https://www.worldbank.org/" target="_blank">
						<img src="https://civicatalyst.org/images/world-bank-group-seeklogo.svg" class="img-responsive" alt="home img">
					</a>
				</div>
				<div>
						<a href="https://www.mott.org/" target="_blank">
	 					<img src="https://civicatalyst.org/images/logo-mott.png" class="img-responsive" alt="home img">
					</a>
				</div>
				<div>
					<a href="https://www.ite.gov.rs/" target="_blank">
						<img src="https://civicatalyst.org/images/eUprava_logo-4CPS-Lat.svg" class="img-responsive" alt="home img">
					</a>
				</div>
				<div>
					<a href="http://www.rs.undp.org/content/serbia/sr/home.html" target="_blank">
						<img src="https://civicatalyst.org/images/UNDP_logo.svg" class="img-responsive" alt="home img">
					</a>
				</div>
			</div>	
		</div>
		
		<!-- Realizovao -->
		<div class="catalyst_balkans">
			<h2>Realizovao</h2>
			<p>
				<a href="http://www.catalystbalkans.org/" target="_blank">
					<img src="https://civicatalyst.org/images/logo-catalyst.png" class="img-responsive">
				</a>
			</p>
		</div>
		


	</div><!-- END OF included_organisations -->

	<div class="contact_info">
		<!-- Contact Catalyst -->
		<div class="contact_catalyst">

			<h2>KONTAKT</h2>
			<p>Fondacija Katalist | Takovska 38/23, Beograd</p>
			<p>+381 11 405 7511</p>
			<p>info@catalystbalkans.org</p>

		</div><!-- END Contact Catalyst -->


		<!-- Socail network -->
		<div class="contact_socail">

			<h2>DRUŠTVENE MREŽE</h2>
			<div id="soc">
				<a href="https://www.facebook.com/CatalystBalkans/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a><a href="https://www.instagram.com/catalystbalkans/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a><a href="https://twitter.com/catalystbalkans" target="_blank"><i class="fa fa-twitter fa-2x"></i></a><a href="https://www.linkedin.com/company/3332370/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>			
			</div><!-- END #soc -->
		</div><!-- END Contact Social -->
	</div>



</div>

<div id="footer">
      <div class="container">
        <div class="row">
        		<p id="disclaimer">*Za sadržaj ovog vebsajta odgovorna je isključivo Fondacija Katalist, a izneti stavovi ne predstavljaju nužno stavove Britanske vlade, Svetske banke, Kancelarije za IT i e-Upravu, Ujedinjenih nacija i Programa za razvoj Ujedinjenih nacija.</p>
          <p>Copyright © 2019 Catalyst Balkans</p>
        </div>
      </div>
</div>
