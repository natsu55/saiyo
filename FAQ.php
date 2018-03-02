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
<?php 

$image_id = get_post_meta( $post->ID, 'image_advanced', true ); 



	if($image_id != null){
		$image = wp_get_attachment_image_src( $image_id, 'full' );
		$image = $image[0];
	}
	echo $image;
?>

<?php echo get_post_meta( $post->ID, 'meta_order', true ); ?>
<div class="container block-faq">
	<div>
		<!--Services Heading-->
		<h2 class="para-heading">仕事に関するよくある質問</h2>
		
	</div>
	<!--Faq style 1-->
	<div class="col-md-12 faq-content">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" class="">質問 01  具体的な仕事内容はどのようなものですか。</a> </h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in" aria-expanded="true" style="">
					<div class="panel-body">会社が指定した企業に毎月2回訪問することが最初の主なお仕事です。それらの企業に情報誌をお届けしながら福利厚生制度のご案内をします。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">質問 02  生命保険のプランナーというと、家庭への訪問販売をイメージしますが…。</a> </h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">家庭への訪問ではありません。法人会、納税協会、商工会議所などの団体と提携しており、その団体の会員企業へ福利厚生制度を普及・推進することが主な仕事です。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">質問 03  経験や資格がありませんが大丈夫でしょうか？</a> </h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">未経験・資格をお持ちでなくても大丈夫です。経験豊富な講師がさまざまな教材を活用しながら、独自の研修制度でバックアップします。また、国家資格のひとつであるファイナンシャル・プランニング技能士資格の取得を積極的に推進していますのでキャリアアップも実現できます。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" aria-expanded="false">質問 04  待遇やサポート体制はどうなっていますか。</a> </h4>
				</div>
				<div id="collapse4" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">がんばった成果がそのまま高収入につながるような制度となっています。また、各種社会保険、退職金制度などの福利厚生制度も充実しており、みなさんの仕事をバックアップできる体制が整っています。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed" aria-expanded="false">質問 05  福利厚生制度はどんなものがありますか？</a> </h4>
				</div>
				<div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">各種社会保険はもちろん、退職金制度(勤続3年以上)などがあります。また、海外に保養所もあります。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed" aria-expanded="false">質問 06 本当に定時で帰れますか？</a> </h4>
				</div>
				<div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">勤務時間は9時～17時の実働7時間（勤務地によって多少の前後あり）で、基本的に残業はありません。
また、スケジュール調整もしやすい環境なので、子どもの学校行事などで半日休暇も取得できます。</div>
				</div>
			</div>

			<h2 class="para-heading mg-top-40">仕事に関するよくある質問</h2>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed" aria-expanded="false">質問 07  幼い子どもがいるのですが、子育てしながら働けますか？</a> </h4>
				</div>
				<div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">「子どもが急に熱を出した」「学校行事に出席しなければならない」などの突然のお休みにも対応しています。PTAや授業参観などの予定には半日休暇制度もあります。子育て中のプランナーも多く、気持ちを理解してもらえるので、気兼ねなく休みをとることができ、安心して長く続けられる仕事です</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="collapsed" aria-expanded="false">質問 08  有給休暇は取れるのでしょうか？</a> </h4>
				</div>
				<div id="collapse8" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">プライベートの用事や子どもの学校行事など、みなさんの都合に合わせて有給休暇を取得することができます。平均休暇取得日数も21.9日／年と大変高くなっています。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed" aria-expanded="false">質問 09  子育て期間が長く、ブランクがあります。また、仕事経験もパートだけなのですが、大丈夫でしょうか？</a> </h4>
				</div>
				<div id="collapse9" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">大丈夫です。研修制度や上司のフォローがあるので安心してください。ブランクが長い・パートの経験しかないという先輩もたくさん活躍しています。ぜひ説明会や面談で先輩社員の体験談を聞いてみてください。</div>
				</div>
			</div>

			<h2 class="para-heading mg-top-40">採用・選考に関するよくある質問</h2>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed" aria-expanded="false">質問 10  応募条件を教えてください。</a> </h4>
				</div>
				<div id="collapse10" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">高校卒業以上の方が対象です。未経験やブランクがあっても大丈夫です。30～40代の方が多く活躍しています。
（学生の方・新卒の方はご遠慮いただいています)</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="collapsed" aria-expanded="false">質問 11  応募意志が固まっているわけではありませんが、説明会に参加できますか？</a> </h4>
				</div>
				<div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">選考ではありませんので、お気軽にご参加ください。説明会では、仕事の内容・待遇などをご説明し、質問をお受けします。</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse12" class="collapsed" aria-expanded="false">質問 12  面接ではどんなことを聞かれるのでしょうか？</a> </h4>
				</div>
				<div id="collapse12" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">今までのご経験などをお聞きします。質問にもお答えしますので、お気軽にお越しください。</div>
				</div>
			</div>
	

		</div>
	</div>
</div>



<?php
//get_sidebar();
get_footer();