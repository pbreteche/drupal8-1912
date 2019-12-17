<?php

namespace Drupal\formation5\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the NumberRangeConstraint constraint.
 */
class NumberRangeConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($item, Constraint $constraint) {

    $min = $item->getValue()['min'];
    $max = $item->getValue()['max'];

    if ($min > $max) {
      $this->context->addViolation($constraint->errorMessage);
    }

  }

}
