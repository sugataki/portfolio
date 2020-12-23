<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/work.css" />
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
    <?php while (have_posts()) : the_post(); ?>
      <div class="container"><?php the_content(); ?>

        <div class="img-box"><?php the_post_thumbnail("large"); ?></div>

        <div class="custom_field">
          <dl>
            <dt>【カテゴリー】</dt>
            <dd><?php the_field("カテゴリー"); ?></dd>
          </dl>
          <dl>
            <dt>【タイトル】</dt>
            <dd><?php the_field("タイトル"); ?></dd>
          </dl>
          <dl>
            <dt>【スキル】</dt>
            <dd><?php the_field("スキル"); ?></dd>
          </dl>
          <dl>
            <dt>【詳細】</dt>
            <dd class="detail-text"><?php the_field("詳細"); ?></dd>
          </dl>
        </div>

        <div class="inner">

          <a class="link-btn site-link-btn" href="<?php the_field("リンク先") ?>" target="_blank" rel="noopener noreferrer">サイトを閲覧する<i class="fas fa-chevron-right"></i></a>
          <a class="anchor-link link-btn back-btn" href="<?php echo home_url("/"); ?>"><i class="fas fa-chevron-left"></i>戻る</a>
        </div>

      </div>
    <?php endwhile ?>
  </div>

  <footer>
    <small>Copyright © 2020 SUGAI's Protfolio All Rights Reserved.</small>
  </footer>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/work.js" type="module"></script>
</body>

</html>