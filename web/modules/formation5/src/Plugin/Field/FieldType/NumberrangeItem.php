<?php

namespace Drupal\formation5\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Defines the 'formation5_numberrange' field type.
 *
 * @FieldType(
 *   id = "formation5_numberrange",
 *   label = @Translation("NumberRange"),
 *   category = @Translation("General"),
 *   default_widget = "formation5_numberrangewidget",
 *   default_formatter = "formation5_numberrangeformatter"
 * )
 *
 * @DCG
 * If you are implementing a single value field type you may want to inherit
 * this class form some of the field type classes provided by Drupal core.
 * Check out /core/lib/Drupal/Core/Field/Plugin/Field/FieldType directory for a
 * list of available field type implementations.
 */
class NumberrangeItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $min = $this->get('min')->getValue();
    $max = $this->get('max')->getValue();
    return $min === NULL || $min === '' || $max === NULL || $max === '';
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {

    // @DCG
    // See /core/lib/Drupal/Core/TypedData/Plugin/DataType directory for
    // available data types.
    $properties['min'] = DataDefinition::create('integer')
      ->setLabel(t('Minimal value'))
      ->setRequired(TRUE);

    $properties['max'] = DataDefinition::create('integer')
      ->setLabel(t('Maximal value'))
      ->setRequired(TRUE);

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function getConstraints() {
    $constraints = parent::getConstraints();

    $constraint_manager = \Drupal::typedDataManager()->getValidationConstraintManager();

    // @DCG Suppose our value must not be longer than 10 characters.
    // $options['value']['Length']['max'] = 10;

    // @DCG
    // See /core/lib/Drupal/Core/Validation/Plugin/Validation/Constraint
    // directory for available constraints.
    $constraints[] = $constraint_manager->create('Formation5NumberRange', []);
    return $constraints;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {

    $columns = [
      'min' => [
        'type' => 'int',
        'not null' => FALSE,
        'description' => 'Minimal value for number range.',
      ],
      'max' => [
        'type' => 'int',
        'not null' => FALSE,
        'description' => 'Maximal value for number range.',
      ],
    ];

    $schema = [
      'columns' => $columns,
      // @DCG Add indexes here if necessary.
    ];

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public static function generateSampleValue(FieldDefinitionInterface $field_definition) {
    $min = mt_rand(1, 50);
    $values = [
      'min' => $min,
      'max' => $min + mt_rand(1, 50),
    ];
    return $values;
  }

}
