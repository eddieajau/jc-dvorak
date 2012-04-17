<?php
/**
 * Bootstrap file for the Bach Application.
 *
 * @package     Dvorak.Application
 *
 * @copyright   Copyright (C) {COPYRIGHT}. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

// Make sure that the Joomla Platform has been loaded.
if (!defined('JPATH_PLATFORM') || !class_exists('JLoader'))
{
	exit('Joomla Platform not loaded.');
}

// Set the platform root path as a constant if necessary.
if (!defined('DPATH_PLATFORM'))
{
	define('DPATH_PLATFORM', dirname(__FILE__));
}

// Ensure that we load any Dvorak Platform classes before Joomla ones.
JLoader::registerPrefix('D', DPATH_PLATFORM . '/dvorak', true);
JLoader::registerPrefix('J', DPATH_PLATFORM . '/joomla', true);

// Load the core Joomla Platform.
JLoader::registerPrefix('J', JPATH_PLATFORM . '/joomla');
