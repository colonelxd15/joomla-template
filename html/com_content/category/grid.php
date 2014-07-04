<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');
?>
<div class="grid<?php echo $this->pageclass_sfx; ?> row">

	<?php $introcount = (count($this->intro_items)); ?>
	<?php $counter = 0;	?>

	<?php if (!empty($this->intro_items)) : ?>
		<?php foreach ($this->intro_items as $key => &$item) : ?>
			<?php $rowcount = ((int) $key % (int) $this->columns) + 1; ?>
			<?php if ($rowcount == 1) : ?>
				<?php $row = $counter / $this->columns; ?>
				<div class="i">
			<?php endif; ?>
			<div class="col-md-4">
				<div class="">
					<?php $this->item->image;
						//$this->item = & $item;
						//echo $this->loadTemplate('item');
					?>
					<p>$this->item->intro_image;</p>
				</div>
				<?php $counter++; ?>
			</div>
			<?php if (($rowcount == $this->columns) or ($counter == $introcount)) : ?>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
		<div class="pagination">
			<?php if ($this->params->def('show_pagination_results', 1)) : ?>
				<p class="counter pull-right"> <?php echo $this->pagination->getPagesCounter(); ?> </p>
			<?php endif; ?>
			<?php echo $this->pagination->getPagesLinks(); ?> </div>
	<?php endif; ?>

</div>
