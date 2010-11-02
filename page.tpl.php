        <div id="container">

            <div id="branding">
                <div id="branding-logo">
                    <a href="http://elevforeningen.vih.dk/"><img src="http://elevforeningen.vih.dk/gfx/images/vih75x151.gif" height="75" alt="Vejle Idrætshøjskoles Elevforening" /></a>
                </div>

                <h1><?php print $site_title; ?></h1>
            </div>

            <div id="search">
            </div>

            <div id="navigation-main">

	     <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                    'attributes' => array('id' => 'gnav'),
                'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible')),
             )); ?>
         <?php endif; ?>
            </div>

            <div id="breadcrumb">
            </div>

            <div id="content">
                <div id="content-main">
                    
	<h1><?php print $title; ?></h1>
 <?php print render($page['content']); ?>

              </div>

                <div id="content-sub">

<?php print render($page['sidebar_second']); ?>
                                    </div>
            </div>

            <div id="siteinfo">
                <div id="siteinfo-legal">
                </div>
            </div>

        <div id="navigation-section">

            <ul>
                                    <li><a href="http://vih.dk/">Vejle Idrætshøjskole</a></li>
                            </ul>
        </div>


        </div>
