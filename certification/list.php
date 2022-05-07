<div id="kboard-certification-list">
	
	
	<!-- 카테고리 시작 -->
	<?php
	if($board->use_category == 'yes'){
		if($board->isTreeCategoryActive()){
			$category_type = 'tree-select';
		}
		else{
			$category_type = 'default';
		}
		$category_type = apply_filters('kboard_skin_category_type', $category_type, $board, $boardBuilder);
		echo $skin->load($board->skin, "list-category-{$category_type}.php", $vars);
	}
	?>
	<!-- 카테고리 끝 -->
	
	<!-- 리스트 시작 -->
	<div class="kboard-list">
		<table>
			<tbody>
				<?php while($content = $list->hasNextNotice()):?>
			
				<tr class="kboard-list-notice<?php if($content->uid == kboard_uid()):?> kboard-list-selected<?php endif?>">
					
					<td class="test3-list-contents">
						<a class="mathodContents" href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toString()?>">
							<div class="list-thumbnail">
								<?php if($content->getThumbnail(300, 180)):?><img src="<?php echo $content->getThumbnail(300, 180)?>" alt="<?php echo esc_attr($content->title)?>"><?php else:?><img src="<?php echo $skin_path?>/images/default-pc.png" alt=""><?php endif?>		
								<span class="category"><?php if($content->category1):?><?php echo $content->category1?><?php endif?></span>							
							</div>
							<div class="list-txt">
								<div class="case-list-title">
									<!--<span class="category"><?php if($content->category1):?><?php echo $content->category1?><?php endif?></span>-->
									<div class="kboard-thumbnail-cut-strings">
										<?php echo $content->title?>
										<?php echo $content->getCommentsCount()?>
									</div>
								</div>
								<div class="kboard-list-summary"><?php echo mb_strimwidth(trim(strip_tags($content->content)), 0, 260, '...', 'utf-8')?></div>
								<div class="kboard-latest-date"><?php echo date("Y-m-d", strtotime($content->date))?></div>
								
								<div class="test3-btn p">
									<span class="btnB">테스트 입니다</span>
								</div>	
							</div>
						</a>	
					</td>
				</tr>


				<?php endwhile?>
				
				<!--카테고리 텍스트  -->
				<?php
					$category1 = kboard_category1();
					if($category1 == 'CSWA'){
						echo '<div class="title-text"><h1>CSWA</h1>
							<p>CSWA는 솔리드웍스 준전문가 자격 인증으로 솔리드웍스를 사용해서 기본적인 파트 모델링과 <br>
							어셈블리 모델을 완성하고 설계 변경에 따라 정확하게 수정할 수 있는지에 대한 능력 평가 시험입니다.
							</p>
						</div>';
					}
					else if($category1 == 'CSWP'){
						echo '<div class="title-text"><h1>CSWP</h1>
								<p>CSWP는 솔리드웍스 전문가 자격 인증으로 솔리드웍스의 다양한 복합 피처를 사용하여 <br>
								변수 지정 및 이동식 어셈블리를 설계하고 분석하는 능력을 평가하는 시험입니다. </p>
							</div>';
					}
					else if($category1 == 'CSWE'){
						echo '<div class="title-text"><h1>CSWE</h1>
							<p>CSWE는 솔리드웍스 최고 전문가 인증으로 솔리드웍스를 사용해서 기본적인 파트 모델링과 <br>
							어셈블리 모델을 완성하고 설계 변경에 따라 정확하게 수정할 수 있는지에 대한 능력 평가 시험입니다.</p>
							</div>';
					}
					?>
					<?php while($content = $list->hasNext()):?>
				<tr class="<?php if($content->uid == kboard_uid()):?>kboard-list-selected<?php endif?>">
					<td class="test3-list-contents">
						<a class="tipContents" href="<?php echo $url->set('uid', $content->uid)->set('mod', 'document')->toString()?>">
							<div class="list-thumbnail">
								<?php if($content->getThumbnail(300, 180)):?><img src="<?php echo $content->getThumbnail(300, 180)?>" alt="<?php echo esc_attr($content->title)?>"><?php else:?><img src="<?php echo $skin_path?>/images/default-pc.png" alt=""><?php endif?>		
														
							</div>
							<div class="list-txt">
								<div class="case-list-title">
									<p class="category2-title"><?php if($content->category2):?><?php echo $content->category2?><?php endif?></p>
									<div class="kboard-thumbnail-cut-strings">
										<?php echo $content->title?>
										<?php echo $content->getCommentsCount()?>
									</div>
								</div>
								<div class="kboard-list-summary"><?php echo mb_strimwidth(trim(strip_tags($content->content)), 0, 260, '...', 'utf-8')?></div>
								
								<div class="test3-btn p">
									<span class="btnB">시험 보기</span>
								</div>							
							</div>
						</a>	
					</td>					
				</tr>
				<?php $boardBuilder->builderReply($content->uid)?>
				<?php endwhile?>
			</tbody>
		</table>


	</div>
	<!-- 리스트 끝 -->
	
	<!-- 페이징 시작 -->
	<div class="kboard-pagination">
		<ul class="kboard-pagination-pages">
			<?php echo kboard_pagination($list->page, $list->total, $list->rpp)?>
		</ul>
	</div>
	<!-- 페이징 끝 -->
	<?php if($board->isWriter()):?>
	<!-- 버튼 시작 -->
	<div class="kboard-control">
		<a href="<?php echo esc_url($url->getContentEditor())?>" class="kboard-thumbnail-button-small"><?php echo __('New', 'kboard')?></a>
	</div>
	<!-- 버튼 끝 -->
	<?php endif?>


</div>