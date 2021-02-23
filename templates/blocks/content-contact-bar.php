<div class="outer-container">
	<div class="contact-bar">
		<ul>
			<?php if ( 'on' === et_get_option( 'divi_show_linkedin_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-linkedin">
		<a href="https://www.linkedin.com/company/aerotec-engines-ltd/" class="icon" target="_blank">
			<span><?php esc_html_e( 'LinkedIn', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_instagram_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-instagram">
		<a href="<?php echo esc_url( et_get_option( 'divi_instagram_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Instagram', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
		</ul>
		<?php if ( get_field('phone_number', 'options') ): ?>
		<p class="phone-number"><a class="click-number" href="tel:+1<?php the_field('phone_number', 'options'); ?>"><span id="phoneNumber"><?php the_field('phone_number', 'options'); ?></span></a></p>
		<?php endif; ?>
		<ul class="cta-buttons">
			<?php if ( get_field('email_button', 'options') ): ?>
			<li>
				<a href="mailto:<?php the_field('email_button', 'options'); ?>"><?php echo esc_html_e('Email Us'); ?></a>
			</li>
			<?php endif; ?>
			<?php if ( get_field('quote_button', 'options') ): ?>
			<li>
				<a href="<?php the_field('quote_button', 'options'); ?>"><?php echo esc_html_e('Request a quote'); ?></a>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</div>