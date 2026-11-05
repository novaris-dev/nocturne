<div id="content" class="app-content container">
	<main id="main" class="app-main">
		<article class="<?=e( post_class() ); ?>">
		<header class="entry__header">
			<h1 class="entry__title"><?= e( $home->title() ); ?></h1>
		</header>
		<div class="entry__content">
			<?= $home->content(); ?>
		</div>
		</article>
	</main>
</div>