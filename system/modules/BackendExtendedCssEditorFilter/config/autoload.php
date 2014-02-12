<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package BackendExtendedCssEditorFilter
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'BackendExtendedCssEditorFilter',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'BackendExtendedCssEditorFilter\CssEditorFilter' => 'system/modules/BackendExtendedCssEditorFilter/classes/CssEditorFilter.php',
));
