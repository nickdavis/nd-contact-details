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

namespace NickDavis\ContactDetails\Tests\Fixture;

final class DummyClassWithNamedArguments {

	/** @var int */
	private $argument_a;

	/** @var string */
	private $argument_b;

	public function __construct( int $argument_a, string $argument_b = 'Mr Meeseeks' ) {
		$this->argument_a = $argument_a;
		$this->argument_b = $argument_b;
	}

	public function get_argument_a(): int {
		return $this->argument_a;
	}

	public function get_argument_b(): string {
		return $this->argument_b;
	}
}
