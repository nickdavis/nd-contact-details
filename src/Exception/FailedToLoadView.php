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

use RuntimeException;

class FailedToLoadView
	extends RuntimeException
	implements ContactDetailsException {

	/**
	 * Create a new instance of the exception if the view file itself created
	 * an exception.
	 *
	 * @param string     $uri       URI of the file that is not accessible or
	 *                              not readable.
	 * @param \Exception $exception Exception that was thrown by the view file.
	 *
	 * @return static
	 */
	public static function from_view_exception( $uri, $exception ) {
		$message = \sprintf(
			'Could not load the View URI "%1$s". Reason: "%2$s".',
			$uri,
			$exception->getMessage()
		);

		return new static( $message, (int) $exception->getCode(), $exception );
	}
}
