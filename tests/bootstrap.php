<?php
/**
 * Prepares a minimalist framework for unit testing.
 *
 * @package    Dvorak.Tests
 *
 * @copyright  Copyright (C) {COPYRIGHT}. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 * @link       http://www.phpunit.de/manual/current/en/installation.html
 */

// We need to check if _JEXEC is defined, this can happen using process isolation in PHPUnit
// because the bootstrap file is included in "global state" and will be included again.
if (!defined('_JEXEC'))
{
	define('_JEXEC', 1);
}

// Fix magic quotes.
@ini_set('magic_quotes_runtime', 0);

// Maximise error reporting.
@ini_set('zend.ze1_compatibility_mode', '0');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define the path for the Joomla Platform.
if (!defined('JPATH_PLATFORM'))
{
	$platform = getenv('JPLATFORM_HOME');
	if ($platform)
	{
		define('JPATH_PLATFORM', realpath($platform));
	}
	else
	{
		define('JPATH_PLATFORM', realpath(dirname(dirname(__DIR__)) . '/joomla/libraries'));
	}
}

// Ensure we have a path constant for the Joomla Platform on which to run the tests.  This can be
// overriden within the phpunit.xml file if you chose to create a custom version of that file.
if (!defined('JPLATFORM_REPO'))
{
	define('JPLATFORM_REPO', realpath(dirname(JPATH_PLATFORM)));
}

// Ensure that required path constants are defined.  These can be overriden within the phpunit.xml file
// if you chose to create a custom version of that file.
if (!defined('JPATH_TESTS'))
{
	define('JPATH_TESTS', realpath(__DIR__));
}

// Import the Joomla Platform.
require_once JPLATFORM_REPO . '/libraries/import.php';

// Import the Dvorak Platform autoloader.
require_once dirname(__DIR__) . '/libraries/import.php';

// Register the core Joomla test classes.
JLoader::registerPrefix('Test', JPATH_PLATFORM . '/../tests/core');
