<?php

namespace NickDavis\ContactDetails\Tests\Integration;

use NickDavis\ContactDetails\Infrastructure\View;
use NickDavis\ContactDetails\Infrastructure\View\TemplatedView;
use NickDavis\ContactDetails\Infrastructure\View\TemplatedViewFactory;
use NickDavis\ContactDetails\Tests\ViewHelper;

final class TemplatedViewFactoryTest extends TestCase {

	public function test_it_can_create_views(): void {
		$factory = new TemplatedViewFactory( ViewHelper::LOCATIONS );

		$view = $factory->create( 'static-view' );
		$this->assertInstanceOf( TemplatedView::class, $view );
	}

	public function test_created_views_implement_the_interface(): void {
		$factory = new TemplatedViewFactory( ViewHelper::LOCATIONS );

		$view = $factory->create( 'static-view' );
		$this->assertInstanceOf( View::class, $view );
	}
}
