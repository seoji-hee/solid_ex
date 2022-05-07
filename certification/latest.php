<div id="kboard-certification-latest" class="swiper mathodSwiper">

	<ul class="kboard-list swiper-wrapper">
		<?php while($content = $list->hasNext()):?>
		<li class="swiper-slide">
			<a class="mathodContents" href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toString()?>">
				<div class="list-thumbnail">
					<?php if($content->getThumbnail(300, 200)):?><img src="<?php echo $content->getThumbnail(300, 200)?>" alt="<?php echo esc_attr($content->title)?>"><?php else:?><img src="<?php echo $skin_path?>/images/default-pc.png" alt=""><?php endif?>									
				</div>
				<div class="list-txt">
					<div class="case-list-title">
						<!--<span class="category"><?php if($content->category1):?><?php echo $content->category1?><?php endif?></span>-->
					<div class="kboard-thumbnail-cut-strings">
							<?php echo $content->title?>
							<div class="kboard-list-summary"><?php echo mb_strimwidth(trim(strip_tags($content->content)), 0, 260, '...', 'utf-8')?></div>
							<?php echo $content->getCommentsCount()?>
						</div>
					</div>
					<div class="kboard-latest-date"><?php echo date("Y-m-d", strtotime($content->date))?></div>
				</div>
			</a>	
		</li>
		<?php endwhile?>
	</ul>
	<div class="mainMathod-btn m">
		<div class="slideBtn">
			<div class="swiper-button-next">
				<span class="material-icons">east</span>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev">
				<span class="material-icons">west</span>
			</div>
		</div>
		<a class="btn" href="#">자세히 보기</a>
	</div>


	
	<script>
			//tip Swiper
		var swiper = new Swiper("#mainMathod .mathodSwiper", {
			slidesPerView: 'auto',
			loop:true,
			autoplay: {
				delay: 4000,
			},
			navigation: {
				nextEl: "#mainMathod .swiper-button-next",
				prevEl: "#mainMathod .swiper-button-prev",
			},
			pagination: {
				el: "#mainMathod .swiper-pagination",
				type: "fraction",
			},
			breakpoints: { //반응형 조건 속성
				250: { 
				slidesPerView: 2,
				spaceBetween: 20, //레이아웃 2열
				},
				1024: {
				slidesPerView: 'auto',
				},
			},
		});
	</script>



</div>