<?php

/*
 * Copyright 2012-2015, Theia Post Slider, WeCodePixels, http://wecodepixels.com
 */

class TpsAdminTemplates {
	public static function getVerticalPositionHtml( $currentOptions, $postPage = false ) {
		$prefix = $postPage ? 'tps_options' : 'tps_nav';
		$onchange = $postPage ? '' : 'updateSlider()';
		?>
		<tr valign="top">
			<th scope="row">
				<label for="tps_nav_vertical_position"><?php _e( "Vertical position:", 'theia-post-slider' ); ?></label>
			</th>
			<td>
				<select id="tps_nav_vertical_position"
				        name="<?php echo $prefix; ?>[nav_vertical_position]"
				        onchange="<?php echo $onchange; ?>">
					<?php
					$options = array();
					if ( $postPage ) {
						$options['global'] = 'Use global setting';
					}
					$options = array_merge( $options, TpsOptions::get_button_vertical_positions() );
					foreach ( $options as $key => $value ) {
						$output = '<option value="' . $key . '"' . ( $key == $currentOptions['nav_vertical_position'] ? ' selected' : '' ) . '>' . $value . '</option>' . "\n";
						echo $output;
					}
					?>
				</select>
			</td>
		</tr>
	<?php
	}
}