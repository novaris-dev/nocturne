# Nocturne SCSS

Nocturne's base styles come from [Chassis](https://github.com/techkodeninja/chassis), which loads from its service provider in `config/app.php`: settings, reset, elements, layout objects, the page skeleton, components, and utilities.

| File | Holds |
|---|---|
| `screen.scss` | Only `@forward` lines, listing everything in order |
| `01.settings` | Nocturne's colors, fonts, and widths, as custom properties |
| `06.layouts` | Changes to the Chassis page skeleton, such as header and content spacing |
| `07.components` | Styles that belong only to Nocturne, such as the phone menu and post box |

Composer has to install the package before the build, because `07.components/01.navigation` reads Chassis's Sass tools from `vendor/techkodeninja/chassis/scss`.
