<?php get_header(); ?>
<?php get_template_part('template-parts/pick-up-tag'); ?>

    <!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- entries -->
				<div class="entries">
				<?php if (have_posts()) : // 記事があれば表示 ?>
					<?php while(have_posts()) : // 記事数分ループ ?>
						<?php the_post(); ?>
						<!-- entry-item -->
						<a href="<?php the_permalink(); // 記事のリンクを表示 ?>" class="entry-item">
						<!-- entry-item-img -->
						<div class="entry-item-img">
							<?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
							<?php the_post_thumbnail(); ?>
							<?php else : // なければnoimage画像をデフォルトで表示 ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
							<?php endif; ?>
						</div><!-- /entry-item-img -->

						<!-- entry-item-body -->
						<div class="entry-item-body">
							<div class="entry-item-meta">
							<div class="entry-item-tag"><?php my_the_post_category(false) ?></div><!-- /entry-item-tag -->
							<?php // 公開日時を動的に表示する ?>
							<time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
							</div><!-- /entry-item-meta -->
							<h2 class="entry-item-title"><?php the_title(); // タイトルを表示 ?></h2><!-- /entry-item-title -->
							<div class="entry-item-excerpt">
							<p><?php the_excerpt(); // 抜粋を表示 ?></p>
							</div><!-- /entry-item-excerpt -->
						</div><!-- /entry-item-body -->
						</a><!-- /entry-item -->
					<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- /entries -->

				<?php get_template_part('template-parts/pagination'); ?>

			</main><!-- /primary -->
<?php get_sidebar(); ?>


		</div><!-- /inner -->
	</div><!-- /content -->
<?php get_footer() ;?>