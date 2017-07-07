<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog.BrandonLaDuke</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/master.css">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66276915-4', 'auto');
      ga('send', 'pageview');

    </script>

    <?php wp_head();?>
  </head>
  <body>
    <nav>
      <a href="http://brandonladuke.com">Home</a>
      <a href="http://brandonladuke.com/about">About</a>
      <a href="http://brandonladuke.com/web">Web</a>
      <a href="http://brandonladuke.com/design">Design</a>
      <a href="http://blog.brandonladuke.com">Blog</a>
    </nav>

    <header>
      <h1><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <p><?php echo get_bloginfo( 'description' );?></p>
    </header>
