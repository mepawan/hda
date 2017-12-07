<?php
/**
 * The header for our theme
 *
 */
global $hdaThemOptions;
?><!DOCTYPE html>
<html itemscope itemtype="http://schema.org/AutoDealer" lang="en" class="no-js">
<head>
    <meta property="fb:app_id" content="422599167903681" />
    <meta name="google-site-verification" content="LFGVS21Z6H7yyFJxIQekNiG6JkHeOg723VwY2r1MiNM" />
    <meta name="p:domain_verify" content="1140b65abc21324cb9c054d233182673"/>
    <meta name="msvalidate.01" content="B75DA961522C189DA3E78FE2EB7FC807" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="//www.texasdirectauto.com/static/img/touch/apple-touch-icon-152x152.png" />
    
	<?php wp_head(); ?>

 <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans:400,300,600:latin', 'Oswald:400,300:latin', 'Just+Another+Hand::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>



</head>


<body>

  <!--[if lt IE 8]>
    <p class="browserupgrade">
      You are using an <strong>outdated</strong> browser.
      Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
  <![endif]-->

    

    
<div id="nav-fade-bg"></div>
<div id="mobile-nav">
  <ul>
    <li><a href="#introduction">Find A Car</a></li>
    <li><a href="#suyc">Sell Us Your Car</a></li>
    <li><a href="#finance">Finance</a></li>
    <li><a href="#why">Why TDA?</a></li>
    <li><a href="#locations">Locations</a></li>
    <li><a href="tel:832-225-3686"><i class="icon-live-help"></i> Need Help? We're here 24/7</a></li>
  </ul>
</div>
<header>
  <div class="main">
    <button id="mobile-nav-trigger"><i class="icon-menu"></i></button>
    <div id="logo" itemprop="legalName">
		<a href="<?php home_url();?>">
			<img src="<?php if(isset($hdaThemOptions->theme_options['logo']) && $hdaThemOptions->theme_options['logo']) { echo $hdaThemOptions->theme_options['logo'];} else { echo get_template_directory_uri().'/assets/images/hda-logo.png';}?>" alt="Texas Direct Auto">
		</a>
    </div>
    <nav>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      <!--ul>
        <li><a href="#introduction">Find A Car</a></li>
        <li><a href="#suyc">Sell Us Your Car</a></li>
        <li><a href="#finance">Finance</a></li>
        <li><a href="#why">Why TDA?</a></li>
        <li><a href="#locations">Locations</a></li>
        <li id="need_help"><a href="javascript:void(0)"><i class="icon-live-help"></i> Need Help?</a></li>
      </ul-->
    </nav>
  </div>
</header>
<div class="helper_tool">
  <div class="helper-content">
    <a href="javascript:void(0">We're here 24/7</a>
    <a href="tel:832-225-3686"><i class="icon-phone-android"></i> 832-225-3686</a>
  </div>
</div>