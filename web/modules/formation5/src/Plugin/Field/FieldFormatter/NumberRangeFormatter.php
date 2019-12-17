<?php

namespace Drupal\formation5\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'NumberRangeFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "formation5_numberrangeformatter",
 *   label = @Translation("NumberRangeFormatter"),
 *   field_types = {
 *     "formation5_numberrange"
 *   }
 * )
 */
class NumberRangeFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $element[$delta] = [
        '#markup' => $item->min.'/'.$item->max,
      ];
    }

    return $element;
  }

}
