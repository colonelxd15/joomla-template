<?php defined('_JEXEC') or die; ?>
<div class="contents">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
		$item = $list[$i]; ?>
		<div class="container-fluid">
			<div class="row">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_CaseStudy-item');?>
			</div>
		</div>
	<?php endfor; ?>
</div>
