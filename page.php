<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
  <?php get_header(); ?>
</head>

<body>
  <div class="door"></div>

  <header class="header">
    <div class="header__container">
      <h1 class="header__icon">Portfolio</h1>
    </div>
  </header>

  <div class="wrapper">

    <a class="anchor-link link-btn back-btn" href="<?php echo home_url("/"); ?>"><i class="fas fa-chevron-left"></i>戻る</a>
    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>

  <footer>
    <small>Copyright © 2020 SUGAI's Protfolio All Rights Reserved.</small>
  </footer>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js" type="module"></script>
</body>

</html>