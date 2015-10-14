<?php

/*
 * get slider template
 */

$slides =  get_posts(
				array(
					'posts_per_page' => -1,
					'post_type' => 'media'
				)
			);

?>

<div class="container_12">
	<div class="grid_12">

		<div class="slider_wrapper">

			<div id="camera_wrap" class="">

				<?php foreach ( $slides as $slide ) {

					$thumbnail = get_post_thumbnail_id($slide->ID);

					$thumbnail_obj = wp_get_attachment_image_src($thumbnail, 'slider', true);

					echo "<div data-src='".$thumbnail_obj[0]."'>

								<div class='caption fadeIn'>

									".$slide->post_content."

								</div>

							</div>";

				}
				?>

			</div>

		</div>

	</div>
</div>