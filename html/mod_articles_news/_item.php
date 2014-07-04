<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

	defined('_JEXEC') or die;
	$item_heading = $params->get('item_heading', 'h4');
	$images = json_decode($item->images);

?>

	<a href="index.php?option=com_content&view=article&id=<?php echo $item->id;?>">

	<div class="project-img">	
		<img src="<?php echo htmlspecialchars($images->image_intro); ?>" 
		alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
	</div>
	<p class="projet-name"><?php echo htmlspecialchars($images->image_intro_caption); ?></p>
</a>