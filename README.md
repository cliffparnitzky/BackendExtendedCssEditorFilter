Contao Extension: BackendExtendedCssEditorFilter
================================================

Provides extended filter functions for the internal CSS editor.


Installation
------------

The extension is not published in contao extension repository.
Install it manually or via [composer](https://packagist.org/packages/cliffparnitzky/backend-extended-css-editor-filter).


Tracker
-------

https://github.com/cliffparnitzky/BackendExtendedCssEditorFilter/issues


Compatibility
-------------

- min. version: Contao 3.0.x
- max. version: Contao 3.2.x


Dependency
----------

- There are no dependencies to other extensions, that have to be installed.


Screenshots
-----------

![Screenshot: Stylesheet filter](https://raw.github.com/cliffparnitzky/BackendExtendedCssEditorFilter/master/screenshot_stylesheet_filter.jpg)

![Screenshot: Style filter](https://raw.github.com/cliffparnitzky/BackendExtendedCssEditorFilter/master/screenshot_style_filter.jpg)


Extending
---------

Adding additional filters is very easy.

Just define a new entry for `$GLOBALS['TL_STYLE_SHEET_FILTER']` or `$GLOBALS['TL_STYLE_FILTER']` (see `config.php``).

The key could be used for translation. The value must be a SQL query that receives one parameter. It will be inserted automatically.