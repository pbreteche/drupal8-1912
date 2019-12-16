<?php

namespace Drupal\formation1;

use Drupal\formation1\ExampleInterface;

/**
 * Example2 service.
 */
class Example2 {

  /**
   * The formation1.example service.
   *
   * @var \Drupal\formation1\ExampleInterface
   */
  protected $formation1Example;

  /**
   * Constructs an Example2 object.
   *
   * @param \Drupal\formation1\ExampleInterface $formation1_example
   *   The formation1.example service.
   */
  public function __construct(ExampleInterface $formation1_example) {
    $this->formation1Example = $formation1_example;
  }

  /**
   * Method description.
   */
  public function doSomething(int $a): int {
    return 2 * $this->formation1Example->square($a);
  }

}
