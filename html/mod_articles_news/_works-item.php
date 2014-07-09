<?php 
	defined('_JEXEC') or die; 
	$item_heading = $params->get('item_heading', 'h4');
	$images = json_decode($item->images);
?>
<div class="project-img">	
	<img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
</div>
<p class="projet-name">
	<a href="index.php?option=com_content&view=article&id=<?php echo $item->id;?>">
		<?php echo htmlspecialchars($item->title); ?>
	</a>
</p>