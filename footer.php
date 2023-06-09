<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<div class="right-contact-wrpapper">
	<a href="https://www.facebook.com/vienthammynad" class="contact-item">
		<div class="icon-img">
			<img src="http://localhost:8888/nad/wp-content/uploads/2023/06/facebook.png" alt="Facebook">
		</div>
		<div class="contact-app">Fanpage</div>
	</a>
	<a href="https://zalo.me/0862095665" class="contact-item">
		<div class="icon-img">
			<img src="http://localhost:8888/nad/wp-content/uploads/2023/06/zalo.png" alt="Zalo">
		</div>
		<div class="contact-app">Zalo</div>
	</a>
	<a href="" class="contact-item">
		<div class="icon-img">
			<img src="http://localhost:8888/nad/wp-content/uploads/2023/06/messenger.png" alt="Messenger">
		</div>
		<div class="contact-app">Messenger</div>
	</a>
</div>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
