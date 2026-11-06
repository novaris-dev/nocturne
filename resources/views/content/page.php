<div id="content" class="app-content app-content--sidebar-right container">
	<main id="main" class="app-main">
        <article id="" class="<?= e( post_class() ) ?>">
            <header class="entry-header">
                <h1 class="entry-title"><?= e( $page->title() ); ?></h1>
            </header>
            <div class="entry-content">
                <?= $page->content() ?>
            </div>
        </article>
	</main>
	<aside id="secondary" class="widget-area">
		<?= $engine->categories() ?>
		<?= $engine->archives() ?>
		<?= $engine->recent_posts() ?>
	</aside>
</div>