<div class="wrap">
	<h2>Analytics</h2>
	<form method="post">
		<p>Google Analytics</p>
		<textarea name="google_analytics" rows="5" style="width: 100%;"><?php echo get_option( 'google_analytics', '' ); ?></textarea>
		<p>Google Tag Manager</p>
		<textarea name="google_tag_manager" rows="5" style="width: 100%;"><?php echo get_option( 'google_tag_manager', '' ); ?></textarea>
		<input type="submit" name="update_google_tag_manager" id="submit" class="button" value="Update Analytics" />
	</form>
</div>