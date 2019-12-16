<?php

namespace Drupal\formation3;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the formation3 entity type.
 */
class Formation3AccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view formation3');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit formation3', 'administer formation3'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete formation3', 'administer formation3'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create formation3', 'administer formation3'], 'OR');
  }

}
