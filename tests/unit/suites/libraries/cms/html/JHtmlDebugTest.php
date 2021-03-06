<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  HTML
 *
 * @copyright   (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Test class for JHtmlDebug.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Html
 * @since       3.7.0
 */
class JHtmlDebugTest extends TestCase
{
	/**
	 * Test xdebugLink method.
	 *
	 * @return  void
	 *
	 * @since   3.7.0
	 */
	public function testXdebugLink()
	{
		JHtmlDebug::$xdebugLinkFormat = 'XDebugLink: %f %l';

		$link = JHtmlDebug::xdebuglink(JPath::clean(JPATH_ROOT . '/path/to/file'), 123);
		$expected = sprintf('<a href="XDebugLink: %s 123" >%s</a>', JPath::clean(JPATH_ROOT . '/path/to/file'), JPath::clean('JROOT/path/to/file:123'));

		self::assertEquals($expected, $link);

		JHtmlDebug::$xdebugLinkFormat = '';

		$link = JHtmlDebug::xdebuglink(JPath::clean(JPATH_ROOT . '/path/to/file'), 123);

		self::assertEquals(JPath::clean('JROOT/path/to/file:123'), $link);
	}
}
