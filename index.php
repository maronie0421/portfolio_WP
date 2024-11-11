<?php get_header(); ?>

<!-- first view -->
  <main class="main"><!-- mainタグの中にheader下～footer上までのコンテンツ囲う -->
    <div class="fv">
      <div class="fv__inner inner">
        <div class="fv__content">
          <div class="fv__name">KIE YAMAGUCHI</div>
          <div class="fv__title">MY PORTFOLIO</div>
            <div class="fv__message">
              <h2 class="fv__slogan">UPDATE</h2>
                <p class="fv__text">
                  時代の変化に対応し、必要とされる人財へ。<br>
                  常に自分自身をアップデートしていく。
                </p>
            </div>
        </div>
      </div>
    </div>
    <!-- /first view -->


    <!-- about -->
    <section id="about" class="about section js-in-view fade-in-up">
      <div class="about__inner inner">
        <h3 class="heading section__head">About</h3>

        <div class="about__content section__content">
          <div class="about__image"><img src="<?php echo get_template_directory_uri() ?>/img/profile-img.png" alt=""></div>

          <div class="about__message">
            <p class="about__name">Kie Yamaguchi</p>
            <p class="about__text">
              1992年生まれ。千葉県出身。<br>
              人の役に立てる仕事がしたいと思い医療機関へ入職。現在8年目。<br>
              相談事務員として、患者や家族が抱える入院生活や退院後の不安など様々な相談に対応。<br class="hidden-sm">
              仕事をしながら、2024年3月よりコーダーを目指してオンラインスクール"デイトラ"でWeb制作の学習を開始。<br class="hidden-sm">
              趣味は猫イベントに参加すること、野球観戦、手芸。<br class="hidden-sm">
              自分のスキルを活かして"こんなWebサイトをつくりたい"というクライアントの想いを形にできるコーダーになりたいです。<br class="hidden-sp">
            </p>

            <div class="about__button">
              <a href="<?php echo home_url(''); ?>/about_more/" class="button">view more</a>
            </div>

          </div>
        </div>

      </div>
      </section>
      <!-- about -->




      <!-- skill -->
       <section id="skill" class="skill section js-in-view fade-in-up">
        <div class="skill__inner inner">
          <h3 class="heading section__head">Skill</h3>

          <div class="skill__content section__content">

            <div class="skill__icons--top">
              <div class="skill__icon">
                <i class="fa-brands fa-wordpress-simple"></i>
                <p>WordPress</p>
              </div>

              <div class="skill__icon">
                <i class="fa-brands fa-php"></i>
                <p>PHP</p>
              </div>

              <div class="skill__icon">
                <i class="fa-brands fa-js"></i>
                <p>JavaScript</p>
              </div>

              <div class="skill__icon">
                <i class="fa-brands fa-figma"></i>
                <p>Figma</p>
              </div>
            </div>

            <div class="skill__icons--bottom">
              <div class="skill__icon">
                <i class="fa-brands fa-html5 fa-lg"></i>
                <p>HTML</p>
              </div>

              <div class="skill__icon">
                <i class="fa-brands fa-sass"></i>
                <p>SCSS</p>
              </div>

              <div class="skill__icon">
                <i class="fa-brands fa-github"></i>
                <p>Github</p>
              </div>
            </div>

            <div class="skill__message">
              <p class="skill__title">- HTML CSS -</p>
              <p class="skill__text">
                デザインカンプからのコーディング、JavaScriptを使ってサイトに動きをつけることができます。
                コードを見た時にわかりやすいclass名をつけ、繰り返し適用するものは共通パーツを作成し、保守性を意識したwebサイト制作を心掛けています。
                レスポンシブでは様々なデバイスでデザイン崩れが生じていないか、Chrome拡張機能「Perfect Pixel」を使ってデザインカンプを忠実に再現できているか丁寧に確認をします。
              </p>
              <br>
              <p class="skill__title">- WordPress -</p>
              <p class="skill__text">
                WordPressを使って静的サイトを動的サイトにできます。
                テーマ、プラグインを使ったサイト作成、オリジナルデザインでWordpressサイトを作ることができます。
              </p>

            </div>
          </div>

        </div>
       </section>
       <!-- /skill -->

       <!-- works -->
        <section id="works" class="works section js-in-view fade-in-up">
          <div class="works__inner inner">
            <h3 class="heading section__head">Works</h3>
            <div class="works__content section__content">
              <div class="works__cards">
                <?php if (have_posts()) : // 記事があれば表示 ?>
                  <?php while(have_posts()) : // 記事数分ループ ?>
                    <?php the_post(); ?>
                          <a href="<?php the_permalink(); // 記事のリンクを表示 ?>" class="works__card works-card">
                        <div class="works-card__image">
                          <?php the_post_thumbnail(); //サムネイル表示?>
                        </div>
                        <?php // カテゴリー１つ目の名前を表示 ?>
                            <?php $category = get_the_category(); ?>
                            <div class="works-card__body">
                            <?php if ($category[0]) : ?>
                            <div class="works-card__category"><?php echo $category[1]->cat_name; ?></div>
                            <?php endif; ?>
                          <p class="works-card__title"><?php the_title(); ?></p>
                        </div>
                      </a>
                  <?php endwhile; ?>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </section>
        <!-- /work -->

<?php get_footer(); ?>






</div><!-- /entry-tag-items -->