<div id="content" class="app-content app-content--sidebar-right container">
	<main id="main" class="app-main">
		<article class="<?= e( post_class() ) ?>">
			<header class="entry__header">
				<div class="entry__metadata">
					<?= $single->date(); ?>
				</div>

				<h1 class="entry__title">
					<?= e( $single->title() ); ?>
				</h1>
			</header>
			<?php if ( $thumbnail = $single->thumbnail( 'novaris-landscape-extra-large' ) ) : ?>
				<picture class="entry__thumbnail">
					<img src="<?= e( $thumbnail->url() ); ?>" width="<?= $thumbnail->width(); ?>" height="<?= $thumbnail->height(); ?>" alt="<?= e( $single->title() ); ?>">
				</picture>
			<?php endif ?>
			<div class="entry__content">
				<?= $single->content() ?>
			</div>

			<footer class="entry__footer">
				<?php if ( $tags = $single->terms( 'category' ) ) : ?>
					<div class="entry__terms">
						Filed under:

						<?php foreach ( $tags as $tag ) : ?>
							<a class="entry__term-anchor" href="<?= e( $tag->url() ) ?>">
								<?= e( $tag->name() ) ?>
							</a>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			</footer>
		</article>
	</main>
	<aside id="secondary" class="widget-area">
		<?= $engine->categories() ?>
		<?= $engine->archives() ?>
		<?= $engine->recent_posts() ?>
	</aside>
</div>