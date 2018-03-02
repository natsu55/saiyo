<?php
/**
 * Template Name: Know People
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
$banner_id = get_post_meta( $post->ID, 'top_banner', true ); 

if($banner_id != null){
    // like this
    $banner = wp_get_attachment_image_src( $banner_id, 'full' );
    // then it will become array, just get the first one
    $banner = $banner[0];
}

$paraimage_1 = get_post_meta( $post->ID, 'paraimage', true ); 
$paraimage_2 = get_post_meta( $post->ID, 'paraimage_2', true ); 
$paraimage_3 = get_post_meta( $post->ID, 'paraimage_3', true ); 


get_header(); ?>
<header class="inner">
	<!-- Banner -->
	<div class="header-content">
		<div class="container">
			<div class="row custom-sp-row">
				<div class="col-sm-12">
					<h1 id="homeHeading"><a href="/">Home</a>/ <span>人を知る</span></h1>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- SECTION KNOWPEOPLE-1 -->
<section id="interview2" class="padding-bottom-0 block-article">
    <!--Services Heading-->
    <?php echo get_post_meta( $post->ID, 'sectionheading', true ); ?>
    <div class="template-space"></div>
    <div class="container">
        <div class="row custom-sp-row">
            <img src="<?php echo $banner; ?>" alt="" srcset="" width="100%" height="auto">
            <div class="interview-top-text">
                <?php echo get_post_meta( $post->ID, 'bannertext', true ); ?>
            </div>
        </div>
    </div>
    <div class="container padding-vertical-100 sp-padding-vertical-40">
        <div class="row custom-sp-row">
            <div class="col-sm-6 col-sm-push-6 sp-no-padding">
                <img src="<?php echo wp_get_attachment_image_src( $paraimage_1, 'full' )[0]; ?>" alt="" srcset="" width="100%" height="auto">
            </div>
            <div class="col-sm-6 col-sm-pull-6 sp-padding-horizontal-10">
                <?php echo get_post_meta( $post->ID, 'paraheading', true ); ?>
                <?php echo get_post_meta( $post->ID, 'paracontent', true ); ?>               
            </div>
        </div>
    </div>

<!-- SECTION KNOWPEOPLE-2 -->
    <div class="light-bg">
        <div class="container padding-vertical-45 sp-padding-vertical-20">
            <div class="row custom-sp-row">
                <div class="col-sm-6 sp-no-padding">
                    <img src="<?php echo wp_get_attachment_image_src( $paraimage_2, 'full' )[0]; ?>" alt="" srcset="" width="100%" height="auto">
                </div>
                <div class="col-sm-6 sp-padding-horizontal-10">
                    <?php echo get_post_meta( $post->ID, 'paraheading_2', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'paracontent_2', true ); ?>  
                </div>
            </div>
        </div>
    </div>

<!-- SECTION KNOWPEOPLE-3 -->
    <div class="container padding-vertical-100 sp-padding-vertical-40">
        <div class="row custom-sp-row">
            <div class="col-sm-6 col-sm-push-6 sp-no-padding">
                <img src="<?php echo wp_get_attachment_image_src( $paraimage_3, 'full' )[0]; ?>" alt="" srcset="" width="100%" height="auto">
            </div>
            <div class="col-sm-6 col-sm-pull-6 sp-padding-horizontal-10">
                <?php echo get_post_meta( $post->ID, 'paraheading_3', true ); ?>
                <?php echo get_post_meta( $post->ID, 'paracontent_3', true ); ?>  
            </div>
        </div>
    </div>

<!-- SECTION PEOPLELIST -->
    <div class="light-bg">
        <div class="container padding-bottom-40 padding-top-10">
            <div class="row custom-sp-row">
                <div class="col-sm-12 sp-padding-horizontal-10">
                    <?php echo get_post_meta( $post->ID, 'paraheading_list', true ); ?>
                </div>
            </div>
            <div class="row custom-sp-row thumb-list">

            <?php
                
                $i = 1;
                $img = get_post_meta( $post->ID, 'empimage_' . $i, true );
                do {
                    
            ?>

                <div class="col-md-2 col-sm-4 sp-padding-horizontal-10 text-align-left">
                    <a href="#" class="ratio ratio_1_1" style="background-image: url(<?php echo wp_get_attachment_image_src( $img, 'full' )[0]; ?>)"></a>
                    <?php echo get_post_meta( $post->ID, 'emp_time_' . $i, true ); ?>
                    <?php echo get_post_meta( $post->ID, 'emp_desc_' . $i, true ); ?>
                </div>

            <?php
                    $i++;
                    $img = get_post_meta( $post->ID, 'empimage_' . $i, true );
                } while ($img);

            ?>
            </div>
        </div>
    </div>
</section>

<?php
//get_sidebar();
include_once("elements/office-wise.php");
get_footer();