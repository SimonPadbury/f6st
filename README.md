# F6ST – A Foundation 6 Starter Theme, for WordPress

***Version 1.0***


F6ST is a simple WordPress starter theme loaded with ZURB Foundation For Sites, v.6.

[https://github.com/SimonPadbury/f6st](https://github.com/SimonPadbury/f6st)

* * *

### Features of F6ST

1. Simple, intuitive, clean code.
2. Foundation 6 for Sites and theme CSS, JS, functions and loops are organized into different folders.
3. **Foundation for Sites 6.2.0** – included CSS and JS enqueued.
4. **jQuery** – enqueued, served from `foundation/js/vendor/jquery.min.js`.
5. **Font Awesome 4.5.0** (served by cdnjs.com CDN) enqueued.
6. **Modernizr 2.8.3** (served by cdnjs.com CDN) enqueued.
7. A starter CSS theme – `/theme/css/theme.css` and `/theme/js/theme.js` enqueued.
8. Two WordPress menus in the `.top-bar` (left and right).
9. Options for a search form in either the `.top-bar` or as a widget, ready to use.
  1. The `.top-bar` search form script is in `includes/top-bar-search.php`.
  2. The widget search form script is in `functions/widget-search.php`.
10. Foundation pagination ( e.g. ` 1 | 2 | 3 | Older -> `) for blog index and category pages.
11. **Visual editor stylesheet** – into which the same Foundation 6 and starter theme CSS are preloaded by `@import`, so that what you see in the visual editor is (mostly!) what you get at the front end (WYSI(M!)WYG). E.g. you will see the theme's typpography in the WordPress Post/Page editor, but its width will not be the same as your article column width in the front end.
12. [MIT licence](http://opensource.org/licenses/MIT) (open source).

### Swapping for a Newer or Custimized Foundation for Sites

This is easy to do.

1. Download Complete ("Download Everything") Foundation 6 For Sites. Alternatively, download a custom build from the Customizer. [http://foundation.zurb.com/sites/download.html/](http://foundation.zurb.com/sites/download.html/)
2. After unzipping, grab the entire content of the downloaded folder and drop it into the `foundation/` folder in this theme, overwriting the earlier Foundation 6 stuff.

This theme should still work OK – unless Foundation for Sites has drastically changed.

### Using SCSS

1. The Foundation SCSS files are not included in this starter theme. Download these fresh for yourself, create a new folder e.g. `foundation/scss/` and drop them in. Point your Sass preprocessor to this folder, and tell it to output to the `foundation/css` folder.
2. Similarly, set up your own `theme/scss/` and fill it your way. Your root/index file needs to output as `theme/css/theme.scss`.

### A Recommendation: Use the WP Editor WordPress Plugin

Get the [WP Editor plugin](https://en-gb.wordpress.org/plugins/wp-editor/), so that you can handle this theme's folder structure in the WordPress Theme Editor.