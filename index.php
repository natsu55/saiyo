<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package luggage
 */

get_header(); ?>

	<div>
		<img src="img/banner-top.png" alt="" class="img-banner">
	</div>
	
	<div class="container">
		<a href="#" class="btn-show-more"><img src="/img/btn-1.png"><span>募集職種一覧を見る</span><img src="/img/btn-2.png"></a>
	</div>


	<section>
		<div class="container block-article">
			<div class="row row-eq-height">
				<div class="col-md-12">
					<!--Services Heading-->
					<h2 class="section-heading">大同生命保険について</h2>
					<div class="template-space"></div>
				</div>
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-no-padding img-full-width"> 
					<img src="/img/about-office.png" class="image-responsive">
				</div>
				<div class="col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-no-padding">
					<h2 class="para-heading">大同生命保険で働く4つのポイント</h2>
					<p >大同生命保険は、<span class="ru-text">プライベート・子育てもお仕事も頑張りたいあなたに、とってもピッタリなお仕事</span>です。<br>
					大同生命保険で福利厚生プランナーとして働く<span class="ru-text">4つのポイント</span>があります。<br>①訪問先が企業だから、きちんと<span class="ru-text">プラベートと分けられる</span>こと②<span class="ru-text">完全週休2日制・ 17時15分退社</span>でプライベートや子育ての時間をしっかり充実させられること③<span class="ru-text">未経験者でも安心して働ける</span>、独自の研修制度とサポート体制④<span class="ru-text">平均給与38.9万円</span>(H28年度実績・賞与を含まず)で、頑張り次第で収入アップも見込めます、是非、あなたも大同生命保険で働いてみませんか？</p>
					<div class="btn-service">
						<a class="service-box-button" href="/KnowCompany.php">詳しく見る</a>
					</div>
					 
				</div>
				
			</div>
		</div>
	</section>


	<?php include_once("elements/profile-box.php"); ?>
	

	<section>
		<div class="container block-article">

			<div class="img-full-width">
				<a href="/FAQ.php"><img src="/img/faq-banner.png" class="img-banner banner-faq"></a>
			</div>
			


			<div class="mg-top-60">
				<div class="col-md-12">
					<!--Services Heading-->
					<h2 class="section-heading">大同生命保険で働くこと</h2>
					<div class="template-space"></div>
				</div>
				<div class="col-md-6 col-sm-6 col-no-padding img-full-width"> 
					<img src="/img/work-in-office.jpg" class="image-responsive">
				</div>
				<div class="col-md-6 col-sm-6 col-no-padding">
					<h2 class="para-heading">2005年入社　涌井志保子さん</h2>
					<h2 class="para-heading">自信がなかった私でも「とりあえずやってみよう」の言葉で心が軽くなりました</h2>
					<p>
	               		以前、私が勤務していたのは貸会場の受付という、お問い合わせがあれば対応する仕事。5年、10年先も同じ仕事をするよりも、変化を求めて転職することにしたんです。面接では「事務系の経験しかないけど大丈夫ですか？」と何度も確認しました。そこで<span class="ru-text">「とりあえずやってみたらどうですか?」と面接官に言われて心が軽くなったのを覚えています。</span>また、「わからないことがあったら、何でも相談にのりますよ」という言葉で「やってみてから考えようかな」と思えました。<span class="ru-text">あのとき一歩を踏み出して、本当によかったです。</span>
	                </p>
                	<div class="btn-service">
					<a class="service-box-button" href="/KnowPeople.php">詳しく見る</a> 
					</div>
				</div>
				
			</div>
		</div>
	</section>
	


					
<?php
//get_sidebar();//
get_footer();