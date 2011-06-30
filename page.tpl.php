<div id="container">
  <div id="branding">
    <div id="branding-logo">
      <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>
    </div>
    <h1><?php print $site_name; ?></h1>
  </div>
  <div id="search">
  </div>

  <div id="navigation-main">
    <?php print render($page['header']); ?>
  </div>

  <div id="breadcrumb">
    <?php print $breadcrumb; ?>
  </div>

  <div id="content">
    <div id="content-main">
	  <div class="element-invisible"></div>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><span><?php print $title; ?></span></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php if ($messages): ?><div id="console" class="clearfix"><?php print $messages; ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
    <div id="content-sub">
      <?php print render($page['sidebar_second']); ?>
    </div>
  </div>
  <div id="siteinfo">
    <div id="siteinfo-legal">
      <?php print render($page['footer']); ?>     
    </div>
  </div>

  <div id="navigation-section">
    <ul>
      <li><a href="http://vih.dk/">Vejle Idrætshøjskole</a></li>
    </ul>
  </div>
</div>

