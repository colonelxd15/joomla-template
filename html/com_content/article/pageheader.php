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

<div class="item-page blog <?php echo $this->pageclass_sfx?>">
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
		
	<?php 
		if (!$params->get('show_intro')) : 
			echo $this->item->event->afterDisplayTitle; 
		endif; 
	?>

	<?php echo $this->item->event->beforeDisplayContent; ?>

	<?php echo $this->item->text; ?>

	<?php echo $this->item->event->afterDisplayContent; ?> </div>
