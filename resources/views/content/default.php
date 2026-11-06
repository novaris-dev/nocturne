<div id="content" class="app-content app-content--sidebar-right container">
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
	<aside id="secondary" class="widget-area">
		<?= $engine->categories() ?>
		<?= $engine->archives() ?>
		<?= $engine->recent_posts() ?>
	</aside>
</div>