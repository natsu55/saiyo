<?php
/**
 * Template Name: Know company
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
$section_image_1 = get_post_meta( $post->ID, 'sectionimage', true ); 
$section_image_2 = get_post_meta( $post->ID, 'sectionimage_2', true ); 
$section_image_3 = get_post_meta( $post->ID, 'sectionimage_3', true ); 
$section_image_4 = get_post_meta( $post->ID, 'sectionimage_4', true ); 
$section_image_5 = get_post_meta( $post->ID, 'sectionimage_5', true ); 
$section_image_6 = get_post_meta( $post->ID, 'sectionimage_6', true ); 



get_header(); ?>
<header class="inner">
	<!-- Banner -->
	<div class="header-content">
		<div class="container">
			<div class="row custom-sp-row">
				<div class="col-sm-12">
					<h1 id="homeHeading"><a href="/">Home</a>/ <span>会社を知る</span></h1>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- SECTION KNOWCOMPANY_1 -->
<section>
    <div class="container block-article">
        <div class="row custom-sp-row">
            <div class="col-md-12">
                <!--Services Heading-->
                <?php echo get_post_meta( $post->ID, 'sectionheading1', true ); ?>
                <div class="template-space"></div>
            </div>
            <div class="col-sm-6 col-sm-push-6 sp-no-padding">
                <img src="<?php echo wp_get_attachment_image_src( $section_image_1, 'full' )[0]; ?>" class="image-responsive">
            </div>
            <div class="col-sm-6 col-sm-pull-6 sp-padding-horizontal-10">
               <?php echo get_post_meta( $post->ID, 'paraheading1', true ); ?>
                <?php echo get_post_meta( $post->ID, 'paracontent1', true ); ?>
				
            </div>
            
        </div>
    </div>
</section>

<div class="container">
    <div class="row custom-sp-row">
        <hr class="custom-hr">
    </div>
</div>
<!-- SECTION KNOWCOMPANY_2 -->
<section class="padding-bottom-0 block-article">
    <!--Services Heading-->
    <?php echo get_post_meta( $post->ID, 'sectionheading2', true ); ?>
    <div class="template-space"></div>

    <div class="light-bg">
        <div class="container padding-vertical-45 sp-padding-vertical-20">
            <div class="row custom-sp-row">
                <div class="col-sm-6 col-sm-push-6 sp-no-padding">
                    <img src="img/about-daidolife-1.jpg" alt="" srcset="" width="100%" height="auto">
                </div>
                <div class="col-sm-6 col-sm-pull-6 sp-padding-horizontal-10">
                    <?php echo get_post_meta( $post->ID, 'paraheading2', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'paracontent2', true ); ?>
                </div>
            </div>
        </div>
    </div>
<!-- KNOWCOMPANY SECTION HEADING 完全週休二日制、毎日17時に退社  -->
    <div class="container padding-vertical-100 sp-padding-vertical-40">
        <div class="row custom-sp-row">
            <div class="col-sm-6 sp-no-padding">
                <img src="img/about-daidolife-2.jpg" alt="" srcset="" width="100%" height="auto">
            </div>
            <div class="col-sm-6 sp-padding-horizontal-10">
                <?php echo get_post_meta( $post->ID, 'paraheading3', true ); ?>
                <?php echo get_post_meta( $post->ID, 'paracontent3', true ); ?>
            </div>
        </div>
    </div>
<!-- KNOWCOMPANY SECTION HEADING 未経験からでも安心できる充実の研修制度  -->
    <div class="light-bg">
        <div class="container padding-vertical-45 sp-padding-vertical-20">
            <div class="row custom-sp-row">
                <div class="col-sm-6 col-sm-push-6 sp-no-padding">
                    <img src="img/about-daidolife-3.jpg" alt="" srcset="" width="100%" height="auto">
                </div>
                <div class="col-sm-6 col-sm-pull-6 sp-padding-horizontal-10">
                    <?php echo get_post_meta( $post->ID, 'paraheading4', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'paracontent4', true ); ?> 
                </div>
            </div>
        </div>
    </div>
<!-- KNOWCOMPANY SECTION HEADING ④ 正社員、がんばり次第で収入アップも可！ -->
    <div class="container padding-vertical-100 sp-padding-vertical-40">
        <div class="row custom-sp-row">
            <div class="col-sm-6 sp-no-padding">
                <img src="img/about-daidolife-4.jpg" alt="" srcset="" width="100%" height="auto">
            </div>
            <div class="col-sm-6 sp-padding-horizontal-10">
                <?php echo get_post_meta( $post->ID, 'paraheading5', true ); ?>
                <?php echo get_post_meta( $post->ID, 'paracontent5', true ); ?> 
            </div>
        </div>
    </div>

</section>

<?php 
    include_once("elements/profile-box.php");
?>
<!-- KNOWCOMPANY SECTION 会社概要 HEADING TABLE -->
<section class="padding-bottom-0">
    <div class="container table-summary">
        <div>
            <?php echo get_post_meta( $post->ID, 'paratableheading', true ); ?>
            <div class="template-space"></div>
        </div>
        <?php echo get_post_meta( $post->ID, 'paratablecontent', true ); ?>
    </div>
</section>
<!-- KNOWCOMPANY SECTION GOOGLE MAP -->
<section>
    <?php echo get_post_meta( $post->ID, 'googlemap', true ); ?>
</section>


<?php
//get_sidebar();
get_footer();