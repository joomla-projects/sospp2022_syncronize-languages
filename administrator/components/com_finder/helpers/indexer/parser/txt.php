<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_finder
 *
 * @copyright   (C) 2011 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('FinderIndexerParser', dirname(__DIR__) . '/parser.php');

/**
 * Text Parser class for the Finder indexer package.
 *
 * @since  2.5
 */
class FinderIndexerParserTxt extends FinderIndexerParser
{
	/**
	 * Method to process Text input and extract the plain text.
	 *
	 * @param   string  $input  The input to process.
	 *
	 * @return  string  The plain text input.
	 *
	 * @since   2.5
	 */
	protected function process($input)
	{
		return $input;
	}
}
