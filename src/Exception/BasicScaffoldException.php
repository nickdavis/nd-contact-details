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

namespace NickDavis\ContactDetails\Exception;

use Throwable;

/**
 * This is a "marker interface" to mark all the exception that come with this
 * plugin with this one interface.
 *
 * This allows you to not only catch individual exceptions, but also catch "all
 * exceptions from plugin XY".
 */
interface ContactDetailsException extends Throwable {

}
