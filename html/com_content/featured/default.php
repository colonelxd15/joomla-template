<?php
	defined('_JEXEC') or die;
	$app = JFactory::getApplication();
	$templateparams =$app->getTemplate(true)->params;

	if ($templateparams->get('html5')!=1):
		require(JPATH_BASE.'/components/com_content/views/featured/tmpl/default.php');
	else:
	JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
	?>
	
	<section class="blog-featured<?php echo $this->pageclass_sfx;?>">
		<?php if ( $this->params->get('show_page_heading')!=0) : ?>
			<h1 class="page-heading">
				<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		<?php endif; ?>

	<?php $leadingcount=0 ; ?>

	<?php if (!empty($this->lead_items)) : ?>
		<div class="items-leading">
			<?php foreach ($this->lead_items as &$item) : ?>
				<article class="leading-aricle">
					<?php 
						$this->item = &$item;
						echo $this->loadTemplate('item'); 
					?>
				</article>
				<?php $leadingcount++; ?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<?php 
		$introcount=(count($this->intro_items));
		$counter=0;
	?>
	<?php if (!empty($this->intro_items)) : ?>
		<?php 
			foreach ($this->intro_items as $key => &$item) :
			
				$key= ($key-$leadingcount)+1;
				$rowcount=( ((int)$key-1) %	(int) $this->columns) +1;
				$row = $counter / $this->columns ;
		?>
		<?php if ($rowcount==1) : ?>
			<div class="col-md-<?php echo (int) $this->columns;?>">
		<?php endif; ?>
				<article class="">
					<?php
						$this->item = &$item;
						echo $this->loadTemplate('item');
					?>
				</article>

				<?php if (($rowcount == $this->columns) or ($counter ==$introcount)): ?>
					<span class="row-separator"></span>	
				<?php endif; ?>

			</div>
			<?php $counter++; ?>
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if (!empty($this->link_items)) : ?>
		<div class="items-more">
			<?php echo $this->loadTemplate('links'); ?>
		</div>
	<?php endif; ?>
		<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">
				<?php if ($this->params->def('show_pagination_results', 1)) : ?>
					<p class="counter">
						<?php echo $this->pagination->getPagesCounter(); ?>
					</p>
				<?php  endif; ?>
				<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
		<?php endif; ?>
	</section>
<?php endif; ?>