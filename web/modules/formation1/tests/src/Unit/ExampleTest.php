<?php

namespace Drupal\Tests\formation1\Unit;

use Drupal\formation1\Example;
use Drupal\Tests\UnitTestCase;

/**
 * @coversDefaultClass \Drupal\formation1\Example
 *
 * @group formation1
 */
class ExampleTest extends UnitTestCase {

  /**
   * @var \Drupal\formation1\Example
   */
  private $example;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->example = new Example();
  }

  /**
   * Tests square.
   */
  public function testSquare() {
    $result = $this->example->square(5);
    $this->assertSame(25, $result, '5^2 must equals 25');
  }

}
