s<!DOCTYPE html>
<html>
 <head>
   <meta charset="<?php bloginfo('Charset');?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>


    <header class="site_header">
      <h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
      <h5><?php bloginfo('description');?></h5>
      </header>
