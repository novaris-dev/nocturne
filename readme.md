# Nocturne

Nocturne is a dark theme for the [Novaris](https://github.com/novaris-dev/novaris) content management system. Its layout and shared styles come from [Chassis](https://github.com/techkodeninja/chassis).

## Requirements

- PHP 8.2 or later
- Node.js, to build the theme
- Chassis, installed on the site and registered in `config/app.php`:

```php
'providers' => [
	Techkodeninja\Chassis\Providers\Novaris::class,
],
```

Without the provider, the site still loads, but Chassis's CSS and JavaScript don't.

## Development

```bash
composer install
npm install
npm run dev
```

`npm run dev` rebuilds the theme when files change. Use `npm run build` for a production build and to export the theme to `nocturne/`.

## Changing the design

Colors, fonts, and widths are in `resources/scss/01.settings/_index.scss`. See `resources/scss/README.md` for where everything else lives.

## License

Nocturne is licensed under the GNU General Public License, version 2 or later. See `license.md`.
