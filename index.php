<?php
/**
 * Template Name: Home
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

// for image in get_post meta it will get the ID of the image
/*
	so to get the url of the image BY id use wp_get_attachment_image_src( $image_id, $image_size = 'full' || 'large' || 'medium' || 'thumbnail' );
*/
$banner_id = get_post_meta( $post->ID, 'top_banner', true ); 



if($banner_id != null){
	// like this
	$banner = wp_get_attachment_image_src( $banner_id, 'full' );
	// then it will become array, just get the first one
	$banner = $banner[0];
}


get_header(); ?>
	<div>
		<img src="<?php echo $banner; ?>" alt="" class="img-banner">
	</div>
	
	<div class="container">
		<a href="#" class="btn-show-more"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-1.png"><span>募集職種一覧を見る</span><img src="<?php echo get_template_directory_uri(); ?>/img/btn-2.png"></a>
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
					
					<?php echo apply_filters( 'the_content', get_post_meta( $post->ID, 'first_texts', true ) ) ?>

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
// use theme_option($id_field) for global settings
echo theme_option('example_textarea') ?>	
<?php echo theme_option('example_uploader') ?>

					
<?php
//get_sidebar();//
get_footer();