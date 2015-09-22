<?php
get_header(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2 class="main-contents-title">
ニュース<span>（最近の活動ご紹介）</span>
</h2>
<div class="contents-container">
<ul class="news-posts">
	<?php $posts = get_posts(array('orderby' => 'post_modified')); //var_dump($posts); ?>
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
<li>
<img src="http://192.168.33.99/avs/wp-content/uploads/circle-img_school_3.jpg" alt="circle-img_school_3" width="720" height="720" class="posts-image" /><div class="content">
<h3 class="title">10月のイベント</h3>
<div class="desc">
あああああああああああああああああ<br>いいいいいいいいいいいいいい
<div class="aright"><a href="">続きを見る <i class="fa fa-angle-double-right"></i></a></div>
</div>
</div>
<div class="posts-info">
<h4 class="title">イベント告知</h4>
<div>2015年10月17日：更新</div>
</div>
</li>
</ul>
</div>

<div class="btn-container">
<a class="half-size-btn" href=""><span class="title">イベントをチェックする <i class="fa fa-chevron-right"></i></span></a><a class="half-size-btn" href=""><span class="title">最近の活動をチェックする <i class="fa fa-chevron-right"></i></span></a>
</div>

<h2 class="main-contents-title">Alla vita sport <span>（アッラヴィータスポルトの活動内容）</span></h2>
<div class="activity-container">
<dl class="inner-wrap">
<dt>
<h3 class="title">少年サッカークラブチーム&nbsp;運営</h3>
<img src="/avs/wp-content/uploads/evo-team_s.png" alt="エヴォリスタ サッカーチーム" width="600" height="300" class="aligncenter size-full wp-image-128" /></a>
</dt>
<dd>
<div class="desc">
高崎エヴォリスタFCはジュニア、ジュニアユース年代の育成を行うサッカーチームです。
スクールでは上級資格を持ったコーチが指導に当たります。サッカーを楽しみたい子からプロを目指している子まで幅広く在籍しています。
</div>
<div class="acenter"><a class="go-next-btn" href="http://evolista.net/member.htm">続きを見る <i class="fa fa-angle-double-right"></i></a></div>
</dd>
</dl>

<dl class="inner-wrap">
<dt>
<h3 class="title">U−15フットサルスクール</h3>
<img src="/avs/wp-content/uploads/ut15-class_s.jpg" alt="ut15-class_s" width="600" height="300" class="aligncenter size-full wp-image-220" />
</dt>
<dd>
<div class="desc">
Jrカテゴリーで身につけた技術をベースに、1対1だけでなく、様々な人数、試合状況を想定した駆け引きの習得と向上を図る指導をしていきます。
</div>
<div class="acenter"><a class="go-next-btn" href="/school-information/#u15">続きを見る <i class="fa fa-angle-double-right"></i></a></div>
</dd>
</dl>

<dl class="inner-wrap">
<dt>
<h3 class="title">みんなのフットサル<span>大人がメインのスクール</span></h3>
<img src="/avs/wp-content/uploads/minnano-class_s.jpg" alt="大人がメインのフットサルスクール「みんなのフットサル」" width="600" height="300" class="aligncenter size-full wp-image-220" />
</dt>
<dd>
<div class="desc">
16歳以上が対象のスクールです。技術の習得と向上、そして試合に勝つ楽しさを提供し、指導していきます。フットサルの楽しさをお伝えし男女一緒に参加することも可能です。また、保護者同伴であれば子供たちの参加も歓迎です。
</div>
<div class="acenter"><a class="go-next-btn" href="/school-information/#u15">続きを見る <i class="fa fa-angle-double-right"></i></a></div>
</dd>
</dl>

<dl class="inner-wrap">
<dt>
<h3 class="title">新町サッカースクール&nbsp;運営</h3>
<img src="/avs/wp-content/uploads/club09_1.jpg" alt="club09_1" width="600" height="300" class="aligncenter size-full wp-image-210" />
</dt>
<dd>
<div class="desc">
「楽しく明るく」はもちろんのこと、この競技を通じて団体の中での「自己」のあり方や、友達、コーチやスタッフとのコミニケーションを人として学んで行けるプログラムになっています。勝ち負けはもちろんですが、一生涯スポーツの好きな「一人の人間」となってもらう事が何よりです。</div>
<div class="acenter"><a class="go-next-btn" href="http://shinmachi-sc.org/club09.html">続きを見る <i class="fa fa-angle-double-right"></i></a></div>
</dd>
</dl>



</div>

<div class="btn-container">
<a class="full-size-btn"><span class="title" href="">スクールについて詳しく読む <i class="fa fa-chevron-right"></i></span></a>
</div>


<h2 class="main-contents-title">Alla vita sport blog & SNS</h2>

		</article>
<?php get_footer() ?>
