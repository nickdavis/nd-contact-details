<?php

namespace NickDavis\ContactDetails\Tests\Integration;

use NickDavis\ContactDetails\Infrastructure\View;
use NickDavis\ContactDetails\Infrastructure\View\SimpleView;
use NickDavis\ContactDetails\Infrastructure\View\SimpleViewFactory;
use NickDavis\ContactDetails\Tests\ViewHelper;

final class SimpleViewFactoryTest extends TestCase {

	public function test_it_can_create_views(): void {
		$factory = new SimpleViewFactory();

		$view = $factory->create( ViewHelper::VIEWS_FOLDER . 'static-view' );
		$this->assertInstanceOf( SimpleView::class, $view );
	}

	public function test_created_views_implement_the_interface(): void {
		$factory = new SimpleViewFactory();

		$view = $factory->create( ViewHelper::VIEWS_FOLDER . 'static-view' );
		$this->assertInstanceOf( View::class, $view );
	}
}
