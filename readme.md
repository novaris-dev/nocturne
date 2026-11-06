# Nocturne

Nocturne is a dark theme for the [Novaris](https://github.com/novaris-dev/novaris) content management system. Its layout and shared styles come from [Chassis](https://github.com/techkodeninja/chassis).

## Requirements

- PHP 8.2 or later
- Node.js, to export the theme
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

`npm run dev` exports the theme again when files change. Use `npm run build` to export the theme to `nocturne/`.

## Changing the design

Colors, fonts, spacing, and widths are in `chassis.json`. There's no Sass to build: Chassis reads the file and prints the values after its stylesheet. See [Set the design with `chassis.json`](https://github.com/techkodeninja/chassis#set-the-design-with-chassisjson) for every setting.

## License

Nocturne is licensed under the GNU General Public License, version 2 or later. See `license.md`.
