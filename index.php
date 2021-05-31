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

  <div class="main-contents">
    <section id="top" class="top">
      <video playsinline autoplay muted loop>
        <source src="<?php echo get_template_directory_uri(); ?>/img/top-video.mp4" type="video/mp4" />
      </video>
      <div class="top__title">
        <p>SUGAI's Portfolio</p>
        <p>Web Engineer</p>
      </div>
    </section>
    <div class="content">
      <section class="about-me">
        <div class="header main-header">
          <div class="header__container">
            <h1 class="header__icon scroll-top link-btn">Portfolio</h1>
            <nav class="header__nav">
              <ul>
                <li><a class="about-me-link link-btn">自己紹介</a></li>
                <li><a class="skills-link link-btn">スキル</a></li>
                <li><a class="service-link link-btn">サービス</a></li>
                <li><a class="works-link link-btn">作品</a></li>
                <li>
                  <a class="anchor-link link-btn contact-link-btn" href="<?php echo home_url("/contact"); ?>"><i class="far fa-envelope"></i>お問い合わせ</a>
                </li>
              </ul>
            </nav>
            <div class="burger-btn">
              <span class="bar"></span>
            </div>
          </div>
        </div>

        <div id="about-me" class="wrapper about-me__wrapper">
          <div class="about-me__box">
            <h2 class="about-me__title title">自己紹介</h2>
            <div class="face-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="">
            </div>
          </div>

          <div class="about-me__inner">
            <div class="about-me__introduction box">
              <h3>ご挨拶</h3>

              <div class="detail">
                <h4 class="my-name">須貝 多樹</h4>
                <p>1993年11月生まれ 静岡県出身</p>
              </div>
              <p>
                初めまして。Webエンジニアの須貝 多樹と申します。<br />
                現在フロントエンドを中心に、Webサイト制作を行っております。<br />
                「高品質」かつ「迅速」なサイト作りを行っております。<br />
                また、丁寧なコミュニケーションを心がけ、納品までの責任感を持ち、<br />
                クライアント様に安心していただけるようなお仕事をさせていただいています。
              </p>
            </div>
            <div class="about-me__background box">
              <h3>経歴</h3>
              <p>
                高校卒業後、様々な業種を経験し、Excelのマクロ開発を行う<br />
                そこでITの知識に興味を持ち、仕事をしながらWeb制作の技術を取得<br />
                現在、フロントエンドエンジニアとして活動
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="skills" class="skills">
        <div class="wrapper skills__wrapper">
          <h2 class="skills__title title">スキル</h2>
          <ul class="skills__list">

            <?php $args = [
              "post_type" => "skills",
              "post_status" => "publish",
              "order" => "ASC"
            ];
            $skills = new WP_Query($args);
            while ($skills->have_posts()) : $skills->the_post();
            ?>

              <?php
              $id = get_the_ID();
              $name = get_the_title();
              $className = get_post_meta($id, "クラス名", true);
              $colorCode = get_post_meta($id, "色コード", true);
              $star = get_post_meta($id, "星", true);
              $description = get_post_meta($id, "説明文", true);
              ?>
              <li class="skills__item">
                <div class="skills__item-imageBox">
                  <i class="fab <?php echo $className; ?>" style="color: <?php echo $colorCode; ?>"></i>
                </div>

                <div class="skills__item-textarea">
                  <p class="skills__item-title"><?php echo $name; ?></p>
                  <p class="skills__item-level">Level: <span class="star"><?php echo $star; ?></span></p>
                  <p class="skills__item-description"><?php echo nl2br($description); ?></p>
                </div>

              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section id="service" class="service">
        <div class="wrapper">
          <p class="title service__title">サービス</p>
          <ul class="service__list">

            <?php $args = [
              "post_type" => "service",
              "post_status" => "publish",
              "order" => "ASC"
            ];
            $service = new WP_Query($args);
            while ($service->have_posts()) : $service->the_post();
            ?>

              <?php
              $id = get_the_ID();
              $name = get_the_title();
              $image_url = wp_get_attachment_url(get_post_thumbnail_id($id));
              $description = get_post_meta($id, "説明文", true);

              if (get_post_meta($id, "料金表", true) != "") {
                $price = get_post_meta($id, "料金表", true);
              } else {
                $price = "";
              }

              ?>

              <li class="service__item item1">
                <div class="service__item-imgBox">
                  <img src="<?php echo $image_url; ?>" alt="" />
                </div>

                <div class="service__item-textBox">
                  <div class="service__item-popUpInner">
                    <h2 class="service__item-title"><?php echo $name; ?></h2>
                    <p class="service__item-description">
                      <?php echo nl2br($description); ?>
                    </p>
                  </div>

                  <p class="service__item-price">
                    <span>【料金目安】</span><br>
                    <?php echo nl2br($price); ?>
                  </p>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>

          <p class="service__note">
            ※料金に関しましては、出来る限りの努力を致しますので、<br>
            まずはご一報いただけますと幸いです。
          </p>
        </div>
      </section>

      <section id="works" class="works">
        <div class="wrapper">
          <p class="title works__title">作品</p>
          <ul class="works__list">

            <?php $args = [
              "post_type" => "works",
              "post_status" => "publish",
              "order" => "ASC"
            ];
            $works = new WP_Query($args);
            while ($works->have_posts()) : $works->the_post();
            ?>
              <?php
              $id = get_the_ID();
              $link_url = get_permalink($id);
              $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($id));
              $category = get_post_meta($id, "カテゴリー", true);
              $title = get_post_meta($id, "タイトル", true);
              $skill = get_post_meta($id, "スキル", true);
              $detail = get_post_meta($id, "詳細", true);
              ?>
              <li class="works__item">
                <a class="anchor-link" href="<?php echo $link_url ?>">
                  <img src="<?php echo $thumbnail_url ?>" alt="">

                  <p>
                    【カテゴリー】<?php echo $category ?><br />
                    【タイトル】<?php echo $title ?><br />
                    【スキル】<?php echo $skill ?><br />
                    【詳細】<?php echo wp_trim_words($detail, $num_words = 20, $more = "..."); ?>
                  </p>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="contact">
        <div class="wrapper contact__wrapper">
          <p class="contact__title title">連絡先</p>
          <a class="anchor-link contact__btn link-btn" href="<?php echo home_url("/contact"); ?>"><i class="far fa-envelope"></i>お問い合わせ</a>
        </div>
      </section>

      <?php get_template_part("components/footer"); ?>

    </div>
  </div>

  <?php get_footer(); ?>
</body>

</html>