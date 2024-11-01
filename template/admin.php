<div class="wrap">
	<h1><?php esc_html_e( 'Woo Shop Opening Hours', 'text-domain' ); ?> - <small style="color: blue; font-size: 14px;"><?php echo date("l jS \of F Y H:i"); ?></small></h1>
	<hr>
	<form method="post" action="options.php">
	<?php settings_fields( 'theme_options' ); ?>
		<table class="form-table wpex-custom-admin-login-table">
			<tr valign="top" class="wpex-custom-admin-screen-background-section">
				<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Monday: ', 'text-domain' ); ?></th>
				<td style="display: inline-block; color: green;">Open time: 
					<?php $value = self::get_theme_option( 'kwoo_soh_monday_start' ); ?>
					<select name="theme_options[kwoo_soh_monday_start]">
						<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
						<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
						<?php
						$interval = date_interval_create_from_date_string('30 minutes');
						$begin = date_create('00:00');
						$end = date_create('23:30')->add($interval);

						foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
							<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
								<?php echo strip_tags( $dt->format('H:i') ); ?>
							</option>
						<?php } ?>
					</select>
				</td>
							<td style="display: inline-block; color: red;">Close time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_monday_end' ); ?>
								<select name="theme_options[kwoo_soh_monday_end]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
			</tr>
						
						<tr valign="top" class="wpex-custom-admin-screen-background-section">
							<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Tuesday: ', 'text-domain' ); ?></th>
							<td style="display: inline-block; color: green;">Open time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_tuesday_start' ); ?>
								<select name="theme_options[kwoo_soh_tuesday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
							<td style="display: inline-block; color: red;">Close time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_tuesday_end' ); ?>
								<select name="theme_options[kwoo_soh_tuesday_end]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
						</tr>

						<tr valign="top" class="wpex-custom-admin-screen-background-section">
							<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Wednesday: ', 'text-domain' ); ?></th>
							<td style="display: inline-block; color: green;">Open time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_wednesday_start' ); ?>
								<select name="theme_options[kwoo_soh_wednesday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
							<td style="display: inline-block; color: red;">Close time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_wednesday_end' ); ?>
								<select name="theme_options[kwoo_soh_wednesday_end]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
						</tr>

						<tr valign="top" class="wpex-custom-admin-screen-background-section">
							<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Thursday: :', 'text-domain' ); ?></th>
							<td style="display: inline-block; color: green;">Open time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_thursday_start' ); ?>
								<select name="theme_options[kwoo_soh_thursday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
							<td style="display: inline-block; color: red;">Close time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_thursday_start' ); ?>
								<select name="theme_options[kwoo_soh_thursday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
						</tr>

						<tr valign="top" class="wpex-custom-admin-screen-background-section">
							<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Friday: ', 'text-domain' ); ?></th>
							<td style="display: inline-block; color: green;">Open time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_friday_start' ); ?>
								<select name="theme_options[kwoo_soh_friday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
							<td style="display: inline-block; color: red;">Close time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_friday_end' ); ?>
								<select name="theme_options[kwoo_soh_friday_end]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
						</tr>

						<tr valign="top" class="wpex-custom-admin-screen-background-section">
							<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Saturday: ', 'text-domain' ); ?></th>
							<td style="display: inline-block; color: green;">Open time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_saturday_start' ); ?>
								<select name="theme_options[kwoo_soh_saturday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
							<td style="display: inline-block; color: red;">Close time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_saturday_end' ); ?>
								<select name="theme_options[kwoo_soh_saturday_end]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
						</tr>

						<tr valign="top" class="wpex-custom-admin-screen-background-section">
							<th style="display: inline-block; width: 100px;" scope="row"><?php esc_html_e( 'Sunday: ', 'text-domain' ); ?></th>
							<td style="display: inline-block; color: green;">Open time: 
								<?php $value = self::get_theme_option( 'kwoo_soh_sunday_start' ); ?>
								<select name="theme_options[kwoo_soh_sunday_start]">
									<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
									<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
									<?php
									$interval = date_interval_create_from_date_string('30 minutes');
									$begin = date_create('00:00');
									$end = date_create('23:30')->add($interval);

									foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
										<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
											<?php echo strip_tags( $dt->format('H:i') ); ?>
										</option>
									<?php } ?>
								</select>
							</td>
				<td style="display: inline-block; color: red;">Close time: 
					<?php $value = self::get_theme_option( 'kwoo_soh_sunday_end' ); ?>
					<select name="theme_options[kwoo_soh_sunday_end]">
						<option value="<?php echo esc_attr('none'); ?>" <?php selected( $value, 'none', true ); ?>>None</option>
						<option value="<?php echo esc_attr('close'); ?>" <?php selected( $value, 'close', true ); ?>>Close</option>
						<?php
						$interval = date_interval_create_from_date_string('30 minutes');
						$begin = date_create('00:00');
						$end = date_create('23:30')->add($interval);

						foreach (new DatePeriod($begin, $interval, $end) as $dt) { ?>
							<option value="<?php echo esc_attr( $dt->format('H:i') ); ?>" <?php selected( $value, $dt->format('H:i'), true ); ?>>
								<?php echo strip_tags( $dt->format('H:i') ); ?>
							</option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 0;">
					<label>Popup heading: 
					<?php $kwoo_soh_popup_heading = self::get_theme_option( 'kwoo_soh_popup_heading' ); ?>
					<input style="width: 100%; height: 40px;" type="text" name="theme_options[kwoo_soh_popup_heading]" placeholder="Popup heading" value="<?php echo $kwoo_soh_popup_heading == '' ? 'We Are Close Now!' : $kwoo_soh_popup_heading; ?>">
					</label>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 0;">
					<label>Popup message: 
					<?php $kwoo_soh_popup_msg = self::get_theme_option( 'kwoo_soh_popup_msg' ); ?>
					<textarea style="width: 100%; height: 100px;" name="theme_options[kwoo_soh_popup_msg]" placeholder="Popup message"><?php echo $kwoo_soh_popup_msg == ''? 'If you purchase anything, we will be able to send you after shop open.' : $kwoo_soh_popup_msg; ?></textarea>
					</label>
				</td>
			</tr>
		</table>

	<?php submit_button(); ?>

	</form>
</div><!-- .wrap -->