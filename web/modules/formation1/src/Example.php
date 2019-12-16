<?php

namespace Drupal\formation1;

/**
 * Example service.
 */
class Example implements ExampleInterface {

  /**
   * Method description.
   */
  public function square(int $a): int {
    return $a**2;
  }

}
