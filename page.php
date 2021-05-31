<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBG4M89" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="door"></div>

  <?php get_template_part("components/header"); ?>

  <div class="wrapper">

    <?php while (have_posts()) : the_post(); ?>
      <h1 class="title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <a class="anchor-link link-btn back-btn" href="<?php echo home_url("/"); ?>"><i class="fas fa-chevron-left"></i>戻る</a>
    <?php endwhile ?>
  </div>

  <?php get_template_part("components/footer"); ?>

  <?php get_footer(); ?>

</body>

</html>