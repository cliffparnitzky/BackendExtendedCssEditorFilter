<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Cliff Parnitzky 2013
 * @package    BackendExtendedCssEditorFilter
 * @license    LGPL
 */

/**
 * Define special style sheet filters
 */
$GLOBALS['TL_STYLE_SHEET_FILTER']['category'] = 'id IN (SELECT pid FROM tl_style WHERE category LIKE ?)';
$GLOBALS['TL_STYLE_SHEET_FILTER']['comment']  = 'id IN (SELECT pid FROM tl_style WHERE comment LIKE ?)';
$GLOBALS['TL_STYLE_SHEET_FILTER']['selector'] = 'id IN (SELECT pid FROM tl_style WHERE selector LIKE ?)';
$GLOBALS['TL_STYLE_SHEET_FILTER']['bgimage']  = 'id IN (SELECT pid FROM tl_style WHERE bgimage LIKE ?)';
$GLOBALS['TL_STYLE_SHEET_FILTER']['own']      = 'id IN (SELECT pid FROM tl_style WHERE own LIKE ?)';

/**
 * Define special style filters
 */
$GLOBALS['TL_STYLE_FILTER']['bgimage'] = 'bgimage LIKE ?';
$GLOBALS['TL_STYLE_FILTER']['own']     = 'own LIKE ?';

?>