<div id="content" class="app-content container">
	<main id="main" class="app-main">
		<?php $engine->each( 'entry.collection', $entries, 'entry' ); ?>
		<?= $engine->includeWhen( $pagination, 'menu.pagination' ); ?>
	</main>
</div>