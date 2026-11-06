# Nocturne SCSS

Nocturne's base styles come from [Chassis](https://github.com/techkodeninja/chassis), which loads from its service provider in `config/app.php`: settings, reset, elements, layout objects, the page skeleton, components, and utilities.

| File | Holds |
|---|---|
| `screen.scss` | Nocturne's colors, fonts, and widths, set as custom properties, plus its own styles |
| `07.components` | Styles that belong only to Nocturne |

Composer has to install the package before the build, because `07.components` reads Chassis's Sass tools from `vendor/techkodeninja/chassis/scss`.
