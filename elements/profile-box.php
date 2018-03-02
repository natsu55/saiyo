<?php
/**
 * Template Name: Profile Box
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

$postID = get_page_by_title( 'Profile Box' )->ID;
?>

 <section class="light-bg block-profile-box">
	<div class="container">
		<div>
			<div>
				<?php echo get_post_meta( $postID, 'sectionheading' . $i, true ); ?>
				<?php echo get_post_meta( $postID, 'sectioncontents' . $i, true ); ?>
				<div class="template-space"></div>
			</div>
			<div class="row row-eq-height">

            <?php
                
                
                $i = 1;
                $img = get_post_meta( $postID, 'profimg_' . $i, true );
                do {
                    
            ?>

            <div class="col-md-3 col-sm-12">
				<div class="profile-box"> <img src="<?php echo wp_get_attachment_image_src( $img, 'full' )[0]; ?>" alt="icon">
					<?php echo get_post_meta( $postID, 'proftxt_' . $i, true ); ?>
				</div>
			</div>

            <?php
                    $i++;
                    $img = get_post_meta( $postID, 'profimg_' . $i, true );
                } while ($img);

            ?>

			<?php /*
				<div class="col-md-3 col-sm-12">
					<div class="profile-box"> <img src="img/planners-icon.png" alt="icon">
						<h4><span class="mg-right-5">約4,000名</span> のプランナー</h4>
					</div>
				</div>

				<div class="col-md-3 col-sm-12">
					<div class="profile-box"> <img src="img/fiscal-icon.png" alt="icon">
						<h4><span class="mg-right-5">１１５年以上</span> 以上の深い歴史</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="profile-box"> <img src="img/age-icon.png" alt="icon">
						<h4>入社時平均年齢 <span class="mg-left-5">38.8歳</span><br>※H28年度実績</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="profile-box"> <img src="img/calendar-icon.png" alt="icon">
						<h4>平均有給休暇取得 <span class="mg-left-5">21.9日<small>/年</small></span><br>※H28年度実績</h4>
						
					</div>
				</div>
				*/ ?>
			</div>
		</div>
	</div>
</section>