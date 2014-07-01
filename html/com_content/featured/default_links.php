<?php defined('_JEXEC') or die;
	$app = JFactory::getApplication();
	$templateparams =$app->getTemplate(true)->params;

	if ($templateparams->get('html5')!=1):
		require(JPATH_BASE.'/components/com_content/views/featured/tmpl/default_links.php');
	else:
		JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>
	<h3>
		<?php echo JText::_('COM_CONTENT_MORE_ARTICLES'); ?>
	</h3>

	<nav class="links">
		<?php foreach ($this->link_items as &$item) : ?>
				<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catslug)); ?>" class="featured-links">
					<?php echo $item->title; ?>
				</a>
		<?php endforeach; ?>
	</nav>
<?php endif; ?>