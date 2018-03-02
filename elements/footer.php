		<div class="container container-entry-sp">
			<div class="entry-sp">
				ENTRY
			</div>
		</div>
		
		<!--Main footer-->
		<section class="main-footer">
			<div class="container">
				<div class="row">
					<!--footer widget one-->
					<div class="col-md-4 col-sm-6">
						<div class="footer-widget"><a href="/"><img src="img/logo.png" alt="" class="img-responsive"></a>
							<!-- <p class="text-sm-footer">
								テキストテキストテキストテキストテキストテキストテキストテ<br>
								キストテキストテキストテキストテキストテキストテキストテキ<br>
								ストテキストテキストテキストテキストテキストテキスト...
							</p> -->
						</div>
					</div>
					<!--/ footer widget one-->
					
					<!--footer widget Two-->
					<div class="col-md-4 col-sm-6">
						<div class="footer-widget quicl-links">
							<h3>サイトメニュー</h3>
							<ul>
								<li><i class="fa  fa-angle-right"></i> <a href="/">HOME</a></li>
								<li><i class="fa  fa-angle-right"></i> <a href="/FAQ.php">FAQ</a></li>
								<li><i class="fa  fa-angle-right"></i> <a href="/KnowCompany.php">会社を知る</a></li>
								<li><i class="fa  fa-angle-right"></i> <a href="#">採用情報</a></li>
								<li><i class="fa  fa-angle-right"></i> <a href="/KnowPeople.php">人を知る</a></li>
							</ul>
						</div>
					</div>
					<!--/ footer widget Two-->
						
					<!--footer widget Three-->
					<div class="col-md-4 col-sm-6">
						<div class="footer-widget address">
							<h3>会社情報</h3>
							<p><img src="/img/icon-address.png"><span>大阪府大阪市西区江戸堀1丁目2番1号</span></p>
							<p><img src="/img/icon-email.png"><span>info@daudi.jp</span></p>
							<p><img src="/img/icon-tel.png"><span>03-3272-6263</span></p>
						</div>
					</div>
					<!--/ footer widget thre-->
				</div>
			</div>
		</section>
		<!--/Main Footer-->


		<footer>
			<div class="container">
				<div>
					<!-- Footer Copy rights-->
					<div class="col-md-12 text-center footer-copy-right">
						<p> © Copyright Daido Life Insurance Campany All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</footer>


		<!-- jQuery -->
		<script src="assets/jquery/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- Konnect Slider JavaScript -->
		<script src="js/jquery.flexslider.min.js" type="text/javascript"></script>
		<script src="js/konnect-slider.js" type="text/javascript"></script>
		<!-- Theme JavaScript -->
		<script src="js/default.js"></script>
		<!-- Ellipsis JavaScript -->
		<script src="js/ellipsis.min.js"></script>
		<script type="text/javascript">
		  	Ellipsis({
		      	class: '.right-news .info .description',
		      	lines: 1
		    }); 
		</script>
		<!--Googlemap Javascript--> 
		<script>
			function initMap() {
				if (document.getElementById('map')) {
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 10,
						center: {lat: 34.6945751, lng: 135.4910576},
						scrollwheel: false,
						getMap: true
					});
					var markers = [];
					let position = [
						{
							"location": {lat: 34.6945751, lng: 135.4910576},
							"description": "大阪市北区中之島3-3-3 中之島三井ビルディング15F"
						},
						{
							"location": {lat: 34.704417, lng: 135.498333},
							"description": "大阪市北区芝田1-1-4　阪急ターミナルビル10F"
						},
						{
							"location": {lat: 34.814825, lng: 135.649352},
							"description": "枚方市岡東町5-23 アーバンエース枚方ビル3F"
						},
						{
							"location": {lat: 34.663252, lng: 135.563983},
							"description": "東大阪市足代2-2-23 岡島ビルディング8F"
						}, 
						{
							"location": {lat: 34.759466, lng: 135.4955925},
							"description": "吹田市江坂町1-23-101 大同生命江坂ビル5F"
						},
						{
							"location": {lat: 34.822462, lng: 135.423918},
							"description": "池田市室町4-1ウイングス室町ビル2F"
						},
						{
							"location": {lat: 34.8161771, lng: 135.5578862},
							"description": "茨木市西駅前町5-10"
						},
						{
							"location": {lat: 34.580949, lng: 135.471339},
							"description": "堺市堺区熊野町西3-2-7 ダイワビル 3F"
						},
						{
							"location": {lat: 34.466815, lng: 135.380702},
							"description": "岸和田市上野町東4-1"
						}
					];

					position.forEach(function(element) {
						let infowindow = new google.maps.InfoWindow({
							content: element.description,
						});
						let marker = new google.maps.Marker({
							position: element.location,
							infowindow: infowindow
						});
						google.maps.event.addListener(marker, 'click', function() {
							markers.forEach(function(element) {
								element.infowindow.close();
							});
							infowindow.open(map, marker);
						});
						marker.setMap(map);
						markers.push(marker);
					});
				} else {/*Do Nothing.*/}
			}
		</script> 
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5u8QmAP6DxLCQrbI5QnH9Y4n6xLBV2V0&callback=initMap"></script>

	</body>
</html>