<?php 	defined('_JEXEC') or die; ?>
<div class="contents">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
		$item = $list[$i]; ?>
		<div class="col-md-4 col-sm-6 col-xs-12">	
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_works-item');?>
		</div>
	<?php endfor; ?>
</div>
