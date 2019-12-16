<?php

namespace Drupal\Tests\formation1\Unit;

use Drupal\formation1\Example;
use Drupal\formation1\Example2;
use Drupal\Tests\UnitTestCase;

/**
 * Test description.
 *
 * @group formation1
 */
class Example2Test extends UnitTestCase {

  /**
   * @var \Drupal\formation1\Example2
   */
  private $example2;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $exampleMock = $this->createMock(Example::class);
    $exampleMock->expects($this->once()) // method must be called exactly once
      ->method('square')
      ->with(5)
      ->willReturn(25);
    $this->example2 = new Example2($exampleMock);
  }

  /**
   * Tests something.
   */
  public function testSomething() {
    $result = $this->example2->doSomething(5);
    $this->assertSame(50, $result);
  }

}
