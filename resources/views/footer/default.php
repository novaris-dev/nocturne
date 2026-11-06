	<footer id="colophon" class="app-footer">
		<div class="app-footer__inner container">
			<?= $engine->social(); ?>
			<p class="app-footer__credit">Powered By <a href="https://github.com/novaris-dev">Novaris</a> and <a href="https://github.com/novaris-dev/nocturne"><?= e( 'Nocturne' ); ?></a></p>
		</div>
	</footer>
</div>
<?= app( 'chassis' ) ? app( 'chassis' )->scripts() : '' ?>
</body>
</html>