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

namespace NickDavis\ContactDetails\Infrastructure\View;

use NickDavis\ContactDetails\Exception\InvalidPath;
use NickDavis\ContactDetails\Infrastructure\ViewFactory;

/**
 * A templated variation of the simplified view object.
 *
 * It has an ordered list of locations and traverses these until it finds a
 * matching view.
 */
final class TemplatedView extends SimpleView {

	/** @var array<string> */
	private $locations;

	/**
	 * Instantiate a TemplatedView object.
	 *
	 * @param string      $path         Path to the view file to render.
	 * @param ViewFactory $view_factory View factory instance to use.
	 * @param array       $locations    Optional. Array of locations to use.
	 */
	public function __construct(
		string $path,
		ViewFactory $view_factory,
		array $locations = []
	) {
		$this->locations = array_map( [ $this, 'ensure_trailing_slash' ], $locations );
		parent::__construct( $path, $view_factory );
	}

	/**
	 * Add a location to the templated view.
	 *
	 * @param string $location Location to add.
	 * @return self Modified templated view.
	 */
	public function add_location( string $location ): self {
		$this->locations[] = $this->ensure_trailing_slash( $location );

		return $this;
	}

	/**
	 * Validate a path.
	 *
	 * @param string $path Path to validate.
	 *
	 * @return string Validated Path.
	 * @throws InvalidPath If an invalid path was passed into the View.
	 */
	protected function validate( string $path ): string {
		$path = $this->check_extension( $path, static::VIEW_EXTENSION );

		foreach ( $this->get_locations( $path ) as $location ) {
			if ( \is_readable( $location ) ) {
				return $location;
			}
		}

		if ( ! \is_readable( $path ) ) {
			throw InvalidPath::from_path( $path );
		}

		return $path;
	}

	/**
	 * Get the possible locations for the view.
	 *
	 * @param string $path Path of the view to get the locations for.
	 *
	 * @return array Array of possible locations.
	 */
	private function get_locations( string $path ): array {
		return array_map( function ( string $location ) use ( $path ): string {
			return "{$location}{$path}";
		}, $this->locations );
	}
}
