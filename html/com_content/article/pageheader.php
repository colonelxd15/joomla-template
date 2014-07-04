<?php

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);
JHtml::_('behavior.caption');

?>

<div class="page-head col-md-offset-2 col-md-8">
	<?php if ($this->params->get('show_page_heading') && $params->get('show_title')) : ?>
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	<?php 
		endif;
		if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
		{
			echo $this->item->pagination;
		}
	?>

	<?php if ($params->get('show_title') || $params->get('show_author')) : ?>
		<h3 class="article-heading">
	        <?php if ($params->get('show_title')) : ?>
	            <?php echo $this->escape($this->item->title); ?>
	        <?php endif; ?>
	    </h3>
	<?php endif; ?>       

	<?php echo $this->item->text; ?>
</div>