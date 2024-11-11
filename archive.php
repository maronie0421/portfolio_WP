<?php get_header(); ?>

<!-- works -->
        <section id="works" class="works section js-in-view fade-in-up">
          <div class="works__inner inner wp-works__inner">
            <h3 class="heading section__head wp-works__head">Works</h3>


            <!-- パンくずリスト -->
             <?php if (function_exists('bcn_display')) : ?>
            <div class="wp-breadcrumb">
            <?php bcn_display(); ?>
            </div><!-- /wp-breadcrumb -->
            <?php endif; ?>


            <div class="genre-nav">
              <div class="genre-nav-link"><a href="http://myportfolio.local/category/all/">ALL</a></div>
              <?php $genre_terms = get_terms('genre', array('hide_empty'=>false)); ?>
              <?php foreach($genre_terms as $genre_term) : ?>
                <div class="genre-nav-link"><a href="<?php echo get_term_link($genre_term, 'genre'); ?>"><?php echo $genre_term->name; ?></a></div>
              <?php endforeach; ?>
            </div>


            <div class="works__content section__content wp-works__content">
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