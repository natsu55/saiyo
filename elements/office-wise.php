<?php
/**
 * Template Name: Office Wise
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

$postID = get_page_by_title( 'Office Wise' )->ID;

?>
<div class="mg-top-25 office-wise-block">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/banner-office.png" class="image-responsive">
		<div class="bg-overlay-gray-darkest"></div>
		<div class="office-wise-desc">
			<div class="col-md-12 text-white">
				<?php echo get_post_meta( $postID, 'office_sectionheading', true ); ?>
				<div class="text-center">
					<?php echo get_post_meta( $postID, 'office_sectioncontents', true ); ?>
					<a href="#" class="white-button mg-top-10">募集一覧を見る</a>
				</div>

			</div>
		</div>
	</div>
</div>