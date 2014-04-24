<div class="wrap">
	<h2>Analytics</h2>
	<form method="post">
		<textarea name="google_tag_manager"><?php echo get_option( 'google_tag_manager', '' ); ?></textarea>
		<input type="submit" name="update_google_tag_manager" id="submit" class="button" value="Update Analytics" />
	</form>
</div>