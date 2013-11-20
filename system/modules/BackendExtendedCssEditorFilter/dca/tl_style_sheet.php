<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Cliff Parnitzky 2013
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