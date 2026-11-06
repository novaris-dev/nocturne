<div id="content" class="app-content app-content--sidebar-right container">
	<main id="main" class="app-main">
		<?php $engine->each( 'entry.collection', $entries, 'entry' ); ?>
		<?= $engine->includeWhen( $pagination, 'menu.pagination' ); ?>
	</main>
	<aside id="secondary" class="widget-area">
		<?= $engine->categories() ?>
		<?= $engine->archives() ?>
		<?= $engine->recent_posts() ?>
	</aside>
</div>