<?php

namespace Drupal\formation4\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the formation4 type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "formation4_type",
 *   label = @Translation("formation4 type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\formation4\Form\Formation4TypeForm",
 *       "edit" = "Drupal\formation4\Form\Formation4TypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\formation4\Formation4TypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer formation4 types",
 *   bundle_of = "formation4",
 *   config_prefix = "formation4_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/formation4_types/add",
 *     "edit-form" = "/admin/structure/formation4_types/manage/{formation4_type}",
 *     "delete-form" = "/admin/structure/formation4_types/manage/{formation4_type}/delete",
 *     "collection" = "/admin/structure/formation4_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class Formation4Type extends ConfigEntityBundleBase {

  /**
   * The machine name of this formation4 type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the formation4 type.
   *
   * @var string
   */
  protected $label;

}
