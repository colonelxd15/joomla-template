<?php 
	defined('_JEXEC') or die; 
	$images = json_decode($item->images);
?>
<a href="index.php?option=com_content&view=article&id=<?php echo $item->id;?>">
	<div class="featured-cs" data-image="<?php echo htmlspecialchars($images->image_intro); ?>">
		<p class="featured-title big">
			<?php echo htmlspecialchars($item->title); ?>
		</p>		
	</div>
</a>
