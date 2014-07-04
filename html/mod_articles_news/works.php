<?php defined('_JEXEC') or die; ?>

<div class="contents">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
		$item = $list[$i]; ?>
		<div class="col-md-4">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item');?>
		</div>
	<?php endfor; ?>
</div>
