<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Cliff Parnitzky 2013
 * @package    BackendExtendedCssEditorFilter
 * @license    LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace BackendExtendedCssEditorFilter;

/**
 * Class CssEditorFilter
 *
 * Provide methods use special filter
 * @copyright  Cliff Parnitzky 2013
 * @author     Cliff Parnitzky
 * @package    BackendExtendedCssEditorFilter
 */
class CssEditorFilter extends \Backend
{
	const CSS_FILTER_PARAM_FIELD_NAME = 'cssFilterField';
	const CSS_FILTER_PARAM_VALUE_NAME = 'cssFilterValue';
	
	/**
	 * Returns the widget for the css filter
	 */
	public static function getCssFilterWidget($url, $label, $strTable)
	{
		$url = self::removeUrlParams($url, self::CSS_FILTER_PARAM_FIELD_NAME);
		$url = self::removeUrlParams($url, self::CSS_FILTER_PARAM_VALUE_NAME);
		
		$actFilterField = \Input::get(self::CSS_FILTER_PARAM_FIELD_NAME);
		$actFilterValue = urldecode(\Input::get(self::CSS_FILTER_PARAM_VALUE_NAME));
		
		$returnString  = '<div class="tl_subpanel tl_search" style="clear: both; margin-bottom: -15px; float: none; margin-top: 10px;">';
		$returnString .= '<strong>' . $label . '</strong>';
		$returnString .= '<select id="' . self::CSS_FILTER_PARAM_FIELD_NAME . '" style="width: 90px;" class="tl_select">';
		$returnString .= '<option value="">---</option>';
		foreach ($GLOBALS[strtoupper($strTable) . '_FILTER'] as $filter=>$definition)
		{
			$returnString .= '<option value="' . $filter . '"' . ($actFilterField == $filter ? ' selected="selected"' : '') . '>' . $GLOBALS['TL_LANG'][$strTable]['extendedFilterOption'][$filter] . '</option>';
		}
		$returnString .= '</select>';
		$returnString .= '<span> = </span>';
		$returnString .= '<input type="text" value="' . $actFilterValue . '" class="tl_text" id="' . self::CSS_FILTER_PARAM_VALUE_NAME . '" onchange="location.href = \'' . $url . '&amp;' . self::CSS_FILTER_PARAM_FIELD_NAME . '=\' + document.getElementById(\'' . self::CSS_FILTER_PARAM_FIELD_NAME . '\').options[document.getElementById(\'' . self::CSS_FILTER_PARAM_FIELD_NAME . '\').options.selectedIndex].value + \'&' . self::CSS_FILTER_PARAM_VALUE_NAME . '=\' + encodeURIComponent(document.getElementById(\'' . self::CSS_FILTER_PARAM_VALUE_NAME . '\').value) + \'\';">';
		$returnString .= '</div>';

		return $returnString;
	}
	
	/**
	 * Remove the given param from the url
	 */
	private static function removeUrlParams ($url, $strParamName)
	{
		$arrUrlComponents = parse_url($url);
		
		$arrQuery = explode('&amp;', $arrUrlComponents['query']);
		foreach ($arrQuery as $key => $query)
		{
			if (strpos($query, $strParamName) !== FALSE)
			{
				unset($arrQuery[$key]);
			}
		}
		
		return $arrUrlComponents['path'] . "?" . implode('&amp;', $arrQuery);
	}
	
	/**
	 * Returns the current style sheet filter definition
	 */
	public static function getCurrentFilterDefinition($strTable)
	{
		$objCssFilter = new CssEditorFilter();
		return $objCssFilter->getFilterDefinition($strTable);
	}
	/**
	 * Returns the filter definitions (will be connecte with AND)
	 */
	private function getFilterDefinition($strTable)
	{
		$arrFilterDefinitions = array();
		
		// adding special filter definitions
		$filterDefinition = $GLOBALS[strtoupper($strTable) . '_FILTER'][\Input::get(self::CSS_FILTER_PARAM_FIELD_NAME)];
		$value = str_replace('&#35;', '#', rawurldecode(\Input::get(self::CSS_FILTER_PARAM_VALUE_NAME)));
		$value = str_replace('*', '%', $value);
		
		if (strlen($filterDefinition) > 0 && strlen($value) > 0)
		{
			$arrFilterDefinitions[] = array($filterDefinition, $value);
		}
		
		return $arrFilterDefinitions;
	}
}

?>