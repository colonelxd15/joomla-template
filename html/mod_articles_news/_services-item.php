<?php 
	defined('_JEXEC') or die; 
	$images = json_decode($item->images);
?>
<div class="project-img">	
	<img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
</div>
<p class="service-name">
	<a href="index.php?option=com_content&view=article&id=<?php echo $item->id;?>">
		<?php echo htmlspecialchars($item->title); ?>
	</a>
</p>

<p class="service-bd">
	<?php echo htmlspecialchars($images->image_intro_caption); ?>
</p>
<div class="service-desc">
	<?php echo htmlspecialchars($item->introtext);?>
</div>
