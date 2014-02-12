<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2013-2014
 * @author     Cliff Parnitzky
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