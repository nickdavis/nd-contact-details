<?php declare( strict_types=1 );

/**
 * ND Contact Details.
 *
 * @package   NickDavis\ContactDetails
 * @author    Nick Davis
 * @license   MIT
 * @link      https://github.com/nickdavis/nd-contact-details
 * @copyright 2019 Nick Davis
 */

namespace NickDavis\ContactDetails\Tests;

interface ViewHelper {

	public const VIEWS_FOLDER = 'tests/php/Fixture/views/';

	public const CHILD_THEME_FOLDER  = self::VIEWS_FOLDER . 'child_theme';
	public const PARENT_THEME_FOLDER = self::VIEWS_FOLDER . 'parent_theme';
	public const PLUGIN_FOLDER       = self::VIEWS_FOLDER . 'plugin';

	public const LOCATIONS = [
		self::CHILD_THEME_FOLDER,
		self::PARENT_THEME_FOLDER,
		self::PLUGIN_FOLDER,
	];
}
