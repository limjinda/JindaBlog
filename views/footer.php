<?php global $jindaOpt; ?>
<footer class="footer-block">
	<div class="hero-unit">
		<p class="footer-copyright uk-text-center">
			<?php echo $jindaOpt['opt-footer-1']; ?>
		</p>
		<p class="footer-credit uk-text-center">
			<?php echo $jindaOpt['opt-footer-2']; ?>
		</p>
		<ul class="footer-social-list">
			<?php if ($jindaOpt['opt-enable-facebook'] == 1): ?>
				<li>
					<a href="<?php echo $jindaOpt['opt-url-facebook'] ?>" title="My Facebook" target="_blank">
						<i class="uk-icon-facebook-square facebook"></i>
					</a>
				</li>
			<?php endif; ?>
			<?php if ($jindaOpt['opt-enable-twitter'] == 1): ?>
			<li>
				<a href="<?php echo $jindaOpt['opt-url-twitter'] ?>" title="My Twitter" target="_blank">
					<i class="uk-icon-twitter-square twitter"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ($jindaOpt['opt-enable-google-plus'] == 1): ?>
			<li>
				<a href="<?php echo $jindaOpt['opt-url-google-plus'] ?>" title="My Google Plus" target="_blank">
					<i class="uk-icon-google-plus-square gplus"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ($jindaOpt['opt-enable-linkedin'] == 1): ?>
			<li>
				<a href="<?php echo $jindaOpt['opt-url-linkedin'] ?>" title="My Google Plus" target="_blank">
					<i class="uk-icon-linkedin-square linkedin"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ($jindaOpt['opt-enable-github'] == 1): ?>
			<li>
				<a href="<?php echo $jindaOpt['opt-url-github'] ?>" title="My Google Plus" target="_blank">
					<i class="uk-icon-github-square github"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ($jindaOpt['opt-enable-tumblr'] == 1): ?>
			<li>
				<a href="<?php echo $jindaOpt['opt-url-tumblr'] ?>" title="My Tumblr" target="_blank">
					<i class="uk-icon-tumblr-square tumblr"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ($jindaOpt['opt-enable-500'] == 1): ?>
			<li>
				<a href="<?php echo $jindaOpt['opt-url-500'] ?>" title="My 500px" target="_blank">
					<i class="uk-icon-camera 500px"></i>
				</a>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</footer>