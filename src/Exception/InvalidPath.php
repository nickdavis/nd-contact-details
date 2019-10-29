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

use InvalidArgumentException;

class InvalidPath
	extends InvalidArgumentException
	implements ContactDetailsException {

	/**
	 * Create a new instance of the exception for a file that is not accessible
	 * or not readable.
	 *
	 * @param string $path Path of the file that is not accessible or not
	 *                     readable.
	 *
	 * @return static
	 */
	public static function from_path( $path ) {
		$message = \sprintf(
			'The view path "%s" is not accessible or readable.',
			$path
		);

		return new static( $message );
	}
}
