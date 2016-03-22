<article <?php post_class(); ?>>
<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
	$thumb_url = $thumb_url_array[0];
 ?>
  <div class="entry-summary 
  col-md-<?php echo get_field("columns"); ?> 
  col-md-offset-<?php echo get_field("offset"); ?>" 
  style="background-image:url('<?php echo $thumb_url; ?>')">
  	<a href="<?php echo get_field("url"); ?>"><?php the_post_thumbnail (); ?></a>
  </div>
</article>
