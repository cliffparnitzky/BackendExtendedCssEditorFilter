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
 * Table tl_style_sheet
 */
$GLOBALS['TL_DCA']['tl_style_sheet']['list']['sorting']['filter'] = CssEditorFilter::getCurrentFilterDefinition('tl_style_sheet');
$GLOBALS['TL_DCA']['tl_style_sheet']['list']['global_operations']['filter'] = array
(
	'label'               => &$GLOBALS['TL_LANG']['tl_style_sheet']['extendedFilter'],
	'class'               => 'header_special_filter',
	'button_callback'     => array('tl_style_sheet_BackendExtendedCssEditorFilter', 'getCssFilterWidget') 
);

/**
 * Class tl_style_sheet_BackendExtendedCssEditorFilter
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_style_sheet_BackendExtendedCssEditorFilter extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Returning the drop down for the special filter
	 */
	public function getCssFilterWidget($href, $label, $title, $class, $attributes)
	{
		return CssEditorFilter::getCssFilterWidget($this->addToUrl(''), $label, 'tl_style_sheet');
	}
}

?>