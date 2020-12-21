<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
  <?php get_header(); ?>
</head>

<body>
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
          </div>
        </div>

        <div id="about-me" class="wrapper about-me__wrapper">
          <h2 class="about-me__title title">自己紹介</h2>
          <div class="about-me__inner">
            <div class="about-me__introduction box">
              <h3>ご挨拶</h3>
              <p>
                初めまして。Webエンジニアの須貝と申します。<br />
                現在フロントエンドを中心に、Webサイト制作を行っております。<br />
                「高品質」かつ「迅速」なサイト作りを行っております。<br />
                また、丁寧なコミュニケーションを心がけ、納品までの責任感を持ち、<br />
                クライアント様に安心していただけるようなお仕事をさせていただいています。
              </p>
            </div>
            <div class="about-me__background box">
              <h3>経歴</h3>
              <p>
                高校卒業後、様々な業種を経験し、大手リゾート会社に入社<br />
                そこで主にExcelを使ったマクロの開発を行う<br />
                ITの知識に興味を持ち、仕事をしながらWeb制作の技術を取得<br />
                現在、フロントエンドエンジニアとして活動中
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="skills" class="skills">
        <div class="wrapper skills__wrapper">
          <p class="skills__title title">スキル</p>
          <div class="skills__list">
            <div class="skills__item">
              <i class="fab fa-html5 html"></i>
              <p class="skills__item-title">HTML</p>
              <p class="skills__item-level">Level: ★★★★★</p>
            </div>
            <div class="skills__item">
              <i class="fab fa-css3-alt css"></i>
              <p class="skills__item-title">CSS</p>
              <p class="skills__item-level">Level: ★★★★★</p>
            </div>
            <div class="skills__item">
              <i class="fab fa-sass sass"></i>
              <p class="skills__item-title">SASS</p>
              <p class="skills__item-level">Level: ★★★★★</p>
            </div>
            <div class="skills__item">
              <i class="fab fa-js-square js"></i>
              <p class="skills__item-title">JavaScript</p>
              <p class="skills__item-level">Level: ★★★★★</p>
            </div>
            <div class="skills__item">
              <i class="fab fa-wordpress wordpress"></i>
              <p class="skills__item-title">WordPress</p>
              <p class="skills__item-level">Level: ★★★★★</p>
            </div>
            <div class="skills__item">
              <i class="fab fa-php php"></i>
              <p class="skills__item-title">PHP</p>
              <p class="skills__item-level">Level: ★★★★☆</p>
            </div>
            <div class="skills__item">
              <i class="fab fa-github github"></i>
              <p class="skills__item-title">GitHub</p>
              <p class="skills__item-level">Level: ★★★★★</p>
            </div>
          </div>
        </div>
      </section>

      <section id="service" class="service">
        <div class="wrapper">
          <p class="title service__title">サービス</p>
          <div class="service__list">
            <div class="service__item item1">
              <div class="service__item-imgBox">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-img/coding.png" alt="" />
              </div>

              <div class="service__item-textBox">
                <div class="service__item-popUpInner">
                  <h2 class="service__item-title">コーディング</h2>
                  <p class="service__item-description">
                    LPやコーポレートサイト、ブログなど、 <br />
                    目的に応じた適切なコーディングを行います(レスポンシブ対応可)。<br />
                    また、軽微なコードの修正などにも対応しています。
                  </p>
                </div>

                <p class="service__item-price">
                  【料金目安】<br />
                  コード修正: ¥10,000~/1p<br />
                  LP制作: ¥20,000~/1p
                </p>
              </div>
            </div>

            <div class="service__item item2">
              <div class="service__item-imgBox">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-img/wordpress.jpg" alt="" />
              </div>
              <div class="service__item-textBox">
                <div class="service__item-popUpInner">
                  <h2 class="service__item-title">WordPress</h2>
                  <p class="service__item-description">
                    コーポレートサイトや個人ブログ、およびウェブマガジンなどの<br />
                    WordPressサイトの構築や既存サイトのWordPress移行、<br />
                    コードの修正に対応しております。<br />
                    また、軽微なコードの修正などにも対応しています。
                  </p>
                </div>

                <p class="service__item-price">
                  【料金目安】<br />
                  Wordpress移行: ¥100,000~<br />
                  Wordpress制作: ¥200,000~
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="works" class="works">
        <div class="wrapper">
          <p class="title works__title">作品</p>
          <div class="works__list">
            <div class="works__item">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/works-img/honny-bee.JPG" alt="" />
                <p>
                  【カテゴリー】オリジナルサイト<br />
                  【タイトル】Honny Bee Introduction<br />
                  【スキル】HTML/CSS/jQuery/WordPress<br />
                  【詳細】初心者用ギターのPRサイトです。
                </p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="wrapper contact__wrapper">
          <p class="contact__title title">連絡先</p>
          <a class="anchor-link contact__btn link-btn" href="<?php echo home_url("/contact"); ?>"><i class="far fa-envelope"></i>お問い合わせ</a>
        </div>
      </section>

      <footer>
        <small>Copyright © 2020 SUGAI's Protfolio All Rights Reserved.</small>
      </footer>
    </div>
  </div>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="module"></script>
</body>

</html>