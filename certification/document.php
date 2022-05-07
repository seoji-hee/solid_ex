<div id="kboard-certification-document">
	<div id="kboard-thumbnail-document">
		<div class="kboard-document-wrap" itemscope itemtype="http://schema.org/Article">
			<div class="kboard-title" itemprop="name">
				<span class="category"><?php if($content->category1):?><?php echo $content->category1?><?php endif?></span>	
				<h1><?php echo $content->title?></h1>
				<div class="kboard-latest-date"><?php echo date("Y-m-d", strtotime($content->date))?></div>
			</div>
			
			<div class="kboard-content" itemprop="description">
				<div class="content-view">
					<?php echo $content->getDocumentOptionsHTML()?>
					<?php echo $content->content?>
				</div>
			</div>
			
			
			<?php if($content->isAttached()):?>
			<div class="kboard-attach">
				<?php foreach($content->getAttachmentList() as $key=>$attach):?>
				<button type="button" class="kboard-button-action kboard-button-download" onclick="window.location.href='<?php echo $url->getDownloadURLWithAttach($content->uid, $key)?>'" title="<?php echo sprintf(__('Download %s', 'kboard'), $attach[1])?>"><?php echo $attach[1]?></button>
				<?php endforeach?>
			</div>
			<?php endif?>
		</div>
		
		<?php if($content->visibleComments()):?>
		<div class="kboard-comments-area"><?php echo $board->buildComment($content->uid)?></div>
		<?php endif?>
		
		<div class="kboard-document-navi">
			<div class="kboard-prev-document">
				<?php
				$bottom_content_uid = $content->getPrevUID();
				if($bottom_content_uid):
				$bottom_content = new KBContent();
				$bottom_content->initWithUID($bottom_content_uid);
				?>
				<a href="<?php echo esc_url($url->getDocumentURLWithUID($bottom_content_uid))?>" title="<?php echo esc_attr(wp_strip_all_tags($bottom_content->title))?>">
					<span class="navi-arrow">이전글</span>
					<span class="navi-document-title kboard-thumbnail-cut-strings"><?php echo wp_strip_all_tags($bottom_content->title)?></span>
				</a>
				<?php endif?>
			</div>
			
			<div class="kboard-next-document">
				<?php
				$top_content_uid = $content->getNextUID();
				if($top_content_uid):
				$top_content = new KBContent();
				$top_content->initWithUID($top_content_uid);
				?>
				<a href="<?php echo esc_url($url->getDocumentURLWithUID($top_content_uid))?>" title="<?php echo esc_attr(wp_strip_all_tags($top_content->title))?>">
					<span class="navi-document-title kboard-thumbnail-cut-strings"><?php echo wp_strip_all_tags($top_content->title)?></span>
					<span class="navi-arrow">다음글</span>
				</a>
				<?php endif?>
			</div>
		</div>
		
		<div class="kboard-control">
			<div class="left">
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-thumbnail-button-small"><?php echo __('List', 'kboard')?></a>
			</div>
			<?php if($content->isEditor() || $board->permission_write=='all'):?>
			<div class="right">
				<a href="<?php echo esc_url($url->getContentEditor($content->uid))?>" class="kboard-thumbnail-button-small"><?php echo __('Edit', 'kboard')?></a>
				<a href="<?php echo esc_url($url->getContentRemove($content->uid))?>" class="kboard-thumbnail-button-small" onclick="return confirm('<?php echo __('Are you sure you want to delete?', 'kboard')?>');"><?php echo __('Delete', 'kboard')?></a>
			</div>
			<?php endif?>
		</div>
		
		<?php if($board->contribution() && !$board->meta->always_view_list):?>

		<?php endif?>
	</div>
</div>