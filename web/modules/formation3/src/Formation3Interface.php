<?php

namespace Drupal\formation3;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining a formation3 entity type.
 */
interface Formation3Interface extends ContentEntityInterface {

  /**
   * Gets the formation3 title.
   *
   * @return string
   *   Title of the formation3.
   */
  public function getTitle();

  /**
   * Sets the formation3 title.
   *
   * @param string $title
   *   The formation3 title.
   *
   * @return \Drupal\formation3\Formation3Interface
   *   The called formation3 entity.
   */
  public function setTitle($title);

  /**
   * Gets the formation3 title.
   *
   * @return string
   *   Title of the formation3.
   */
  public function getStatus();

  /**
   * Sets the formation3 title.
   *
   * @param string $status
   *   The formation3 title.
   *
   * @return \Drupal\formation3\Formation3Interface
   *   The called formation3 entity.
   */
  public function setStatus($status);

}
