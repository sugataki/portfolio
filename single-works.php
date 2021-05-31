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

      <div class="flex">
        <div class="img-box"><?php the_post_thumbnail("large"); ?></div>
      </div>

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

        <?php if (get_field("リンク先")) :  ?>
          <a class="link-btn site-link-btn" href="<?php the_field("リンク先") ?>" target="_blank" rel="noopener noreferrer">サイトを閲覧する<i class="fas fa-chevron-right"></i></a>
        <?php endif; ?>
        <a class="anchor-link link-btn back-btn" href="<?php echo home_url("/"); ?>"><i class="fas fa-chevron-left"></i>戻る</a>
      </div>

  </div>
<?php endwhile ?>
</div>

<?php get_template_part("components/footer"); ?>

<?php get_footer(); ?>

</body>

</html>