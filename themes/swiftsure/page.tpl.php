<?php

/**
 * @file
 * Swiftsure Theme Implementation of page.tpl.php
 *
 * History
 * 04/07/12 - mackm - created
 */
?>

  <div id="page-wrapper"><div id="page">
     <div id="header">
	    <div id="top-menu"> 
	      <?php print render($page['header']); ?>
	    </div> <!-- /#top-menu -->
	      <?php if ($logo): ?>
	       <div id="logo">
	        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
	          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	        </a>
	       </div>
	      <?php endif; ?>
     </div> <!-- /#header -->
  
    <?php print $messages; ?>
    
        <div id="content" class="column"><div class="section">
        <?php //if ($page['highlighted']): ?><div id="highlighted"><?php //print render($page['highlighted']); ?></div><?php // endif; ?>
        <a id="main-content"></a>
        <?php // print render($title_prefix); ?>
        <?php if ($title && !$is_front): ?><h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php // print render($title_suffix); ?>
        <?php // if ($tabs): ?><div class="tabs"><?php //print render($tabs); ?></div><?php // endif; ?>
        <?php // print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php // print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->
      

    <div id="sidebar-wrapper">

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div> <!-- /#sidebar-wrapper -->
    <?php print $messages; ?>

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div></div> <!-- /#page, /#page-wrapper -->
