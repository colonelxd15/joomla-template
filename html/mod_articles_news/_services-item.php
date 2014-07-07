<?php 
	defined('_JEXEC') or die; 
	$images = json_decode($item->images);
?>
<a href="index.php?option=com_content&view=article&id=<?php echo $item->id;?>">
	<div class="project-img">	
		<img src="<?php echo htmlspecialchars($images->image_intro); ?>" 
		alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
	</div>
	<p class="service-name"><?php echo htmlspecialchars($item->title); ?></p>
	<p class="service-bd"><?php echo htmlspecialchars($images->image_intro_caption); ?></p>
	<p class="service-desc"><?php echo htmlspecialchars($item->introtext);?></p>
</a>