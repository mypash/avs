<?php
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="main-contents-title">
		ニュース<span>（最近の活動ご紹介）</span>
	</h2>
	<div class="contents-container">
		<ul class="news-posts">
			<?php $posts = get_posts(array('orderby' => 'post_modified', 'numberposts' => 3)); //var_dump($posts); ?>
			<?php foreach ($posts as $post) { the_post(); ?>
				<li>
					<?php if (has_post_thumbnail()){ the_post_thumbnail('thumbnail', array('class'=>'posts-image')); } ?>
					<div class="content">
						<h3 class="title"><?php the_title(); ?></h3>
						<div class="desc">
							<?php
							$content = get_the_content();
							$content = preg_replace("/<a.*<img[^>]+\>/i", " ", $content);
							$content = preg_replace('/\n|\r|\r\n/', "", $content);
							$content = strip_tags($content);
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							$content = preg_replace('/^[ 　]+/u', '', $content);
							$content = preg_replace('/[ 　]+$/u', '', $content);
							echo mb_substr($content, 0, 30);
							?>

							<div class="aright"><a href="<?php echo get_permalink(); ?>">続きを見る <i class="fa fa-angle-double-right"></i></a></div>
						</div>
					</div>
					<div class="posts-info">
						<h4 class="title"><?php if (has_category()) { $cate = get_the_category($post->ID);echo $cate[0]->name; } ?></h4>
						<div><?php the_modified_time('Y年m月d日'); ?>：更新</div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
	<ul class="page-menu">
		<li><a href="/avs-school/">スクール日程</a></li>
		<li><a href="/avs-event/">イベント告知</a></li>
		<li><a href="/avs-otona">みんなのフットサル</a></li>
		<li><a href="/shinmachi-school/">新町サッカースクール</a></li>
		<li><a href="/avs-report/">活動報告</a></li>
		<li><a href="/avs-news/">更新情報</a></li>
	</ul>

	<div class="btn-container">
		<div class="half-size-btn"><a href="/avs-school/"><div class="title">スクール日程をチェックする</div> <i class="fa fa-chevron-right"></i></a></div>
		<div class="half-size-btn"><a href="/avs-event/"><div class="title">イベントをチェックする</div> <i class="fa fa-chevron-right"></i></a></div>
	</div>

	<h2 class="main-contents-title">Alla vita sport <br class="no-pc"><span>（アッラヴィータスポルトの活動内容）</span></h2>
	<div class="activity-container">
		<dl class="inner-wrap">
			<dt>
			<h3 class="title">少年サッカークラブチーム&nbsp;運営</h3>
			<img src="/wp-content/uploads/evo-team_s.png" alt="エヴォリスタ 少年サッカーチーム" width="600" height="300" class="aligncenter size-full wp-image-128" /></a>
			</dt>
			<dd>
				<div class="desc">
					高崎エヴォリスタFCはジュニア、ジュニアユース年代の育成を行うサッカーチームです。
					スクールでは上級資格を持ったコーチが指導に当たります。サッカーを楽しみたい子からプロを目指している子まで幅広く在籍しています。
				</div>
				<div class="acenter"><a class="go-next-btn" href="http://evolista.net/member.htm">つづきを見る <i class="fa fa-angle-double-right"></i></a></div>
			</dd>
		</dl>

		<dl class="inner-wrap">
			<dt>
			<h3 class="title">新町サッカースクール&nbsp;運営</h3>
			<img src="/wp-content/uploads/shinmachi_s.jpg" alt="新町サッカースクール" width="600" height="300" class="aligncenter size-full wp-image-210" />
			</dt>
			<dd>
				<div class="desc">
					「楽しく明るく」はもちろんのこと、この競技を通じて団体の中での「自己」のあり方や、友達、コーチやスタッフとのコミニケーションを人として学んで行けるプログラムになっています。</div>
				<div class="acenter"><a class="go-next-btn" href="/shinmachi-school/shinmachi-top/">つづきを見る <i class="fa fa-angle-double-right"></i></a></div>
			</dd>
		</dl>

		<dl class="inner-wrap">
			<dt>
			<h3 class="title">高崎市障がい者フットサル</h3>
			<img src="/wp-content/uploads/ut15-class_s.jpg" alt="高崎障害者フットサル" width="600" height="300" class="aligncenter size-full wp-image-220" />
			</dt>
			<dd>
				<div class="desc">
					Jrカテゴリーで身につけた技術をベースに、1対1だけでなく、様々な人数、試合状況を想定した駆け引きの習得と向上を図る指導をしていきます。
				</div>
				<div class="acenter"><a class="go-next-btn" href="/school-information/#u15">つづきを見る <i class="fa fa-angle-double-right"></i></a></div>
			</dd>
		</dl>

		<dl class="inner-wrap">
			<dt>
			<h3 class="title">みんなのフットサル</h3>
			<img src="/wp-content/uploads/minnano-class_s.jpg" alt="大人がメインのフットサルスクール「みんなのフットサル」" width="600" height="300" class="aligncenter size-full wp-image-220" />
			</dt>
			<dd>
				<div class="desc">
					16歳以上が対象のスクールです。技術の習得と向上、そして試合に勝つ楽しさを提供し、指導していきます。フットサルの楽しさをお伝えし男女一緒に参加することも可能です。また、保護者同伴であれば子供たちの参加も歓迎です。
				</div>
				<div class="acenter"><a class="go-next-btn" href="/school-information/#u15">つづきを見る <i class="fa fa-angle-double-right"></i></a></div>
			</dd>
		</dl>

		<dl class="inner-wrap">
			<dt>
			<h3 class="title">夏休みスペインサッカーキャンプ</h3>
			<img src="/wp-content/uploads/frv_s.jpg" alt="新町サッカースクール" width="600" height="300" class="aligncenter size-full wp-image-210" />
			</dt>
			<dd>
				<div class="desc">
					「スペインプロサッカーチームReal Valladolido（レアル ヴァジャドリード）より育成カテゴリーのコーチを迎えて3日間の指導を受けるプログラムです。茨城県常陸太田市、神奈川県厚木市でも開催！</div>
				<div class="acenter"><a class="go-next-btn" href="http://shinmachi-sc.org/club09.html">つづきを見る <i class="fa fa-angle-double-right"></i></a></div>
			</dd>
		</dl>

		<dl class="inner-wrap">
			<dt>
			<h3 class="title">夏休みスペインサッカーキャンプ</h3>
			<img src="/wp-content/uploads/frv_s.jpg" alt="新町サッカースクール" width="600" height="300" class="aligncenter size-full wp-image-210" />
			</dt>
			<dd>
				<div class="desc">
					「スペインプロサッカーチームReal Valladolido（レアル ヴァジャドリード）より育成カテゴリーのコーチを迎えて3日間の指導を受けるプログラムです。茨城県常陸太田市、神奈川県厚木市でも開催！</div>
				<div class="acenter"><a class="go-next-btn" href="http://shinmachi-sc.org/club09.html">つづきを見る <i class="fa fa-angle-double-right"></i></a></div>
			</dd>
		</dl>

	</div>

	<div class="btn-container">
		<div class="full-size-btn"><a href="/school-information/"><div class="title" href="">スクールについて詳しく読む</div></a> <i class="fa fa-chevron-right"></i></div>
	</div>


	<h2 class="main-contents-title">Alla vita sport blog & SNS</h2>
	<ul class="img-btn-set">
		<li><a href="http://ameblo.jp/allavitasport/" target="_blank"><img src="/wp-content/themes/minamaze-child/images/ameblo-btn.png" alt="ameblo-btn" width="230" height="60"></a></li>
		<li><a href="http://blog.livedoor.jp/cajadaisuke6/" target="_blank"><img src="/wp-content/themes/minamaze-child/images/daisukeblog_230-60.jpg" alt="daisukeblog_230-60" width="230" height="60"></a></li>
		<li><a href="http://ameblo.jp/futsal-life-forever/" target="_blank"><img src="/wp-content/themes/minamaze-child/images/miyamotoblog_230-60.jpg" alt="miyamotoblog_230-60" width="230" height="60"></a></li>
		<li><a href="https://www.facebook.com/Alla-vita-sport-%E3%82%A2%E3%83%83%E3%83%A9-%E3%83%B4%E3%82%A3%E3%83%BC%E3%82%BF-%E3%82%B9%E3%83%9D%E3%83%AB%E3%83%88-209771822373773/timeline/" target="_blank"><img src="/wp-content/themes/minamaze-child/images/fb-btn1.png" alt="fb-btn" width="230" height="60"></a></li>
	</ul>

</article>
<?php get_footer() ?>
