<?php
/**
 * Template Name: FAQ
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package luggage
 *
 * Template Name: FAQ
 */

get_header(); ?>
<header class="inner">
	<!-- Banner -->
	<div class="header-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 id="homeHeading"><a href="/">Home</a>/ <span>よくある質問</span></h1>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container block-faq">
	<!--Faq style 1-->
	<div class="col-md-12 faq-content">
		<?php 

		//Keep track of number of questions. Default to 0.
		$index = 0;

		//Get each taxonomy and show posts under each.
		$args = array(
			'taxonomy' => 'faq_taxonomy',
		);

		$taxonomies = get_categories($args);

		foreach($taxonomies as $tax){
			echo 
			'<div class="panel-group" id="accordion">
				<div>
					<!--Services Heading-->

					<h2 class="para-heading">' . $tax->name . '</h2>'; //Title

			$args = array(
				'post_type' => 'faq', 
				'posts_per_page' => -1,
				'numbeposts' => -1,
				'tax_query' => [
			        [
			            'taxonomy' => 'faq_taxonomy',
			            'field' => 'slug',
			            'terms' => $tax->slug,
			        ],
			    ],
			);
			$items = get_posts($args);

			//Show each questions and their respective answers / explanations / clarifications.
			foreach($items AS $item){
				include(locate_template('template-parts/faq-item.php'));
			}
			wp_reset_postdata();


			echo '</div>
			</div>';
		}

		?>
	</div>

	<?php get_template_part( 'template-parts/content', 'page' ); ?>
</div>

<?php
//get_sidebar();
get_footer();