
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr">
    <head>
       
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/style.css" media="screen">


<?php wp_head(); ?>
    </head>
    <body>
      
        <div id="navigation">
    <ul id="navigation_pri">
        <li><a href="<?php bloginfo("url"); ?>">anasayfa</a></li>
    <?php wp_list_pages("title_li=") ?>
    </ul>
</div>