<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?= app( 'chassis' ) ? app( 'chassis' )->styles() : '' ?>
<?= $doctitle->render(); ?>
<?= Novaris\Font\fonts(); ?>
</head>
<body class="<?= e( body_class() ) ?>">
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div id="container" class="app">
	<header id="masthead" class="app-header app-header--full">
		<div class="app-header__inner container">
			<div class="app-header__branding">
				<?php Novaris\Theme\Site\display_site_title( [ 'tag' => 'p', 'class' => 'app-header__title', 'link_class' => '' ] ); ?>
				<?php Novaris\Theme\Site\display_site_description( [ 'class' => 'app-header__tagline' ] ); ?>
			</div>
			<?= $engine->include( 'menu.primary' ) ?>
		</div>
	</header>