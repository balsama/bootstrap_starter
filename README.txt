Bootstrap Starter
=================

This is a starter theme to be used with Boostrap and Bootstrap Ignitor. You can
rename this theme. Make sure to change all references in template.php to the
new theme name if you do.

SASS
----
The theme directory contains SASS and CSS folders. Theme developers should only
edit files in the SASS directory and use the SASS command
`sass --watch sass:css` to compile the CSS files.

SMACSS
------
Bootstrap Starter is set up to use the Scalable and Modular Architecture for
CSS and comes with the following SCSS/CSS files:

- base
- layout
- component
- state
- theme

Each has an @file description at the top for clarification on their purposes.
See http://smacss.com/book/categorizing for more information.

Field Classes
-------------
The `hook_preprocess_field()` function in `template.php` enables you to easily
add custom classes to field wrappers, field titles, field containers, and field
items. Just add a case in the `$name` switch for the field you want to target.
It also comes with a logical field template that can be extended to individual
fields by copying renaming it to `field—[field-name].tpl.php`.
