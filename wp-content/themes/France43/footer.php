
	<!-- footer-menu -->
	<div id="footer-menu">
		<div class="inner">
                        
            <?php if (is_front_page()) : ?>
            <h1 class="footer-logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php else : ?>
            <div class="footer-logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></div>
            <?php endif; ?>
            <div class="footer-sub"><?php bloginfo('description'); //ブログのdescriptionを表示 ?></div>

			<nav class="footer-nav">
            <?php
                wp_nav_menu(
                    array(
                    'depth' => 1,
                    'theme_location' => 'global', // グローバルメニューをここに表示すると指定
                    'container' => '',
                    'menu_class' => 'header-list'
                    )
                );
                ?>
			</nav>

		</div><!-- /inner -->
	</div><!-- /footer-menu -->



	<!-- footer -->
	<footer id="footer">
		<div class="inner">
			<div class="copy">&copy; Nepiko's WordPress theme All rights reserved.</div><!-- /copy -->
			<div class="by">Presented by <a href="#" rel="noopener" target="_blank">Nepiko</a>
			</div><!-- /by -->

		</div><!-- /inner -->
	</footer><!-- /footer -->

<?php if(is_single()) : ?>
	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter"
							href="https://twitter.com/share?url=https://example.com/archive/123/&text=記事のタイトルが入ります" rel="nofollow"
							target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/archive/123/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/archive/123/&title=記事のタイトルが入ります"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/archive/123/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/archive/123/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->
<?php endif ?>

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>
    
    <?php wp_footer(); ?>
</body>

</html>
