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
$section_image_1 = get_post_meta( $post->ID, 'sectionimage', true ); 
$section_image_2 = get_post_meta( $post->ID, 'sectionimage_2', true ); 

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

<!-- SECTION HOME-1 -->
	<section>
		<div class="container block-article">
			<div class="row row-eq-height">
				<div class="col-md-12">
					<!--Services Heading-->
					<?php echo get_post_meta( $post->ID, 'sectionheading', true ); ?>
					<div class="template-space"></div>
				</div>
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-no-padding img-full-width"> 
					<img src="<?php echo wp_get_attachment_image_src( $section_image_1, 'full' )[0]; ?>" class="image-responsive">
				</div>
				<div class="col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-no-padding">
					<?php echo get_post_meta( $post->ID, 'paraheading', true ); ?>
					<?php echo get_post_meta( $post->ID, 'sectioncontent', true ); ?>


					<?php //echo apply_filters( 'the_content', get_post_meta( $post->ID, 'sectionheading', true ) ) ?>

					<div class="btn-service">
						<a class="service-box-button" href="/KnowCompany.php">詳しく見る</a>
					</div>
					 
				</div>
				
			</div>
		</div>
	</section>


	<?php include_once("elements/profile-box.php"); ?>
	
<!-- SECTION HOME-2 -->
	<section>
		<div class="container block-article">

			<div class="img-full-width">
				<a href="/FAQ.php"><img src="<?php echo get_template_directory_uri(); ?>/img/faq-banner.png" class="img-banner banner-faq"></a>
			</div>
			


			<div class="mg-top-60">
				<div class="col-md-12">
					<!--Services Heading-->
					<?php echo get_post_meta( $post->ID, 'sectionheading_2', true ); ?>
					<div class="template-space"></div>
				</div>
				<div class="col-md-6 col-sm-6 col-no-padding img-full-width"> 
					<img src="<?php echo wp_get_attachment_image_src( $section_image_2, 'full' )[0]; ?>" class="image-responsive">
				</div>
				<div class="col-md-6 col-sm-6 col-no-padding">
					<?php echo get_post_meta( $post->ID, 'paraheading', true ); ?>
					<?php echo get_post_meta( $post->ID, 'sectioncontent', true ); ?>
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