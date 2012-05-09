<?php
$custom_fields = get_post_custom($widget->ID);

$show_title = true;
$hide_title_field = $custom_fields['hide_title'][0];
if($hide_title_field) { $show_title = false; }
?>

<div class="widget widget_text">
	<?php if($show_title) { ?><h4 class="title"><?php echo $widget->post_title?></h4><?php } ?>	
	<div class="textwidget">
		<?php 
			$content = apply_filters('the_content', $widget->post_content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
		?>	
	</div>
</div>