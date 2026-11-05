<div id="content" class="app-content container">
	<main id="main" class="app-main">
		<header class="archive-header">
			<h1 class="archive-title"><?= e( $archive->title() ); ?></h1>
		</header>
		<section class="archive-content">
			<?= $archive->content(); ?>
		</section>
		<?= $engine->each( 'entry.archive', $entries, 'entry' ) ?>
	</main>
</div>