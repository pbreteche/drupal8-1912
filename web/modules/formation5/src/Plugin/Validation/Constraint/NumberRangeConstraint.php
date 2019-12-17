<?php

namespace Drupal\formation5\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Provides a NumberRangeConstraint constraint.
 *
 * @Constraint(
 *   id = "Formation5NumberRange",
 *   label = @Translation("NumberRangeConstraint", context = "Validation"),
 * )
 *
 * @DCG
 * To apply this constraint on third party field types. Implement
 * hook_field_info_alter().
 */
class NumberRangeConstraint extends Constraint {

  public $errorMessage = 'Min value must be lower than max value';

}
