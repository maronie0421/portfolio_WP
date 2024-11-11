<?php get_header(); ?>

  <!-- primary -->
  <main id="primary">

  <!-- パンくずリスト -->
  <?php if (function_exists('bcn_display')) : ?>
    <div class="wp-breadcrumb">
      <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
    </div><!-- /wp-breadcrumb -->
  <?php endif; ?>

  <?php if (have_posts()) : // 記事があれば表示 ?>
    <?php while(have_posts()) : // 記事数分ループ ?>
      <?php the_post(); ?>


<article class="wp-works">
<div class="wp-works__header">

  <h1 class="wp-works__title">
		<?php the_title(); ?></h1>

  <div class="wp-works__img">
    <?php the_post_thumbnail(); ?>
	<!-- /entry-img -->

</div>

<!-- wp-works__body -->
<div class="wp-works__body">
  <?php the_content(); ?>
</div><!-- /wp-works__body -->

<!-- 一覧に戻るボタン -->
<!-- <div class="wp-works-btn"><a class="button" href="">一覧に戻る</a></div> -->


<!-- 関連記事 -->
<div class="wp-works__related">
  <div class="related-title">その他制作物</div>

  <?php if( has_category()) {
    $post_cats = get_the_category();
    $cat_ids = array();
    //所属カテゴリーのIDリストを作っておく
    foreach($post_cats as $cat) {
      $cat_ids[] = $cat->term_id;
    }
  }

  $myposts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'posts_per_page' => '3', // 3件を取得
    'post__not_in' => array($post->ID),// 表示中の投稿を除外
    'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
    'orderby' => 'rand' // ランダムに
  ));

		if ($myposts) : ?>
		<div class="related-items">
			<?php foreach($myposts as $post): setup_postdata($post); ?>
			<a class="related-item" href="<?php the_permalink(); ?>">
				<div class="related-item-img">
				<?php
				if (has_post_thumbnail()) {
					// アイキャッチ画像が設定されてればミディアムサイズで表示
					the_post_thumbnail('medium');
				} else {
					// なければnoimage画像をデフォルトで表示
					echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
				}
				?>
				</div>
				<div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
			</a><!-- /related-item -->
			<?php endforeach; wp_reset_postdata(); ?>
		</div><!-- /related-items -->
		<?php endif; ?>
	</div><!-- /wp-works__related -->

</article> <!-- /wp-works -->
	</main><!-- /primary -->
		<?php endwhile; ?>
	<?php endif; ?>


  <?php get_footer(); ?>