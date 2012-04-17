# Dvorak - A custom platform

What captures of the idea of overriding or extending the Joomla Platform itself? I immediately thought of **Dvorak** and his symphony "from the New World".  Dvorak is simple skeleton for creating a custom framework to stand beside the core Joomla Platform, or even to override it. It demonstrates:

* how to structure a custom platform with a custom prefix;
* how to structure overrides for the core Joomla classes; and
* how to structure the test suite.

## Overview

<dl>
  <dt>build/</dt>
  <dd>This folder contains support folders that are used when creating the code coverage report.</dd>
  <dt>libraries/</dt>
  <dd>This folder mirrors the <code>libraries/</code> folder in the core Joomla Platform.</dd>
  <dt>tests/</dt>
  <dd>This folder contains the test suite for the custom platform.</dd>
</dl>

Note that within the ``libraries/dvorak/`` folder, all the classes are prefixed with "D" (instead of "J") and then all the classes follow the auto-loader naming convention. The prefix is specified in the last line of the ``libraries/import.php`` file:

<pre>// Ensure that we load any Dvorak Platform classes before Joomla ones.
JLoader::registerPrefix('D', DPATH_PLATFORM . '/dvorak', true);
JLoader::registerPrefix('J', DPATH_PLATFORM . '/joomla', true);

// Load the core Joomla Platform.
JLoader::registerPrefix('J', JPATH_PLATFORM . '/joomla');</pre>

You can search-and-replace the word "Dvorak" and replace it with your own application name. You can also search-and-replace "{COPYRIGHT}".

This type of repository would be used to start your own toolkit of platform classes, or where you want to deliberately override the core Joomla Platform classes (for example, to write your own ``JUser`` class).

## Requirements

* PHP 5.3+

## Installation

This application assumes that you have cloned it, and the Joomla Platform into a folder called "joomla" under the same parent. For example:

<pre>/parent
../Dvorak  &lt;-- this repository
../joomla  &lt;-- the Joomla Platform</pre>

The simplest way to do this is like this:

<pre>mkdir Composers
cd Composers
git clone git://github.com/joomla/joomla-platform.git joomla
git clone git://github.com/eddieajau/jc-dvorak.git Dvorak</pre>

Such a setup will allow the application to auto-discover the Joomla Platform. Alternatively, you can configure some environment variables so that your applications know where to find the Joomla Platform (probably the way you would do it on the production server).

<pre>JPLATFORM_HOME=/path/to/joomla/platform</pre>

Once you have cloned this repository, you can then push it to one your have created for your own application.

To use the new platform, bootstrap the Joomla Platform in the normal way (either using the core or the legacy file), and then include ``libraries/import.php`` from your custom platform.

## About the Joomla Composers

The Joomla Composers are a suite of skeleton git repositories that can be used to kick-start your own Joomla Platform Projects. You can clone any of the repositories as a base for building your own application, or cherry-pick what you need.