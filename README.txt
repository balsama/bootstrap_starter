Bootstrap Starter
=================

This is a starter theme to be used with Boostrap and Bootstrap Ignitor. You can
rename this theme. Make sure to change all references in template.php to the
new theme name if you do.

CSS
---

###SASS
The theme directory contains SASS and CSS folders. Theme developers should only
edit files in the SASS directory and use the SASS command
`sass --watch sass:css` to compile the CSS files.

###SMACSS
Bootstrap Starter is set up to use the Scalable and Modular Architecture for
CSS and comes with the following SCSS/CSS files:

- base
- layout
- component
- state
- theme

Each has an @file description at the top for clarification on their purposes.
See http://smacss.com/book/categorizing for more information.

###IE Support
An IE < 10 and < 9 SCSS/CSS file are also included and conditionally loaded.

Field Classes
-------------
The `hook_preprocess_field()` function in `template.php` enables you to easily
add custom classes to field wrappers, field titles, field containers, and field
items. Just add a case in the `$name` switch for the field you want to target.
It also comes with a logical field template that can be extended to individual
fields by copying renaming it to `field—[field-name].tpl.php`.

Javascript
----------
A theme JS file (/js/theme.js) is included at the bottom of each page via
`drupal_add_js()` in `template.php` rather than using the `.info` file. This
allows us to place the file outside of the header. The follwing scripts are
also included:

- html5.js: Shiv for IE < 8.
- jquery.touchSwipe.min.js: Provides simple mouse and touch swipe events.
- modernizr.custom.js: Tests for SVG and CSS Column support.
- respond.min.js: Enables media query support for IE 8.

Logo
----
An additional variable, `$svg_logo`, is passed to page.tpl.php. By default, it
contains the html image tag for a file in `/images` named `logo.svg`. You
should include a `.png` version of the logo in the same directory as the SVG
version will automatically be swapped out for the PNG version when the
modernizr scripts detects an unsupported browser.

