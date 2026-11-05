<div id="content" class="app-content container">
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
</div>