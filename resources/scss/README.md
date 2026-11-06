# Nocturne SCSS

Nocturne's layout and components come from [Chassis](https://github.com/techkodeninja/chassis), which loads from its service provider in `config/app.php`. Nocturne only sets its design.

| File | Holds |
|---|---|
| `screen.scss` | Only `@forward` lines, listing everything in order |
| `01.settings` | Nocturne's colors, fonts, spacing, and widths, as custom properties |

If a style belongs only to Nocturne, add it in a new numbered folder and a `@forward` line in `screen.scss`.
