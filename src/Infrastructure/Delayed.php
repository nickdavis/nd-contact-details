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

namespace NickDavis\ContactDetails\Infrastructure;

/**
 * Something that is delayed to a later point in the execution flow.
 *
 * A class marked as being delayed can return the action at which it requires
 * to be registered.
 *
 * This can be used to only register a given object after certain contextual
 * requirements are met, like registering a frontend rendering service only
 * after the loop has been set up.
 */
interface Delayed {

	/**
	 * Get the action to use for registering the service.
	 *
	 * @return string Registration action to use.
	 */
	public static function get_registration_action(): string;
}
