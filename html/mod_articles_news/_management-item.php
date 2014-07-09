<?php 
	defined('_JEXEC') or die; 
	$images = json_decode($item->images);
?>
<div class="mgmt-img">	
	<img src="<?php echo htmlspecialchars($images->image_intro); ?>" 
	alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
</div>
<p class="mgmt-name"><?php echo htmlspecialchars($item->title); ?></p>
<p class="mgmt-pos"><?php echo htmlspecialchars($images->image_intro_caption); ?></p>
<div class="mgmt-info">
	<?php echo htmlspecialchars($item->introtext);?>
</div>
