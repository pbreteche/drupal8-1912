<?php

namespace Drupal\formation5\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines the 'formation5_numberrangewidget' field widget.
 *
 * @FieldWidget(
 *   id = "formation5_numberrangewidget",
 *   label = @Translation("NumberRangeWidget"),
 *   field_types = {"formation5_numberrange"},
 * )
 */
class NumberRangeWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $element['min'] = [
      '#type' => 'number',
      '#title' => t('Minimum'),
      '#description' => t('Minimum value'),
      ];

    $element['max'] = [
      '#type' => 'number',
      '#title' => t('Maximum'),
      '#description' => t('Maximum value'),
      ];

    return $element;
  }

}
