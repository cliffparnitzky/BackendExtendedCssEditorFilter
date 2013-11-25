Contao Extension: BackendExtendedCssEditorFilter
================================================

Provides extended filter functions for the internal CSS editor.


Installation
------------

The extension is not published in contao extension repository.
Install it manually.


Tracker
-------

https://github.com/cliffparnitzky/BackendExtendedCssEditorFilter/issues


Compatibility
-------------

- min. version: Contao 3.0.x
- max. version: Contao 3.2.0


Dependency
----------

- There are no dependencies to other extensions, that have to be installed.


Screenshots
-----------

![Screenshot: Stylesheet filter](https://raw.github.com/cliffparnitzky/BackendExtendedCssEditorFilter/master/screenshot_stylesheet_filter.jpg)

![Screenshot: Style filter](https://raw.github.com/cliffparnitzky/BackendExtendedCssEditorFilter/master/screenshot_style_filter.jpg)


Extending
---------

Adding additional filters is very easy. Just define a new entry for `$GLOBALS['TL_STYLE_SHEET_FILTER']` of `$GLOBALS['TL_STYLE_FILTER']`. The key could be used for translation.
The value must be a SQL query that receives one parameter. This will later be inserted automatically.