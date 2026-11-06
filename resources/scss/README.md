# Nocturne SCSS

Nocturne's base styles come from [Chassis](https://github.com/techkodeninja/chassis): settings, reset, elements, layout objects, the page skeleton, components, and utilities.

| File | Holds |
|---|---|
| `screen.scss` | Loads the package with Nocturne's settings, such as `$colors`, then Nocturne's own styles |
| `07.components` | Styles that belong only to Nocturne |

Composer has to install the package before the build, because Sass reads it from `vendor/techkodeninja/chassis/scss`.
