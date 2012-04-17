<?php
/**
 * @package     Dvorak.Tests
 *
 * @copyright   Copyright (C) {COPYRIGHT}. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test the Nocturne Class.
 *
 * @package     Dvorak.Application
 * @since       1.0
 */
class DNocturneTest extends TestCase
{
	/**
	 * An instance of the class to tbe tested.
	 *
	 * @var    DNocturne
	 * @since  1.0
	 */
	private $_instance;

	/**
	 * Get the key of the nocturne.
	 *
	 * @return  string
	 *
	 * @since   1.0
	 */
	public function testGetKey()
	{
		$this->assertEquals('B Major', $this->_instance->getKey());
	}

	/**
	 * Setup the tests.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->_instance = new DNocturne;
	}
}
