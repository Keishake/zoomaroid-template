<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="keywords" content="<?php echo $metakeywords; ?>" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shorcut icon" type="image/x-ico" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.orange-green.min.css" /> 
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.js"></script>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/comment.js"></script>
  <script type='text/javascript'>var _merchantSettings=_merchantSettings || [];_merchantSettings.push(['AT', '11l5Qu']);(function(){var autolink=document.createElement('script');autolink.type='text/javascript';autolink.async=true; autolink.src='https://autolinkmaker.itunes.apple.com/js/itunes_autolinkmaker.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(autolink, s);})();</script>
  <?php wp_head(); ?>
</head>
<body class="mdl-blog mdl-base">
  <a name="top"></a>
  <div id="page" class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header id="header" class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
      <div class="mdl-layout--large-screen-only mdl-layout__header-row mdl-color--primary-dark nav">
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="/">Top</a>
          <a class="mdl-navigation__link" href="/?page_id=19">About</a>
        </nav>
        <form method="get" class="search-form" id="sform" action="<?php bloginfo('home'); ?>/">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" for="q">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input id="q"value="" class="mdl-textfield__input" type="text" name="s" />
                <label class="mdl-textfield__label" for="q">Search</label>
            </div>
          </div>
        </form>
      </div>
      <div class="mdl-layout__header-row blog-title">
        <h2><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h2>
        <div class="mdl-layout-spacer"></div>
        <div class="blog-frog">
            <img class="frog-gif" src="<?php bloginfo('template_url'); ?>/img/frog-game.gif" />
        </div>
      </div>
      <div class="mdl-layout__header-row mdl-layout--large-screen-only">
        <p><?php bloginfo('description'); ?></p>
      </div>
      
    </header>
