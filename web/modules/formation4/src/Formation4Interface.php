<?php

namespace Drupal\formation4;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining a formation4 entity type.
 */
interface Formation4Interface extends ContentEntityInterface {

  /**
   * Gets the formation4 title.
   *
   * @return string
   *   Title of the formation4.
   */
  public function getTitle();

  /**
   * Sets the formation4 title.
   *
   * @param string $title
   *   The formation4 title.
   *
   * @return \Drupal\formation4\Formation4Interface
   *   The called formation4 entity.
   */
  public function setTitle($title);

}
